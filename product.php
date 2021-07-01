<?php
include 'header.php';
/*if (!isset($_SESSION["info"])) {
    header("location:register.php");
} else
    $info = $_SESSION["info"];

$user_id =  $info ['user_id'];*/

?>


    <section>
        <div class="product-item" id="product-page">
            <div class="container">
                <div class="row">
                    <?php
                    $product_id = $_GET['item_id'];
                    //materials
                    include "db.php";
                    $qry = "SELECT * FROM product where product_id = $product_id";
                    $products = $conn->query($qry);
                    while ($row = $products->fetch_assoc()) {
                    ?>
                        <?php
                        if(isset($_POST['save'])){
                            //materials
                            include "db.php";
                            $item_id =  $row =['product_id'];
                            $user_id = 1;
                            $sql = "INSERT INTO `cart`(`cart_id`, `product_id`, `quanity`, `user_id`) 
                   VALUES (null,'$item_id','$quantity','$user_id')";
                            if ($conn->query($sql) === TRUE) {
                                echo "New record created successfully";
                            } else {
                                echo "Error: " . $sql . "<br>" . $conn->error;
                            }
                            $conn->close();
                        }
                        ?>
                    <div class="col-sm-4">
                        <img src="<?php echo $row['product_image']?>" style="object-fit: contain" class="img-fluid" alt="" srcset="">

                    </div>
                    <div class="col-sm-6">
                        <div class="mt-5">
                            <h1 class="text-success"><?php echo $row['product_name']?> </h1>
                            <div class="d-flex">
                                <h2>Price:</h2>
                                <h3 class="ml-5"><?php echo $row['product_price']?> </h3>
                            </div>
                            <div class="d-flex">
                                <h2>Availability :</h2>
                                <h3 class="ml-5 stock">Instock</h3>
                            </div>
                            <div class="">
                                <div class="d-block">
                                    <div class="d-flex">
                                        <h2>Quantity :</h2>



                                        <form action="cartadd.php" method="post">

                                            <input type="number" name="quantity" class="pl-2 ml-5" min="1" value="1"   id="">
                                            <input type="text" hidden name="product_id" value="<?php echo $row['product_id']?> ">
                                            <button type="submit" name="save" class="ml-3 btn btn-success pl-5 pr-5">Add Cart</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
<section>
    <hr>
    <div class="container">
        <div class="mt-5">
            <div class="col-sm-8">
                <div class="d-flex">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>

                </div>
                <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, cupiditate, voluptatum. Adipisci aliquam assumenda deserunt dolor eveniet facilis fugiat inventore, iste maxime minima natus nisi odio perspiciatis placeat possimus provident quasi quia suscipit unde voluptate! Aperiam cumque eius maxime reiciendis?</p>

            </div>
        </div>
    </div>
</section>

<?php
include  'footer.php';