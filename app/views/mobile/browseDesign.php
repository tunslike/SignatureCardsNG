<?php
   require APPROOT . '/views/includes/dark_header_mobile.php';
?>
<div class="inner-header-area" style="padding: 1rem 1.5rem; margin-top:-16px">
    <div class="inner-header-title-mobile">
        <h1>Browse More Designs</h1>
    </div>
</div>

<div class="browse-design-area-mobile">
    <div class="search-area-mobile">
        <input type="text" placeholder="Search card designs using names...">
    </div>
    <div class="best-selling-area-mobile">
    <?php if(count($data['cards']) > 0) : ?>
            
            <?php foreach($data['cards'] as $card): ?>
                
                <div class="card-product">
                    <a href="<?php echo URLROOT.'cards/orderCard?sku_id='.$card->CARD_ID ?>">
                <img src="<?php echo URLROOT; ?>/public/img/card_products/<?php echo $card->CARD_IMAGE_NAME; ?>?v=<?php echo rand(10000000000,99999999999); ?>" />
                <h1><?php echo $card->CARD_NAME; ?></h1>
            </a>
        </div>
            <?php endforeach; ?>

        <?php endif; ?>
    </div>
</div>


<?php
   require APPROOT . '/views/includes/dark_footer_inner_mobile.php';
?>