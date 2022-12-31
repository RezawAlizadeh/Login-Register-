<?php
include_once '../Connect/Connect.php';
$Msg = array("similar" => "");
if (isset($_POST['Code']) == "Code") {
    GetEmail();
}
session_start();
if (isset($_SESSION['id'])) {

    Getid();
}

if (isset($_POST['edit']) == "edit") {
    EditInfo();
}


#Get Email Function
function GetEmail()
{
    global $conn;
   
    $Email = $_POST['email'];
    $query = "SELECT * FROM `users` WHERE `email`=:email";
    $stmt = $conn->prepare($query);
    $stmt->execute(["email" => $Email]);
    $user_email = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($user_email) {

        $_SESSION['id'] = $user_email['id'];
        if (isset($_SESSION['id'])) {

            header("Location:http://localhost/mp/Login/form.php");


        }
    }

}

#Get id  For Select Edit info in the Edit Form
function Getid()
{
    global $conn;
    $id = $_SESSION['id'];
    $query = "SELECT * FROM `users` WHERE `id`=:id";
    $stmt = $conn->prepare($query);
    $stmt->execute(["id" => $id]);
    $info = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($info) {
        $_SESSION['id'] = $info['id'];
        $_SESSION['pass'] = $info['password'];
        $_SESSION['username'] = $info['username'];

    }
}

#Edit Password whit
function EditInfo()
{
    global $conn;
    global $Msg;
    $pass1 = $_POST['password'];
    $id = $_SESSION['id'];
    $pass2 = $_POST['password_2'];
    if (isset($pass2) && $pass1 == $pass2) {
        $query = "UPDATE `users` SET `password`=:password WHERE  `id`=:id";
        $stmt = $conn->prepare($query);
        $result = $stmt->execute(["password" => $pass2, "id" => $id]);
        if ($result) {
            header('Location:http://localhost/mp/Login/index.php');
        }
    } else {

        $Msg['similar'] = "passwords dos not similar";

    }


}
