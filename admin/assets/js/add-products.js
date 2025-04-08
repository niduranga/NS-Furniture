const imageUploadContainer = document.getElementById("imageUploadContainer");
const imagePreviewContainer = document.getElementById("imagePreviewContainer");
const productImageInput = document.getElementById("productImage");
const imageError = document.getElementById("imageError");
const toastContainer = document.getElementById("toastContainer");

// Drag and Drop Functionality
imageUploadContainer.addEventListener("dragover", (e) => {
  e.preventDefault();
  imageUploadContainer.classList.add("dragover");
});

imageUploadContainer.addEventListener("dragleave", () => {
  imageUploadContainer.classList.remove("dragover");
});

imageUploadContainer.addEventListener("drop", (e) => {
  e.preventDefault();
  imageUploadContainer.classList.remove("dragover");
  const files = e.dataTransfer.files;
  handleFiles(files);
});

// Click to Upload
productImageInput.addEventListener("change", (e) => {
  const files = e.target.files;
  handleFiles(files);
});

// Handle Uploaded Files
function handleFiles(files) {
  imageError.textContent = ""; // Clear previous error messages

  for (const file of files) {
    // Validate file type
    if (!file.type.startsWith("image/")) {
      showToast("Only image files are allowed (JPEG, PNG, GIF).", "error");
      continue;
    }

    // Validate file size (5MB limit)
    if (file.size > 5 * 1024 * 1024) {
      showToast("File size must be less than 5MB.", "error");
      continue;
    }

    // Create a preview for the image
    const reader = new FileReader();
    reader.onload = (e) => {
      const imagePreviewWrapper = document.createElement("div");
      imagePreviewWrapper.className = "image-preview-wrapper";

      const imagePreview = document.createElement("img");
      imagePreview.src = e.target.result;
      imagePreview.className = "image-preview";

      const removeButton = document.createElement("button");
      removeButton.className = "remove-image";
      removeButton.innerHTML = "&times;";
      removeButton.addEventListener("click", () => {
        imagePreviewWrapper.remove();
      });

      imagePreviewWrapper.appendChild(imagePreview);
      imagePreviewWrapper.appendChild(removeButton);
      imagePreviewContainer.appendChild(imagePreviewWrapper);
    };
    reader.readAsDataURL(file);
  }
}

// Form Submission Handling
document
  .getElementById("addProductForm")
  .addEventListener("submit", function (event) {
    event.preventDefault();

    // Gather form data
    const productName = document.getElementById("productName").value;
    const productDescription =
      document.getElementById("productDescription").value;
    const productPrice = document.getElementById("productPrice").value;
    const productCategory = document.getElementById("productCategory").value;
    const productImages = document.getElementById("productImage").files;

    // Validate form data
    if (
      !productName ||
      !productDescription ||
      !productPrice ||
      !productCategory ||
      productImages.length === 0
    ) {
      showToast(
        "Please fill out all fields and upload at least one image.",
        "error"
      );
      return;
    }

    // Simulate form submission (replace with actual API call)
    const formData = new FormData();
    formData.append("name", productName);
    formData.append("description", productDescription);
    formData.append("price", productPrice);
    formData.append("category", productCategory);
    for (const file of productImages) {
      formData.append("images", file);
    }

    console.log("Form Data:", {
      name: productName,
      description: productDescription,
      price: productPrice,
      category: productCategory,
      images: productImages,
    });

    showToast("Product added successfully!", "success");
    document.getElementById("addProductForm").reset();
    imagePreviewContainer.innerHTML = ""; // Clear image previews
  });

// Toast Notification Function
function showToast(message, type = "success") {
  const toast = document.createElement("div");
  toast.className = `toast ${type === "error" ? "error" : ""}`;
  toast.textContent = message;
  toastContainer.appendChild(toast);

  // Show toast
  setTimeout(() => toast.classList.add("show"), 100);

  // Hide toast after 3 seconds
  setTimeout(() => {
    toast.classList.remove("show");
    setTimeout(() => toast.remove(), 500); // Remove after fade-out
  }, 3000);
}
