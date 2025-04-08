<?php
// Start the session
session_start();

// Define the page based on the query string
$page = isset($_GET['page']) ? $_GET['page'] : 'home'; // Default to 'home' if no page is specified

// Include common header
include('public/header.php'); // You can create a separate header file for public and member pages

// Route based on the 'page' parameter
switch ($page) {
    case 'home':
        header('location:public/index.php?page=home');  // Public home page
        break;
    
    case 'm-home':
        if (isset($_SESSION['cus_login']) && $_SESSION['cus_login'] == true):
        {
            header('location:members/index.php?page=m-home');  // member home page
            break;
        }
        endif;
    case 'about':
        header('location:public/about.php?page=about');  // Public about page
        break;

    case 'm-about':
        if (isset($_SESSION['cus_login']) && $_SESSION['cus_login'] == true):
        {
            header('location:members/about.php?page=m-about');  // member about page
            break;
        }
        endif;

    case 'contact':
        header('location:public/contact.php?page=contact');  // Public contact page
        break;

    case 'm-contact':
        if (isset($_SESSION['cus_login']) && $_SESSION['cus_login'] == true):
        {
            header('location:members/contact.php?page=m-contact');  // member contact page
            break;
        }
        endif;

    case 'products':
        header('location:public/products.php?page=products');  // Public products page
        break;
        
    case 'm-products':
        if (isset($_SESSION['cus_login']) && $_SESSION['cus_login'] == true):
        {
            header('location:members/products.php?page=m-products');  // member product page
            break;
        }
        endif;

    case 'placedOrders':
        header('location:public/no-orders-placed.php?page=placedOrders');  // Public placedOrders page
        break;
        
    case 'm-placedOrders':
        if (isset($_SESSION['cus_login']) && $_SESSION['cus_login'] == true):
        {
            header('location:members/ordered-items.php?page=m-placedOrders');  // member placedOrders page
            break;
        }
        endif;

    case 'login':
        header('location:public/login.php?page=login');  // Login page for public users
        break;
        
    case 'register':
        header('location:public/register.php?page=register'); // Register page for public users
        break;

    case 'cart':
        if (isset($_SESSION['cus_login']) && $_SESSION['cus_login'] == true):
        {
            header('location:members/cart.php?page=m-cart'); // cart assess for members
            break;
        }
        endif;

    case 'cashout':
        if (isset($_SESSION['cus_login']) && $_SESSION['cus_login'] == true):
        {
            header('location:members/cashout.php?page=m-cachout'); // cart assess for members
            break;
        }
        endif;

    case 'overview':
        if (isset($_SESSION['admin_login']) && $_SESSION['admin_login'] == true):
        {
            header('location:admin/overviwe.php?page=overview'); // Admin overview page for admin
            break;
        }
        endif;
    
    case 'add-products':
        if (isset($_SESSION['admin_login']) && $_SESSION['admin_login'] == true):
        {
            header('location:admin/Addproduct.php?page=add-products'); // Admin add items page for admin
            break;
        }
        endif;

    case 'pending-orders':
        if (isset($_SESSION['admin_login']) && $_SESSION['admin_login'] == true):
        {
            header('location:admin/pendingOrders.php?page=pending-orders'); // Adminpending-orders page for admin
            break;
        }
        endif;

    case 'approved-orders':
        if (isset($_SESSION['admin_login']) && $_SESSION['admin_login'] == true):
        {
            header('location:admin/approved-orders.php?page=approved-orders'); // Admin approved-orders for admin
            break;
        }
        endif;

    case 'client-directory':
        if (isset($_SESSION['admin_login']) && $_SESSION['admin_login'] == true):
        {
            header('location:admin/ContactManagement.php?page=client-directory'); // Admin client-directory page for admin
            break;
        }
        endif;

    case 'product-catalog':
        if (isset($_SESSION['admin_login']) && $_SESSION['admin_login'] == true):
        {
            header('location:admin/product-catalog.php?page=add-products'); // Admin product-catalog page for admin
            break;
        }
        endif;
        
    case 'logout':
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    
        // Unset all session variables
        $_SESSION = [];
    
        // Destroy the session
        session_destroy();
    
        // Clear session cookie (if applicable)
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(
                session_name(), // Name of the session cookie
                '',             // Empty value to invalidate the cookie
                time() - 42000, // Expire the cookie in the past
                $params["path"],
                $params["domain"],
                $params["secure"],
                $params["httponly"]
            );
        }
        // Prevent caching of the current page
        header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
        header("Pragma: no-cache");
        header("Expires: 0");
            
        // Redirect to the home page after logout
        header("Location: public/index.php?page=home");
        
        exit;
        break;

    default:
        include('public/404.php?page=404'); // Default 404 page if the page doesn't exist
        break;
}

// Include common footer
include('public/footer.php'); // You can create a separate footer file for public and member pages
?>