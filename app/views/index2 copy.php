
<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head>
<base href="../../../" />
		<title><?php echo SITENAME ?></title>
		<meta charset="utf-8" />
		<meta name="description" content="Signature Cards NG | Customize And Brand your ATM Cards, Business Cards and Custom Cards');" />
		<meta name="keywords" content="ATM Cards, Card Branding, Card Engraving, Customise ATM Card, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Signature Cards NG | Customize And Brand your ATM Cards, Business Cards and Custom Cards" />
		<meta property="og:url" content="https://signaturecards.ng" />
		<meta property="og:site_name" content="Signature Cards NG" />
		<link rel="canonical" href=<?php echo SITENAME ?>" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400..800&display=swap" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />



		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
        <link href="<?php echo URLROOT ?>/public/css/darkCustom.css?v=<?php echo rand(10000000000,99999999999); ?>" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
    
	</head>
	<!--end::Head-->
    <body>  
    <div class="wrapper">
    
    <div class="header-area">
        <div class="header-logo-area">
         <img class="animate__animated animate__fadeInLeft" src="<?php echo URLROOT; ?>/public/img/logo_updated.png" />

         <ul class="navlink animate__animated animate__fadeInRight">
                <li><a style="color:white;" href="<?php echo URLROOT; ?>home">Home</a></li>
                <li><a href="#">Our Service</a></li>
                <li><a href="<?php echo URLROOT; ?>cards/shop">Browse Designs</a></li>
                <li><a href="<?php echo URLROOT; ?>contactus">Contact Us</a></li>
                <li><a href="<?php echo URLROOT; ?>contactus"><img src="<?php echo URLROOT; ?>/public/img/basket_gold.png" /></a></li>
        </ul>
        </div>
    </div>
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
            <h1 class="animate__animated animate__zoomIn"><span style="font-size:35px; margin-bottom:10px;">We've got you covered on your </span><br> <span class="goldColor">Custom Luxury Metal ATM Cards</span></h1>
            <h5 class="animate__animated animate__fadeInUpBig">Choose from exotic designed collection or customize one for yourself to get started</h5>
        </div>
        <div class="button-holder">
            <a class="design-btn animate__animated animate__fadeInLeft" href="<?php echo URLROOT; ?>cards/shop">Browse Collection</a>
            <a class="custom-btn animate__animated animate__fadeInRight" href="#">Customize your Own</a>
        </div>
</div>

<div class="luxury-design-area">
    <div class="exclusive-design">
    <h1 class="animate__animated animate__zoomIn">Executive Collection</h1>
    <h5 class="animate__animated animate__fadeInUp">Stand out and be the boss from this collection</h5>
    </div>

    <div class="collection-swiper">
                    <!-- Slider main container -->
            <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide"><img src="<?php echo URLROOT; ?>/public/img/cards/exclusive_01.png" /></div>
                <div class="swiper-slide"> <img src="<?php echo URLROOT; ?>/public/img/cards/exclusive_02.png" /></div>
                <div class="swiper-slide"> <img src="<?php echo URLROOT; ?>/public/img/cards/exclusive_03.png" /></div>
                <div class="swiper-slide"> <img src="<?php echo URLROOT; ?>/public/img/cards/exclusive_04.png" /></div>
                <div class="swiper-slide"> <img src="<?php echo URLROOT; ?>/public/img/cards/exclusive_05.png" /></div>
                <div class="swiper-slide"> <img src="<?php echo URLROOT; ?>/public/img/cards/card_1.png" /></div>
         
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
        <h1 class="animate__animated animate__zoomIn">Best Selling Designs</h1>
        <h5 class="animate__animated animate__fadeInUp">Choose from our best selling custome designs</h5>
    </div>
    <div class="display-best-selling">
        
               <!-- Slider main container -->
               <div class="swiper_2">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide"> <img src="<?php echo URLROOT; ?>/public/img/cards/card_1.png" /></div>
                <div class="swiper-slide"> <img src="<?php echo URLROOT; ?>/public/img/cards/card_2.png" /></div>
                <div class="swiper-slide"> <img src="<?php echo URLROOT; ?>/public/img/cards/card_3.png" /></div>
                <div class="swiper-slide"> <img src="<?php echo URLROOT; ?>/public/img/cards/card_4.png" /></div>
                <div class="swiper-slide"> <img src="<?php echo URLROOT; ?>/public/img/cards/card_5.png" /></div>
                <div class="swiper-slide"> <img src="<?php echo URLROOT; ?>/public/img/cards/card_6.png" /></div>
            </div>
            <br>
            <br>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            </div>
            </div>

    </div>
</div>

<div class="how-it-works">
<h1 class="animate__animated animate__zoomIn">How it Works</h1>
<div class="line-divider"></div>
<br>
<div class="step-view">
        <div class="step-info">
            <img src="<?php echo URLROOT; ?>/public/img/step_1.png" />
            <div class="rating-details">
                <h2>Step One</h2>
                <h5>Create your own custom design or choose from one of our best sellers.</h5>
            </div>
        </div>
        <div class="step-info">
            <img src="<?php echo URLROOT; ?>/public/img/step_1.png" />
            <div class="rating-details">
                <h2>Step Two</h2>
                <h5>Use our easy graphic design interface to modify or customize your card</h5>
            </div>
        </div>
</div>
<div class="step-view">
        <div class="step-info">
            <img src="<?php echo URLROOT; ?>/public/img/step_1.png" />
            <div class="rating-details">
                <h2>Step Three</h2>
                <h5>Then complete your order and we beging working on your card right away</h5>
            </div>
        </div>
        <div class="step-info">
            <img src="<?php echo URLROOT; ?>/public/img/step_1.png" />
            <div class="rating-details">
                <h2>Step Four</h2>
                <h5>We ship both your old and new metal cards back to you within 1-2 days with tracked shipping</h5>
            </div>
        </div>
</div>
</div>

    <div class="push"></div>
  </div>



  <footer class="footer">
    <div class="footer-div">
        <div class="inner-footer">
                <div class="company-info">
                    <img class="animate__animated animate__fadeInLeft" src="<?php echo URLROOT; ?>/public/img/logo_signature.png" />
                    <h3>We can help customize and personalize your ATM card into high Quality Metal Custom Luxury Card with class. Try us today!</h3>
                </div>
                <div class="rating-info">
                <img src="<?php echo URLROOT; ?>/public/img/cards/footer_img.png" />
                </div>
                <div class="office-address">
                    <h1>Office Address</h1>
                    <h5>50 Ligali Ayoride Street, Victoria Island Lagos</h5>
                </div>
                <div class="support-info">
                    <h1>Support Centre</h1>
                    <h3>09309303903</h3>
                    <h5>Do you need to make an urgent enquiry? Click on our speed dial button</h5>
                </div>
        </div>
        <div class="footer-copyright">
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