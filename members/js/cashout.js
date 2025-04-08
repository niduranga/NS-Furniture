// Example bank data
const bankData = {
  bank1: { name: "Bank A", account: "123456789", branch: "Main Branch" },
  bank2: { name: "Bank B", account: "987654321", branch: "East Branch" },
  bank3: { name: "Bank C", account: "564738291", branch: "West Branch" },
  bank4: { name: "Bank D", account: "123123123", branch: "North Branch" },
  bank5: { name: "Bank E", account: "321321321", branch: "South Branch" },
};

// Retrieve cart data from sessionStorage
const cartItems = JSON.parse(sessionStorage.getItem("cart")) || [];
const totalAmountElement = document.getElementById("total-price");

// Display cart items and calculate total
function renderCart() {
  let totalAmount = 0;
  const cartContainer = document.getElementById("cart-items");

  if (cartItems.length === 0) {
    cartContainer.innerHTML = "<p>Your cart is empty.</p>";
  } else {
    cartItems.forEach((item) => {
      const itemElement = document.createElement("div");
      itemElement.classList.add("cart-item");
      itemElement.innerHTML = `
                    <div class="cart-item-details">
                        <h5>${item.name}</h5>
                        <p>Price: $${item.price}</p>
                    </div>
                `;
      cartContainer.appendChild(itemElement);
      totalAmount += parseFloat(item.price);
    });
    totalAmountElement.textContent = totalAmount.toFixed(2); // Display total amount
  }
}

// Event listener for bank selection
document.getElementById("bank-select").addEventListener("change", function () {
  const selectedBank = this.value;
  const bankDetails = document.getElementById("bank-details");
  const bankName = document.getElementById("bank-name");
  const bankAccount = document.getElementById("bank-account");
  const bankBranch = document.getElementById("bank-branch");

  if (selectedBank) {
    // Display bank details
    bankDetails.style.display = "block";
    bankName.textContent = `Bank Name: ${bankData[selectedBank].name}`;
    bankAccount.textContent = `Account Number: ${bankData[selectedBank].account}`;
    bankBranch.textContent = `Branch: ${bankData[selectedBank].branch}`;
  }
});

// Set default bank selection to Bank A (bank1) on page load
window.onload = function () {
  document.getElementById("bank-select").value = "bank1"; // Select "Bank A" by default
  document.getElementById("bank-select").dispatchEvent(new Event("change")); // Trigger the change event to update the bank details
  renderCart(); // Render cart items
};

// Automatically trigger file input when user clicks the "Drag & Drop" area
function triggerFileInput() {
  document.getElementById("atm-slip").click();
}

// Handle file selection (file input or drag & drop)
function handleFileSelect(event) {
  const file = event.target.files[0];
  if (file) {
    displayImage(file); // Display the selected image inside the Drag & Drop area
  }
}

// Handle drag over event to allow drop
function allowDrop(event) {
  event.preventDefault();
}

// Handle the drop event
function handleDrop(event) {
  event.preventDefault();
  const file = event.dataTransfer.files[0];
  if (file) {
    displayImage(file); // Display the dropped image inside the Drag & Drop area
  }
}

// Function to display the selected image inside the Drag & Drop area
function displayImage(file) {
  const reader = new FileReader();
  reader.onload = function () {
    const imageUrl = reader.result;
    const preview = document.getElementById("image-preview");
    const uploadText = document.getElementById("upload-text");
    preview.src = imageUrl; // Set image source
    preview.style.display = "block"; // Show image inside Drag & Drop area
    uploadText.style.display = "none"; // Hide the text after image is uploaded
  };
  reader.readAsDataURL(file); // Read the file as a data URL
}

// Function to handle form submission
// Function to handle form submission
function submitPayment() {
  const uploadedFile = document.getElementById("atm-slip").files.length;
  if (uploadedFile > 0) {
    // Update the payment status on the server (simulate payment success)
    fetch("update-order-status.php", {
      // Replace with the actual PHP file for handling payment updates
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
      body: "payment_status=success", // Adjust if you need more data
    })
      .then((response) => response.text())
      .then((data) => {
        showToast("success"); // Show payment success message
        clearCart(); // Clear cart data after payment
        setTimeout(function () {
          window.location.href = "ordered-items.php"; // Redirect after successful payment
        }, 3000); // Redirect after 3 seconds to match toast duration
      })
      .catch((error) => {
        showToast("error");
      });
  } else {
    showToast("error"); // Show error toast if ATM slip is not uploaded
  }
}

// Function to clear the cart
function clearCart() {
  console.log("Clearing cart...");

  // Clear sessionStorage and localStorage (if you're using these for cart data)
  localStorage.removeItem("cart"); // This removes the cart from localStorage
  console.log("Cart removed from localStorage");

  // Optional: Trigger a cart render on the cart page if needed
  renderCart(); // This will re-render the cart to reflect the empty state (you might want to call this in cart.php as well)
}

// Function to show a toast message (success or error)
function showToast(type) {
  const toast = document.getElementById("toast");
  const toastError = document.getElementById("toast-error");

  if (type === "success") {
    toast.style.display = "block"; // Show the success toast
    setTimeout(() => {
      toast.style.display = "none"; // Hide the toast after 3 seconds
    }, 3000);
  } else {
    toastError.style.display = "block"; // Show the error toast
    setTimeout(() => {
      toastError.style.display = "none"; // Hide the error toast after 3 seconds
    }, 3000);
  }
}

// Function to go back to the cart page
function goBack() {
  window.location.href = "cart.php"; // Change this to the actual URL of your cart page
}
