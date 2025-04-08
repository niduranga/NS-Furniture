<?php
session_start();
include('db.php');

if (isset($_POST['register'])) {
    // Get the input data and sanitize it
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $phone = mysqli_real_escape_string($conn, $_POST['Phone1']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $email = mysqli_real_escape_string($conn, $_POST['emailaddress']);

    // First insertion into the customer table
    $sql = "INSERT INTO customer (name, address, email, password,phone) VALUES ('$name', '$address', '$email', '$password', '$phone')";
    
    if ($conn->query($sql) === TRUE) {
        header('location:../public/login.php');
    } else {
        echo "Error inserting customer: " . $conn->error;
    }
    $conn->close();
}
?>