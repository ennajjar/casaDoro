<?php
/**
 * Template Name: checkout
**/
?>
<?php
  get_header();
?>
<div id="main">
    
    <div class="main-header background background-image-heading-blog">
        <div class="container">
            <h1><?php the_title();?></h1>
        </div>
    </div>
    

    <div id="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"> <?php _e('Home','casaDoro');?></a></li>
                <li class="active"><span><?php the_title();?></span></li>
            </ol>

        </div>
    </div>

	<?php the_content();?>
    <form action="checkout.html" method="POST" >
        <div class="checkout-wrapper">
            <div class="container">

                <div class="text-alert">
                    <p>Returning customer? <a href="./login.html">Click here to login</a></p>
                </div><!-- /.text-alert -->

                <div class="row">
                    <div class="col-md-6">
                        <h2>Billing Details</h2>

                        <div class="form-group">
                            <label for="country">Country <sup>*</sup></label>
                            <select name="country" id="country" class="form-control dark">
                                <!-- option -->
                            </select>
                        </div><!-- /.form-group -->

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="first_name">First Name <sup>*</sup></label>
                                    <input type="text" class="form-control dark" id="first_name" placeholder="First Name">
                                </div><!-- /.form-group -->
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="last_name">Last Name <sup>*</sup></label>
                                    <input type="text" class="form-control dark" id="last_name" placeholder="Last Name">
                                </div><!-- /.form-group -->
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="company-name">Company Name</label>
                            <input type="text" class="form-control dark" id="company-name" placeholder="Company Name">
                        </div><!-- /.form-group -->

                        <div class="form-group">
                            <label for="address">Address*</label>
                            <input type="text" class="form-control dark" id="address" placeholder="Street Address">
                        </div><!-- /.form-group -->

                        <div class="form-group">
                            <label for="address_2" class="sr-only"></label>
                            <input type="text" class="form-control dark" id="address_2" placeholder="Apartment, suite, unit etc. (Optional)">
                        </div><!-- /.form-group -->

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="street-address">Town / City <sup>*</sup></label>
                                    <input type="text" class="form-control dark" id="street-address" placeholder="Town / City">
                                </div><!-- /.form-group -->
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="town_country">Country <sup>*</sup></label>
                                    <input type="text" class="form-control dark" id="town_country" placeholder="Country">
                                </div><!-- /.form-group -->
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email_address">Email Address <sup>*</sup></label>
                                    <input type="text" class="form-control dark" id="email_address" placeholder="Email Address">
                                </div><!-- /.form-group -->
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Phone <sup>*</sup></label>
                                    <input type="text" class="form-control dark" id="phone" placeholder="Phone">
                                </div><!-- /.form-group -->
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="order-notes">Order Notes</label>
                            <textarea name="order-notes" id="order-notes" class="form-control dark" rows="3" placeholder="Notes about your order, eg. special notes for delivery"></textarea>
                        </div><!-- /.form-group -->

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="">
                                <span>Create an account?</span>
                            </label>
                        </div><!-- /.checkbox -->
                    </div>

                    <div class="col-md-6">
                        <div class="payment-right">
                            <h2>Your payment details</h2>

                            <div class="payment-detail-wrapper">
                                <ul class="cart-list">
                                    
                                    <li>
                                        <div class="cart-item">
                                            <div class="product-image">
                                                <a href="./product-details.html" title="Single Flower Censer">
                                                    <img src="./img/samples/products/cart/1.jpg" alt="">
                                                </a>
                                            </div>

                                            <div class="product-body">
                                                <div class="product-name">
                                                    <h3>
                                                        <a href="./product-details.html" title="Single Flower Censer">Single Flower Censer</a>
                                                    </h3>
                                                </div>

                                                <div class="product-price">
                                                    <span>$180</span>
                                                </div>
                                            </div>
                                        </div><!-- /.cart-item -->

                                        <a href="#" title="" class="remove-cart">
                                            <span class="icon icon-remove"></span>
                                        </a>
                                    </li>
                                                                       
                                </ul> <!-- /.cart-list -->
                            </div><!-- /.payment-detail-wrapper -->

                            <div class="cart-total">
                                <table>
                                    <tbody>
                                        <tr class="cart-subtotal">
                                            <th>Cart Subtotal:</th>
                                            <td><span class="amount">$180</span></td>
                                        </tr>
                                        <tr class="shipping">
                                            <th>Shipping:</th>
                                            <td>Free Shipping</td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Order Total:</th>
                                            <td><strong><span class="amount">$180</span></strong> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div><!-- /.cart-total -->

                            <div class="cart-checkboxes">

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                        <span>Direct Bank Transfer</span>
                                    </label>

                                    <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                </div><!-- /.checkbox -->

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                        <span>Cheque Payment</span>
                                    </label>
                                </div><!-- /.checkbox -->

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                        <span>Credit Card</span>
                                    </label>

                                    <ul class="list-payments list-inline">
                                        <li>
                                            <a href="#" title="">
                                                <img src="./img/payments/american-express.png" alt="">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" title="">
                                                <img src="./img/payments/mastercard.png" alt="">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" title="">
                                                <img src="./img/payments/moneybookers.png" alt="">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" title="">
                                                <img src="./img/payments/paypal.png" alt="">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" title="">
                                                <img src="./img/payments/visa.png" alt="">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" title="">
                                                <img src="./img/payments/2chekout.png" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div><!-- /.checkbox -->
                            </div><!-- /.cart-checkboxes -->

                            <div class="wc-proceed-to-checkout">
                                <button class="btn btn-lg btn-primary">Check out</button>
                            </div><!-- /.wc-proceed-to-checkout -->

                        </div>
                    </div>
                </div>
            </div><!-- /.container -->
        </div><!-- /.checkout-wrapper -->
    </form>

</div>


<?php get_footer();?>