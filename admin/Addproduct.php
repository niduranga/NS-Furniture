<?php 
     // include_once('../config/config.php');
     include_once('../includes/adminheader.php');
?>
<!--========== CONTENTS ==========-->
<main>
    <section>
        <div class="ms-0 ms-md-5 mt-3">
            <div class="form-container">
                <h2>Add New Product</h2>
                <form action="functions/addProducts.php" method="POST">
                    <!-- Product Name  id="addProductForm"-->
                    <div class="mb-2">
                        <label for="productName" class="form-label">Product Name</label>
                        <input type="text" class="form-control" name="name" id="productName"
                            placeholder="Enter product name" required>
                    </div>
                    <!-- Product Description -->
                    <div class="mb-2">
                        <label for="productDescription" class="form-label">Product Description</label>
                        <textarea class="form-control" name="text-area" id="productDescription" rows="3"
                            placeholder="Enter product description" required></textarea>
                    </div>

                    <!-- Product Price -->
                    <div class="mb-2">
                        <label for="productPrice" class="form-label">Product Price</label>
                        <input type="number" class="form-control" name="price" id="productPrice"
                            placeholder="Enter product price" step="0.01" required>
                    </div>

                    <!-- Product Category -->
                    <div class="mb-2">
                        <label for="productCategory" class="form-label">Product Category</label>
                        <select class="form-control" id="productCategory" name="category" required>
                            <option value="" disabled selected>Select a category</option>
                            <option value="Sofa">Sofa</option>
                            <option value="Chair">Chair</option>
                            <option value="Table">Table</option>
                            <option value="Bed">Bed</option>
                            <option value="Cabinet">Cabinet</option>
                        </select>
                    </div>

                    <!-- Product Image Upload -->
                    <div class="mb-2">
                        <label class="form-label">Product Images</label>
                        <div class="image-upload-container" id="imageUploadContainer">
                            <label for="productImage">
                                <i class="fa-cloud-upload-alt fas"></i>
                                Drag & Drop or Click to Upload
                            </label>
                            <input type="file" name="img" id="productImage" accept="image/*" multiple>
                        </div>
                        <div class="image-preview-container" id="imagePreviewContainer"></div>
                        <div class="error-message" id="imageError"></div>
                    </div>
                    <!-- Submit Button -->
                    <button type="submit" name="submit" class="btn btn-primary w-100">Add Product</button>
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