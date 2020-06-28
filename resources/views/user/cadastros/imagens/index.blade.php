@extends('layouts.dadmin')

@section('content')

@include('user.partials._navbar')
@include('user.partials._sidebar')
<!-- Main Container Start -->
<main class="main--container">
            <!-- Page Header Start -->
            <section class="page--header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Page Title Start -->
                            <h2 class="page--title h5">Galeria de Imagens</h2>
                            <!-- Page Title End -->

                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('imagens.index') }}">Imagens</a></li>
                                <li class="breadcrumb-item active"><span>Todas</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Page Header End -->

            <!-- Main Content Start -->
            <section class="main--content">
                <div class="panel">
                    <!-- Records Header Start -->
                    <div class="records--header">

                        <div class="title fa-image">
                            <h3 class="h3">Galeria de Imagens
                                <button id="addImage" class="btn btn-sm btn-outline-info">Adicionar Imagens</button>
                            </h3>
                        </div>


                        <div class="actions row">
                            <form class="search">
                                <input type="text" class="form-control d-inline" placeholder="Buscar por nome..." onkeyup="tableFilter('imagens-table', this)">
                                <button type="submit" class="btn btn-rounded"><i class="fa fa-search"></i></button>
                            </form>
                        </div>


                        <div class="row">
                            <form action="{{ route('imagens.upload') }}" method="POST" id="uploadImagesForm" style="display:none;" enctype="multipart/form-data">
                                @csrf
                                <div class="fallback">
                                    <input type="file" name="images[]" id="imagesInput" multiple>
                                </div>
                            </form>
                        </div>




                    </div>
                    <!-- Records Header End -->
                </div>

                

                <div class="panel">
                    <div class="galeria-de-imagens" data-title="Galeria de Imagens">
                        <div class="row" id="boxGallery">
                        @foreach($images as $image)
                            <div title="{{ $image->original_name }}" style="background-image: url('upload/images/{{ $image->original_name }}')" class="imagem col-sm-6 col-md-3 d-inline">
                                <div class="image-actions">
                                    <!-- span class="mr-2"><i title="Editar" class="fa fa-pencil-alt"></i></span-->
                                    <span><i title="Deletar" class="fa fa-trash"></i></span></div>
                            </div>
                        @endforeach
                        </div>
                    </div>
                </div>
            </section>
            <!-- Main Content End -->

    @include('user.partials._footer')
</main>
<!-- Main Container End -->



<!-- Large Modal Start -->
<div id="uploadImageModal" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Upload de Imagem</h5> 
                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row" id="previewBox">
                            
                    </div>
                </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-success" id="uploadButton">Salvar</button>
            </div>
        </div>
    </div>
</div>
<!-- Large Modal End -->

@push('js')
    <script src="{{ asset('js/table-filter.js') }}"></script>
    <script>
        function readURL(input) {
            // showing image files
            if (input.files) {
                for (let i = 0; i < input.files.length; i++) {
                    let reader = new FileReader();
                    reader.onload = function(e) {
                        let img_element = '<div class="col-md-3"><img src="'+e.target.result+'"></div>'
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
                        new_images = new_images + '<div style="background-image: url('+"'" + response.uploaded_images[i].url +"'"+')"class="imagem col-sm-6 col-md-3"><span></span></div>';
                    }
                    let old_images = $('#boxGallery').html();
                    $('#boxGallery').html(new_images + old_images);
                    $('#uploadImageModal').modal('hide');
                    $('#previewBox').html('');

                    Swal.fire(
                        'Sucesso!',
                        response.success,
                        'success'
                    );
                }
            })

            return false;
        });




        /* show images with light box */
        $('.imagem').hover(function(){
            $(this).find('div').css('display', 'block');
        }, function(){
            $(this).find('div').css('display', 'none');
        });

    </script>

@endpush
@endsection
