// STORE IMAGES

        // image preview
        function readURL(input) {
            // showing image files
            $('#previewBox').html('');
            if (input.files) {
                for (let i = 0; i < input.files.length; i++) {
                    let reader = new FileReader();
                    reader.onload = function(e) {
                        let img_element = '<div class="col-md-4 mb-5"><img src="'+e.target.result+'"></div>'
                        $('#previewBox').html($('#previewBox').html()+img_element);
                    }
                    reader.readAsDataURL(input.files[i]);
                }
            }
            $('#uploadImageModal').modal('show'); 
        }
        
        $("#imagesInput").change(function() {
            readURL(this);
        });

        $('#addImage').on('click', function() {
            $('#imagesInput').val('');
            $('#imagesInput').click();
        });

        $('#uploadButton').on('click', function(e) {
            e.preventDefault();

            //$('#uploadImagesForm').submit();
            $.ajax({
                url: "{{ route('imagens.upload') }}",
                type: "POST",
                data: new FormData(document.getElementById('uploadImagesForm')),
                contentType: false,
                cache: false,
                processData: false,
                success: function(response) {
                    let new_images = '';
                    for (let i = 0; i < response.uploaded_images.length; i++) {
                        new_images = new_images + '<div id="image_'+response.uploaded_images[i].id+'" title="'+response.uploaded_images[i].file_name+'" style="background-image: url('+"'"+response.uploaded_images[i].url+"'"+')" class="imagem col-sm-6 col-md-3 d-inline"><div class="image-actions"><span id="delete_image_'+response.uploaded_images[i].id+'" class="delete-image"><i class="fa fa-trash"></i></span></div></div>';
                    }
                    
                    let old_images = $('#boxGallery').html();
                    old_images = old_images == '<div class="col-sm-12 col-md-12 d-inline"><p>Nenhuma imagem encontrada</p></div>' ? old_images : '';

                    $('#boxGallery').html(new_images + old_images);
                    $('#uploadImageModal').modal('hide');
                    $('#previewBox').html('');
                    Swal.fire(
                        'Sucesso!',
                        response.success,
                        'success'
                    );

                    $('.delete-image').on('click', function() {

                    let image_id = $(this).attr('id');
                    image_id = image_id.replace('delete_image_', '');
                    $.ajax({
                        url: location.origin+'/imagens/'+image_id,
                        type: "POST",
                        data: new FormData(document.getElementById('deleteImagesForm')),
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function(response) {
                            Swal.fire(
                                'Sucesso!',
                                response.success,
                                'success'
                            );
                            $('#image_'+image_id).removeClass('d-inline');
                            $('#image_'+image_id).addClass('d-none');
                        }
                    });
                    });
                    $('#previewBox').html('');

                }
            })
            return false;
        });
        // END STORE IMAGES

        // DELETE IMAGES
        $('.delete-image').on('click', function() {
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
                    image_id = image_id.replace('delete_image_', '');
                    $.ajax({
                        url: location.origin+'/imagens/'+image_id,
                        type: "POST",
                        data: new FormData(document.getElementById('deleteImagesForm')),
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function(response) {
                            Swal.fire(
                                'Sucesso!',
                                response.success,
                                'success'
                            );
                            $('#image_'+image_id).removeClass('d-inline');
                            $('#image_'+image_id).addClass('d-none');
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


        $('.imagem').on('click', function() {
            let src = $(this).data('src');
            $('.lightbox').css('display', 'block');
        });