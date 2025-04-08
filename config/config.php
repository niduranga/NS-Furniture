<?php 
session_start();
    if (!isset($_SESSION['cus_login'])) 
    {
        if(!isset($_SESSION['admin_login']))
        {
            header('location:../index.php');
        }
        else
        {
            include_once('../includes/db.php');
        }
    }
    else
    {
        include_once('../includes/db.php');
    }
?>