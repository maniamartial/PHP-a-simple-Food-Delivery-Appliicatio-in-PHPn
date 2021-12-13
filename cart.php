<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/cart.css">
        <title>Shopping Cart</title>
    </head>
    <body>
        <div class="Cart-Container">
            <div class="Header">
            <h3 class="Heading">Shopping Cart</h3>
            <h5 class="Action">Remove all</h5>
            </div>
            <div class="Cart-Items">
                <div class="image-box">
                <img src="cheesePizza.jfif" style="height: 120px;" />
                </div>
                <div class="about">
                <h1 class="title">Cheese Pizza</h1>
                <h3 class="subtitle">250ml</h3>
                <img src="cheesePizza.jfif" style="height: 30px;"/>
                </div>
                <div class="counter"></div>
                <div class="prices"></div>
                <div class="prices">
                <div class="amount">$2.99</div>
                <div class="save"><u>Save for later</u></div>
                <div class="remove"><u>Remove</u></div>
            </div>
            </div>
            <hr> 
            <div class="checkout">
            <div class="total">
            <div>
            <div class="Subtotal">Sub-Total</div>
            <div class="items">2 items</div>
            </div>
            <div class="total-amount">$6.18</div>
            </div>
            <button class="button" onclick="location.href='index.php'">Back</button>
            <button class="button" onclick="location.href='checkout.php'">Checkout</button>
            </div>
           
        </div>
           <?php include("footer.php") ?>
    </body>
</html>
