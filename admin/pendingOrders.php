<?php 
     //include_once('../config/config.php');
     include_once('../includes/adminheader.php');
?>
<!--========== CONTENTS ==========-->
<main>
    <section>
        <div class="container">
            <h1>Pending Orders</h1>
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
                            <button class="btn btn-danger" id="rejectBtn"><i class="fa-trash-alt fas"></i>
                                Reject</button>
                            <button class="btn btn-success" id="acceptBtn"><i class="fa-check fas"></i>
                                Accept</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Image Modal -->
        <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <img src="img/about.jpg" alt="product-img-large" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

        <!-- Toast Container -->
        <div class="toast-container" id="toastContainer"></div>

    </section>
</main>
<?php 
    include_once('../includes/adminfooter.php');
?>