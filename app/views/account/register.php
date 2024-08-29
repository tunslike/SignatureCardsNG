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
        <h1>REGISTER ACCOUNT</h1>
    </div>
</div>


<div class="login-body" style="margin-top:5%; margin-bottom:7%;">

<form id="register_form" method="POST" action="<?php echo URLROOT; ?>/account/register">

    <h1>Create Account</h1>
    <h5>Complete the information below to register</h5>
    <div class="login-field">
        <input name="lname" required placeholder="First name" type="text">
        <input name="fname" required placeholder="Last name" type="text">
        <input name="email" required placeholder="Email" type="email">
        <input name="mobile" placeholder="Mobile" maxlength="11" type="number">
        <input name="access" required placeholder="Password" type="password">
    </div>
    <input type="submit" class="btnSign" value="Register">
    <div class="sign-body">
        <a href="<?php echo URLROOT; ?>account/login">Already have an account? Login</a>
    </div>
</form>
</div>


<?php
   require APPROOT . '/views/includes/footer.php';
?>