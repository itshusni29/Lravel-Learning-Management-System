// sweet-alert.js

// Ensure that jQuery is loaded before this script
$(function() {
  // Define the showSwal function
  function showSwal(type, userId) {
    'use strict';
    
    const form = document.getElementById('form-' + userId);

    if (type === 'delete_users' && form) {
      const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
          confirmButton: 'btn btn-success',
          cancelButton: 'btn btn-danger me-2'
        },
        buttonsStyling: false,
      });

      swalWithBootstrapButtons.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this action!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel!',
        reverseButtons: true
      }).then((result) => {
        if (result.isConfirmed) {
          form.submit(); // Submit the form if confirmed
        } else if (result.dismiss === Swal.DismissReason.cancel) {
          swalWithBootstrapButtons.fire(
            'Cancelled',
            'The user is safe :)',
            'error'
          );
        }
      });
    } else {
      console.error('Form not found or invalid type');
    }
  }

  // Expose showSwal function to global scope if needed
  window.showSwal = showSwal;
});
