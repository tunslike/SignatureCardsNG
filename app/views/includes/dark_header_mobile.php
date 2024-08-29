
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
        <link href="<?php echo URLROOT ?>/public/css/mobileDarkcss.css?v=<?php echo rand(10000000000,99999999999); ?>" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
    
	</head>
	<!--end::Head-->
    <body>  
    <div class="wrapper">
    
<div class="header-area-mobile">
    <a href="http://localhost/signaturecards/pages/index2"><img class="animate__animated animate__fadeInLeft" src="<?php echo URLROOT; ?>/public/img/logo_updated.png" /></a>
    <div class="nav-area">
                    <a class="cart" href="<?php echo URLROOT; ?>contactus">
                        <span class="notify-badge-mobile">0</span>
                        <img src="<?php echo URLROOT; ?>/public/img/basket_gold.png" />
                    </a>
                    <a onclick="showMenu(); return false;" class="mobile-menu">
                        <img src="<?php echo URLROOT; ?>/public/img/mobile_menu.png" />
                    </a>
    </div>
</div>
<div id="mobileMenu" class="menu-mobile">
	<ul>
		<li><a <?php if($data['active'] == 'home') { echo 'style="color:white;"';}else{echo '';} ?> href="<?php echo URLROOT; ?>pages/index2">Home</a></li>
		<li><a <?php if($data['active'] == 'service') { echo 'style="color:white;"';}else{echo '';} ?> href="<?php echo URLROOT; ?>pages/ourService">Our Service</a></li>
		<li><a <?php if($data['active'] == 'browse') { echo 'style="color:white;"';}else{echo '';} ?> href="<?php echo URLROOT; ?>cards/designs">Browse Designs</a></li>
		<li><a <?php if($data['active'] == 'contact') { echo 'style="color:white;"';}else{echo '';} ?> href="<?php echo URLROOT; ?>pages/contactUs">Contact Us</a></li>
	</ul>
</div>