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
    <!-- Content of the body -->
    <div class="container mt-4 pt-5">
        <div class="row">
            <!-- Sidebar: Categories -->
            <div class="col-12 col-md-3">
                <button class="btn btn-primary category-toggle-btn" id="toggleSidebar">
                    <i class="fa-bars fas"></i> Categories
                </button>
                <div id="categorySidebar" class="category-sidebar">
                    <h5 class="mb-3">Categories</h5>
                    <div class="list-group">
                        <div class="active category-item" data-category="all"><i class="fa-th-large fas"></i> All
                            Products</div>
                        <div class="category-item" data-category="sofas"><i class="fa-couch fas"></i> Sofas</div>
                        <div class="category-item" data-category="chairs"><i class="fa-chair fas"></i> Chairs</div>
                        <div class="category-item" data-category="tables"><i class="fa-table fas"></i> Tables</div>
                        <div class="category-item" data-category="beds"><i class="fa-bed fas"></i> Beds</div>
                        <div class="category-item" data-category="cabinets"><i class="fa-warehouse fas"></i> Pantry
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content: Products -->
            <div class="col-12 col-md-9 product-list">
                <div class="d-flex justify-content-between mb-3">
                    <h2>Our Products</h2>
                    <!-- Cart Icon -->
                    <div>
                        <a class="nav-link" href="../index.php?page=cart">
                            <i class="text-dark cart-icon fa-shopping-cart fas" id="cart-icon">
                                <span class="cart-badge" id="cart-count">0</span>
                            </i>
                        </a>
                    </div>
                </div>

                <div class="row" id="product-list">
                    <!-- Product Cards -->
                    <div class="col-12 col-md-4 product-card" data-category="sofas">
                        <div class="card">
                            <img src="img/product sofa.jpg" class="card-img-top" alt="Sofa">
                            <div class="card-body text-center">
                                <h5 class="card-title">Luxury Sofa</h5>
                                <p class="card-text">$499</p>
                                <button class="btn btn-warning add-to-cart" data-name="Luxury Sofa" data-price="499"
                                    data-image="img\product sofa.jpg"><i class="fa-cart-plus fas"></i> Add to
                                    Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4 product-card" data-category="chairs">
                        <div class="card">
                            <img src="img/product chair.jpg" class="card-img-top" alt="Chair">
                            <div class="card-body text-center">
                                <h5 class="card-title">Wooden Chair</h5>
                                <p class="card-text">$199</p>
                                <button class="btn btn-warning add-to-cart" data-name="Wooden Chair" data-price="199"
                                    data-image="img\product chair.jpg"><i class="fa-cart-plus fas"></i> Add to
                                    Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4 product-card" data-category="tables">
                        <div class="card">
                            <img src="img/dining1.jpg" class="card-img-top" alt="Table">
                            <div class="card-body text-center">
                                <h5 class="card-title">Dining Table</h5>
                                <p class="card-text">$799</p>
                                <button class="btn btn-warning add-to-cart" data-name="Dining Table" data-price="799"
                                    data-image="img\dining1.jpg"><i class="fa-cart-plus fas"></i> Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php 
        include('../includes/footer.php')
    ?>
    <script src="js/product.js"></script>
</body>

</html>