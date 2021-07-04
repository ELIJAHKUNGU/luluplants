<?php
include 'header.php';
?>
<section style="background-color: hsl(0, 0%, 96%);" class="pt-5 pb-5">
<div class="container">
        <div class="row">
            <div class="col-sm-8 col-lg-8">
                <div class="checkout-left">
                    <div class="checkout-title ml-4">
                        <h1>Checkout</h1>
                    </div>
                    <div class="checkout-body">
                        <div class="address">
                            <div class="address-title">
                                <h2>Address Details</h2>
                            </div>
                            <div class="address-body">
                                <form action="">
                                    <div class="names">
                                        <div class="form-group
                                                col-sm-6 col-lg-6">
                                            <label for="">Username</label>
                                            <input type="text" placeholder="John" />
                                        </div>
                                        <div class="form-group
                                                col-sm-6 col-lg-6">
                                            <label for="">Email Address</label>
                                            <input type="text" placeholder="Doe" />
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <div class="pay-with-mpesa">
                            <h5 class="mr-2">Pay with Mpesa</h5>
                            <img src="./assets/mpesa.svg" class="img-fluid" alt="" />
                        </div>
                        <div class="pl-4 mt-3">
                            <form action="">
                                <div class="form-group col-sm-6 col-lg-6">
                                    <h6>Enter the Phone Number and Confirm paymet on your phone</h6>
                                    <label for="">Enter Phone</label>
                                    <input type="text" class="form-control" placeholder="+25743770216" />
                                </div>
                            </form>
                        </div>

                        <div class="calculated-totals">

                            <div class="total-group">
                                <button>
                                    <a href="/index.html">Confirm Order</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-lg-4">
                <div class="checkout-right">
                    <div class="checkout-title">
                        <h1>Order summary</h1>
                    </div>
                    <div class="checkout-body">
                        <div class="address-title">
                            <h2>Your Order Item</h2>
                        </div>
                        <div class="show-items">
                            <div class="calculated-totals">
                                <div class="total-group">
                                    <span class="total-title">Total Items</span>
                                    <span>4</span>
                                </div>
                                <div class="total-group">
                                    <span class="total-title">SubTotal</span>
                                    <span>2000</span>
                                </div>
                                <div class="total-group">
                                    <span class="total-title">VAT</span>
                                    <span>0</span>
                                </div>
                                <div class="total-group">
                                    <span class="total-title">Total</span>
                                    <span>2000</span>
                                </div>
                                <div class="total-group">
                                    <button>
                                        <a href="/index.html">Dowmload Invoice</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
  
 <?php 
 include 'footer.php';

 ?>