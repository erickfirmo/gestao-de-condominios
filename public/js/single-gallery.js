
$(".image-thumbnail").on('click', function() {
    // get input images
    $(this).toggleClass('selected');
    let image_id = $(this).attr('id');
    image_id = image_id.replace('');

});

$("#addNewImage").on('click', function(e) {
    e.preventDefault();
    // get input images
    $('#vCenteredModal').modal('hide');
});

$("#addParentImage").on('click', function() {
    $('#vCenteredModal').modal('show');
});

$('.delete-image').on('click', function() {
    let _token = $('input[name="_token"]').val();

    Swal.fire({
        title: 'Tem certeza?',
        text: 'Você não poderá recuperar essas informaçoes!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Sim, deletar!',
        cancelButtonText: 'Cancelar',
        confirmButtonColor: '#ff4040'

        }).then((result) => {

        if (result.value) {
            let image_id = $(this).attr('id');
            image_id = image_id.replace('remove_parent_image_', '');
            
            $.ajax({
                url: location.origin+'/imagens-das-entidades/destroy',
                type: "POST",
                data: { _token:_token, image_id:image_id },
                
                success: function(response) {
                    Swal.fire(
                        'Sucesso!',
                        response.success,
                        'success'
                    );
                    $('#parent_image_'+image_id).removeClass('d-inline');
                    $('#parent_image_'+image_id).addClass('d-none');
                }
            });
            
        } else if (result.dismiss === Swal.DismissReason.cancel) {

            Swal.fire(
            'Cancelado',
            'Nada foi alterado!',
            'error'
            )
        }
    });
});