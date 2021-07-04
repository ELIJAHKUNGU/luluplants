<?php
include 'header.php'
?>
<div class="contact-us-page mb-5">
    <div class="contact-us-top">
        <div class="container">
            <div class="row mb-5">
                <div class="col-sm-12 col-lg-6 main-offers">
                    <div class="offers pt-5">
                        <h6>Don't miss our exclusive offers on our products</h6>
                        <p>We want to make sure that everybody has access to our natural and ogrganic products for their effectiveness of their health.You will recieve amazing deals and offers on our products while you are subscribed to our mail list</p>
                        <div class="mail-list pt-5">
                            <i id="mail-icon" class="fas fa-envelope"></i>
                            <input type="text" placeholder="Enter your email">
                            <button>Subscribe</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="offers-img">
                        <img src="./images/svgs/offers.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
   
</div>
<?php
 include 'emailsend.php';
include 'footer.php'
?>