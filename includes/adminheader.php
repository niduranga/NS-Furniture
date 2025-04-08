<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!--========== BOX ICONS ==========-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<!--========== CHART.JS ==========-->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!--========== CSS ==========-->
<link rel="stylesheet" href="assets/css/styles.css">
<link rel="stylesheet" href="assets/css/orders.css">
<link rel="stylesheet" href="assets/css/add-products.css">
<link rel="stylesheet" href="assets/css/overview.css">
<link rel="stylesheet" href="assets/css/client-directory.css">
<link rel="stylesheet" href="assets/css/product-catalog.css">
<link rel="stylesheet" href="assets/css/producttracking.css">
<link rel="stylesheet" href="assets/css/tracking.css">

<!--========== MAIN JS ==========-->
<script src="assets/js/main.js"></script>

<title>NS Furniture Admin Pannel</title>
</head>

<body>
    <!--========== HEADER ==========-->
    <header class="header">
        <div class="header__container">
            <img src="assets/img/image.png" alt="" class="header__img">

            <a href="#" class="header____logo">NS Furniture</a>

            <div class="header__toggle">
                <i class='bx bx-menu' id="header-toggle"></i>
            </div>
        </div>
    </header>

    <!--========== NAV ==========-->
    <div class="nav" id="navbar">
        <nav class="nav__container">
            <div>
                <a href="#" class="nav__link nav__logo">
                    <i class='bx bxs-disc nav__icon'></i>
                    <span class="nav__logo-name">NSFurniture</span>
                </a>

                <div class="nav__list mt-5">
                    <div class="nav__items mt-5">
                        <h3 class="nav__subtitle mt-5"></h3>

                        <a href="overviwe.php" class="nav__link active">
                            <i class="fas fa-chart-line me-2"></i>
                            <span class="nav__name">Overview</span>
                        </a>

                        <a href="Addproduct.php" class="nav__link">
                            <i class="fas fa-plus-circle me-2"></i>
                            <span class="nav__name">Add Products</span>
                        </a>

                        <a href="pendingOrders.php" class="nav__link">
                            <i class="fas fa-hourglass-half me-2"></i>
                            <span class="nav__name">Pending Orders</span>
                        </a>

                        <a href="approved-orders.php" class="nav__link">
                            <i class="fas fa-check-circle me-2"></i>
                            <span class="nav__name">Approved Orders</span>
                        </a>

                        <a href="ContactManagement.php" class="nav__link">
                            <i class="fas fa-user-edit me-2"></i>
                            <span class="nav__name">Contact Management</span>
                        </a>

                        <a href="product-catalog.php" class="nav__link">
                            <i class="fas fa-boxes me-2"></i>
                            <span class="nav__name">Product Catalog</span>
                        </a>

                        <a href="registeradmin.php" class="nav__link">
                            <i class="fa-solid fa-registered me-2"></i>
                            <span class="nav__name">Register Admin</span>
                        </a>
                    </div>
                </div>
            </div>
            <a href="../index.php?page=logout" class="nav__link nav__logout">
                <i class='bx bx-log-out nav__icon'></i>
                <span class="nav__name">Log Out</span>
            </a>
        </nav>
    </div>