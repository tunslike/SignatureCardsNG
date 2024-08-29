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
        <div class="cart-header">SHOPPING CART</div>
    </div>
</div>

<div class="cart-body">

    <div class="cartTable">

            <?php if(count($data['cartItems']) > 0) : ?>

            <?php $totalAmount = 0.00; ?>

            <table>
            <tr>
                <th width="10%">Product</th>
                <th width="60%">Details</th>
                <th width="20%" align="center">Quantity</th>
                <th align="right">Total</th>
            </tr>

            <tbody>

            <?php foreach($data['cartItems'] as $item): ?>

                <?php $properties = json_decode($item->PROPERTIES); ?>

                <tr>
                    <td valign="top">
                        <img class="cart-image" src="<?php echo URLROOT; ?>/public/img/cards/<?php echo $item->CARD_IMAGE_NAME; ?>" />
                    </td>
                    <td align="left">
                        <h1><?php echo $item->CARD_NAME; ?></h1>
                        <ul>
                            <li>Color: <span class="cart-value"><?php echo $properties->color; ?></span></li>
                            <li>Custom Name: <span class="cart-value"><?php echo $properties->name; ?></span></li>
                            <li>Font Type: <span class="cart-value"><?php echo $properties->font; ?></span></li>
                            <li>Name Position: <span class="cart-value"><?php echo $properties->position; ?></span></li>
                            <li>Number Template: <span class="cart-value"><?php echo $properties->template; ?></span></li>
                        </ul>
                    </td> 
                    <td valign="top" width="20%" align="left">
                        <div class="quantity-counter-cart">
                            <span id="minusCounter" onClick="quantityCount('minus');" class="counter">-</span>
                            <span id="data_counter" data-counter="1" class="reader"><?php echo $item->QUANTITY; ?></span>
                            <span id="addCounter" onClick="quantityCount('add');" class="counter">+</span>
                        </div>
                        <div style="margin-left:35px; margin-top:8px;">
                            <a href="#">Remove</a>
                        </div>
                    </td>
                    <td valign="top" align="left">
                        <div class="cart-amount">₦<?php echo number_format($item->AMOUNT,2); ?></div>
                    </td>
                </tr>

                <?php $totalAmount = $totalAmount + $item->AMOUNT;  ?>

            <?php endforeach; ?>

            <?php endif; ?>

            <?php if(count($data['cartItems']) == 0): ?>

                <table>
            <tr>
                <th width="10%">Product</th>
                <th width="60%">Details</th>
                <th width="20%" align="center">Quantity</th>
                <th align="right">Total</th>
            </tr>
            </table>

                <div class="no-item-cart">
                    Sorry, your cart is empty! <a href="#">Start Shopping</a> 
                </div>  

            <?php endif; ?>
                
            </tbody>
                <!--
            <tbody>
                <tr>
                    <td valign="top">
                        <img class="cart-image" src="<?php echo URLROOT; ?>/public/img/cards/card_1.png" />
                    </td>
                    <td align="left">
                        <h1>Millionaire Club</h1>
                        <ul>
                            <li>Color: <span class="cart-value">Gold</span></li>
                            <li>Custom Name: <span class="cart-value">Babatunde Francis</span></li>
                            <li>Font Type: <span class="cart-value">Thin</span></li>
                            <li>Name Position: <span class="cart-value">Front</span></li>
                            <li>Number Template: <span class="cart-value">#5 Sample</span></li>
                        </ul>
                    </td> 
                    <td valign="top" width="20%" align="left">
                        <div class="quantity-counter-cart">
                            <span id="minusCounter" onClick="quantityCount('minus');" class="counter">-</span>
                            <span id="data_counter" data-counter="1" class="reader">1</span>
                            <span id="addCounter" onClick="quantityCount('add');" class="counter">+</span>
                        </div>
                        <div style="margin-left:35px; margin-top:8px;">
                            <a href="#">Remove</a>
                        </div>
                    </td>
                    <td valign="top" align="left">
                        <div class="cart-amount">₦100,303.00</div>
                    </td>
                </tr>
                <tr>
                    <td valign="top">
                        <img class="cart-image" src="<?php echo URLROOT; ?>/public/img/cards/card_2.png" />
                    </td>
                    <td align="left">
                        <h1>Personal Card</h1>
                        <ul>
                            <li>Color: <span class="cart-value">Red</span></li>
                            <li>Custom Name: <span class="cart-value">James Shalo</span></li>
                            <li>Font Type: <span class="cart-value">Bold</span></li>
                            <li>Name Position: <span class="cart-value">Back</span></li>
                            <li>Number Template: <span class="cart-value">#2 Sample</span></li>
                        </ul>
                    </td> 
                    <td valign="top" width="20%" align="left">
                        <div class="quantity-counter-cart">
                            <span id="minusCounter" onClick="quantityCount('minus');" class="counter">-</span>
                            <span id="data_counter" data-counter="1" class="reader">1</span>
                            <span id="addCounter" onClick="quantityCount('add');" class="counter">+</span>
                        </div>
                        <div style="margin-left:35px; margin-top:8px;">
                            <a href="#">Remove</a>
                        </div>
                    </td>
                    <td valign="top" align="left">
                        <div class="cart-amount">₦45,000.00</div>
                    </td>
                </tr>
            </tbody> -->
        </table>
    </div>

    <?php if(count($data['cartItems']) > 0) : ?>

        <form id="register_form" method="POST" action="<?php echo URLROOT; ?>cards/checkout">
        <div class="total-cart-area">
                <div class="order-info">
                    <h3>Additional Order Details</h3>
                    <textarea name="" placeholder="Enter additional information for your order here..." rows="5" id=""></textarea>
                </div>
                <div class="total-info">
                        <p>
                            <h5>Subtotal</h5>
                            <h1>₦<?php echo number_format($totalAmount,2); ?></h1>
                        </p>
                        <br>
                        <input class="btn-checkout" type="submit" value="Checkout">
                </div>
                </div>

        </div>
        </form>
    <?php endif; ?>


<?php
   require APPROOT . '/views/includes/footer.php';
?>