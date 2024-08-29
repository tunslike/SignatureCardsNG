
<?php
   require APPROOT . '/views/includes/dark_header.php';
?>

<div class="inner-header-area">
    <div class="inner-header-title">
        <h1>Browse More Designs</h1>
    </div>
</div>

<div class="browse-design-area">

    <div class="search-area">
        <input type="text" placeholder="Search card designs using names...">
    </div>

    <div class="best-selling-area">
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


        <div class="page-navigation">
            <a href="#" style="color:#e19900;" class="w3-button">&laquo;</a>
                <a class="active" href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#">6</a>
                <a href="#">7</a>
                <a href="#">8</a>
                <a href="#">9</a>
            <a href="#" style="color:#e19900;" class="w3-button">&raquo;</a>
        </div>

    </div>
</div>


<?php
   require APPROOT . '/views/includes/dark_footer_inner.php';
?>