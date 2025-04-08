<?php 
    include('../config/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="css/cashout.css" rel="stylesheet">
    <title></title>
</head>

<body class="bg-light">

    <div class="container mb-5 mt-5 pt-5">
        <h2 class="checkout-header">Checkout Page</h2>

        <!-- Bank Selection Form -->
        <div class="form-group">
            <label for="bank-select"><i class="fas fa-credit-card"></i> Choose Bank</label>
            <select class="form-control" id="bank-select">
                <option value="bank1">Bank A</option>
                <option value="bank2">Bank B</option>
                <option value="bank3">Bank C</option>
                <option value="bank4">Bank D</option>
                <option value="bank5">Bank E</option>
            </select>
        </div>

        <!-- Display Bank Details -->
        <div class="bank-details" id="bank-details">
            <h5>Bank Details</h5>
            <p id="bank-name">Bank Name: </p>
            <p id="bank-account">Account Number: </p>
            <p id="bank-branch">Branch: </p>
        </div>

        <!-- ATM Slip Upload (Drag and Drop) -->
        <div class="atm-upload-container" id="atm-upload-container" onclick="triggerFileInput()">
            <div class="atm-upload-area" id="upload-area" ondrop="handleDrop(event)" ondragover="allowDrop(event)">
                <p id="upload-text">Click or Drag & Drop your ATM slip here</p>
                <input type="file" id="atm-slip" accept="image/*" onchange="handleFileSelect(event)" />
                <img id="image-preview" src="" alt="Selected Image" />
            </div>
        </div>

        <!-- Cart Items Display -->
        <div id="cart-items"></div>

        <!-- Total Amount -->
        <div class="total-amount">
            Total Amount to Pay: $<span id="total-price">0.00</span>
        </div>
        <!-- Submit Button -->
        <button class="checkout-btn" id="submit-btn" onclick="submitPayment()">Submit Payment</button> <br>

        <!-- Back Button -->
        <button class="back-btn" id="back-btn" onclick="goBack()">Back to Cart</button>
    </div>

    <!-- Toast Notification -->
    <div id="toast" class="toast">Payment Successful</div>
    <div id="toast-error" class="toast toast-error">Please upload an ATM slip to proceed</div>


    <?php 
        include('../includes/footer.php')
    ?>
    <script src="js/cashout.js"></script>
</body>

</html>