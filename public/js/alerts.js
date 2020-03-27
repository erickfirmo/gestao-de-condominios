/*
*/

if(success_response) {
    Swal.fire(
        'Sucesso!',
        success_response,
        'success'
    );
}

$('.remove-form').on('submit', function(event) {
    event.preventDefault();

    Swal.fire({
      title: 'Tem certeza?',
      text: 'Você não poderá recuperar essas informaçoes!',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Sim, deletar!',
      cancelButtonText: 'Cancelar',
      confirmButtonColor: 'red'

    }).then((result) => {

      if (result.value) {
        $(this).submit();
      } else if (result.dismiss === Swal.DismissReason.cancel) {

        Swal.fire(
          'Cancelled',
          'Your imaginary file is safe :)',
          'error'
        )
      }
    });
});

