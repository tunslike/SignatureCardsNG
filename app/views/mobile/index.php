<?php
   require APPROOT . '/views/includes/dark_header_mobile.php';
?>

<div class="display-mobile">
    <div class="display-title-mobile">
            <h1 class="animate__animated animate__zoomIn animate__delay-1s">We've got you covered on your</h1>
            <h2 class="animate__animated animate__zoomIn animate__delay-2s">Customize Luxury Metal Cards</h2>
            <h5 class="animate__animated animate__fadeInUpBig animate__delay-3s">Choose from exotic designed collection or customize one for yourself to get started</h5>
    </div>
    <div class="button-holder-mobile">
            <a class="design-btn-mobile animate__animated animate__fadeInLeft animate__delay-4s" href="<?php echo URLROOT; ?>cards/shop">Browse Collection</a>
    </div>
</div>

<div class="luxury-design-area-mobile">
    <h1>Executive Collection</h1>
    <h5>Stand out and be the boss from this collection</h5>

    <div class="collection-swiper-mobile">
        <div class="swiper">
            <div class="swiper-wrapper">
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

<div class="best-selling-design-area-mobile">
    <h1>Best Selling Designs</h1>
    <h5>Choose from our best selling custome designs</h5>


    <div class="swiper_2">
        <div class="swiper-wrapper">
                <?php if(count($data['cards']) > 0) : ?> 
                        <?php foreach($data['cards'] as $card): ?>
                            
                            <div class="swiper-slide">
                                <a class="swiper-mobile-box" href="<?php echo URLROOT.'cards/orderCard?sku_id='.$card->CARD_ID ?>">
                                    <img src="<?php echo URLROOT; ?>/public/img/card_products/<?php echo $card->CARD_IMAGE_NAME; ?>?v=<?php echo rand(10000000000,99999999999); ?>" />
                                    <h3 style="font-size:1.2rem; text-align:center;  color: #dadada;"><?php echo $card->CARD_NAME; ?></h3>
                                </a>
                            </div>
                     <?php endforeach; ?>
                <?php endif; ?>
        </div>
    </div>
<br>
    <div class="more-designs-mobile">
        <a href="<?php echo URLROOT; ?>cards/designs">Browse more Designs</a>
    </div>
</div>

<div class="custom-design-area-mobile">
    <div class="request-info-mobile">
        <h1>Do you need a special design?</h1>
        <h5>Submit a request order</h5>
        <p>Do you have a unique, custom or special art design you want to use, submit a request order and our representative will reach out to you</p>
    </div>
    <div class="request-order-mobile">
        <input type="text" placeholder="Fullname">
        <input type="text" placeholder="Phone Number">
        <input type="text" placeholder="Email">
        <input type="submit" value="Submit">
    </div>
</div>

<div class="how-it-works-mobile">
<h1 class="animate__animated animate__zoomIn">How it Works</h1>
<h5 class="animate__animated animate__fadeInUp">Follow these simple steps to order</h5>
<div class="step-box-mobile">
            <img src="<?php echo URLROOT; ?>/public/img/step-1.png" />
            <div class="step-details-mobile">
                <h3>Choose a Design</h3>
                <p>Browse our exclusive design collection to choose a design that suits your style</p>
            </div>
</div>
<div class="step-box-mobile">
        <img src="<?php echo URLROOT; ?>/public/img/step-2.png" />
            <div class="step-details-mobile">
                <h3>Customize Card Design</h3>
                <p>Use our intuitive friendly design interface to customize your card plus your color choice</p>
            </div>
        </div>
        <div class="step-box-mobile">
            <img src="<?php echo URLROOT; ?>/public/img/step-3.png" />
            <div class="step-details-mobile">
                <h3>Customize Card Design</h3>
                <p>Use our intuitive friendly design interface to customize the look of your card plus your color choice</p>
            </div>
        </div>
        <div class="step-box-mobile">
            <img src="<?php echo URLROOT; ?>/public/img/step-4.png" />
            <div class="step-details-mobile">
                <h3>Customize Card Design</h3>
                <p>Use our intuitive friendly design interface to customize the look of your card plus your color choice</p>
            </div>
        </div>
</div>


<div class="push"></div>
</div>

<footer class="footer">
<div class="footer-div-mobile">
        <div class="company-info-mobile">
            <img class="animate__animated animate__fadeInLeft" src="<?php echo URLROOT; ?>/public/img/logo_signature.png" />
            <h3>We can help customize and personalize your ATM card into high Quality Metal Custom Luxury Card with class. Try us today!</h3>
        </div>
        <div class="office-address-mobile">
                <h1>Contact Details</h1>
                    <div style="margin-top:10px;" class="contact">
                        <i class="fa fa-home"></i>
                        <p>No 18 Ligal Ayorinde Victoria Island Lagos</p>
                    </div>
                    <div class="contact">
                        <i class="fa fa-phone"></i>
                        <p>+234 903 9393 939</p>
                    </div>
                    <div class="contact">
                        <i class="fa fa-envelope"></i>
                        <p>order@signaturecards.ng</p>
                    </div>
        </div>
        <div class="office-address-mobile">
                    <h1>Quick Links</h1>
                    <ul>
                        <li>Our Services</li>
                        <li>Privacy Policy</li>
                        <li>Terms and Conditions</li>
                        <li>Browse Designs</li>
                        <li>Contact Us</li>
                    </ul>
        </div>
        <div class="support-info-mobile">
                    <h1>Hotline</h1>
                    <h3>09309303903</h3>
                    <h5>Call our hotline urgent enquiries and support on your orders</h5>
        </div>
        <div class="footer-copyright-mobile">
                Copyright Ⓒ 2024 Singature Cards NG . All Rights Reserved
        </div>
</div>
</footer>


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
                    slidesPerView:1,
        
                    // If we need pagination
                    pagination: {
                        el: '.swiper-pagination',
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
                    slidesPerView:1,
                });

        </script>   
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="<?php echo URLROOT ?>/public/js/controller.js?v=<?php echo rand(10000000000,99999999999); ?>"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>