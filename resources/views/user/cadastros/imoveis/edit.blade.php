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
                    <h2 class="page--title h5">Imóveis</h2>
                    <!-- Page Title End -->

                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('imoveis.index') }}">Imóveis</a></li>
                        <li class="breadcrumb-item active"><span>Editar</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Header End -->

    <!-- Main Content Start -->
    <section class="main--content">
        <div class="row gutter-20">
            <div class="col-md-12">
                <!-- Panel Start -->
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Editar Imóvel</h3>
                        <form action="{{ route('imoveis.destroy', $imovel->id) }}" method="POST" class="remove-form" style="float:right">
                            {{method_field('DELETE')}}
                            <a href="#"><button class="btn btn-rounded btn-danger">Deletar Imóvel</button></a>
                        </form>
                    </div>

                    <div class="panel-content">
                        <div class="lds-ring"><div></div><div></div><div></div><div></div></div>

                        <form action="{{ route('imoveis.update', $imovel->id) }}" method="POST" class="show-onload d-none">
                            @csrf
                            {{ method_field('PUT') }}

                            <!-- Form Group Start -->
                            <div class="galeria-de-imagens" data-title="Galeria de Imagens">
                                <div class="row" id="boxGallery">
                                @if(count($imovel->imagens()->get()))
                                    @foreach($imovel->imagens()->get() as $imagem)
                                    <div id="image_parent_{{ $imagem->imagem()->get()[0]->id }}" title="{{ $imagem->imagem()->get()[0]->original_name }}" style="background-image: url('/upload/images/{{ $imagem->imagem()->get()[0]->original_name }}')" class="imagem col-sm-3 col-md-3 d-inline">
                                        <div class="image-actions">
                                            <span id="delete_image_parent_{{ $imagem->imagem()->get()[0]->id }}" class="delete-image" title="Deletar">
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
                                    <div class="col-sm-3 col-md-3 d-inline">
                                    +
                                    </div>
                                </div>
                            </div>



                            <!-- Form Group End -->
                            
                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Número</span>
                                <div class="col-md-10">
                                    <span id="numero-text-error" class="form-text text-error"></span>
                                    <input type="text" name="numero" class="form-control mask-numero" id="numero" maxlenght="10" value="{{ $imovel->numero }}">
                                </div>
                            </div>
                            <!-- Form Group End -->

                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Bloco</span>
                                <div class="col-md-10">
                                    <span id="bloco-text-error" class="form-text text-error"></span>
                                    <input type="text" name="bloco" class="form-control" id="bloco" maxlenght="10" value="{{ $imovel->bloco }}">
                                </div>
                            </div>
                            <!-- Form Group End -->

                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Andar</span>
                                <div class="col-md-10">
                                    <span id="andar-text-error" class="form-text text-error"></span>
                                    <input type="text" name="andar" class="form-control" id="andar" maxlenght="3" value="{{ $imovel->andar }}">
                                </div>
                            </div>
                            <!-- Form Group End -->                  
                            
                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Descrição</span>
                                <div class="col-md-10">
                                    <span id="descricao-text-error" class="form-text text-error"></span>
                                    <input type="text" name="descricao" class="form-control" id="descricao" maxlenght="200" value="{{ $imovel->descricao }}">
                                </div>
                            </div>
                            <!-- Form Group End -->

                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Observações</span>
                                <div class="col-md-10">
                                    <span id="observacoes-text-error" class="form-text text-error"></span>
                                    <textarea name="observacoes" class="form-control" maxlengh="200">{{ $imovel->observacoes }}</textarea>
                                </div>
                            </div>
                            <!-- Form Group End -->
                            
                            <div class="row">
                                <div class="col-lg-10 offset-lg-2">
                                    <input type="submit" value="Salvar" class="btn btn-sm btn-rounded btn-success">
                                    <a href="{{ route('imoveis.index') }}"><button type="button" class="btn btn-sm btn-rounded btn-outline-secondary">Cancelar</button></a>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <!-- Panel End -->
            </div>
        </div>
    </section>

    @include('user.partials._footer')
</main>

<!-- Main Container End -->
@endsection

