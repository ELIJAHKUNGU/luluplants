
<?php


session_start();
// if (!isset($_SESSION["info"])) {
//     header("location:register.php");
// } else{

//     $info = $_SESSION["info"];

// echo $user_id =  $info ['user_id'];
// }

if( !isset($_SESSION['info']) ){
    header("location:register.php");
}else{
    $info = $_SESSION["info"];
  
}
$user_id =  $info ['user_id'];



if(isset($_POST['save'])){
    require 'db.php';
    $user_id =  $info ['user_id'];
    extract($_POST);
    $sql = "INSERT INTO `cart`(`cart_id`, `product_id`, `quanity`, `user_id`) 
                   VALUES (null,'$product_id','$quantity','$user_id')";
    if ($conn->query($sql) === TRUE) {

        header("location:cart.php?success=Your order have been added successful to the cart ");

    } else {
        header("location:cart.php?error=Your order wasn't added to the cart call +254743 770 216 ");


    }

    $conn->close();
}
?>
