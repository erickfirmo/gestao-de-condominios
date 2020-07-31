var parent_images = [];
var parent_id = $("#parent_id").val();
var parent_class = $("#parent_id").data('parent');

//select parent image
$(".add-parent-image").on('click', function() {
    let image_id = $(this).attr('id');
    image_id = image_id.replace('gallery_image_', '');
    if(!parent_images.includes(image_id) && !$(this).hasClass('selected'))
        parent_images.push(image_id);

    $(this).toggleClass('selected');
});

//clear new_parent_imagess on close modal (clear array)
// removeClass selected


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

            let new_images = '';
            let current_image = '';
            for (let i = 0; i < parent_images; i++) {
                current_image = $('#gallery_image_'+1);
                new_images = new_images + '<div id="image_'+2+'" title="'+current_image.attr('title')+'" style="background-image: url('+"'/upload/images/"+current_image.data('image')+"'"+')" class="image-thumbnail" data-image="'+current_image.data('image')+'"><div class="image-actions"><span id="delete_image_'+2+'" class="delete-image"><i class="fa fa-times"></i></span></div></div>';
            }
            
            let old_images = $('.single-gallery').html();

            $('.single-gallery').html(new_images + old_images);
            
            Swal.fire(
                'Sucesso!',
                response.success,
                'success'
            );
        }
    });

    // update parent images grid

    // remove selected class (not working)
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