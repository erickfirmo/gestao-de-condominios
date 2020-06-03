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
                    <h2 class="page--title h5">Prestadores de Serviços</h2>
                    <!-- Page Title End -->

                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('prestadores-de-servicos.index') }}">Prestadores de Serviços</a></li>
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
                        <h3 class="panel-title">Editar Prestador de Serviços</h3>
                        <form action="{{ route('prestadores-de-servicos.destroy', $prestador_de_servicos->id) }}" method="POST" class="remove-form" style="float:right">
                            {{method_field('DELETE')}}
                            <a href="#"><button class="btn btn-rounded btn-danger">Deletar Prestador de Serviços</button></a>
                        </form>
                    </div>

                    <div class="panel-content">
                        <div class="lds-ring"><div></div><div></div><div></div><div></div></div>

                        <form action="{{ route('prestadores-de-servicos.update', $prestador_de_servicos->id) }}" method="POST" class="show-onload d-none">
                            @csrf
                            {{ method_field('PUT') }}

                            <!-- Form Group Start -->
                             <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Nome</span>
                                <div class="col-md-10">
                                    <span class="form-text text-error"></span>
                                    <input type="text" name="nome" class="form-control" id="nome" maxlenght="80" value="{{ $prestador_de_servicos->nome }}">
                                </div>
                            </div>
                            <!-- Form Group End -->
                            
                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Entrada</span>
                                <div class="col-md-10">
                                    <span class="form-text text-error"></span>
                                    <input type="time" name="entrada" class="form-control" id="entrada">
                                </div>
                            </div>
                            <!-- Form Group End -->

                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Saída</span>
                                <div class="col-md-10">
                                    <span class="form-text text-error"></span>
                                    <input type="time" name="saida" class="form-control" id="saida">
                                </div>
                            </div>
                            <!-- Form Group End -->

                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Identidade</span>
                                <div class="col-md-10">
                                    <span class="form-text text-error"></span>
                                    <input type="text" name="identidade" class="form-control" id="identidade" maxlenght="11" value="{{ $prestador_de_servicos->identidade }}">
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
                    
                            <div class="row">
                                <div class="col-lg-10 offset-lg-2">
                                    <input type="submit" value="Salvar" class="btn btn-sm btn-rounded btn-success">
                                    <a href="{{ route('prestadores-de-servicos.index') }}"><button type="button" class="btn btn-sm btn-rounded btn-outline-secondary">Cancelar</button></a>
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

