<?php
include 'header.php';

?>
<?php
print_r($_SESSION);
?>
    <section class="banner">
        <div class="owl-carousel owl-theme">
            <div class="item">
                <div class="text-banner">
                    <div class="">
                        <h2>Get 40% off</h2>
                        <h1>Naturally PLants</h1>
                        <h3>Lorem ipsum dolor sit amet consectetur, <br>
                            adipisicing elit. Cupiditate, ex.</h3>
                        <button type="submit" class="btn  text-white pl-5 pr-5">SHOP NOW</button>
                    </div>
                </div>
                <div class="slider">
                    <img src="./images/slider1.jpg" class="img-fluid" alt="" srcset="">
                </div>
            </div>
            <div class="item">
                <div class="text-banner">
                    <div class="">
                        <h2>Get 40% off</h2>
                        <h1>Naturally PLants</h1>
                        <h3>Lorem ipsum dolor sit amet consectetur, <br>
                            adipisicing elit. Cupiditate, ex.</h3>
                        <button type="submit" class="btn  text-white pl-5 pr-5">SHOP NOW</button>

                    </div>
                </div>
                <div class="slider">
                    <img src="./images/slider2.jpg" class="img-fluid" alt="" srcset="">
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="learn mt-5">
            <div class="container">
                <div class="d-flex  justify-content-center">
                    <img src="./images/plant.png" alt="" srcset="">
                </div>
                <p class="text-center  color-primary">Organic food & natural ingredients for daily use</p>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-success  text-white pl-3 pr-3">Read more</button>
                </div>
            </div>
            <div class="row p-5">
                <div class="col-sm-3 mt-3 shadow">
                    <div class="d-flex justify-content-center">
                        <i class="fas fa-pepper-hot"></i>
                    </div>
                    <h6 class="text-center learn-title mt-3">Vegetables</h6>
                    <span>Take advantage of our fresh and organic food delivery.</span>

                    <a href="" class="text-center mt-3">
                        <h6>Learn more</h6>
                    </a>
                </div>
                <div class="col-sm-3 mt-3 shadow">

                    <div class="d-flex justify-content-center">
                        <i class="fas fa-bowling-ball"></i>
                    </div>
                    <h6 class="text-center learn-title mt-3">Organic Soup</h6>
                    <span>Take advantage of our fresh and organic food delivery.</span>
                    <a href="" class="text-center mt-3">
                        <h6>Learn more</h6>
                    </a>


                </div>
                <div class="col-sm-3 mt-3 shadow">
                    <div class="d-flex justify-content-center">
                        <i class="fab fa-apple"></i>
                    </div>
                    <h6 class="text-center learn-title mt-3">Fresh Fruits</h6>
                    <span>Take advantage of our fresh and organic food delivery.</span>
                    <a href="" class="text-center mt-3">
                        <h6>Learn more</h6>
                    </a>

                </div>
                <div class="col-sm-3 mt-3 shadow">
                    <div class="d-flex justify-content-center">
                        <i class="fas fa-holly-berry"></i>
                    </div>
                    <h6 class="text-center learn-title mt-3">Organic Honey</h6>
                    <span>Take advantage of our fresh and organic food delivery.</span>
                    <a href="" class="text-center ">
                        <h6 class="pb-5">Learn more</h6>
                    </a>

                </div>

            </div>
        </div>
    </section>
    <section id="ourproducts">
        <div class="container featured">
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
            <div class="d-flex justify-content-center mb-5 more-products">
                <button class="btn btn-success ">More Products</button>

            </div>
            
        </div>
    </section>
    <section id="abouts-company">
        <div class="more-colors">
            <div class="d-flex more-colors-text justify-content-center">
                <div class=" col-sm-9 text-center">
                    <h3>The variety of products available at our store at the moment is vast, but we still continue to
                        widen our assortment. We monitor the relevant market niche on regular basis to keep our prices
                        competitive. Buying form us you can be sure that you’ll get the product you have offered quickly
                        and hassle-free. We value our reputation of the trustworthy merchant and never upset our
                        clients.</h3>
                </div>
            </div>
            <div class="more-colors-image">
                <img src="./images/testibg_1920x1200.jpg" class="img-fluid" alt="">
            </div>
        </div>
    </section>
    <section id="about-us" class="p-5">
        <!--<div class="container">
            <button onclick="window.location='tel:917387084384';">Hot line</button>

        </div>-->
        <div class="mt-5">
            <div class="container">
                <div class="d-flex showdom ml-4 pt-3">
                    <h2 class=" text-center">About us</h2>
                    <i class="fas fa-chevron-down ml-auto"></i>
                </div>
                <hr>
                <div class="hiddenDiv">
                    <div class="row">
                        <div class="col-sm-6">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti odio maxime velit alias
                                pariatur. Delectus exercitationem aut voluptates quam nulla, praesentium, rerum
                                obcaecati assumenda quo vel et cumque ea aspernatur quis fugiat fugit. Odit, eligendi
                                iste assumenda atque nesciunt, natus recusandae quidem obcaecati ipsum, molestias
                                dolores voluptate vel consequuntur reiciendis reprehenderit explicabo! Sed nulla cumque
                                distinctio exercitationem porro veritatis deleniti earum quasi asperiores sunt labore,
                                alias quaerat! Nostrum quos beatae earum quasi provident nulla adipisci, aut, atque
                                asperiores natus in fugit sint? Magni doloremque aliquam maxime, repellendus rerum
                                voluptatibus quis consequuntur
                                distinctio deserunt sed asperiores provident perferendis, aut repudiandae velit.</p>
                        </div>
                        <div class="col-sm-6">
                            <img src="./images/7_bffad3be-69eb-476e-b7be-593139fbad65_large.jpg" class="img-fluid"
                                alt="" srcset="">
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
    <section id="contacts" class="p-5">
        <div class="container">



        </div>
        <div class="mt-5">
            <div class="container">
                <div class="d-flex showcontacts ml-4 pt-3">
                    <h2 class=" text-center">Contacts us</h2>
                    <i class="fas fa-chevron-down ml-auto"></i>
                </div>
                <hr>
                <div class="hiddenDivcontacts">
                    <div class="row">
                        <div class="col-sm-6 ml-auto ">
                            <div class="d-flex justify-content-center">
                                <div class="d-block">
                                    <div class="d-flex">
                                        <div class="icon">
                                            <i class="fas fa-2x fa-map-marked-alt"></i>
                                        </div>
                                        <span class="ml-2">
                                            Timberland Pane <br>
                                            P.o Box 254 Nairobi
                                        </span>
                                    </div>
                                    <div class="d-flex">
                                        <div class="icon">
                                            <i class="fas fa-2x fa-envelope"></i>
                                        </div>
                                        <span class="ml-2">
                                            lulutech@gmail.com
                                        </span>
                                    </div>
                                    <div class="d-flex">
                                        <div class="icon">
                                            <i class="fas fa-2x fa-phone-volume"></i>
                                        </div>
                                        <span class="ml-2">
                                            94934843
                                        </span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-6 shadow p-5 ml-auto">
                            <form action="">
                                <h2>Email us</h2>
                                <div class="form-group">
                                    <input type="text" name="" placeholder="Enter Your Email" id=""
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="" placeholder="Phone Number"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <textarea name=""  class="form-control" placeholder="Message Here"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
<?php
include  'footer.php';