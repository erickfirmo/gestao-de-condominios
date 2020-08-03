var parent_images = [];
var parent_id = $("#parent_id").val();
var parent_class = $("#parent_id").data('parent');

$(".add-parent-image").on('click', function() {
    let image_id = $(this).attr('id');
    image_id = image_id.replace('gallery_image_', '');
    if(!parent_images.includes(image_id) && !$(this).hasClass('selected'))
        parent_images.push(image_id);

    $(this).toggleClass('selected');
});

$('#saveParentImages').on('click', function() {
    let _token = $('input[name="_token"]').val();
    let new_parent_images = JSON.stringify(parent_images);

    $.ajax({
        url: location.origin+'/imagens-das-entidades/upload',
        type: "POST",
        data: {
            _token:_token,
            parent_id:parent_id,
            parent_class:parent_class,
            new_parent_images:new_parent_images
        },
        success: function(response) {

            let old_images = $('.single-gallery').html();
            let new_images = '';
            for(let i = 0; i < response.uploaded_images.length; i++) {
                new_images = new_images + '<div id="parent_image_'+response.uploaded_images[i].id+'" title="'+$('#gallery_image_'+parent_images[i]).attr('title')+'" style="background-image: url('+"'/upload/images/"+$('#gallery_image_'+parent_images[i]).data('image')+"'"+')" class="image-thumbnail" data-image="'+$('#gallery_image_'+parent_images[i]).data('image')+'"><div class="image-actions"><span id="delete_image_'+response.uploaded_images[i].id+'" class="delete-image" title="Remover Imagem"><i class="fa fa-times"></i></span></div></div>';
            }
            parent_images = [];
            // change modal id
            $('#vCenteredModal').modal('hide');
            $('.single-gallery').html(new_images + old_images);
            Swal.fire(
                'Sucesso!',
                response.success,
                'success'
            );
        }
    });
    // remove selected class (not working)
    return false;
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