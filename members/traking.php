<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('../config/config.php');?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Tracking | NS Furniture</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
    body {
        background-color: #f8f9fa;
    }

    .tracking-container {
        background: white;
        border-radius: 10px;
        padding: 30px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .tracking-step {
        display: flex;
        align-items: center;
        margin-bottom: 30px;
        padding: 20px;
        border-radius: 8px;
        background: #f1f1f1;
    }

    .tracking-step.completed {
        background: #d4edda;
    }

    .tracking-step.in-progress {
        background: #fff3cd;
    }

    .tracking-step img {
        width: 80px;
        height: 80px;
        border-radius: 8px;
        margin-right: 20px;
    }

    .tracking-icon {
        font-size: 40px;
        margin-right: 15px;
    }

    .step-info {
        flex-grow: 1;
    }

    .step-title {
        font-weight: bold;
        font-size: 1.2rem;
    }

    .step-desc {
        color: #555;
    }

    .current-step {
        border: 3px solid #ff9800;
        /* Orange border for highlight */
        background-color: #fffbe6;
        /* Light yellow background */
        animation: pulse 1s infinite alternate;
        /* Subtle animation */
    }

    @keyframes pulse {
        0% {
            box-shadow: 0 0 10px rgba(255, 152, 0, 0.5);
        }

        100% {
            box-shadow: 0 0 20px rgba(255, 152, 0, 0.8);
        }
    }
    </style>
</head>

<body>

    <div class="container my-5">
        <div class="text-center mb-4">
            <h2 class="fw-bold">Track Your Order</h2>
            <p class="text-muted">See the progress of your custom furniture order</p>
        </div>

        <div class="tracking-container mx-auto col-md-8" id="trackingContainer">
            <!-- Order Placed -->
            <div class="tracking-step" data-step="1">
                <i class="fas fa-receipt tracking-icon text-success"></i>
                <div class="step-info">
                    <div class="step-title">Order Placed</div>
                    <div class="step-desc">Your order has been received and is being processed.</div>
                </div>
            </div>

            <!-- In Production -->
            <div class="tracking-step" data-step="2">
                <i class="fas fa-cogs tracking-icon text-warning"></i>
                <div class="step-info">
                    <div class="step-title">In Production</div>
                    <div class="step-desc">Your custom furniture is being handcrafted.</div>
                </div>
            </div>

            <!-- Quality Check -->
            <div class="tracking-step" data-step="3">
                <i class="fas fa-check-double tracking-icon text-info"></i>
                <div class="step-info">
                    <div class="step-title">Quality Check</div>
                    <div class="step-desc">Your item is undergoing a final quality inspection.</div>
                </div>
            </div>

            <!-- Out for Delivery -->
            <div class="tracking-step" data-step="4">
                <i class="fas fa-truck tracking-icon text-primary"></i>
                <div class="step-info">
                    <div class="step-title">Out for Delivery</div>
                    <div class="step-desc">Your furniture is on its way to your home.</div>
                </div>
            </div>

            <!-- Delivered -->
            <div class="tracking-step" data-step="5">
                <i class="fas fa-home tracking-icon text-success"></i>
                <div class="step-info">
                    <div class="step-title">Delivered</div>
                    <div class="step-desc">Your order has arrived! Enjoy your new furniture.</div>
                </div>
            </div>
            <div>
                <?php if (isset($_SESSION['admin_login']) && $_SESSION['admin_login'] == true):?>
                <a href="../index.php?page=approved-orders" class="btn btn-ligh">Back</a>
                <?php else: ?>
                <a href="../index.php?page=placedOrders" class="btn btn-ligh">Back</a>
                <?php endif;?>
            </div>
        </div>
    </div>

    <script>
    // Fetch the current step from localStorage
    const currentStep = parseInt(localStorage.getItem('currentStep')) || 1;

    // Update the UI based on the current step
    function updateTrackingSteps() {
        const steps = document.querySelectorAll('.tracking-step');

        steps.forEach((step) => {
            const stepNumber = parseInt(step.getAttribute('data-step'));

            // Remove all existing classes
            step.classList.remove('completed', 'in-progress', 'current-step');

            if (stepNumber < currentStep) {
                step.classList.add('completed'); // Mark previous steps as completed
            } else if (stepNumber === currentStep) {
                step.classList.add('in-progress', 'current-step'); // Mark current step as in-progress
            }
        });
    }

    // Initialize the tracking steps
    updateTrackingSteps();
    </script>

</body>

</html>