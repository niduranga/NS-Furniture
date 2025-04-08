<?php 
    include('../includes/header.php');
?>
<link href="css/login-rege.css" rel="stylesheet">

<div class="register-container mt-5 pt-5">
    <div class="d-flex justify-content-center mb-4">
        <h2>Register</h2>
    </div>
    <form action="../backend/register.php" Method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name">
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" name="address" id="address" placeholder="Enter your address">
        </div>
        <div class="mb-3">
            <label class="form-label">Phone Numbers</label>
            <div class="phone-numbers">
                <input type="text" class="form-control" name="Phone1" placeholder="Phone Number">
            </div>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="email" name="emailaddress"
                placeholder="Enter your email address">
        </div>
        <div class="d-grid">
            <button type="submit" name="register" class="btn btn-primary">Register</button>
        </div>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>