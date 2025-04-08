// Toggle Sidebar Visibility
document.getElementById("toggleSidebar").addEventListener("click", function () {
  const sidebar = document.getElementById("categorySidebar");
  sidebar.classList.toggle("show");
});

// Category Filtering
document.querySelectorAll(".category-item").forEach((category) => {
  category.addEventListener("click", function () {
    document
      .querySelectorAll(".category-item")
      .forEach((item) => item.classList.remove("active"));
    this.classList.add("active");

    let selectedCategory = this.getAttribute("data-category");
    document.querySelectorAll(".product-card").forEach((card) => {
      if (
        selectedCategory === "all" ||
        card.getAttribute("data-category") === selectedCategory
      ) {
        card.style.display = "block";
      } else {
        card.style.display = "none";
      }
    });
  });
});

// Function to update the cart count from localStorage
function updateCartCount() {
  const cartItems = JSON.parse(localStorage.getItem("cart")) || [];
  const cartCount = cartItems.length;
  document.getElementById("cart-count").textContent = cartCount;
}

// Add to cart functionality (without redirecting)
document.querySelectorAll(".add-to-cart").forEach((button) => {
  button.addEventListener("click", function () {
    const product = {
      name: this.getAttribute("data-name"),
      price: this.getAttribute("data-price"),
      image: this.getAttribute("data-image"),
    };

    // Retrieve the current cart from localStorage, or an empty array if not set
    const cart = JSON.parse(localStorage.getItem("cart")) || [];

    // Add the new product to the cart
    cart.push(product);

    // Store the updated cart back to localStorage
    localStorage.setItem("cart", JSON.stringify(cart));

    // Update the cart count on the page
    updateCartCount();
  });
});

// Update cart count when the page loads
updateCartCount();
