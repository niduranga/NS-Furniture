function renderCart() {
  const cartItems = JSON.parse(localStorage.getItem("cart")) || []; // Retrieve cart data from localStorage
  const cartContainer = document.getElementById("cart-items");
  const totalPriceElement = document.getElementById("total-price");
  const emptyCartMessage = document.getElementById("empty-cart-message");

  cartContainer.innerHTML = ""; // Clear previous cart items
  let totalPrice = 0;

  if (cartItems.length === 0) {
    emptyCartMessage.style.display = "flex"; // Display message if cart is empty
    document.getElementById("cart-total").style.display = "none";
  } else {
    emptyCartMessage.style.display = "none"; // Hide empty cart message
    document.getElementById("cart-total").style.display = "block";

    cartItems.forEach((item, index) => {
      const itemElement = document.createElement("div");
      itemElement.classList.add("cart-item");
      itemElement.innerHTML = `
                <div class="cart-item-img">
                    <img src="${item.image}" alt="${item.name}">
                </div>
                <div class="cart-item-details">
                    <h5>${item.name}</h5>
                    <p>Price: $${item.price}</p>
                </div>
                <button class="remove-btn" onclick="removeItem(${index})"><i class="fas fa-trash-alt"></i> Remove</button>
            `;
      cartContainer.appendChild(itemElement);
      totalPrice += parseFloat(item.price);
    });
    totalPriceElement.textContent = totalPrice.toFixed(2); // Display total price
  }
}

// Remove an item from the cart (for example when clicking remove button)
function removeItem(index) {
  let cartItems = JSON.parse(localStorage.getItem("cart")) || []; // Get cart items
  cartItems.splice(index, 1); // Remove the selected item
  localStorage.setItem("cart", JSON.stringify(cartItems)); // Update cart in localStorage
  renderCart(); // Re-render the cart to reflect the change
}

document.getElementById("checkout-btn").addEventListener("click", function () {
  const cartItems = JSON.parse(localStorage.getItem("cart")) || [];
  sessionStorage.setItem("cart", JSON.stringify(cartItems));
  window.location.href = "../index.php?page=cashout";
});

renderCart();
