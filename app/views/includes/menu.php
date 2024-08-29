<div class="nav-area">
        <a title="Back Home" href="<?php echo URLROOT.'home'; ?>"><img src="#" alt="Logo here" /></a> 
        <ul class="navlink">
                <li><a href="<?php echo URLROOT; ?>home">Home</a></li>
                <li><a href="#">How it Works</a></li>
                <li><a href="<?php echo URLROOT; ?>cards/shop">Shop a Design</a></li>
                <li><a href="<?php echo URLROOT; ?>contactus">Contact Us</a></li>
                <li><a class="account" style="color:#fff;" href="<?php echo URLROOT; ?>cards/cart" title="View Cart!">Cart<img src="<?php echo URLROOT; ?>/public/img/cart_icon.png" /> <span class="cart-count" id="cardItem"><?php if(isset($_SESSION['cartItem'])) { echo count($_SESSION['cartItem']);} else {echo '0';} ?></span></a></li>
                <?php if(isset( $_SESSION['user_id']) &&  $_SESSION['user_id'] != '') : ?>
                        <li><a class="account" style="color:#fff;" href="<?php echo URLROOT; ?>account/dashboard" title="Create an account!"><i class="fa fa-user-o"></i>Hi, <?php echo $_SESSION['firstname']; ?><img src="<?php echo URLROOT; ?>/public/img/user_icon.png" /></a></li>
                <?php else: ?>
                        <li><a class="account" style="color:#fff;" href="<?php echo URLROOT; ?>account/login" title="Create an account!"><i class="fa fa-user-o"></i>Account<img src="<?php echo URLROOT; ?>/public/img/user_icon.png" /></a></li>
                <?php endif; ?>
                
        </ul>
    </div>