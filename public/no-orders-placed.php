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
    <!-- content of the page -->
    <div class="container">
        <div class="empty-orders">
            <i class="fas fa-box-open empty-icon"></i>
            <h2 class="mt-3">No Orders Placed</h2>
            <p class="text-muted">Looks like you haven't placed any orders yet.</p>
            <button class="btn btn-shop" data-bs-toggle="modal" data-bs-target="#loginModal">
                <i class="fas fa-shopping-cart"></i> Start Shopping
            </button>
            <!-- <a href="shop.html" class="btn-shop" ><i class="fas fa-shopping-cart"></i> Start Shopping</a> -->
        </div>
    </div>
    <?php 
        include('../includes/footer.php')
    ?>
</body>

</html>