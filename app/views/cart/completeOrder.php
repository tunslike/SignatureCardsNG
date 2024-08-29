<?php
   require APPROOT . '/views/includes/header.php';
?>

<div class="inner-header-checkout">
    <div class="inner-sub-body-checkout">
        <div class="cart-header">
           <a title="Back to Home!" href="<?php echo URLROOT; ?>/pages/index2"><h1>Signature Cards NG</h1></a> 
        </div>
        <div>

        </div>
    </div>
</div>

<div class="checkout-sub-header">
    <div class="checkout-sub-header-inner">
        Order Completed
    </div>
</div>

<div class="complete-order-area">
    <div class="complete-order-body">
        <div class="success-alert">
        <i class="fa fa-check"></i>
            <h1> Your order was submitted successfully and currently being processed!</h1>

        </div>
        <div class="order-number">
            <h1>Order Number: <?php if(isset($data['skuid'])) {echo $data['skuid'];} ?></h1>
        </div>
        <div class="order-details">
            Please allow up to two business days (excluding weekends, holidays and sale days) to process and ship your order. Your will receive another email when your order has been shipped.
        </div>
    </div>
</div>



<?php
   require APPROOT . '/views/includes/footer_checkout.php';
?>
