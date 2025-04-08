<?php 
     //include_once('../config/config.php');
     include_once('../includes/adminheader.php');
?>
<!--========== CONTENTS ==========-->
<main>
    <section>
        <div class="container">
            <h1>Approved Orders</h1>
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <!-- No Orders Message -->
                    <div class="no-orders" id="noOrdersMessage">
                        <i class="fa-3x fa-box-open fas mb-3"></i>
                        <p>No orders available.</p>
                    </div>

                    <!-- Order Box -->
                    <div class="box mt-5" id="itemBox">
                        <img src="assets/img/about.jpg" alt="product-img" class="product-img" data-bs-toggle="modal"
                            data-bs-target="#imageModal">
                        <div>
                            <h5>Item Name</h5>
                            <p>Customer Name</p>
                        </div>
                        <div>
                            <a href="tracking.php" class="btn btn-warning" id="updateBtn"><i class="fa-edit fas"></i>
                                Update</a>
                            <a href="../members/traking.php" class="btn btn-dark" id="statusBtn"><i
                                    class="fa-edit fas"></i> Current Step</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <!-- Toast Container -->
        <div class="toast-container" id="toastContainer"></div>

        <!-- Bootstrap 5 JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </section>
</main>

<?php 
    include_once('../includes/adminfooter.php');
?>