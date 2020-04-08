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
                                <li class="breadcrumb-item active"><span>Todas</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Page Header End -->

            <!-- Main Content Start -->
            <section class="main--content">
                <div class="panel">
                    <!-- Records Header Start -->
                    <div class="records--header">


                        <div class="title fa-university">
                            <h3 class="h3">Áreas Comuns
                            <a href="{{ route('areas-comuns.create') }}" class="btn btn-sm btn-outline-info">Adicionar Área Comum</a>
                        
                            </h3>
                            <p>
                                {{
                                    countMessage($areas_comuns, [
                                        'zero' => 'Nenhuma área comum encontrada',
                                        'one' => '1 área comum encontrada',
                                        'many' => '[X] áreas comuns encontradas'
                                    ])
                                }}
                            </p>
                        </div>

                        <div class="actions row">
                            <form class="search">
                                <input type="text" class="form-control d-inline" placeholder="Buscar..." onkeyup="tableFilter('areas_comuns-table', this)">
                                <button type="submit" class="btn btn-rounded"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <!-- Records Header End -->
                </div>

                <div class="panel">

                    <div class="records--list" data-title="Lista de Áreas Comuns">
                        
                        <table id="recordsListView" class="areas_comuns-table">
                            <thead>
                                <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Horário de Funcionamento</th>
                                <th>Status</th>
                                <th>Descrição</th>
                                <th class="not-sortable">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($areas_comuns as $area_comum)

                                <tr id="{{ 'area_comum-'.$area_comum->id }}">
                                    <td>{{ $area_comum->id }}</td>
                                    <td>{{ $area_comum->nome }}</td>
                                    <td>{{ 'Das '.$area_comum->abertura.' às '.$area_comum->fechamento }}</td>
                                    <td>
                                    <span class="label {{ statusClass($area_comum->status) }}">{{ $area_comum->status }}</span>
                                    </td>
                                    <td>{{ $area_comum->descricao }}</td>
                                    <td>
                                        <button class="d-inline mr-2 btn-action">
                                            <a href="{{ route('areas-comuns.edit', $area_comum->id ) }}" class="btn-link"><i class="fa fa-pencil-alt"></i></a>
                                        </button>
                                        <form action="{{ route('areas-comuns.destroy', $area_comum->id) }}" method="POST" class="remove-form">
                                            @csrf
                                            {{method_field('DELETE')}}
                                            <button class="d-inline btn-action">
                                                <a href="#" class="btn-link"><i class="fa fa-trash"></i></a>
                                            </button>
                                        </form>
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- Records List End -->
                </div>
            </section>
            <!-- Main Content End -->

    @include('user.partials._footer')
</main>
<!-- Main Container End -->

@push('js')
    <script src="{{ asset('js/table-filter.js') }}"></script>
@endpush

@endsection

