
<?php
   require APPROOT . '/views/includes/dark_header.php';
?>

<!--
  <div class="display-area">
    <div class="display-title">
            <h1 class="animate__animated animate__zoomIn">We've got you covered on your <span class="goldColor">Custom Luxury Metal ATM Cards</span></h1>
            <h5 class="animate__animated animate__fadeInUpBig">Choose from exotic designed collection or customize one for yourself to get started</h5>
        </div>
        <div class="button-holder">
            <a class="design-btn animate__animated animate__fadeInLeft" href="<?php echo URLROOT; ?>cards/shop">Browse Collection</a>
            <a class="custom-btn animate__animated animate__fadeInRight" href="#">Customize your Own</a>
        </div>
</div>
-->
<div class="display-area-2">
<div class="display-title">
            <h1 class="animate__animated animate__zoomIn animate__delay-1s">We've got you covered on your</h1>
            <h2 class="animate__animated animate__zoomIn animate__delay-2s">Customize Luxury Metal Cards</h2>
            <h5 class="animate__animated animate__fadeInUpBig animate__delay-3s">Choose from exotic designed collection or customize one for yourself to get started</h5>
        </div>
        <div class="button-holder">
            <a class="design-btn animate__animated animate__fadeInLeft animate__delay-4s" href="<?php echo URLROOT; ?>cards/shop">Browse Collection</a>
        </div>
</div>

<div class="luxury-design-area">
    <div class="exclusive-design">
        <h1 class="homeElement animate__animated animate__zoomIn">Executive Collection</h1>
        <h5 class="homeElement animate__animated animate__fadeInUp">Stand out and be the boss from this collection</h5>
    </div>

    <div class="collection-swiper">
                    <!-- Slider main container -->
            <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                 <!--
                <div class="swiper-slide"><img src="<?php echo URLROOT; ?>/public/img/cards/exclusive_01.png" /></div>
                <div class="swiper-slide"> <img src="<?php echo URLROOT; ?>/public/img/cards/exclusive_02.png" /></div>
                <div class="swiper-slide"> <img src="<?php echo URLROOT; ?>/public/img/cards/exclusive_03.png" /></div>
                <div class="swiper-slide"> <img src="<?php echo URLROOT; ?>/public/img/cards/exclusive_04.png" /></div>
                <div class="swiper-slide"> <img src="<?php echo URLROOT; ?>/public/img/cards/exclusive_05.png" /></div>
                <div class="swiper-slide"> <img src="<?php echo URLROOT; ?>/public/img/cards/card_1.png" /></div> -->
                <?php if(count($data['exclusives']) > 0) : ?>
            
                    <?php foreach($data['exclusives'] as $card): ?>
                        <div class="swiper-slide"><a href="<?php echo URLROOT.'cards/orderCard?sku_id='.$card->CARD_ID ?>"><img src="<?php echo URLROOT; ?>/public/img/card_products/<?php echo $card->CARD_IMAGE_NAME; ?>" /></a></div>
                    <?php endforeach; ?>

                <?php endif; ?>

            </div>
            <br>
            <br>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            </div>
    </div>
</div>

<div class="best-selling-design-area">
    <div class="best-selling-design">
        <h1 class="homeElement best_seller animate__animated animate__zoomIn">Best Selling Designs</h1>
        <h5 class="homeElement  animate__fadeInUp">Choose from our best selling premium designs</h5>
    </div>
<br>
    <div class="filter-search-area">
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
        <div class="card-product">
            <a href="#">
                <img src="<?php echo URLROOT; ?>/public/img/cards/card_1.png" />
                <h1>Rude Boy</h1>
            </a>
        </div>
        <div class="card-product">
            <a href="#">
                <img src="<?php echo URLROOT; ?>/public/img/cards/card_2.png" />
                <h1>Tiger</h1>
            </a>
        </div>
        <div class="card-product">
            <a href="#">
                <img src="<?php echo URLROOT; ?>/public/img/cards/card_3.png" />
                <h1>Sport Card</h1>
            </a>
        </div>
        <div class="card-product">
            <a href="#">
                <img src="<?php echo URLROOT; ?>/public/img/cards/card_4.png" />
                <h1>True Love</h1>
            </a>
        </div>
        <div class="card-product">
            <a href="#">
                <img src="<?php echo URLROOT; ?>/public/img/cards/card_5.png" />
                <h1>Sugar Daddy</h1>
            </a>
        </div>
        <div class="card-product">
            <a href="#">
                <img src="<?php echo URLROOT; ?>/public/img/cards/card_6.png" />
                <h1>Spider Man</h1>
            </a>
        </div>
        <div class="card-product">
            <a href="#">
                <img src="<?php echo URLROOT; ?>/public/img/cards/card_4.png" />
                <h1>True Love</h1>
            </a>
        </div>
        <div class="card-product">
            <a href="#">
                <img src="<?php echo URLROOT; ?>/public/img/cards/card_5.png" />
                <h1>Sugar Daddy</h1>
            </a>
        </div>
        <div class="card-product">
            <a href="#">
                <img src="<?php echo URLROOT; ?>/public/img/cards/card_6.png" />
                <h1>Spider Man</h1>
            </a>
        </div>
            -->

    </div>

    <div class="more-designs">
        <a href="<?php echo URLROOT; ?>cards/designs">Browse more Designs</a>
    </div>
    </div>

