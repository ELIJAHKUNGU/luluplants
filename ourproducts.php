
<?php
include 'header.php';

?>


<section id="ourproducts">
    <div class="container featured">
        <?php if (isset($_GET['success'])) { ?>
            <p class="success text-success"><?php echo $_GET['success']; ?></p>
        <?php } ?>
        <h2 class="text-center mt-5 ">Featured Products</h2>
        <div class="row pt-5 mb-3">
            <?php
            //products
            require 'db.php';



            $qry13 = "SELECT * FROM `product` ";
            $products =$conn->query($qry13);
            while ($row= $products->fetch_assoc())
            {
                ?>
                <div class="col-sm-3 mb-3 border">

                    <a href="./product.php?item_id=<?php echo $row['product_id']; ?> "" style="text-decoration: none; color: black;">

                    <img src="<?php echo $row['product_image']?>" class="img-fluid" alt="" srcset="">
                    <span class="product-name">
                            <h5 class="text-center"><?php echo $row['product_name']?></h5>
                        </span>
                    <div class="d-flex mt-3">
                        <h5>Ksh <?php echo $row['product_price']?></h5>
                        <button class="ml-auto btn btn-success"><a href="./product.php?item_id=<?php echo $row['product_id']; ?> " style="text-decoration:none; color:white">Add Cart</a></button>
                    </div>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<section style="background:green" class="mt-5">
    <div class="row mt-5">
        <div class="col-sm-6 pl-5 pt-5">
           <div class="d-flex justify-content-center">
               <h1 class="text-center" style="font-size:3rem; font-weight:900">Our range of cannabis products is virtually endless.</h1>

           </div>
            <p class="text-white">Buy all types of cannabis and CBD products, plus deals available in your area</p>

            <div class="shop-button d-flex justify-content-center">
                <button class="btn btn-success pl-5 pt-2 pb-2 pr-5">SHOP </button>
            </div>
        </div>
        <div class="col-sm-6">
            <img src="./images/15_d310f87a-13e0-4275-aa4f-3b20cda29b57_large.jpg" class="img-fluid p-3" style="height:400px" alt="">
        </div>
    </div>
</section>


<?php
include  'footer.php';