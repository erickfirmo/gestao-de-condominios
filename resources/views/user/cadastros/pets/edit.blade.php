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
                            {{method_field('DELETE')}}
                            <a href="#"><button class="btn btn-rounded btn-danger">Deletar Pet</button></a>
                        </form>
                        <form action="#" method="GET" class="notification-form mr-2" style="float:right">
                            <a href="#"><button class="btn btn-rounded btn-warning"><span class="mr-2"><i class="fas fa-bell"></i></span>Enviar Notificação</button></a>
                        </form>
                    </div>

                    <div class="panel-content">
                        <div class="lds-ring"><div></div><div></div><div></div><div></div></div>

                        <form action="{{ route('pets.update', $pet->id) }}" method="POST" class="show-onload d-none">
                            @csrf
                            {{ method_field('PUT') }}


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
                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Gênero</span>
                                <div class="col-md-10">
                                    <span id="genero-text-error" class="form-text text-error"></span>
                                    <select name="genero" id="genero" class="form-control">
                                        <option></option>
                                        <option value="Masculino" {{ selectOption('Masculino', $pet->genero) }}>Masculino</option>
                                        <option value="Feminino" {{ selectOption('Feminino', $pet->genero) }}>Feminino</option>
                                        <option value="Não Definido" {{ selectOption('Não Definido', $pet->genero) }}>Não Definido</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Form Group End -->       

                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Imóvel</span>

                                <div class="col-md-10">
                                    <span id="imovel_id-text-error" class="form-text text-error"></span>
                                    <select name="imovel_id" class="form-control" id="imovel_id">
                                        <option></option>
                                        @foreach($imoveis as $imovel)
                                            <option value="{{ $imovel->id }}" {{ $imovel->id == $pet->imovel->id ? ' selected' : null}}>
                                                {{ 'Nº '.$imovel->numero.' - Bloco '.$imovel->bloco }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- Form Group End -->

                             <!-- Form Group Start -->
                             <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right py-0">Proprietário do Imóvel</span> 
                                <div class="col-md-10 form-inline">
                                    <span id="proprietario-text-error" class="form-text text-error"></span>
                                    <label class="form-radio mr-3">
                                    <input type="radio" name="proprietario" value="1" class="form-radio-input" {{ $pet->proprietario ? 'checked' : null }}>
                                    <span class="form-radio-label">Sim</span></label>
                                    <label class="form-radio">
                                    <input type="radio" name="proprietario" value="0" class="form-radio-input" {{ !$pet->proprietario ? 'checked' : null }}>
                                    <span class="form-radio-label">Não</span>
                                </label>
                                </div>
                            </div>
                            <!-- Form Group End -->

                            <!-- Form Group Start -->
                            <div class="form-group row">
                            <span class="label-text col-md-2 col-form-label text-md-right">Observações</span>

                                <div class="col-md-10">
                                    <span id="observacoes-text-error" class="form-text text-error"></span>
                                    <textarea name="observacoes" class="form-control" maxlengh="400">{{ $pet->observacoes }}</textarea>
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
@endsection

