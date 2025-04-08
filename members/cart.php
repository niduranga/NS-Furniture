<?php 
    include('../config/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        include('../includes/header.php');
    ?>

</head>

<body class="bg-light">
    <?php 
        include('../includes/nav.php');
    ?>
    <link href="css/cart.css" rel="stylesheet">
    <div class="container mt-5 pt-5" height="100vh">
        <h2 class="cart-header">Your Shopping Cart</h2>

        <div id="cart-items"></div>

        <div id="cart-total" class="cart-summary">
            <h4 class="total-price">Total: $<span id="total-price">0</span></h4>
            <button class="checkout-btn" id="checkout-btn"><i class="fas fa-shopping-cart"></i>Proceed to
                Checkout</button>
        </div>

        <div id="empty-cart-message" class="empty-cart-message" style="display: none;">
            <i class="fas fa-box-open"></i><br>
            Your cart is empty. Start shopping now!
        </div>

        <a href="products.php" class="back-btn">
            <i class="fas fa-arrow-left"></i> Back to Products
        </a>
    </div>
    <script src="js/cart.js"></script>
</body>

</html>