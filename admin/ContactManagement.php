<?php 
     //include_once('../config/config.php');
     include_once('../includes/adminheader.php');
?>
<!--========== CONTENTS ==========-->
<main>
    <section>
        <div class="mt-3"><label>&nbsp</label></div>
        <div class="form-container">
            <h2>Update Company Contacts</h2>
            <form id="addProductForm" action="../includes/contactupdate.php" method="GET">
                <!-- Company email Name -->
                <div class="mb-3">
                    <label for="productName" class="form-label">Email</label>
                    <input type="text" name="Email" class="form-control" id="productName"
                        placeholder="<?php/* echo htmlspecialchars($Email);*/?>" required>
                </div>

                <!-- Company Phone Number -->
                <div class="mb-3">
                    <label for="productDescription" class="form-label">Phone Number</label>
                    <input type="text" name="PhoneNumber" class="form-control" id="productDescription"
                        placeholder="<?php/* echo htmlspecialchars($Phone);*/?>" required>
                </div>

                <!-- Product Price -->
                <div class="mb-3">
                    <label for="productPrice" class="form-label">Address</label>
                    <input type="text" name="Address" class="form-control" id="productPrice"
                        placeholder="<?php/* echo htmlspecialchars($Address);*/?>" step="0.01" required>
                </div>

                <!-- Submit Button -->
                <button type="submit" name="Submit" class="btn btn-primary w-100">Add Product</button>
            </form>
        </div>
        </div>

        <!-- Toast Container -->
        <div class="toast-container" id="toastContainer"></div>

    </section>
</main>
<?php 
    include_once('../includes/adminfooter.php');
?>