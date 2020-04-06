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
                    <h2 class="page--title h5">Funcionários</h2>
                    <!-- Page Title End -->

                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('funcionarios.index') }}">Funcionários</a></li>
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
                        <h3 class="panel-title">Editar Funcionário</h3>
                        <form action="{{ route('funcionarios.destroy', $funcionario->id) }}" method="POST" class="remove-form" style="float:right">
                            {{method_field('DELETE')}}
                            <a href="#"><button class="btn btn-rounded btn-danger">Deletar Funcionário</button></a>
                        </form>
                    </div>

                    <div class="panel-content">
                        <div class="lds-ring"><div></div><div></div><div></div><div></div></div>

                        <form action="{{ route('funcionarios.update', $funcionario->id) }}" method="POST" class="show-onload d-none">
                            @csrf
                            {{ method_field('PUT') }}

                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Nome Completo</span>
                                <div class="col-md-10">
                                    <span class="form-text text-error"></span>
                                    <input type="text" name="nome_completo" class="form-control" id="nome_completo" maxlenght="80" value="{{ $funcionario->nome_completo }}">
                                </div>
                            </div>
                            <!-- Form Group End -->

                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Identidade</span>
                                <div class="col-md-10">
                                    <span class="form-text text-error"></span>
                                    <input type="text" name="identidade" class="form-control" id="identidade" maxlenght="11" value="{{ $funcionario->identidade }}">
                                </div>
                            </div>
                            <!-- Form Group End -->

                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Gênero</span>
                                <div class="col-md-10">
                                    <span class="form-text text-error"></span>
                                    <select name="genero" class="form-control" id="genero">
                                        <option></option>
                                        <option value="masc" {{ $funcionario->genero == 'masc' ? 'selected' : null }}>Masculino</option>
                                        <option value="fem" {{ $funcionario->genero == 'fem' ? 'selected' : null }}>Feminino</option>
                                        <option value="nd" {{ $funcionario->genero == 'nd' ? 'selected' : null }}>Não Definido</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Form Group End -->              
                            
                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Entrada</span>
                                <div class="col-md-10">
                                    <span class="form-text text-error"></span>
                                    <input type="time" name="entrada" class="form-control" id="entrada" maxlenght="30" value="{{ $funcionario->entrada }}">
                                </div>
                            </div>
                            <!-- Form Group End -->

                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Saída</span>
                                <div class="col-md-10">
                                    <span class="form-text text-error"></span>
                                    <input type="time" name="saida" class="form-control" id="saida" maxlenght="30" value="{{ $funcionario->saida }}">
                                </div>
                            </div>
                            <!-- Form Group End -->

                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Foto</span>
                                <div class="col-md-10">
                                    <span class="form-text text-error"></span>
                                    <input type="text" name="foto" class="form-control" value="{{ $funcionario->foto }}">
                                </div>
                            </div>
                            <!-- Form Group End -->
                            
                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Telefone 1</span>
                                <div class="col-md-10">
                                    <span class="form-text text-error"></span>
                                    <input type="text" name="telefone_1" class="form-control" id="telefone_1" maxlenght="11" value="{{ $funcionario->telefone_1 }}">
                                </div>
                            </div>
                            <!-- Form Group End -->

                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Telefone 2</span>
                                <div class="col-md-10">
                                    <span class="form-text text-error"></span>
                                    <input type="text" name="telefone_2" class="form-control" id="telefone_2" maxlenght="11" value="{{ $funcionario->telefone_2 }}">
                                </div>
                            </div>
                            <!-- Form Group End -->

                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Cargo</span>
                                <div class="col-md-10">
                                    <span class="form-text text-error"></span>
                                    <input type="text" name="cargo" class="form-control" id="cargo" maxlenght="30" value="{{ $funcionario->cargo }}">
                                </div>
                            </div>
                            <!-- Form Group End -->       
                    
                            <div class="row">
                                <div class="col-lg-10 offset-lg-2">
                                    <input type="submit" value="Salvar" class="btn btn-sm btn-rounded btn-success">
                                    <a href="{{ route('funcionarios.index') }}"><button type="button" class="btn btn-sm btn-rounded btn-outline-secondary">Cancelar</button></a>
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

