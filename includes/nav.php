    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="../index.php"><img src="../assets/img/NSFurnitureLogo.png"
                    alt="Furniture Store Logo" height="40"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <?php if (isset($_SESSION['cus_login']) && $_SESSION['cus_login'] == true): ?>
                    <!-- Navigation for logged-in users -->
                    <li class="nav-item me-3">
                        <a class="nav-link <?php echo (isset($_GET['page']) && $_GET['page'] == 'm-home') ? 'active' : ''; ?>"
                            href="../index.php?page=m-home">
                            <i class="fas fa-home"></i> Home
                        </a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link <?php echo (isset($_GET['page']) && $_GET['page'] == 'm-about') ? 'active' : ''; ?>"
                            href="../index.php?page=m-about">
                            <i class="fas fa-address-card"></i> About</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link <?php echo (isset($_GET['page']) && $_GET['page'] == 'm-contact') ? 'active' : ''; ?>"
                            href="../index.php?page=m-contact">
                            <i class="fas fa-envelope"></i> Contact</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link <?php echo (isset($_GET['page']) && $_GET['page'] == 'm-products') ? 'active' : ''; ?>"
                            href="../index.php?page=m-products">
                            <i class="fas fa-box-open"></i> Products</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link <?php echo (isset($_GET['page']) && $_GET['page'] == 'm-placedOrders') ? 'active' : ''; ?>"
                            href="../index.php?page=m-placedOrders">
                            <i class="fas fa-receipt"></i> Placed Orders</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link <?php echo (isset($_GET['page']) && $_GET['page'] == 'logout') ? 'active' : ''; ?>"
                            href="../index.php?page=logout">
                            <i class="fa fa-sign-out"></i> Log Out</a>
                    </li>

                    <!-- Navigation for non-logged-in users -->
                    <?php else: ?>
                    <li class="nav-item me-3">
                        <a class="nav-link <?php echo (isset($_GET['page']) && $_GET['page'] == 'home') ? 'active' : ''; ?>"
                            href="../index.php?page=home">
                            <i class="fas fa-home"></i> Home
                        </a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link <?php echo (isset($_GET['page']) && $_GET['page'] == 'about') ? 'active' : ''; ?>"
                            href="../index.php?page=about">
                            <i class="fas fa-address-card"></i> About</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link <?php echo (isset($_GET['page']) && $_GET['page'] == 'contact') ? 'active' : ''; ?>"
                            href="../index.php?page=contact">
                            <i class="fas fa-envelope"></i> Contact</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link <?php echo (isset($_GET['page']) && $_GET['page'] == 'products') ? 'active' : ''; ?>"
                            href="../index.php?page=products">
                            <i class="fas fa-box-open"></i> Products</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link <?php echo (isset($_GET['page']) && $_GET['page'] == 'placedOrders') ? 'active' : ''; ?>"
                            href="../index.php?page=placedOrders">
                            <i class="fas fa-receipt"></i> Placed Orders</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link btn btn-dark <?php echo (isset($_GET['page']) && $_GET['page'] == 'login') ? 'active' : ''; ?>"
                            href="../index.php?page=login">
                            <i class="fas fa-sign-in-alt"></i> Login</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link btn btn-dark <?php echo (isset($_GET['page']) && $_GET['page'] == 'register') ? 'active' : ''; ?>"
                            href="../index.php?page=register">
                            <i class="fas fa-user-plus register-icon"></i>Register</a>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>