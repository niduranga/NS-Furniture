<?php 
        include('../includes/header.php');
?>
<link href="css/foget-pass.css" rel="stylesheet">

<body>
    <div class="forgot-password-container">
        <h2>Forgot Password</h2>
        <form id="forgotPasswordForm">
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email">
            </div>
            <div class="d-grid">
                <button type="button" class="btn btn-primary" onclick="sendResetLink()">Reset Password</button>
            </div>
        </form>
        <div id="resetLinkMessage">
            Reset link sent to your email. Please check your inbox.
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/forgotpassword.js"></script>
</body>

</html>