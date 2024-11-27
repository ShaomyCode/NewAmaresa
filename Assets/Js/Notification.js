
document.querySelectorAll('.delete-purchase').forEach(link => {
  link.addEventListener('click', function(event) {

    event.preventDefault(); // Prevent default navigation

    Swal.fire({
      title: "Are you sure you want to Archive this Data?",
      text: "This Data will go to archive table",
      icon: "warning",
      showCancelButton: true,
      confirmButtonText: "Yes, Archive it!",
      cancelButtonText: "No, keep it"
    }).then((result) => {
      if (result.isConfirmed) {
        // If confirmed, redirect to the deletion URL
        window.location.href = this.href;
        // Optional SweetAlert2 success notification after navigation
        Swal.fire({
          position: "center",
          icon: "success",
          title: "Deleted successfully!",
          showConfirmButton: false,
          timer: 1500
        });
      }
    });
  });
});

document.querySelectorAll('.restore').forEach(link => {
  link.addEventListener('click', function(event) {

    event.preventDefault(); // Prevent default navigation

    Swal.fire({
      title: "Are you sure you want to restore this Data?",
      icon: "question",
      showCancelButton: true,
      confirmButtonText: "Yes, Restore it!",
      cancelButtonText: "No, keep it"
    }).then((result) => {
      if (result.isConfirmed) {
        // If confirmed, redirect to the deletion URL
        window.location.href = this.href;
        // Optional SweetAlert2 success notification after navigation
        Swal.fire({
          position: "center",
          icon: "success",
          title: "Restored successfully!",
          showConfirmButton: false,
          timer: 1500
        });
      }
    });
  });
});


// DELETE TABLE
document.querySelectorAll('.delete-message').forEach(link => {
  link.addEventListener('click', function(event) {

    event.preventDefault(); // Prevent default navigation

    Swal.fire({
      title: "Are you sure you want to Delete this Data?",
      text: "This Data will be deleted",
      icon: "warning",
      showCancelButton: true,
      confirmButtonText: "Yes",
      cancelButtonText: "No"
    }).then((result) => {
      if (result.isConfirmed) {
        // If confirmed, redirect to the deletion URL
        window.location.href = this.href;
        // Optional SweetAlert2 success notification after navigation
        Swal.fire({
          position: "center",
          icon: "success",
          title: "Deleted successfully!",
          showConfirmButton: false,
          timer: 1500
        });
      }
    });
  });
});


  document.querySelectorAll('.confirm-pending').forEach(link => {
    link.addEventListener('click', function(event) {

      event.preventDefault(); // Prevent default navigation

      Swal.fire({
        title: "Are you sure you want to Accept this Inquiry?",
        text: "This person will go to Sales Log.",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Yes",
        cancelButtonText: "No"
      }).then((result) => {
        if (result.isConfirmed) {
          // If confirmed, redirect to the deletion URL
          window.location.href = this.href;
          // Optional SweetAlert2 success notification after navigation
          Swal.fire({
            position: "center",
            icon: "success",
            title: "Deleted successfully!",
            showConfirmButton: false,
            timer: 1500
          });
        }
      });
    });
  });




