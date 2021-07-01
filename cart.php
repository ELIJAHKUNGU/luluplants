<?php
include 'header.php';
?>
    <section>
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

                <div class="row col-sm-9 pt-3 pr-5 pb-3 ">
                    <div class="col-sm-3 ">
                        <img src="./images/product/product1.jpg" style="height: 100px;" class="img-fluid" alt=""
                            srcset="">
                    </div>
                    <div class="col-sm-9">
                        <div class="d-flex">
                            <div class="desc d-block">
                                <h3>Quantity</h3>
                                <h6>5</h6>

                                <h6>Greenesta</h6>
                            </div>
                            <div class="ml-auto">
                                <h4>Price</h4>
                                <h6>KSH 900</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="totals text-right mr-5 pr-5">
                    <h2 class="mr-5 pr-5" style="margin-right: 20px;">Total KSH 269</h2>
                </div>

            </div>
        </div>
    </section>

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