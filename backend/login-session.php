<?php
session_start();
include('db.php');
if(isset($_POST['login'])){
    $name=$_POST['username'];
    $password=$_POST['password'];

    $quary = "SELECT * FROM customer WHERE (name = '$name' && password = '$password');";
    $res = mysqli_query($conn,$quary);
    if(mysqli_num_rows($res)>0){
        $_SESSION['cus_login'] = $name;
        header('location:../index.php?page=m-home');
    }else{
        $quary = "SELECT * FROM admin WHERE (username = '$name' && password = '$password');";
        $res = mysqli_query($conn,$quary);
        if(mysqli_num_rows($res)>0){
            $_SESSION['admin_login'] = $name;
            header('location:../index.php?page=overview');
        }else{
            header('location:../index.php?page=login');
        }        
    }
}
?>