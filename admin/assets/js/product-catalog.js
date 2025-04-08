// JavaScript for filtering products by category
document
  .getElementById("categoryFilter")
  .addEventListener("change", function () {
    const selectedCategory = this.value; // Get the selected category
    const productCards = document.querySelectorAll(".product-card"); // Get all product cards

    productCards.forEach((card) => {
      const category = card.getAttribute("data-category"); // Get the category of the product card
      if (selectedCategory === "all" || category === selectedCategory) {
        card.style.display = "block"; // Show the card if it matches the selected category
      } else {
        card.style.display = "none"; // Hide the card if it doesn't match
      }
    });
  });
