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
                                <a href="#uploadImageModal" data-toggle="modal" class="btn btn-sm btn-outline-info">Adicionar Imagens</a>
                            </h3>
                            <p>
                                {{
                                    countMessage($imagens, [
                                        'zero' => 'Nenhuma imagem encontrada',
                                        'one' => '1 imagem encontrada',
                                        'many' => '[X] imagens encontradas'
                                    ])
                                }}
                            </p>
                        </div>

                        <div class="actions row">
                            <form class="search">
                                <input type="text" class="form-control d-inline" placeholder="Buscar por nome..." onkeyup="tableFilter('imagens-table', this)">
                                <button type="submit" class="btn btn-rounded"><i class="fa fa-search"></i></button>
                            </form>
                        </div>


                    

                    </div>
                    <!-- Records Header End -->
                </div>

                

                <div class="panel">
                    <div class="galeria-de-imagens" data-title="Galeria de Imagens">
                            <div class="row">
                            <div class="imagem imagem-1 col-sm-6 col-md-3"><span></span></div>
                            <div class="imagem imagem-5 col-sm-6 col-md-3"><span></span></div>
                            <div class="imagem imagem-3 col-sm-6 col-md-3"><span></span></div>
                            <div class="imagem imagem-4 col-sm-6 col-md-3"><span></span></div>
                            <div class="imagem imagem-3 col-sm-6 col-md-3"><span></span></div>
                            <div class="imagem imagem-1 col-sm-6 col-md-3"><span></span></div>
                            <div class="imagem imagem-5 col-sm-6 col-md-3"><span></span></div>
                            <div class="imagem imagem-2 col-sm-6 col-md-3"><span></span></div>
                            <div class="imagem imagem-2 col-sm-6 col-md-3"><span></span></div>
                            <div class="imagem imagem-4 col-sm-6 col-md-3"><span></span></div>
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
            <form action="#" method="POST" class="show-onload d-none" id="uploadImageForm">

                <div class="modal-body">
                    @csrf

                    <!-- Form Group Start -->
                    <div class="form-group row">
                        <span class="label-text col-md-2 col-form-label text-md-right">Nome</span>
                        <div class="col-md-10">
                            <span class="form-text text-error"></span>
                            <input type="text" name="nome" class="form-control" id="nome" maxlenght="80" value="{{ old('nome') }}">
                        </div>
                    </div>
                    <!-- Form Group End -->
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-success">Salvar</button>
                </div>

            </form>
        </div>
    </div>
</div>
<!-- Large Modal End -->

@push('js')
    <script src="{{ asset('js/table-filter.js') }}"></script>
    <script>
        $('#uploadImageForm').on('submit', function(e) {
            e.preventDefault();
            let formData = getFormDataById('uploadImageForm');
            // criar validador
            $.ajax({
                url: 'imagens/store',
                data: formData,
                cache: false,
                contentType: 'multipart/form-data',
                processData: false,
                method: 'POST',
                success: function(data){
                    alert(data);
                }
            });
        });
    </script>
@endpush

@endsection

