<?php
   require APPROOT . '/views/includes/header.php';
?>


<div class="inner-header-checkout-mobile">
    <div class="inner-sub-body-checkout-mobile">
        <div class="cart-header-mobile">
        <h1>Signature Cards NG</h1></div>
        <div>
        <a class="account-checkout-mobile" style="color:#fff;" href="<?php echo URLROOT; ?>cards/cart" title="View Cart!"><img src="<?php echo URLROOT; ?>/public/img/cart_icon.png" /> <span class="cart-count-checkout" id="cardItem"><?php if(isset($_SESSION['cartItem'])) { echo count($_SESSION['cartItem']);} else {echo '0';} ?></span></a>
        </div>
    </div>
</div>


<?php  
            $sumAmount = 0;
            $totalAmount = 0.00;
            foreach ($data['cartItems'] as $item) {
                $sumAmount += $item->AMOUNT;
            }
        ?>


<div class="checkout-sub-header-mobile">
    <div class="checkout-sub-header-inner-mobile">
        Payment Checkout
    </div>
</div>

<div class="checkout-body-mobile">
<div class="checkout-order-details-mobile">
            <img class="cart-image-checkout" src="<?php echo URLROOT; ?>/public/img/cards/card_1.png" />
            <div class="product-detail">
                <h1>Metal Card Engraving Service</h1>
                <p></p>
            </div>
            <div class="product-amount">
                <h5>₦<?php echo number_format($sumAmount,2);  ?> <br>x <?php echo count($data['cartItems']); ?></h5>
            </div>
        </div>


    <div class="discount-code">
        <input type="text" style="width:70%" placeholder="Enter discount here" name="discount_value" id="discount_value">
        <input type="button" value="Apply">
    </div>

    <div class="total-display">
        <div class="total-detail-mobile">
            <h3 style="font-weight:500; font-size:0.9rem">Subtotal</h3>
            <h1 style="font-weight:500; font-size:0.9rem;">₦<?php echo number_format($sumAmount,2); ?></h1>
        </div>
        <div class="total-detail-mobile" style="margin-top: -10px;">
            <h3 style="font-weight:500; font-size:0.9rem">Shipping</h3>
            <h1 style="font-weight:500; font-size:0.9rem;">₦<?php echo number_format($data['shipping'],2); ?></h1>
        </div>
        <div class="total-price-mobile" style="margin-top:-10px">
            <h6>Total</h6>
            <h1>₦<?php echo number_format(($sumAmount + $data['shipping']),2); ?></h1>
        </div>
    </div>
</div>

<div class="payment-checkout">
        <form id="register_form" method="POST" action="<?php echo URLROOT; ?>cards/processOrder">


        <input type="hidden" name="order_quantity" value="<?php echo count($data['cartItems']); ?>">
    <input type="hidden" name="order_amount" value="<?php echo ($sumAmount + $data['shipping']); ?>">

    <div class="check-input-hdr">
            <label for="">Contact</label>
     </div>
     <div class="checkout-input">
            <label for="">Email</label>
            <input name="contact_email" required type="email">
        </div>
        <div class="checkout-input">
            <label for="">Phone number</label>
            <input name="contact_phone" required type="number">
        </div>

        <br>
        <div class="check-input-hdr">
            <label for="">Delivery</label>
        </div>

        <div class="row-field">
            <div class="checkout-input">
                <label for="">First name</label>
                <input name="contact_fname" required type="text">
            </div>

            <div class="checkout-input">
                <label for="">Last name</label>
                <input name="contact_lname" required type="text">
            </div>
        </div>

        <div class="checkout-input">
            <label for="">Address</label>
            <input name="contact_add" required type="text">
        </div>
        <div class="checkout-input">
            <label for="">Address 2</label>
            <input name="contact_add2" type="text">
        </div>

        <div class="row-field">
            <div class="checkout-input">
                <label for="">City</label>
                <input name="contact_city" type="text">
            </div>

            <div class="checkout-input">
                <label for="">State</label>
                <input name="contact_state" type="text">
            </div>
        </div>

        <div class="row-field" style="margin-top:0px;">
            <div class="checkout-input">
                <label for="">Postal Code</label>
                <input name="contact_pcode" type="text">
            </div>

            <div class="checkout-input">
                <label for="">Country</label>
                <input name="contact_country" type="text">
            </div>
        </div>

        <br>
        <div class="check-input-hdr">
            <label for="">Shipping method</label>
        </div>

        <div class="checkout-input-delivery">
            <h2>Local dispatch rider delivery</h2>
            <h4>₦2,500.00</h4>
            <input type="hidden" name="shipping" value="2500">
        </div>



        <br>
        <div class="check-input-hdr">
            <label for="">Payment</label>
            <p>All transactions are secure and encrypted.</p>
        </div>

        <div class="checkout-input-delivery">
            <h2>Online Card Payment</h2>
            <h4>Paystack</h4>
        </div>
        <div class="checkout-input-delivery">
            <h2>Bank Deposit/Transfer</h2>
            <p>0393039309 | FCMB</p>
            <input type="hidden" name="contact_payment" value="Transfer">
        </div>
    
        <input class="btn-pay-now" type="submit" value="Place your Order">

    </form>
</div>





<?php
   require APPROOT . '/views/includes/footer_checkout.php';
?>
