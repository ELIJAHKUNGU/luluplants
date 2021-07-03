<?php
include 'header.php';
?>
    <div id="cart_page_page">
        <section class="cart_page_body">
            <div class="container">
                <div class="cart-products">
                    <?php
                    if(isset($_GET['error'])){?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?php
                            echo $_GET['error'];
                            ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <?php
                    }
                    ?>
                    <?php
                    if(isset($_GET['success'])){?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?php
                            echo $_GET['success'];
                            ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="cart-title py-3">
                        <?php
                        require 'db.php';
                        $user_id = 1;
                        $sql = "SELECT * FROM cart  where user_id = '$user_id'";


                        $result = mysqli_query($conn,$sql);
                        $row4 = mysqli_num_rows($result);

                        ?>
                        <h1>Cart (<?php echo $row4;?>)Item</h1>
                    </div>
                    <div class="row ">
                        <div class="col-sm-3 ">
                            <div class="">
                                <h2>Item</h2>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="d-flex ml-auto">
                                <h2>Quantity</h2>
                                <div class="ml-auto mr-5">
                                    <h2>Price</h2>

                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    require 'db.php';
                    $user_id = 1;
                    $qry = "SELECT * FROM `cart` WHERE user_id = '$user_id'";
                    $results = $conn->query($qry);
                    while ($row = $results->fetch_assoc()) {
                        ?>
                        <div class="row mb-2  pt-2 pr-5  cart_background">
                            <div class="col-sm-3  ">
                                <?php
                                require 'db.php';
                                $product_id = $row['product_id'];
                                $qry2 = "SELECT * FROM `product` WHERE product_id = '$product_id'";
                                $results2 = $conn->query($qry2);
                                while ($row2 = $results2->fetch_assoc()) {
                                ?>

                                <img src="<?php echo $row2['product_image'] ?>" style="height: 100px;" class="img-fluid" alt="" srcset="">
                            </div>
                            <div class="col-sm-9">
                                <div class="d-flex  pt-3">
                                    <div class="desc d-block">

                                        <h6 class="product_name"><?php echo $row2['product_name'] ?></h6>

                                            <h6 class="ml-3 quantity"><?php echo $row['quanity']; ?></h6>

                                        <a href="delete.php?cart_id=<?php echo $row['cart_id']; ?>">
                                            <button class="btn_remove"> <i class="fas fa-trash-alt mb-1 mr-2"></i>delete</button>
                                        </a>

                                    </div>
                                    <div class="ml-auto">
                                        <?php
                                        $price = $row2['product_price'];
                                        $quantity = $row['quanity'];
                                        $total = $total + ($price * $quantity);
                                        ?>
                                        <h6>KSH <?php echo $row2['product_price'] ?></h6>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="totals text-right  pr-5">
                        <h2 class="" style=" 20px;">
                            Total KSH <?php
                            echo number_format($total, 2);
                            ?>
                        </h2>
                    </div>
                    <div class=" mt-3 pb-4 pr-5 mb-4">
                        <div class="d-flex cart-btns-end">
                            <a href="./ourproducts.php">
                                <button class="btn  continue-shopping">Continue Shopping</button>
                            </a>
                            <a href="">
                                <button class="btn ml-3 proceed-checkout">Proceed Checkout</button>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>

    <footer>
        <div class="row p-5">
            <div class="col-sm-3">
                <h2>Super Life</h2>
                <h6>Super Life is a fully loaded organic food store, where you can find the most fresh products. We work
                    with proven farmers and certified suppliers who specialize in providing pesticide-free vegetables
                    and fruits.
                    Superlife cares about clients and guarantees quality</h6>
            </div>
            <div class="col-sm-3">
                <h3 class="text-center">Information</h3>
                <a class="pl-4  ml-5" href="">
                    <li>Home</li>
                </a>
                <a class="pl-4  ml-5" href="">
                    <li>About Super life</li>
                </a>
                <a class="pl-4  ml-5" href="">
                    <li>Our Products</li>
                </a>
                <a class="pl-4  ml-5" href="">
                    <li>Contacts us</li>
                </a>
            </div>
            <div class="col-sm-3">
                <h3 class="text-center">Follow us</h3>
                <a class="pl-4 " href="">
                    <li>Twitter</li>
                </a>
                <a class="pl-4 " href="">
                    <li>Instagram</li>
                </a>
                <a class="pl-4 " href="">
                    <li>Facebook</li>
                </a>

            </div>
            <div class="col-sm-3 Contacts">
                <h2>Contacts us</h2>
                <div class="d-flex">
                    <div class="icon">
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                    <span class="ml-2">
                        Timberland Pane <br>
                        P.o Box 254 Nairobi
                    </span>
                </div>
                <div class="d-flex">
                    <div class="icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <span class="ml-2">
                        lulutech@gmail.com
                    </span>
                </div>
                <div class="d-flex">
                    <div class="icon">
                        <i class="fas fa-phone-volume"></i>
                    </div>
                    <span class="ml-2">
                        94934843
                    </span>
                </div>
            </div>

        </div>
    </footer>





    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/bootstrap.js"></script>
    <script src="./js/index.js"></script>
    <script src="./owl-carousel/js/owl.carousel.min.js"></script>

</body>

</html>