<!--
    <div class="display-best-selling">
           
               <div class="swiper_2">
     
            <div class="swiper-wrapper">
         
                <div class="swiper-slide"> <img src="<?php echo URLROOT; ?>/public/img/cards/card_1.png" /></div>
                <div class="swiper-slide"> <img src="<?php echo URLROOT; ?>/public/img/cards/card_2.png" /></div>
                <div class="swiper-slide"> <img src="<?php echo URLROOT; ?>/public/img/cards/card_3.png" /></div>
                <div class="swiper-slide"> <img src="<?php echo URLROOT; ?>/public/img/cards/card_4.png" /></div>
                <div class="swiper-slide"> <img src="<?php echo URLROOT; ?>/public/img/cards/card_5.png" /></div>
                <div class="swiper-slide"> <img src="<?php echo URLROOT; ?>/public/img/cards/card_6.png" /></div>
            </div>
            <br>
            <br>
     
            <div class="swiper-pagination"></div>

            </div>
            </div>
    </div>
-->
</div>

<div class="custom-design-area">
    <div class="custom-design">
        <div class="request-info">
            <h1>Do you need a special design?</h1>
            <h5>Submit a request order</h5>
            <p>Do you have a unique, custom or special art design you want to use, submit a request order and our representative will reach out to you</p>
        </div>
        <div class="request-order">
            <h1>Request Order</h1>
            <div class="request-form">
                <input type="text" placeholder="Fullname">
                <div class="form-divider">
                    <input type="text" placeholder="Phone Number">
                    <input type="text" placeholder="Email">
                </div>
                <input type="submit" value="Submit">
            </div>
        </div>
    </div>
</div>

<div class="how-it-works">
<h1 class="animate__animated animate__zoomIn">How it Works</h1>
<h5 class="animate__animated animate__fadeInUp">Follow these simple steps to order</h5>
<br>

<div class="how-steps-area">
    <div class="how-steps">
        <div class="step-box">
            <img src="<?php echo URLROOT; ?>/public/img/step-1.png" />
            <div class="step-details">
                <h3>Choose a Design</h3>
                <p>Browse our exclusive design collection to choose a design that suits your style</p>
            </div>
        </div>
        <div class="step-box">
        <img src="<?php echo URLROOT; ?>/public/img/step-2.png" />
            <div class="step-details">
                <h3>Customize Card Design</h3>
                <p>Use our intuitive friendly design interface to customize your card plus your color choice</p>
            </div>
        </div>
    </div>
    <div class="how-steps">
        <div class="step-box">
            <img src="<?php echo URLROOT; ?>/public/img/step-3.png" />
            <div class="step-details">
                <h3>Customize Card Design</h3>
                <p>Use our intuitive friendly design interface to customize the look of your card plus your color choice</p>
            </div>
        </div>
        <div class="step-box">
            <img src="<?php echo URLROOT; ?>/public/img/step-4.png" />
            <div class="step-details">
                <h3>Customize Card Design</h3>
                <p>Use our intuitive friendly design interface to customize the look of your card plus your color choice</p>
            </div>
        </div>
    </div>
</div>
</div>

  <?php
   require APPROOT . '/views/includes/dark_footer.php';
?>

          <!--begin::Javascript-->
          <script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
		<!--end::Global Javascript Bundle-->
        <script type="module">
                import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs'

                const swiper = new Swiper('.swiper', {

                    // Optional parameters'
                    effect: 'coverflow',
                    direction: 'horizontal',
                    loop: true,
                    autoplay: {
                    delay: 5000,
                    },
                    freeMode: true,
                    slidesPerView:3,
        
                    // If we need pagination
                    pagination: {
                        el: '.swiper-pagination',
                    },

                    // Navigation arrows
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                });


                const swiper2 = new Swiper('.swiper_2', {

                // Optional parameters'
                    direction: 'horizontal',
                    loop: true,
                    autoplay: {
                    delay: 3000,
                    },
                    freeMode: true,
                    slidesPerView:5,
                });

                const swiper3 = new Swiper('.swiper-display', {

                // Optional parameters'
                    parallax : true,
                    direction: 'horizontal',
                    loop: true,
                    autoplay: {
                    delay: 3000,
                    },
                    freeMode: true,
                    slidesPerView:5,
                });
        </script>   
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="<?php echo URLROOT ?>/public/js/controller.js?v=<?php echo rand(10000000000,99999999999); ?>"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>