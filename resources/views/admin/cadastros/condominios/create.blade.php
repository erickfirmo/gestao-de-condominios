@extends('layouts.dadmin')

@section('content')

@include('admin.partials._navbar')
@include('admin.partials._sidebar')

<!-- Main Container Start -->
<main class="main--container">

    <!-- Page Header Start -->
    <section class="page--header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Page Title Start -->
                    <h2 class="page--title h5">Condomínios</h2>
                    <!-- Page Title End -->

                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.condominios.index') }}">Condomínios</a></li>
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
                        <h3 class="panel-title">Novo Condomínio</h3>
                    </div>

                    <div class="panel-content">
                        <div class="lds-ring"><div></div><div></div><div></div><div></div></div>

                    
                        <form action="{{ route('admin.condominios.store') }}" method="POST" class="show-onload d-none">
                            @csrf
                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Nome</span>
                                <div class="col-md-10">
                                    <span id="nome-text-error" class="form-text text-error"></span>
                                    <input type="text" name="nome" class="form-control" id="nome" maxlenght="60" value="{{ old('nome') }}">
                                </div>
                            </div>
                            <!-- Form Group End -->

                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Descrição</span>
                                <div class="col-md-10">
                                    <span id="descricao-text-error" class="form-text text-error"></span>
                                    <input type="text" name="descricao" class="form-control" id="descricao" maxlenght="60" value="{{ old('descricao') }}">
                                </div>
                            </div>
                            <!-- Form Group End -->

                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">CEP</span>
                                <div class="col-md-10">
                                    <span id="cep-text-error" class="form-text text-error"></span>
                                    <input type="text" name="cep" class="form-control mask-cep" id="cep" maxlenght="9" value="{{ old('cep') }}">
                                </div>
                            </div>
                            <!-- Form Group End -->

                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Logradouro</span>
                                <div class="col-md-10">
                                    <span id="logradouro-text-error" class="form-text text-error"></span>
                                    <input type="text" name="logradouro" class="form-control" id="logradouro" maxlenght="40" value="{{ old('logradouro') }}">
                                </div>
                            </div>
                            <!-- Form Group End -->

                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Número</span>
                                <div class="col-md-10">
                                    <span id="numero-text-error" class="form-text text-error"></span>
                                    <input type="text" name="numero" class="form-control mask-numero" id="numero" maxlenght="20" value="{{ old('numero') }}">
                                </div>
                            </div>
                            <!-- Form Group End -->

                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Bairro</span>
                                <div class="col-md-10">
                                    <span id="bairro-text-error" class="form-text text-error"></span>
                                    <input type="text" name="bairro" class="form-control" id="bairro" maxlenght="40" value="{{ old('bairro') }}">
                                </div>
                            </div>
                            <!-- Form Group End -->

                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Cidade</span>
                                <div class="col-md-10">
                                    <span id="cidade-text-error" class="form-text text-error"></span>
                                    <input type="text" name="cidade" class="form-control" id="cidade" maxlenght="40" value="{{ old('cidade') }}">
                                </div>
                            </div>
                            <!-- Form Group End -->
                            
                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Estado</span>
                                <div class="col-md-10">
                                    <span id="uf_id-text-error" class="form-text text-error"></span>
                                    <select name="uf_id" class="form-control" id="uf_id">
                                        <option></option>
                                        @foreach($ufs as $uf)
                                            <option 
                                            @if($uf->id == old('uf_id'))
                                             {{ ' selected ' }}
                                            @endif
                                            value="{{ $uf->id }}">{{ $uf->estado }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- Form Group End -->
                            
                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Empresa</span>
                                <div class="col-md-10">
                                    <span id="empresa-text-error" class="form-text text-error"></span>
                                    <select name="empresa_id" class="form-control" id="empresa_id">
                                        <option></option>
                                        @foreach($empresas as $empresa)
                                            <option 
                                            @if($empresa->id == old('empresa_id'))
                                             {{ ' selected ' }}
                                            @endif
                                            value="{{ $empresa->id }}">{{ $empresa->razao_social }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- Form Group End -->
                            
                            
                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Complemento</span>
                                <div class="col-md-10">
                                    <span id="complemento-text-error" class="form-text text-error"></span>
                                    <input type="text" name="complemento" class="form-control" id="complemento" maxlenght="40" value="{{ old('complemento') }}">
                                </div>
                            </div>
                            <!-- Form Group End -->

                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Observações</span>
                                <div class="col-md-10">
                                    <span id="observacoes-text-error" class="form-text text-error"></span>
                                    <textarea name="observacoes" class="form-control" maxlengh="40">{{ old('observacoes') }}</textarea>
                                </div>
                            </div>
                            <!-- Form Group End -->
                            
                            <div class="row">
                                <div class="col-lg-10 offset-lg-2">
                                    <input type="submit" value="Salvar" class="btn btn-sm btn-rounded btn-success">
                                    <a href="{{ route('admin.condominios.index') }}"><button type="button" class="btn btn-sm btn-rounded btn-outline-secondary">Cancelar</button></a>
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

