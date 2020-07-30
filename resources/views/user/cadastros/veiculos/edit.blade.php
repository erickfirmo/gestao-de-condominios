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
                    <h2 class="page--title h5">Veículos</h2>
                    <!-- Page Title End -->

                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('veiculos.index') }}">Veículos</a></li>
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
                        <h3 class="panel-title">Editar Veículo</h3>
                        <form action="{{ route('veiculos.destroy', $veiculo->id) }}" method="POST" class="remove-form" style="float:right">
                            @csrf
                            {{method_field('DELETE')}}
                            <a href="#"><button class="btn btn-rounded btn-danger">Deletar Veículo</button></a>
                        </form>
                    </div>

                    <div class="panel-content">
                        <div class="lds-ring"><div></div><div></div><div></div><div></div></div>

                        <form action="{{ route('veiculos.update', $veiculo->id) }}" method="POST" class="show-onload d-none">
                            @csrf
                            {{ method_field('PUT') }}

                            <!-- Imagens da Entidade Start -->
                            @include('components._single-gallery', [
                                'title' => 'Fotos do Veículo',
                                'images' => $veiculo->imagens()->get(),
                                'all_images' => $images,
                                'parent_id' => $veiculo->id
                            ])
                            <!-- Imagens da Entidade End -->


                             <!-- Form Group Start -->
                             <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Modelo</span>
                                <div class="col-md-10">
                                    <span id="modelo-text-error" class="form-text text-error"></span>
                                    <input type="text" name="modelo" class="form-control" id="modelo" maxlenght="40" value="{{ $veiculo->modelo }}">
                                </div>
                            </div>
                            <!-- Form Group End -->

                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Tipo</span>
                                <div class="col-md-10">
                                    <span id="tipo-text-error" class="form-text text-error"></span>
                                    <select name="tipo" id="tipo" class="form-control">
                                        <option></option>
                                        <option value="Carro" {{ selectOption('Carro', $veiculo->tipo) }}>Carro</option>
                                        <option value="Motocicleta" {{ selectOption('Motocicleta', $veiculo->tipo) }}>Motocicleta</option>
                                        <option value="Van" {{ selectOption('Van', $veiculo->tipo) }}>Van</option>
                                        <option value="Mini Van" {{ selectOption('Mini Van', $veiculo->tipo) }}>Mini Van</option>
                                        <option value="Micro-Ônibus" {{ selectOption('Micro-Ônibus', $veiculo->tipo) }}>Micro-Ônibus</option>
                                        <option value="Outros" {{ selectOption('Outros', $veiculo->tipo) }}>Outros</option>

                                    </select>
                                </div>
                            </div>
                            <!-- Form Group End -->       

                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Placa</span>
                                <div class="col-md-10">
                                    <span id="placa-text-error" class="form-text text-error"></span>
                                    <input type="text" name="placa" class="form-control" id="placa" maxlenght="7" value="{{ $veiculo->placa }}">
                                </div>
                            </div>
                            <!-- Form Group End -->

                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Cor</span>
                                <div class="col-md-10">
                                    <span id="cor-text-error" class="form-text text-error"></span>
                                    <input type="text" name="cor" class="form-control" id="cor" maxlenght="20" value="{{ $veiculo->cor }}">
                                </div>
                            </div>
                            <!-- Form Group End -->

                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Descrição</span>
                                <div class="col-md-10">
                                    <span id="descricao-text-error" class="form-text text-error"></span>
                                    <input type="text" name="descricao" class="form-control" id="descricao" maxlenght="200" value="{{ $veiculo->descricao }}">
                                </div>
                            </div>
                            <!-- Form Group End -->
                    
                            <div class="row">
                                <div class="col-lg-10 offset-lg-2">
                                    <input type="submit" value="Salvar" class="btn btn-sm btn-rounded btn-success">
                                    <a href="{{ route('veiculos.index') }}"><button type="button" class="btn btn-sm btn-rounded btn-outline-secondary">Cancelar</button></a>
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

@push('js')
<script src="{{ asset('js/single-gallery.js') }}"></script>
@endpush

@endsection

