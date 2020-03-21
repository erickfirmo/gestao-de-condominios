@extends('layouts.dadmin')

@section('content')

@include('superadmin.partials._navbar')
@include('superadmin.partials._sidebar')

<!-- Main Container Start -->
<main class="main--container">
    <!-- Page Header Start -->
    <section class="page--header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Page Title Start -->
                    <h2 class="page--title h5">Empresas</h2>
                    <!-- Page Title End -->

                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('superadmin.empresas.index') }}">Empresas</a></li>
                        <li class="breadcrumb-item active"><span>Novo Cadastro</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Header End -->

    @include('superadmin.partials._alert')


    <!-- Main Content Start -->
    <section class="main--content">
        <div class="row gutter-20">
            <div class="col-md-12">
                <!-- Panel Start -->
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Nova Empresa</h3>
                    </div>

                    <div class="panel-content">
                    
                        <form action="{{ route('superadmin.empresas.store') }}" method="POST">
                            @csrf
                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Razão Social</span>
                                <div class="col-md-10">
                                    <span class="form-text text-error">{{ $errors->first('razao_social') ? $errors->first('razao_social') : '' }}</span>
                                    <input type="text" name="razao_social" class="form-control{{ $errors->first('razao_social') ? ' error' : '' }}" id="razao_social" maxlenght="60" value="{{ old('razao_social') }}">
                                </div>
                            </div>
                            <!-- Form Group End -->

                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Nome Fantasia</span>
                                <div class="col-md-10">
                                    <span class="form-text text-error">{{ $errors->first('nome_fantasia') ? $errors->first('nome_fantasia') : '' }}</span>
                                    <input type="text" name="nome_fantasia" class="form-control{{ $errors->first('nome_fantasia') ? ' error' : '' }}" id="nome_fantasia" maxlenght="60" value="{{ old('nome_fantasia') }}">
                                </div>
                            </div>
                            <!-- Form Group End -->

                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Cnpj</span>
                                <div class="col-md-10">
                                    <span class="form-text text-error">{{ $errors->first('cnpj') ? $errors->first('cnpj') : '' }}</span>
                                    <input type="text" name="cnpj" class="form-control{{ $errors->first('cnpj') ? ' error' : '' }}" id="cnpj" maxlenght="18" value="{{ old('cnpj') }}">
                                </div>
                            </div>
                            <!-- Form Group End -->

                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Email</span>
                                <div class="col-md-10">
                                    <span class="form-text text-error">{{ $errors->first('email') ? $errors->first('email') : '' }}</span>
                                    <input type="email" name="email" class="form-control{{ $errors->first('email') ? ' error' : '' }}" id="email" maxlenght="40" value="{{ old('email') }}">
                                </div>
                            </div>
                            <!-- Form Group End -->
                            
                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Telefone 1</span>
                                <div class="col-md-10">
                                    <span class="form-text text-error">{{ $errors->first('telefone_1') ? $errors->first('telefone_1') : '' }}</span>
                                    <input type="text" name="telefone_1" class="form-control{{ $errors->first('telefone_1') ? ' error' : '' }}" id="telefone_1" maxlenght="20" value="{{ old('telefone_1') }}">
                                </div>
                            </div>
                            <!-- Form Group End -->

                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Telefone 2</span>
                                <div class="col-md-10">
                                    <input type="text" name="telefone_2" class="form-control" id="telefone_2" maxlenght="20" value="{{ old('telefone_2') }}">
                                </div>
                            </div>
                            <!-- Form Group End -->

                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Responsável</span>
                                <div class="col-md-10">
                                    <span class="form-text text-error">{{ $errors->first('responsavel_para_contato') ? $errors->first('responsavel_para_contato') : '' }}</span>
                                    <input type="text" name="responsavel_para_contato" class="form-control{{ $errors->first('responsavel_para_contato') ? ' error' : '' }}" id="responsavel_para_contato" maxlenght="50" value="{{ old('responsavel_para_contato') }}">
                                </div>
                            </div>
                            <!-- Form Group End -->
                            
                            <div class="row">
                                <div class="col-lg-10 offset-lg-2">
                                    <input type="submit" value="Salvar" class="btn btn-sm btn-rounded btn-success">
                                    <a href="{{ route('superadmin.empresas.index') }}"><button type="button" class="btn btn-sm btn-rounded btn-outline-secondary">Cancelar</button></a>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <!-- Panel End -->
            </div>
        </div>
    </section>

    @include('superadmin.partials._footer')
</main>

<!-- Main Container End -->
@endsection

