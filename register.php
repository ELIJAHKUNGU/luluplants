<?php


if (isset($_POST["register"])) {

    require 'db.php';
    extract($_POST);
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM `user` WHERE email = '$email' LIMIT =  1";
    $result = mysqli_query($conn, $sql);
    if ($result == FALSE){
        header("Location: register.php?error=The Email Address already exist&$email");

        exit();
    }else{
        $sql2 = "INSERT INTO `user`(`user_id`,  `email`, `phonenumber`,`password`)
                                 VALUES (null,'$phonenumber','$email','$password')";
        $result2 = mysqli_query($conn, $sql2);
        if ($result2) {
            header("Location:register.php?success=Your account has been created successfully");
            exit();
        }else {
            header("Location: register.php?error=unknown error occurred&$email");
            exit();
        }
    }





}
?>
<?php
include 'header.php';
?>



<section>
    <hr>
    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="login()">Login</span>
                            <span onclick="register()">Register</span>
                            <hr id="Indicator">

                        </div>
                        <form action="login.php" method="post" id="LoginForm">

                            <?php
                            if (isset($message))
                                echo "<p class='text-danger'>$message</p>";

                            ?>

                            <input name="email" type="email" placeholder="Email Address">
                            <input name="password" type="password" placeholder=" Password ">
                            <button name="save" type="submit" class="btn btn-success">Login</button>
                        </form>
                        <form  action="./regsitercheck.php" method="post" id="RegForm">
                            <?php

                             if (isset($_GET['error'])) { ?>
                                <p class="text-danger"><?php echo $_GET['error']; ?></p>
                            <?php } ?>

                            <?php if (isset($_GET['success'])) { ?>
                                <p class="text-success"><?php echo $_GET['success']; ?></p>
                            <?php } ?>
                            <input name="email" type="email" placeholder=" Email " required>
                            <input name="phonenumber" type="text" placeholder="  Full Name  "required>
                            <input name="password" type="password" placeholder=" Password" required>
                            <button name="register" type="submit" class="btn btn-success">Register</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    var LoginForm = document.getElementById("LoginForm");
    var RegForm = document.getElementById("RegForm");
    var Indicator  = document.getElementById("Indicator");


    function register() {
        RegForm.style.transform  = "translateX(0px)";
        LoginForm.style.transform  = "translateX(0px)";
        Indicator.style.transform = "translateX(100px)";
        LoginForm.style.display = "none"
        RegForm.style.display = "block"

    }
    function login() {
        RegForm.style.transform  = "translateX(300px)";
        LoginForm.style.transform  = "translateX(300px)";
        Indicator.style.transform = "translateX(-20px)";
        RegForm.style.display = "none";
        LoginForm.style.display = "block"

    }


</script>

<?php
include "footer.php";
?>