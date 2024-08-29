
<?php
   require APPROOT . '/views/includes/header.php';
?>

<div class="header-area">


<?php
   require APPROOT . '/views/includes/menu.php';
?>

    <div class="display-area">
        <div class="display-title">
            <h1>We've got you covered on your next Custome Luxury Card Designs</h1>
            <h5>Choose from exotic designed collection or customize one for yourself to get started</h5>
        </div>
        <div class="button-holder">
            <a class="design-btn" href="<?php echo URLROOT; ?>cards/shop">Browse Collection</a>
            <a class="custom-btn" href="#">Customize your Own</a>
        </div>
    </div>
</div>

<div class="metal-option-area">
    <h1>Our Exclusive Designs</h1>
    <h5>Choose from our exclusive collections</h5>
    <div class="metal-list-option">
        <a class="metal-card" href="#">
            <h3 class="metal-card-title">100 Dollar Champ</h3>
            <img src="<?php echo URLROOT; ?>/public/img/cards/exclusive_01.png" />
        </a>
        <a class="metal-card" href="#">
            <h3 class="metal-card-title">Royal Crown</h3>
            <img src="<?php echo URLROOT; ?>/public/img/cards/exclusive_02.png" />
        </a>
        <a class="metal-card" href="#">
        <h3 class="metal-card-title">Premier Black Card</h3>
            <img src="<?php echo URLROOT; ?>/public/img/cards/exclusive_03.png" />
        </a>
        <a class="metal-card" href="#">
            <h3 class="metal-card-title">Loyalty Card</h3>
            <img src="<?php echo URLROOT; ?>/public/img/cards/exclusive_04.png" />
        </a>
    </div>
</div>

<div class="best-seller-area">

    <h1>Best Selling Designs</h1>
    <h5>Choose from our best selling custome designs</h5>

    <div class="card-product-list">

    <?php if(count($data['cards']) > 0) : ?>
        
        <?php foreach($data['cards'] as $card): ?>

            <a class="card-product" href="<?php echo URLROOT.'cards/orderCard?sku_id='.$card->CARD_ID ?>">
                <h1><?php echo $card->CARD_NAME; ?></h1>
                <img src="<?php echo URLROOT; ?>/public/img/cards/<?php echo $card->CARD_IMAGE_NAME; ?>" />
                <div class="card-details">
                    <h5>From ₦<?php echo number_format($card->AMOUNT,2); ?></h5>
                </div>
            </a>


        <?php endforeach; ?>

    <?php endif; ?>


      <!--
        <a class="card-product" href="<?php echo URLROOT.'/cards/designCustomCard' ?>">
        <h1>The Cool Guy</h1>
        <img src="<?php echo URLROOT; ?>/public/img/cards/card_2.png" />
        <div class="card-details">
                <h5>From ₦50,000</h5>
            </div>
        </a>
        <a class="card-product" href="<?php echo URLROOT.'/cards/designCustomCard' ?>">
    <h1>Gucci Style</h1>
    <img src="<?php echo URLROOT; ?>/public/img/cards/card_3.png" />
    <div class="card-details">
                <h5>From ₦50,000</h5>
            </div>
</a>
<a class="card-product" href="<?php echo URLROOT.'/cards/designCustomCard' ?>">
    <h1>Pink Girl</h1>
    <img src="<?php echo URLROOT; ?>/public/img/cards/card_4.png" />
    <div class="card-details">
                <h5>From ₦20,000</h5>
            </div>
</a>
<a class="card-product" href="<?php echo URLROOT.'/cards/designCustomCard' ?>">
<h1>Millionaire Club</h1>
<img src="<?php echo URLROOT; ?>/public/img/cards/card_5.png" />
<div class="card-details">
                <h5>From ₦35,000</h5>
            </div>
</a>
<a class="card-product" href="<?php echo URLROOT.'/cards/designCustomCard' ?>">
<h1>Hustle Card</h1>
<img src="<?php echo URLROOT; ?>/public/img/cards/card_6.png" />
<div class="card-details">
                <h5>From ₦55,000</h5>
            </div>
</a>
<a class="card-product" href="<?php echo URLROOT.'/cards/designCustomCard' ?>">
<h1>Personal Card</h1>
<img src="<?php echo URLROOT; ?>/public/img/cards/card_7.png" />
<div class="card-details">
    <h5>From ₦27,000</h5>
</div>
</a>
<a class="card-product" href="<?php echo URLROOT.'/cards/designCustomCard' ?>">
<h1>Personalize Club</h1>
<img src="<?php echo URLROOT; ?>/public/img/cards/card_8.png" />
<div class="card-details">
                <h5>From ₦25,000</h5>
            </div>
</a>-->

    </div>


    <div style="margin-top:5%;"><a style="text-decoration:none;" class="custom-btn" href="<?php echo URLROOT.'/cards/designCollection' ?>">Browse more Designs</a></div>

</div>

<div class="how-it-works-area">
<h1>How our Service Works</h1>
<h5>Professionally designed for your brand</h5>
<div class="how-area-body">
<img src="<?php echo URLROOT; ?>/public/img/how_image2.png" />
<div class="how-contents">
    <h3>WE HAVE A SIMPPLIFY PROCESS FOR YOU</h3>
    <p>At Signature Cards, we take our customer's core business values and express them in a creative and visual manner. Our knowledgeable designers are trained specifically for our printing processes. They bring this perspective to produce high end designs that will yield optimal final results.</p>
    <div class="list-item">
        <div class="icon-div">
            <img style="width:50px;" src="<?php echo URLROOT; ?>/public/img/step_two.png" />
        </div>
        <div class="item-body">
            <h3>STEP ONE</h3>
            <p>Choose from collection or custom designs</p>
        </div>
    </div>
    <div class="list-item">
        <div class="icon-div">
        <img style="width:50px;" src="<?php echo URLROOT; ?>/public/img/step_three.png" />
        </div>
        <div class="item-body">
            <h3>STEP TWO</h3>
            <p>Customize your card designs</p>
        </div>
    </div>
    <div class="list-item">
        <div class="icon-div">
        <img style="width:50px;" src="<?php echo URLROOT; ?>/public/img/step_one.png" />
        </div>
        <div class="item-body">
            <h3>STEP THREE</h3>
            <p>Place your order and expect your delivery at your doorstep</p>
        </div>
    </div>
</div>
</div>
</div>

<div class="newsletter-area">
    <h1>Subscribe to our Newsletter</h1>
    <h5>STAY UP TO DATE ON OUR PROMOTIONS</h5>
    <div class="newsletter-box">
        <input type="text" placeholder="Enter your email address to subscribe" class="news-letter-field" />
        <input type="submit" class="news-letter-button" value="Subcribe">
    </div>
</div>

<?php
   require APPROOT . '/views/includes/footer.php';
?>