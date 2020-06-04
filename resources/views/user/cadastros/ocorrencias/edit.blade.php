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
                    <h2 class="page--title h5">Ocorrências</h2>
                    <!-- Page Title End -->

                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('ocorrencias.index') }}">Ocorrências</a></li>
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
                        <h3 class="panel-title">Editar Ocorrência</h3>
                        <form action="{{ route('ocorrencias.destroy', $ocorrencia->id) }}" method="POST" class="remove-form" style="float:right">
                            {{method_field('DELETE')}}
                            <a href="#"><button class="btn btn-rounded btn-danger">Deletar Ocorrência</button></a>
                        </form>
                    </div>

                    <div class="panel-content">
                        <div class="lds-ring"><div></div><div></div><div></div><div></div></div>

                        <form action="{{ route('ocorrencias.update', $ocorrencia->id) }}" method="POST" class="show-onload d-none">
                            @csrf
                            {{ method_field('PUT') }}


                            <!-- Form Group Start -->
                            <div class="form-group row">
                            <span class="label-text col-md-2 col-form-label text-md-right">Nome</span>
                                <div class="col-md-10">
                                    <span id="nome-text-error" class="form-text text-error"></span>
                                    <input type="text" name="nome" class="form-control" id="nome" maxlenght="80" value="{{ $ocorrencia->nome }}">
                                </div>
                            </div>
                            <!-- Form Group End -->

                            
                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Gravidade</span>
                                <div class="col-md-10">
                                    <span id="gravidade-text-error" class="form-text text-error"></span>
                                    <select name="gravidade" id="gravidade" class="form-control">
                                        <option></option>
                                        <option value="baixa" {{ selectOption('baixa', $ocorrencia->gravidade) }}>Baixa</option>
                                        <option value="média" {{ selectOption('média', $ocorrencia->gravidade) }}>Média</option>
                                        <option value="1alta" {{ selectOption('alta', $ocorrencia->gravidade) }}>Alta</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Form Group End -->    

                            
                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Data</span>
                                <div class="col-md-10">
                                    <span class="form-text text-error"></span>
                                    <input type="date" name="data" class="form-control" id="data" value="{{ $ocorrencia->data }}">
                                </div>
                            </div>
                            <!-- Form Group End -->

                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Hora</span>
                                <div class="col-md-10">
                                    <span class="form-text text-error"></span>
                                    <input type="time" name="hora" class="form-control" id="hora" value="{{ $ocorrencia->hora }}">
                                </div>
                            </div>
                            <!-- Form Group End -->

                            <!-- Form Group Start -->
                            <div class="form-group row">
                            <span class="label-text col-md-2 col-form-label text-md-right">Descrição</span>

                                <div class="col-md-10">
                                    <span id="descricao-text-error" class="form-text text-error"></span>
                                    <textarea name="descricao" class="form-control" maxlengh="400">{{ $ocorrencia->descricao }}</textarea>
                                </div>
                            </div>
                            <!-- Form Group End -->
                    
                            <div class="row">
                                <div class="col-lg-10 offset-lg-2">
                                    <input type="submit" value="Salvar" class="btn btn-sm btn-rounded btn-success">
                                    <a href="{{ route('ocorrencias.index') }}"><button type="button" class="btn btn-sm btn-rounded btn-outline-secondary">Cancelar</button></a>
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

