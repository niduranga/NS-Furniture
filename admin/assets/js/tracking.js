// Load the current step from localStorage (or default to 1)
let currentStep = localStorage.getItem("currentStep") || 1;

// Set the dropdown to the current step
const adminStepSelect = document.getElementById("adminStepSelect");
adminStepSelect.value = currentStep;

// Update the current step when the admin clicks the button
const updateStepButton = document.getElementById("updateStepButton");
updateStepButton.addEventListener("click", () => {
  const newStep = adminStepSelect.value;
  localStorage.setItem("currentStep", newStep); // Save to localStorage
  alert(
    `Step updated to: ${
      adminStepSelect.options[adminStepSelect.selectedIndex].text
    }`
  );
});
