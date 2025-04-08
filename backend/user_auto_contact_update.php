<?php 
// EMAIL
include('db.php');
$Email = "";
$sql = "SELECT email FROM contact WHERE id=1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // Fetch the email value
    $row = $result->fetch_assoc();
    $Email = $row['email'];
} else {
    $Email = "No email found"; // Default value if no results
}
// PHONE NUMBER
$Phone = "";
$sql2 = "SELECT phoneNumber FROM contact WHERE id=1";
$result2 = $conn->query($sql2);
if ($result2->num_rows > 0) {
    // Fetch the email value
    $row2 = $result2->fetch_assoc();
    $Phone = $row2['phoneNumber'];
} else {
    $Phone = "No phone number found"; // Default value if no results
}
$Address = "";
$sql3 = "SELECT address FROM contact WHERE id=1";
$result3 = $conn->query($sql3);
if ($result3->num_rows > 0) {
    // Fetch the email value
    $row3 = $result3->fetch_assoc();
    $Address = $row3['address'];
} else {
    $Address = "No address number found"; // Default value if no results
}
// Close the database connection
$conn->close();
?>