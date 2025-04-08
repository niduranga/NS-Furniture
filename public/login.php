<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        include('../includes/header.php');   
    ?>
    <link href="css/login-rege.css" rel="stylesheet">
</head>

<body class="bg-light">
    <?php 
        include('../includes/nav.php');
    ?>

    <div class="login-container">
        <h2>Login</h2>
        <form action="../includes/login-session.php" method="POST">
            <div class="mb-3">
                <label for="email" class="form-label">User Name</label>
                <input type="username" name="username" class="form-control" id="username"
                    placeholder="Enter your username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password"
                    placeholder="Enter your password">
            </div>
            <div class="d-grid">
                <button type="submit" name="login" class="btn btn-primary">Login</button>
            </div>
        </form>
        <div class="login-links">
            <a href="forgot-password.php">Forgot Password?</a>
            <span class="separator">|</span>
            <a href="register.php">Not Registered?</a>
        </div>
    </div>

</html>