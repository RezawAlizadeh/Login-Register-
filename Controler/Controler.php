<?php
include '../Connect/Connect.php';
$Msg = array('username' => '', 'email' => '', 'password' => '', 'file' => '',"Msgg"=>'');

$Username = $Email = $Password = $File = '';
if (isset($_POST['Code']) == "Code") {
    GetEmail();
}

if (isset($_POST['submit']) == "submit1") {
    doRegester();
}

if (isset($_POST['ForLog']) == 'ForLog1') {
    ForLogin();
}
if (isset($_COOKIE['remember_me'])) {
    echo $_COOKIE['remember_me'];
    Forcelogin($_COOKIE['remember_me']);
}


function doRegester()
{
    global $conn;
    global $Msg;
    global $File;
    global $Username;
    global $Email;
    global $Password;
    $Username = $Email = $Password = $File = '';
    $Msg = array('username' => '', 'email' => '', 'password' => '', 'file' => '');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {


        #UserName Error
        if (empty($_POST['username'])) {
            $Msg['username'] = "Username Con Not Empty!!!";
        } else {
            $Username = $_POST['username'];
            if (!preg_match('/^[a-zA-Z0-9]+$/', $Username)) {
                $Msg['username'] = "Please use a-z,A-Z,0-9";
            }
        }
        #Email Error
        if (empty($_POST['email'])) {
            $Msg['email'] = "Email Con not Empty!!!";
        } else {
            $Email = $_POST['email'];
            if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
                $Msg['email'] = "Email is not Validate";
            }
        }

        #Password Error
        if (empty($_POST['password'])) {
            $Msg['password'] = "Password Con Not Empty!!!";
        } else {
            $Password = $_POST['password'];
            if (!preg_match('/^[a-z0-9]+$/', $Password)) {
                $Msg['password'] = "Password is not Validate";
            }
        }
        #File Error
        if (!empty($_FILES['file'])) {
            $FileName = $_FILES['file']['name'];
            $FileSize = $_FILES['file']['size'];
            $Filetype = $_FILES['file']['type'];
            $FileTmp = $_FILES['file']['tmp_name'];
            $FileArray = explode('.', $FileName);
            $FileLowerEnd = strtolower(end($FileArray));
            $FileNewName = time() . $FileName;
            $FileAllowTypes = ['png', 'jpg', 'jpeg'];
            if (in_array($FileLowerEnd, $FileAllowTypes)) {
                $SizeAllowed = 2 * 1024 * 1024;
                if ($FileSize < $SizeAllowed) {
                    $Upload = "Upload_File/";
                    $DastName = $Upload . $FileNewName;
                    if (move_uploaded_file($FileTmp, $DastName)) {
                        $Path = "http://localhost/mp/Upload_File" . $FileNewName;
                    } else {
                        $Msg = "File is not Moved!!";
                    }
                } else {
                    $Msg['file'] = "File is Big!!";
                }
            } else {
                $Msg['file'] = "File Is not Allowed!!";
            }

        } else {
            $Msg['file'] = "Select File!!";
        }
        #Sql INSERT
        if (!array_filter($Msg)) {
            $Username = $_POST['username'];
            $Password = $_POST['password'];
            $Email = $_POST['email'];
            $File = $_FILES['file'];

            $query = "INSERT INTO `users`(`username`, `email`, `profile_photo`, `password`, `is_admin`) VALUES
                                                                                  (:Username,:Email,:Path,:Password,:is_admin)";
            $stmt = $conn->prepare($query);
            $stmt->execute(["Username" => $Username, "Email" => $Email, "Path" => $Path, "Password" => $Password, "is_admin" => 0]);

            if (!empty($stmt->rowCount())) {
                header('location:http://localhost/mp/Login/index.php');
            }
        }
    }
}

#Login fun
function ForLogin()
{
    global $conn;
    global  $Msg;
    session_start();
    $username = $_POST['username'];
    $PW = $_POST['password'];
    $Query = "SELECT * FROM `users` WHERE `username`=:username AND `password`=:password";
    $stmt = $conn->prepare($Query);
    $stmt->execute(["username" => $username, "password" => $PW]);
    $user = $stmt->fetch(PDO::FETCH_OBJ);
    if (!empty($user)) {
        $_SESSION['login'] = array(
            'status' => true,
            'info' => $user

        );
        if (isset($_POST['remember_me'])) {
            $token = getremembermeToken($username);
            if ($token) {
                setcookie('remember_me', $token, time() + 30);

            }
        }
    } else {
        echo "<script>alert('رمز عبور یا نام کاربری شما اشتباه است')</script>";
    }
    if (isset($_SESSION['login']) || isset($_COOKIE['remember_me'])){
        header("Location:http://localhost/mp/UserDashbord/UserDashbord.php");
    }
}

#remember_me CheckBox

function Forcelogin(string $token)
{
    global $conn;
    $Remember_me = $_COOKIE['remember_me'];
    if (isset($_COOKIE['remember_me'])) {
        $query = "SELECT * FROM `users` WHERE  `remember_me`=:token";
        $stmt = $conn->prepare($query);
        $stmt->execute(["token" => $token]);
        $user = $stmt->fetch(PDO::FETCH_OBJ);
        if (!$user) {
            return false;
        }
        $_SESSION['login'] = array(
            'status' => true,
            'info' => $user

        );
        return true;
    }


}

function getremembermeToken(string $username)
{
    global $conn;
    $Query = "UPDATE `users` SET `remember_me`=:token WHERE `username`=:username ";
    $stmt = $conn->prepare($Query);
    $token = md5(microtime() . $username);
    $stmt->execute(["token" => $token, "username" => $username]);
    if ($stmt->rowCount() > 0) {
        return $token;
    } else {
        return false;
    }

}


function GetEmail()
{
    global $conn;
    $Email = $_POST['email'];
    $query = "SELECT `id` FROM `users` WHERE `email`=:email";
    $stmt = $conn->prepare($query);
    $stmt->execute(["email" => $Email]);
    if ($stmt->rowCount() > 0) {
        var_dump($stmt);
    }


}
