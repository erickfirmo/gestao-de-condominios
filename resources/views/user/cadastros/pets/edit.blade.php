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
                    <h2 class="page--title h5">Pets</h2>
                    <!-- Page Title End -->

                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('pets.index') }}">Pets</a></li>
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
                        <h3 class="panel-title">Editar Pet</h3>
                        <form action="{{ route('pets.destroy', $pet->id) }}" method="POST" class="remove-form" style="float:right">
                            @csrf
                            {{method_field('DELETE')}}
                            <a href="#"><button class="btn btn-rounded btn-danger">Deletar Pet</button></a>
                        </form>
                    </div>

                    <div class="panel-content">
                        <div class="lds-ring"><div></div><div></div><div></div><div></div></div>

                        <form action="{{ route('pets.update', $pet->id) }}" method="POST" class="show-onload d-none">
                            @csrf
                            {{ method_field('PUT') }}


                            <!-- Imagens da Entidade Start -->
                            @include('components._single-gallery', [
                                'title' => 'Fotos do Pet',
                                'all_images' => $images,
                                'images' => $pet->imagens()->get(),
                                'parent_id' => $pet->id,
                                'parent_class' => 'Pet',
                            ])
                            <!-- Imagens da Entidade End -->


                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Nome</span>
                                <div class="col-md-10">
                                    <span id="nome-text-error" class="form-text text-error"></span>
                                    <input type="text" name="nome" class="form-control" id="nome" maxlenght="80" value="{{ $pet->nome }}">
                                </div>
                            </div>
                            <!-- Form Group End -->

                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Espécie</span>

                                <div class="col-md-10">
                                    <span id="especie-text-error" class="form-text text-error"></span>
                                    <select name="especie" class="form-control" id="especie">
                                        <option></option>
                                        <option value="Cachorro" {{ $pet->especie == 'Cachorro' ? ' selected' : null}}>
                                            Cachorro/Cadela
                                        </option>
                                        <option value="Cachorro" {{ $pet->especie == 'Gato' ? ' selected' : null}}>
                                            Gato(a)
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <!-- Form Group End -->

                            
                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Raça</span>
                                <div class="col-md-10">
                                    <span id="raca-text-error" class="form-text text-error"></span>
                                    <input type="text" name="raca" class="form-control" id="raca" maxlenght="30" value="{{ $pet->raca }}">
                                </div>
                            </div>
                            <!-- Form Group End -->

                            
                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Cor</span>
                                <div class="col-md-10">
                                    <span id="cor-text-error" class="form-text text-error"></span>
                                    <input type="text" name="cor" class="form-control" id="cor" maxlenght="30" value="{{ $pet->cor }}">
                                </div>
                            </div>
                            <!-- Form Group End -->

                            
                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Descrição</span>
                                <div class="col-md-10">
                                    <span id="descricao-text-error" class="form-text text-error"></span>
                                    <input type="text" name="descricao" class="form-control" id="descricao" maxlenght="200" value="{{ $pet->descricao }}">
                                </div>
                            </div>
                            <!-- Form Group End -->


                            
                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Morador</span>
                                <div class="col-md-10">
                                    <span id="morador_id-text-error" class="form-text text-error"></span>
                                    <input type="text" name="morador" class="form-control autocomplete-morador" id="morador" maxlenght="40" value="{{ $pet->morador()->get()[0]->nome }}">
                                    <input type="text" name="morador_id" class="form-control" id="morador_id" maxlenght="8" value="{{ $pet->morador_id }}">
                                </div>
                            </div>
                            <!-- Form Group End -->

                    
                            <div class="row">
                                <div class="col-lg-10 offset-lg-2">
                                    <input type="submit" value="Salvar" class="btn btn-sm btn-rounded btn-success">
                                    <a href="{{ route('pets.index') }}"><button type="button" class="btn btn-sm btn-rounded btn-outline-secondary">Cancelar</button></a>
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

@push('js')
<script src="{{ asset('js/single-gallery.js') }}"></script>
@endpush

@endsection

