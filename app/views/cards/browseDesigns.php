
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
        <a href="#">Search</a>
</div>

<div class="filter-search-area" style="text-align:center; margin-bottom:-10px;">
        <ul>
            <li><a onclick="filterSearch('Luxury'); return false;" href="#">Luxury</a></li>
            <li><a onclick="filterSearch('Rich'); return false;" href="#">Rich Vibes</a></li>
            <li><a onclick="filterSearch('Sexy'); return false;" href="#">Sexy</a></li>
            <li><a onclick="filterSearch('Personality'); return false;" href="#">Personality</a></li>
            <li><a onclick="filterSearch('African'); return false;" href="#">African</a></li>
            <li><a onclick="filterSearch('Animals'); return false;" href="#">Animals</a></li>
            <li><a onclick="filterSearch('Abstract'); return false;" href="#">Abstract</a></li>
            <li><a onclick="filterSearch('All'); return false;" href="#">All Designs</a></li>
        </ul>
    </div>

    <div style="display:none;" id="preloader" class="preloader-area">
        <img src="<?php echo URLROOT; ?>/public/img/preloader.gif" />
        <h5>Loading your search, please wait...</h5>
    </div>

    <div class="best-selling-box">
    <div id="best_selling_data" class="best-selling-area">
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
<!--
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
            -->
    </div>

    <div class="pagination">
        
    <?php   
        $previous_page_id = $data['page_id'] - 1;
        $next_page_id = $data['page_id'] + 1;
    ?>

    <?php if($data['page_id'] > 1): ?>
        <a href="<?php echo URLROOT.'cards/designs?pageid='.$previous_page_id; ?>" class="prev">&laquo; Previous</a>
    <?php endif; ?>

      <!-- Page numbers -->
      <?php for($i = 1; $i <= $data['total_pages']; $i++): ?>
        <a href="<?php echo URLROOT.'cards/designs?pageid='.$i; ?>" class="<?php if($data['page_id'] == $i) {echo 'active';}else {echo '';} ?>"><?php echo $i; ?></a>
        

        <?php if($i == 6): ?>
        <a href="<?php echo URLROOT.'cards/designs?pageid='.$next_page_id; ?>" class="<?php echo ($data['page_id'] > 6) ? 'active' : ''; ?>">...</a>
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
            <a href="<?php echo URLROOT.'cards/designs?pageid='.$next_page_id; ?>" class="next">Next &raquo;</a>
        <?php endif; ?>
  </div>
</div>

</div>


<?php
   require APPROOT . '/views/includes/dark_footer_inner.php';
?>