<?php
   require APPROOT . '/views/includes/dark_header_mobile.php';
?>
<div class="inner-header-area" style="padding: 1rem 1.5rem; margin-top:-16px">
    <div class="inner-header-title-mobile">
    <h1>SHOPPING CART</h1>
    </div>
</div>

<form id="register_form" method="POST" action="<?php echo URLROOT; ?>cards/checkout">

<div class="card-custom-body-mobile" style="background-color:#fff;">
   <div class="cart-table-mobile">
        <div class="col-1">
            Details
        </div>
        <div class="col-2" style="margin-right:1.5rem;">
            Qty
        </div>
        <div class="col-3">
            Amount
        </div>
   </div>

   <?php if(count($data['cartItems']) > 0) : ?>

        <?php foreach($data['cartItems'] as $item): ?>

            <?php $properties = json_decode($item->PROPERTIES); ?>

            <?php $total_Amount = 0.00; ?>

            <div class="cart-table-mobile">
                <div class="col-1">
                    <img class="cart-image" src="<?php echo URLROOT; ?>/public/img/card_products/<?php echo $item->CARD_IMAGE_NAME; ?>" />
                    <h1><?php echo $item->CARD_NAME; ?></h1>
                    <ul>
                            <li>Color: <span class="cart-value"><?php echo $properties->color; ?></span></li>
                            <li>Custom Name: <span class="cart-value"><?php echo $properties->name; ?></span></li>
                            <li>Name Position: <span class="cart-value"><?php echo $properties->position; ?></span></li>
                            <li>Number Template: <span class="cart-value"><?php echo $properties->template; ?></span></li>
                        </ul>
                </div>
                <div class="col-2">
                    <span id="data_counter" data-counter="1" class="reader"><?php echo $item->QUANTITY; ?></span>
                </div>
                <div class="col-3">
                    <div class="cart-amount">₦<?php echo number_format($item->AMOUNT,2); ?></div>
                </div>
            </div>
        
            <?php $total_Amount = $total_Amount + $item->AMOUNT;  ?>
        <?php endforeach; ?>

        <div class="sub-total-area-mobile">
        <h5>Subtotal</h5>
        <h1>₦<?php echo number_format($total_Amount,2); ?></h1>
    </div>

    <div class="order-info-mobile">
       <h3>Additional Order Details</h3>
       <textarea name="" placeholder="Enter additional information for your order here..." rows="5" id=""></textarea>
    </div>

    <div style="text-align:center; margin: 2rem 0px;">
    <input class="btn-checkout" type="submit" value="Checkout">
    </div>

    <?php endif; ?>

    <?php if(count($data['cartItems']) == 0): ?>
        <div class="no-item-cart">
            Sorry, your cart is empty! <a href="#">Start Shopping</a> 
        </div>  
    <?php endif; ?>

  
    
</div>

    </form>

<?php
   require APPROOT . '/views/includes/dark_footer_inner_mobile.php';
?>