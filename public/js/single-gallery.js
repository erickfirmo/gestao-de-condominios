
var images_to_send = [];
//select parent image
$(".add-parent-image").on('click', function() {
    let image_id = $(this).attr('id');
    image_id = image_id.replace('gallery_image_', '');
    if(!images_to_send.includes(image_id) && !$(this).hasClass('selected'))
        images_to_send.push(image_id);

    $(this).toggleClass('selected');
   
});


//clear images_to_send on close modal (clear array)
// removeClass selected

var parent_class = 'Imovel';
var parent_id = $("#parent_id").val();

$('#saveParentImages').on('click', function() {

    let new_parent_images = '';
    images_to_send = JSON.stringify(images_to_send);
    new_parent_images = '{ '+images_to_send+' }';
    let _token = $('input[name="_token"]').val();


    $.ajax({
        url: location.origin+'/imagens-das-entidades/store',
        type: "POST",
        data: { parent_id:parent_id, parent_class:parent_class, new_parent_images:new_parent_images, _token:_token },
        success: function(response) {
            Swal.fire(
                'Sucesso!',
                response.success,
                'success'
            );
        }
    });

    // update parent images grid
    images_to_send = [];
    $('.add-parent-image').removeClass('selected');
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