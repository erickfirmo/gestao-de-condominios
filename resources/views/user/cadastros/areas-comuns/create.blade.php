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
                    <h2 class="page--title h5">Áreas Comuns</h2>
                    <!-- Page Title End -->

                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('areas-comuns.index') }}">Áreas Comuns</a></li>
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
                        <h3 class="panel-title">Nova Área Comum</h3>
                    </div>

                    <div class="panel-content">
                        <div class="lds-ring"><div></div><div></div><div></div><div></div></div>

                    
                        <form action="{{ route('areas-comuns.store') }}" method="POST" class="show-onload d-none">
                            @csrf

                            
                             <!-- Form Group Start -->
                             <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Nome</span>
                                <div class="col-md-10">
                                    <span id="nome-text-error" class="form-text text-error"></span>
                                    <input type="text" name="nome" class="form-control" id="nome" maxlenght="40" value="{{ old('nome') }}">
                                </div>
                            </div>
                            <!-- Form Group End -->

                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Abertura</span>
                                <div class="col-md-10">
                                    <span id="abertura-text-error" class="form-text text-error"></span>
                                    <input type="time" name="abertura" class="form-control" id="abertura" maxlenght="20" value="{{ old('abertura') }}">
                                </div>
                            </div>
                            <!-- Form Group End -->

                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Fechamento</span>
                                <div class="col-md-10">
                                    <span id="fechamento-text-error" class="form-text text-error"></span>
                                    <input type="time" name="fechamento" class="form-control" id="fechamento" maxlenght="20" value="{{ old('fechamento') }}">
                                </div>
                            </div>
                            <!-- Form Group End -->

                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right py-0">Status</span>
                                <span id="status-text-error" class="form-text text-error"></span>
                                <div class="col-md-10 form-inline">
                                    <label class="form-radio mr-3">
                                        <input type="radio" name="status" value="Aberto" class="form-radio-input" {{ old('status') == 'Aberto' ? 'checked' : null }}>
                                        <span class="form-radio-label">Aberto</span>
                                    </label>
                                    <label class="form-radio mr-3">
                                        <input type="radio" name="status" value="Fechado" class="form-radio-input" {{ old('status') == 'Fechado' ? 'checked' : null }}>
                                        <span class="form-radio-label">Fechado</span>
                                    </label>
                                    <label class="form-radio">
                                        <input type="radio" name="status" value="Em Manutenção" class="form-radio-input" {{ old('status') == 'Em Manutenção' ? 'checked' : null }}>
                                        <span class="form-radio-label">Em Manutenção</span>
                                    </label>
                                </div>
                            </div>
                            <!-- Form Group End -->

                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Descrição</span>
                                <div class="col-md-10">
                                    <span id="descricao-text-error" class="form-text text-error"></span>
                                    <input type="text" name="descricao" class="form-control" id="descricao" maxlenght="200" value="{{ old('descricao') }}">
                                </div>
                            </div>
                            <!-- Form Group End -->

                            <!-- Form Group Start -->
                            <div class="form-group row">
                            <span class="label-text col-md-2 col-form-label text-md-right">Observações</span>
                                <div class="col-md-10">
                                    <span id="observacoes-text-error" class="form-text text-error"></span>
                                    <textarea name="observacoes" class="form-control" maxlengh="400">{{ old('observacoes') }}</textarea>
                                </div>
                            </div>
                            <!-- Form Group End -->

                            <div class="row">
                                <div class="col-lg-10 offset-lg-2">
                                    <input type="submit" value="Salvar" class="btn btn-sm btn-rounded btn-success">
                                    <a href="{{ route('areas-comuns.index') }}"><button type="button" class="btn btn-sm btn-rounded btn-outline-secondary">Cancelar</button></a>
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

