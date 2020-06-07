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
                            <!--<a href="{ route('imagens.create') }" class="btn btn-sm btn-outline-info">Adicionar Imagem</a>-->

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


                    
                    <!-- modal -->
                    <!-- Dropzone Start -->
                    <form action="#" id="dropzone01" class="dropzone custom-dropzone" method="post" enctype="multipart/form-data">
                        <div class="dz-message" data-dz-message>Drop files here to upload</div>
                    </form>
                    <!-- Dropzone End -->

                    

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

@push('js')
    <script src="{{ asset('js/table-filter.js') }}"></script>
@endpush

@endsection

