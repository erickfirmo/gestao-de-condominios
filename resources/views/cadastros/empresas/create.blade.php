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
                    @include('admin.partials._alert')
                    
                        <form action="{{ route('superadmin.empresas.store') }}" method="POST">
                            @csrf
                            <!-- Form Group Start -->
                            <div class="form-group row">
                                    <span class="label-text col-md-2 col-form-label text-md-right">Razão Social</span>
                                <div class="col-md-10">
                                    <input type="text" name="razao_social" class="form-control" id="razao_social" maxlenght="60" value="{{ old('razao_social') }}">
                                </div>
                            </div>
                            <!-- Form Group End -->

                            <!-- Form Group Start -->
                            <div class="form-group row">
                                    <span class="label-text col-md-2 col-form-label text-md-right">Nome Fantasia</span>
                                <div class="col-md-10">
                                    <input type="text" name="nome_fantasia" class="form-control" id="nome_fantasia" maxlenght="60" value="{{ old('nome_fantasia') }}">
                                </div>
                            </div>
                            <!-- Form Group End -->

                            <!-- Form Group Start -->
                            <div class="form-group row">
                                    <span class="label-text col-md-2 col-form-label text-md-right">CNPJ</span>
                                <div class="col-md-10">
                                    <input type="text" name="cnpj" class="form-control" id="cnpj" maxlenght="30" value="{{ old('cnpj') }}">
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

    @include('admin.partials._footer')
</main>
<!-- Main Container End -->
@endsection

