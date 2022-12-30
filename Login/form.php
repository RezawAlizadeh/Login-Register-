<?php
include '../Controler/Edit_Contrroler.php';
include '../Connect/Connect.php';
?>
<!doctype html>
<html lang="en">
<head>
    <title>صفحه ویرایش </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">صفحه ویرایش اطلاعات</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="wrap d-md-flex">
                    <div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
                        <div class="text w-100">
                            <h2>به صفحه ویرایش اطلاعات خوش آمدید</h2>
                        </div>
                    </div>
                    <div class="login-wrap p-4 p-lg-5">
                        <div class="d-flex">
                            <div class="w-100">
                                <h3 class="mb-4">Edit</h3>
                            </div>
                            <div class="w-100">
                                <p class="social-media d-flex justify-content-end">
                                    <a href="index.php"
                                       class="social-icon d-flex align-items-center justify-content-center"><span
                                                class="fa fa-facebook"></span></a>
                                    <a href="Register.php"
                                       class="social-icon d-flex align-items-center justify-content-center"><span
                                                class="fa fa-twitter"></span></a>
                                </p>
                            </div>
                        </div>
                        <form action="form.php" class="signin-form" method="post">
                            <input type="hidden" name="ForLog" value="ForLog1">
                            <div class="form-group mb-3">
                                <label class="label" for="name">Username</label>
                                <input type="text" name="email" class="form-control"
                                       placeholder="لطفا نام کاربری خودرا وارد نمایید "
                                       value="<?= $_SESSION['username'] ?>">
                            </div>
                            <div class="form-group mb-3">
                                <label class="label" for="name">Password</label>
                                <input type="password" name="password" class="form-control"
                                       placeholder="لطفا پسورد خودرا وارد کنید " value="<?= $_SESSION['pass'] ?>">
                                <div class="text-danger"><?= $Msg['similar'] ?></div>


                            </div>
                            <div class="form-group mb-3">
                                <label class="label" for="name">Password</label>
                                <input type="password" name="password_2" class="form-control"
                                       placeholder="لطفا پسورد خودرا دوباره  وارد کنید ">
                            </div>
                            <div class="form-group">
                                <button type="submit" name="edit" value="edit"
                                        class="form-control btn btn-info submit px-3">Edit
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>


