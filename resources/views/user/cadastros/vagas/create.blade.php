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
                    <h2 class="page--title h5">Vagas</h2>
                    <!-- Page Title End -->

                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('vagas.index') }}">Vagas</a></li>
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
                        <h3 class="panel-title">Nova Vaga</h3>
                    </div>

                    <div class="panel-content">
                        <div class="lds-ring"><div></div><div></div><div></div><div></div></div>

                    
                        <form action="{{ route('vagas.store') }}" method="POST" class="show-onload d-none">
                            @csrf


                            <!-- Form Group Start -->
                             <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Identificação</span>
                                <div class="col-md-10">
                                    <span id="identificacao-text-error" class="form-text text-error"></span>
                                    <input type="text" name="identificacao" class="form-control" id="identificacao" maxlenght="12" value="{{ $vaga->identificacao }}">
                                </div>
                            </div>
                            <!-- Form Group End -->

                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Morador</span>
                                <div class="col-md-10">
                                    <span class="form-text text-error"></span>
                                    <input type="text" name="morador" class="form-control autocomplete-morador" id="morador" maxlenght="40" value="{{ $prestador_de_servicos->morador()->nome }}">
                                    <input type="text" name="morador_id" class="form-control" id="morador_id" maxlenght="8" value="{{ $prestador_de_servicos->morador_id }}">
                                </div>
                            </div>
                            <!-- Form Group End --> 

                            <!-- Form Group Start -->
                            <div class="form-group row">
                            <span class="label-text col-md-2 col-form-label text-md-right">Observações</span>

                                <div class="col-md-10">
                                    <span id="observacoes-text-error" class="form-text text-error"></span>
                                    <textarea name="observacoes" class="form-control" maxlengh="200">{{ $vaga->observacoes }}</textarea>
                                </div>
                            </div>
                            <!-- Form Group End -->

                            <div class="row">
                                <div class="col-lg-10 offset-lg-2">
                                    <input type="submit" value="Salvar" class="btn btn-sm btn-rounded btn-success">
                                    <a href="{{ route('vagas.index') }}"><button type="button" class="btn btn-sm btn-rounded btn-outline-secondary">Cancelar</button></a>
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

