    // JavaScript for filtering packages based on the selected vehicle type
    document.getElementById('vehicle-type').addEventListener('change', function () {
      const selectedType = this.value;  // Get the selected value from the dropdown
      const packages = document.querySelectorAll('.package');

      // Loop through each package and filter based on the selected type
      packages.forEach(pkg => {
        const vehicleTypeText = pkg.querySelector('.type').textContent; // Get the vehicle type from the package

        // Show all packages if 'All' is selected
        if (selectedType === 'All') {
          pkg.style.display = 'flex';
        } 
        // Show only packages that match the selected vehicle type
        else if (vehicleTypeText.includes(selectedType)) {
          pkg.style.display = 'flex';
        } 
        // Hide packages that do not match the selected type
        else {
          pkg.style.display = 'none';
        }
      });
    });