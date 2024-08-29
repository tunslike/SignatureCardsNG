<?php
   require APPROOT . '/views/includes/header.php';
?>

<div class="header-area">
    <?php
    require APPROOT . '/views/includes/menu.php';
    ?>
</div>
<div class="inner-sub-header">
    <div class="inner-sub-body">
        <h1>ACCOUNT</h1>
    </div>
</div>


<div class="login-body" style="margin-bottom:5%;">

    <?php if(isset($data['regStatus']) && $data['regStatus'] == '1') : ?>
            <div class="success-alert">
                Your registration was successful. Please login below.
            </div>
    <?php endif; ?>

    <h1>Sign into your Account</h1>
    <h5>Enter your email and password to login:</h5>

    <form id="register_form" method="POST" action="<?php echo URLROOT; ?>account/login">
            <div class="login-field">
                <input name="entryid" required placeholder="Email or Phone Number" type="text">
                <input name="entrycode" required placeholder="Password" type="text">
            </div>
            <div class="forgot-pwd">
            <a href="#">Forgot your Password?</a>
            </div>
            <input type="submit" class="btnLogin" value="Sign In">
            <div class="sign-body">
                <a href="<?php echo URLROOT; ?>account/signup">Don't have an account? Create Account</a>
            </div>
        </div>
    </form>

<?php
   require APPROOT . '/views/includes/footer.php';
?>