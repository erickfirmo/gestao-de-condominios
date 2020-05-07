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
                    <h2 class="page--title h5">Entregas</h2>
                    <!-- Page Title End -->

                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('entregas.index') }}">Entregas</a></li>
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
                        <h3 class="panel-title">Editar Entrega</h3>
                        <form action="{{ route('entregas.destroy', $entrega->id) }}" method="POST" class="remove-form" style="float:right">
                            {{method_field('DELETE')}}
                            <a href="#"><button class="btn btn-rounded btn-danger">Deletar Entrega</button></a>
                        </form>
                    </div>

                    <div class="panel-content">
                        <div class="lds-ring"><div></div><div></div><div></div><div></div></div>

                        <form action="{{ route('entregas.update', $entrega->id) }}" method="POST" class="show-onload d-none">
                            @csrf
                            {{ method_field('PUT') }}

                             <!-- Form Group Start -->
                             <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Nome do Entregador</span>
                                <div class="col-md-10">
                                    <span id="nome_do_entregador-text-error" class="form-text text-error"></span>
                                    <input type="text" name="nome_do_entregador" class="form-control" id="nome_do_entregador" maxlenght="80" value="{{ $entrega->nome_do_entregador }}">
                                </div>
                            </div>
                            <!-- Form Group End -->


                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Morador</span>
                                <div class="col-md-10">
                                    <span id="morador_id-text-error" class="form-text text-error"></span>
                                    <input type="text" name="morador_id" class="form-control" id="morador_id" maxlenght="80" value="{{ $entrega->morador_id }}">
                                </div>
                            </div>
                            <!-- Form Group End -->

                            <!-- morador input com autocomplete -->

                            <!-- Form Group Start -->
                            <div class="form-group row">
                            <span class="label-text col-md-2 col-form-label text-md-right">Descrição</span>
                                <div class="col-md-10">
                                    <span id="descricao-text-error" class="form-text text-error"></span>
                                    <textarea name="descricao" class="form-control" maxlengh="200">{{ $entrega->descricao }}</textarea>
                                </div>
                            </div>
                            <!-- Form Group End -->

                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right py-0">Status</span>
                                <span id="status-text-error" class="form-text text-error"></span>
                                <div class="col-md-10 form-block">
                                    <label class="form-radio mr-3">
                                        <input type="radio" name="status" value="Entregue ao Morador" class="form-radio-input" {{ $entrega->status == 'Entregue ao Morador' ? 'checked' : null }}>
                                        <span class="form-radio-label">Entregue ao Morador</span>
                                    </label>
                                    <label class="form-radio mr-3">
                                        <input type="radio" name="status" value="Notificado ao Morador" class="form-radio-input" {{ $entrega->status == 'Notificado ao Morador' ? 'checked' : null }}>
                                        <span class="form-radio-label">Notificado ao Morador</span>
                                    </label>
                                    <label class="form-radio">
                                        <input type="radio" name="status" value="Não Notificado ao Morador" class="form-radio-input" {{ $entrega->status == 'Não Notificado ao Morador' ? 'checked' : null }}>
                                        <span class="form-radio-label">Não Notificado ao Morador</span>
                                    </label>
                                </div>
                            </div>
                            <!-- Form Group End -->

                             <!-- Form Group Start -->
                             <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right py-0" style="opacity:0;">Proprietário do Imóvel</span>
                                <span id="proprietario-text-error" class="form-text text-error"></span>
                                <div class="col-md-10 form-inline">
                                    <label class="form-check">
                                        <input type="checkbox" name="proprietario" value="1" class="form-check-input" {{ checkboxState($entrega->proprietario, 1) }}>
                                        <span class="form-check-label">Este Morador é Proprietário do Imóvel</span>
                                    </label>
                                </div>
                            </div>
                            <!-- Form Group End -->
                    
                            <div class="row">
                                <div class="col-lg-10 offset-lg-2">
                                    <input type="submit" value="Salvar" class="btn btn-sm btn-rounded btn-success">
                                    <a href="{{ route('entregas.index') }}"><button type="button" class="btn btn-sm btn-rounded btn-outline-secondary">Cancelar</button></a>
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

