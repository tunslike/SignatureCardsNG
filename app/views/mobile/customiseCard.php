<?php
   require APPROOT . '/views/includes/dark_header_mobile.php';
?>
<div class="inner-header-area" style="padding: 1rem 1.5rem; margin-top:-16px">
    <div class="inner-header-title-mobile">
    <h1><?php echo $data['cardDetails']->CARD_NAME; ?></h1>
    </div>
</div>

<div class="card-custom-body-mobile">
    <div class="card-display-area-mobile">
    <input type="hidden" id="card_front_name" name="card_front_name" value="<?php echo $data['cardDetails']->CARD_IMAGE_NAME; ?>">

      <div id="card_front" style="background-image: url('<?php echo URLROOT ?>/public/img/card_products/<?php echo $data['cardDetails']->CARD_IMAGE_NAME; ?>');" class="card-front-mobile">
          <span id="card_text_front" class="card-name-front">Name</span>
        </div>
        <div id="card_back" style="background-image: url('<?php echo URLROOT ?>public/img/template/back_template_black.png');" class="card-back-mobile">
                <span id="card_text_back" style="display:none;" class="card-name">Name</span>
                <img id="card_back_template_1"  id="card_back_template_1" src="<?php echo URLROOT ?>public/img/template/black_card_template_01.png?v=1" />
                <img style="display:none; top:180px;" id="card_back_template_2" src="<?php echo URLROOT ?>public/img/template/black_card_template_02.png?v=4" />
      </div>
    </div>

    <div class="card-amount-display">
        <div>
            <p>Amount</p>
            <h3>₦ <?php echo number_format($data['cardDetails']->AMOUNT,2); ?></h3>
        </div>
     
        <div>
            <p>Quantity</p>
            <div class="quantity_counter-mobile">
                <span id="minusCounter" onClick="quantityCount('minus');" class="counter">-</span>
                <span id="data_counter" data-counter="1" class="reader-mobile">1</span>
                <span id="addCounter" onClick="quantityCount('add');" class="counter">+</span>
            </div>
        </div>
        <input type="hidden" id="entry_id" name="entry_id" value="<?php if(isset($_SESSION['user_id'])){echo $_SESSION['user_id'];}else{echo '';} ?>">
        <input type="hidden" id="hidden_amount" name="hidden_amount" value="<?php echo $data['cardDetails']->AMOUNT; ?>">
        <input type="hidden" id="card_id" name="card_id" value="<?php echo $data['cardDetails']->CARD_ID; ?>">
    </div>

    <div class="card-amount-display-box">
        <p>Select Card Color</p>
        <div class="card-color-list-mobile">
            <input type="hidden" id="card_color" name="card_color">
            <a onclick="changeImageBG('black');" class="tooltip card-color-scheme">
                <img class="card-color-list-img" src="<?php echo URLROOT; ?>/public/img/template/template_01.png"/>
                <span class="tooltiptext">Black Card</span>
            </a>
            <a onclick="changeImageBG('gold');" class="tooltip card-color-scheme">
                <img class="card-color-list-img" src="<?php echo URLROOT; ?>/public/img/template/template_02.png"/>
                <span class="tooltiptext">Gold Card</span>
            </a>
            <a onclick="changeImageBG('black_gold');" class="tooltip card-color-scheme">
                <img class="card-color-list-img" src="<?php echo URLROOT; ?>/public/img/template/template_05.png"/>
                <span class="tooltiptext">Black & Gold</span>
            </a>
            <a onclick="changeImageBG('white');" class="tooltip card-color-scheme">
                <img class="card-color-list-img" src="<?php echo URLROOT; ?>/public/img/template/template_04.png"/>
                <span class="tooltiptext">White Card</span>
            </a>
        </div>
        <br>
        <p>Enter Name</p>
        <input type="text" class="txtName" id="card_txt_id" placeholder="Enter your name">
        <br>
        <br>
        <p>Choose Name Position</p>
        <input type="hidden" id="card_position" name="card_position">
        <div class="card-font-row">
            <div onclick="setProperties('cardposition', 'Front');" class="card-position">
                Front
            </div>
            <div onclick="setProperties('cardposition', 'Back');" class="card-position">
                Back
            </div>
        </div>

        <br>
        <p>Card Number Template</p>
        <input type="hidden" id="card_design" name="card_design">
        <div class="card-font-row">
            <div onclick="setProperties('carddesign', 'Sample1');" class="card-design">
                Sample 1
            </div>
            <div onclick="setProperties('carddesign', 'Sample2');" class="card-design">
                Sample 2
            </div>
        </div>
        <br>
        <br>
        <h5>Total Price</h5>
        <div class="total-box">
            <div class="total-price-cart">₦<span id="total_price"><?php echo number_format($data['cardDetails']->AMOUNT,2); ?></span></div>
            <div class="product-quantity-mobile">x <span id="display_counter">1</span></div>
        </div>

        <div class="success-item-cart">
           <i class="fa fa-check-circle"></i> Order added to cart successfully!
        </div>

        <div class="payment-button">
            <input class="add-cart-mobile" onclick="AddToCart();" type="button" value="Add to Cart">
            <input class="pay-button-mobile" type="button" value="Pay Now">
        </div>

    </div>
</div>




<?php
   require APPROOT . '/views/includes/dark_footer_inner_mobile.php';
?>