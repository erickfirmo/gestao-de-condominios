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
                    <h2 class="page--title h5">Moradores</h2>
                    <!-- Page Title End -->

                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('moradores.index') }}">Moradores</a></li>
                        <li class="breadcrumb-item active"><span>Novo Cadastro</span></li>
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
                        <h3 class="panel-title">Novo Morador</h3>
                    </div>

                    <div class="panel-content">
                        <div class="lds-ring"><div></div><div></div><div></div><div></div></div>

                    
                        <form action="{{ route('moradores.store') }}" method="POST" class="show-onload d-none">
                            @csrf

                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-12 col-form-label text-md-left">Nome</span>
                                <div class="col-md-12">
                                    <span class="form-text text-error"></span>
                                    <input type="text" name="nome" class="form-control" id="nome" maxlenght="80" value="{{ old('nome') }}">
                                </div>
                            </div>
                            <!-- Form Group End -->

                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-12 col-form-label text-md-left">Gênero</span>
                                <div class="col-md-12">
                                    <span class="form-text text-error"></span>
                                    <select name="genero" class="form-control" id="genero">
                                        <option></option>
                                        <option value="masc" {{ old('genero') == 'masc' ? 'selected' : null }}>Masculino</option>
                                        <option value="fem" {{ old('genero') == 'fem' ? 'selected' : null }}>Feminino</option>
                                        <option value="nd" {{ old('genero') == 'nd' ? 'selected' : null }}>Não Definido</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Form Group End -->              
                            
                            <!-- Form Group Start -->
                            <div class="form-group pt-1 pb-1 row">
                                <span class="label-text col-md-12 col-form-label text-md-left">Proprietário do Imóvel</span>
                                <label class="col-md-12">
                                    <input type="radio" name="proprietario" value="1" class="form-radio-input">
                                    <span class="form-radio-label">Sim</span>
                                    <input type="radio" name="proprietario" value="0" class="form-radio-input">
                                    <span class="form-radio-label">Não</span>
                                </label>
                            </div>
                            <!-- Form Group End -->

                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-12 col-form-label text-md-left">Imóvel</span>
                                <div class="col-md-12">
                                    <span class="form-text text-error"></span>
                                    <input type="time" name="saida" class="form-control" id="saida" maxlenght="30" value="{{ old('saida') }}">
                                </div>
                            </div>
                            <!-- Form Group End -->

                            <!-- Form Group Start -->
                            <div class="form-group row">
                            <span class="label-text col-md-12 col-form-label text-md-left">Imóvel</span>

                                <div class="col-md-12">
                                    <span class="form-text text-error"></span>
                                    <select name="imovel_id" class="form-control" id="imovel_id">
                                        <option></option>
                                        @foreach($imoveis as $imovel)
                                            <option value="{{ $imovel->id }}" {{ $morador->imovel->id == $imovel->id ? 'selected' : null }}>
                                                {{ 'Nº $imovel->numero.' - Bloco '.$imovel->bloco }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- Form Group End -->

                            <!-- Form Group Start -->
                            <div class="form-group row">
                            <span class="label-text col-md-12 col-form-label text-md-left">Observações</span>

                                <div class="col-md-12">
                                    <span class="form-text text-error"></span>
                                    <select name="observacoes" class="form-control" id="observacoes">
                                        <option></option>
                                        @foreach
                                            <option value="{{  }}" {{ $funcionario->genero == 'masc' ? 'selected' : null }}>Masculino</option>
                                        @endforeach
                                    </select>

    
                                </div>
                            </div>
                            <!-- Form Group End -->

                            <div class="row">
                                <div class="col-lg-10 offset-lg-2">
                                    <input type="submit" value="Salvar" class="btn btn-sm btn-rounded btn-success">
                                    <a href="{{ route('moradores.index') }}"><button type="button" class="btn btn-sm btn-rounded btn-outline-secondary">Cancelar</button></a>
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

