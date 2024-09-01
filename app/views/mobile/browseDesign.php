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

    <div class="pagination" style="margin-left:auto;margin-right:auto;">
        
        <?php   
            $previous_page_id = $data['page_id'] - 1;
            $next_page_id = $data['page_id'] + 1;
        ?>
    
        <?php if($data['page_id'] > 1): ?>
            <a href="<?php echo URLROOT.'cards/designs?pageid='.$previous_page_id; ?>" class="prev">&laquo;</a>
        <?php endif; ?>
    
          <!-- Page numbers -->
          <?php for($i = 1; $i <= $data['total_pages']; $i++): ?>
            <a href="<?php echo URLROOT.'cards/designs?pageid='.$i; ?>" class="<?php if($data['page_id'] == $i) {echo 'active';}else {echo '';} ?>"><?php echo $i; ?></a>
            
    
            <?php if($i == 6): ?>
            <a href="<?php echo URLROOT.'cards/designs?pageid='.$next_page_id; ?>" class="<?php echo ($data['page_id'] > 5) ? 'active' : ''; ?>">...</a>
            <?php break; ?>
            <?php endif; ?>
    
    
            <?php endfor; ?>
           <!--
            <a href="<?php echo URLROOT.'cards/designs?pageid=2'; ?>" class="<?php if($data['page_id'] == '2') {echo 'active';}else {echo '';} ?>">2</a>
            <a href="<?php echo URLROOT.'cards/designs?pageid=3'; ?>" class="<?php if($data['page_id'] == '3') {echo 'active';}else {echo '';} ?>">3</a>
            <a href="<?php echo URLROOT.'cards/designs?pageid=4'; ?>" class="<?php if($data['page_id'] == '4') {echo 'active';}else {echo '';} ?>">4</a>
            <a href="<?php echo URLROOT.'cards/designs?pageid=5'; ?>" class="<?php if($data['page_id'] == '5') {echo 'active';}else {echo '';} ?>">5</a>
            <a href="<?php echo URLROOT.'cards/designs?pageid=6'; ?>" class="<?php if($data['page_id'] == '6') {echo 'active';}else {echo '';} ?>">6</a>
          -->
            <?php if($data['page_id'] < $data['total_pages']): ?>
                <a href="<?php echo URLROOT.'cards/designs?pageid='.$next_page_id; ?>" class="next">&raquo;</a>
            <?php endif; ?>
      </div>
      </div>
</div>


<?php
   require APPROOT . '/views/includes/dark_footer_inner_mobile.php';
?>