// Toast Notification Function
function showToast(message, isError = false) {
  const toastContainer = document.getElementById("toastContainer");
  const toast = document.createElement("div");
  toast.className = `toast ${isError ? "error" : ""}`;
  toast.textContent = message;
  toastContainer.appendChild(toast);
  setTimeout(() => toast.classList.add("show"), 100);
  setTimeout(() => {
    toast.classList.remove("show");
    setTimeout(() => toast.remove(), 500);
  }, 3000);
}

// Handle Accept and Reject Buttons
const itemBox = document.getElementById("itemBox");
const noOrdersMessage = document.getElementById("noOrdersMessage");
const acceptBtn = document.getElementById("acceptBtn");
const rejectBtn = document.getElementById("rejectBtn");

function checkOrders() {
  const boxes = document.querySelectorAll(".box");
  if (boxes.length === 0) {
    noOrdersMessage.style.display = "block"; // Show "No orders" message
  } else {
    noOrdersMessage.style.display = "none"; // Hide "No orders" message
  }
}

acceptBtn.addEventListener("click", () => {
  itemBox.remove(); // Remove the item box
  showToast("Item accepted successfully!");
  checkOrders(); // Check if there are any orders left
});

rejectBtn.addEventListener("click", () => {
  itemBox.remove(); // Remove the item box
  showToast("Item rejected successfully!", true);
  checkOrders(); // Check if there are any orders left
});

// Initial check for orders
checkOrders();
