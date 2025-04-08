<?php 
     //include_once('../config/config.php');
     include_once('../includes/adminheader.php');
?>
<!--========== CONTENTS ==========-->
<main>
    <section>
        <div class="g-4 row mt-0 mt-md-3">
            <div class="col-md-3 col-sm-6">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="card-icon fa-couch fas"></i>
                        <h5 class="card-title">Total Products</h5>
                        <p class="card-text" id="totalProducts">120</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="card-icon fa-box-open fas"></i>
                        <h5 class="card-title">Total Orders</h5>
                        <p class="card-text" id="totalOrders">150</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="card-icon fa-users fas"></i>
                        <h5 class="card-title">Total Customers</h5>
                        <p class="card-text" id="totalCustomers">500</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="card-icon fa-truck fas"></i>
                        <h5 class="card-title">Pending Orders</h5>
                        <p class="card-text" id="pendingOrders">10</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php 
    include_once('../includes/adminfooter.php');
?>