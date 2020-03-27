/*Swal.fire({
    title: 'Are you sure?',
    text: 'You will not be able to recover this imaginary file!',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Yes, delete it!',
    cancelButtonText: 'No, keep it'
  }).then((result) => {



    if (result.value) {
      Swal.fire(
        'Deleted!',
        'Your imaginary file has been deleted.',
        'success'
      )

    } else if (result.dismiss === Swal.DismissReason.cancel) {



      Swal.fire(
        'Cancelled',
        'Your imaginary file is safe :)',
        'error'
      )
    }
});


$('.remove-form').on('submit', function() {
    $.post($(this).data('token'),
    {
        name: "Donald Duck",
        city: "Duckburg"
    },
    function(data, status){
        alert("Data: " + data + "\nStatus: " + status);
    });
});*/