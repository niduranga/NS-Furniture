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
