<?php

if (isset($_POST["save"])) {
    require "db.php";
    extract($_POST);
    $sql = "select * from users where email='$email' and password='$password' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) ==TRUE){
        //success

        $info = mysqli_fetch_assoc($result);

        session_start();
        $_SESSION["info"] = $info;
        header("location:index.php?success=You are  succesfully logged");
        exit();
    }else{
        header("location:register.php?success=You are  succesfully logged");


    }
}
?>