<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/foget-pass.css" rel="stylesheet">
</head>

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
    <script>
    function sendResetLink() {

        setTimeout(function() {
            document.getElementById('forgotPasswordForm').style.display = 'none';
            document.getElementById('resetLinkMessage').style.display = 'block';
        }, 1000); // 1-second delay (replace with your actual logic)
    }
    </script>
</body>

</html>