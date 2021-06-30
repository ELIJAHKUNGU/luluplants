<?php
include 'header.php';

?>
    <section>
        <div class="product-item" id="product-page">
            <div class="container">
                <div class="row">
                    <?php
                    $item_id = $_GET['item'];
                    $user_id =  $info ['user_id'];


                    //materials  get name and price

                    include "db.php";
                    $qry = "SELECT * FROM product where product_id = $item_id ";
                    $products = $conn->query($qry);
                    while ($row = $products->fetch_assoc()) {

                    ?>
                    <div class="col-sm-4">
                        <img src="<?php echo $row['product_image']?>" style="object-fit: contain" class="img-fluid" alt="" srcset="">

                    </div>
                    <div class="col-sm-6">
                        <div class="mt-5">
                            <h1 class="text-success"><?php echo $row['product_name']?> </h1>
                            <div class="d-flex">
                                <h2>Brand :</h2>
                                <h3 class="ml-5">Greenesta</h3>
                            </div>
                            <div class="d-flex">
                                <h2>Availability :</h2>
                                <h3 class="ml-5 stock">Instock</h3>
                            </div>
                            <div class="">
                                <div class="d-block">
                                    <div class="d-flex">
                                        <h2>Quantity :</h2>
                                        <form action="product.php" method="post">
                                            <input type="number" class="pl-2 ml-5" min="1" value="1"  name="quantity"
                                                id="">

                                    </div>
                                    <div class="d-flex mt-3">
                                      
                                        <button class="ml-3 btn btn-success pl-5 pr-5">
                                            <a href="cart.php" style="text-decoration: none; color: #fff;">Add Cart</a></button>
                                    
                                       
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

<?php
include  'footer.php';