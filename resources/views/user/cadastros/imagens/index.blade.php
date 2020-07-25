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
                            <form action="#" method="POST" id="deleteImagesForm" style="display:none;">
                                @csrf
                                {{ method_field('DELETE') }}
                            </form>
                        </div>
                    </div>
                    <!-- Records Header End -->
                </div>

                <div class="panel">
                    <div id="boxGallery" class="flex-container full-gallery" data-title="Galeria de Imagens">
                        @if(count($images))
                            @foreach($images as $key => $image)
                                <div id="image_{{ $image->id }}" title="{{ $image->original_name }}" style="background-image: url('/upload/images/{{ $image->original_name }}')" class="image-thumbnail" data-image="/upload/images/{{ $image->original_name }}">
                                    <div class="image-actions">
                                        <span id="delete_image_{{ $image->id }}" class="delete-image" title="Deletar">
                                            <i class="fa fa-times"></i>
                                        </span>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="col-sm-12 col-md-12 d-inline">
                                <p>Nenhuma imagem encontrada</p>
                            </div>
                        @endif
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


<!-- Large Modal Start -->
<div id="galleryModal" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div id="innerModal" class="modal-content">
            <img id="imageModal" src="#" alt="Teste">
        </div>
    </div>
</div>
<!-- Large Modal End -->

@push('js')
    <script src="{{ asset('js/table-filter.js') }}"></script>
    <script src="{{ asset('js/full-gallery.js') }}"></script>
@endpush
@endsection
