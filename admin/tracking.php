<?php 
    // include_once('../config/config.php');
    include_once('../includes/adminheader.php');
?>
<!--========== CONTENTS ==========-->
<main>
    <section>
        <div class="admin-container mt-5">
            <h2 class="text-center mb-4">Admin Control Panel</h2>
            <div class="mb-3">
                <label for="adminStepSelect" class="form-label fw-bold">Update Current Step</label>
                <select class="form-select" id="adminStepSelect">
                    <option value="1">Order Placed</option>
                    <option value="2">In Production</option>
                    <option value="3">Quality Check</option>
                    <option value="4">Out for Delivery</option>
                    <option value="5">Delivered</option>
                </select>
            </div>
            <button class="btn btn-primary w-100" id="updateStepButton">Update Step</button>
            <a name="" id="" class="btn btn-light mt-2" href="approved-orders.php" role="button">Back</a>
        </div>
    </section>
</main>
<?php 
    include_once('../includes/adminfooter.php');
?>