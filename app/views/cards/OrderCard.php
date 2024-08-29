<?php
   require APPROOT . '/views/includes/header.php';
?>

<div class="header-area">
    <?php
    require APPROOT . '/views/includes/menu.php';
    ?>
</div>
<div class="top-notification">
    hello tunde tunslike
</div>
<div class="inner-sub-header">
    <div class="inner-sub-body">
        <h1><?php echo $data['cardDetails']->CARD_NAME; ?></h1>
    </div>
</div>

<div class="inner-card-body">
    <div class="left-column">
        <div class="img-box">
            <div id="card_image_bg" class="image-card">
              <span id="card_text" class="card-name"></span>
              <span id="card_text_back" class="card-name-back"></span>
            </div>
        </div>
        <div class="description">
            <div class="desc-header">
                <h1>Description</h1>
            </div>
            <div class="description-body">
                <p>
                Our brown kraft business cards have a natural texture and rustic appearance. This regular kraft is available with an 18pt thickness, perfect for everyday cards, bulk cards at a trade show, or to ensure you can fit more into your travel card case. With 2 sides of offset printing already included in the price, virtually any color can be applied to suit your branding – even across the full face of the card with negative text left showing as the natural tone of the paper! For rustic charm, earth-positive ambiance, or an economic choice, the Regular Brown Kraft’s versatility will be sure to enhance your branding. Order yours from RockDesign today!
                </p>
            </div>
        </div>

        <div class="description">
            <div class="desc-header">
                <h1>How to Order</h1>
            </div>
            <div class="description-body">
                <p>
                8 - 11 business days after proof approval + transit*

*Please inform our orders department if you have any upcoming specific deadlines even if the day is outside of our regular turn-around time. This allows us to proceed accordingly if there are any production delays.
*Turn around time varies based on job complexity and size. Please feel free to contact us with any questions you may have.
                </p>
            </div>
        </div>
    </div>
    <div class="right-column">
        <h1> <span><?php echo $data['cardDetails']->CARD_NAME; ?></span></h1>
        <h3>₦ <?php echo number_format($data['cardDetails']->AMOUNT,2); ?></h3>
        <input type="hidden" id="entry_id" name="entry_id" value="<?php if(isset($_SESSION['user_id'])){echo $_SESSION['user_id'];}else{echo '';} ?>">
        <input type="hidden" id="hidden_amount" name="hidden_amount" value="<?php echo $data['cardDetails']->AMOUNT; ?>">
        <input type="hidden" id="card_id" name="card_id" value="<?php echo $data['cardDetails']->CARD_ID; ?>">
        <h5>Quantity</h5>
        <div class="quantity_counter">
            <span id="minusCounter" onClick="quantityCount('minus');" class="counter">-</span>
            <span id="data_counter" data-counter="1" class="reader">1</span>
            <span id="addCounter" onClick="quantityCount('add');" class="counter">+</span>
        </div>
        <br>
        <h5>Select Card Color</h5>
        <div class="card-color-list">
            <input type="hidden" id="card_color" name="card_color">
            <a onclick="changeImageBG('black');" class="tooltip">
                <img class="card-color-list-img" src="<?php echo URLROOT; ?>/public/img/template/template_01.png"/>
                <span class="tooltiptext">Black Card</span>
            </a>
            <a onclick="changeImageBG('gold');" class="tooltip">
                <img class="card-color-list-img" src="<?php echo URLROOT; ?>/public/img/template/template_02.png"/>
                <span class="tooltiptext">Gold Card</span>
            </a>
            <a onclick="changeImageBG('red');" class="tooltip">
                <img class="card-color-list-img" src="<?php echo URLROOT; ?>/public/img/template/template_03.png"/>
                <span class="tooltiptext">Red Card</span>
            </a>
            <a onclick="changeImageBG('white');" class="tooltip">
                <img class="card-color-list-img" src="<?php echo URLROOT; ?>/public/img/template/template_04.png"/>
                <span class="tooltiptext">White Card</span>
            </a>
        </div>

        <h5 style="margin-top:30px;">Enter Name</h5>
        <input type="text" class="txtName" id="card_txt_id" placeholder="Enter your name">

        <br>
        <br>
        <h5>Choose Font Type</h5>
        <input type="hidden" id="card_Type" name="card_Type">
        <div class="card-font-row">
            <div onclick="setProperties('cardtype', 'Thin');" class="card-font-type">
                Thin
            </div>
            <div onclick="setProperties('cardtype', 'Bold');"  class="card-font-type">
                <strong>Bold</strong>
            </div>
            <div onclick="setProperties('cardtype', 'Italic');"  class="card-font-type">
               <em>Italic</em> 
            </div>
        </div>


        <br>
        <h5>Choose Name Position</h5>
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
        <h5>Card Number Template</h5>
        <input type="hidden" id="card_design" name="card_design">
        <div class="card-font-row">
            <div onclick="setProperties('carddesign', 'Sample #1');" class="card-design">
                Sample #1
            </div>
            <div onclick="setProperties('carddesign', 'Sample #2');" class="card-design">
                Sample #2
            </div>
            <div onclick="setProperties('carddesign', 'Sample #3');" class="card-design">
                Sample #3
            </div>
        </div>

        <br>
        <br>
        <h5>Total Price</h5>
        <div class="total-box">
            <div class="total-price-cart">₦<span id="total_price"><?php echo number_format($data['cardDetails']->AMOUNT,2); ?></span></div>
            <div class="product-quantity">x <span id="display_counter">1</span></div>
        </div>

        <div class="success-item-cart">
           <i class="fa fa-check-circle"></i> Order added to cart successfully!
        </div>

        <div class="payment-button">
            <input class="add-cart" onclick="AddToCart();" type="button" value="Add to Cart">
            <input class="pay-button" type="button" value="Pay Now">
        </div>
       
    </div>
</div>

<?php
   require APPROOT . '/views/includes/product_like.php';
?>

<?php
   require APPROOT . '/views/includes/footer.php';
?>