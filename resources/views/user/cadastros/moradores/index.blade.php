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
                                <li class="breadcrumb-item active"><span>Todos</span></li>
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
                            <h3 class="h3">Ocorrências
                            <a href="{{ route('ocorrencias.create') }}" class="btn btn-sm btn-outline-info">Adicionar Ocorrência</a>
                        
                            </h3>
                            <p>
                                {{
                                    countMessage($ocorrencias, [
                                        'zero' => 'Nenhuma ocorrência encontrada',
                                        'one' => '1 ocorrência encontrada',
                                        'many' => '[X] ocorrências encontradas'
                                    ])
                                }}
                            </p>
                        </div>

                        <div class="actions row">
                            <form class="search">
                                <input type="text" class="form-control d-inline" placeholder="Buscar..." onkeyup="tableFilter('ocorrencias-table', this)">
                                <button type="submit" class="btn btn-rounded"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <!-- Records Header End -->
                </div>

                <div class="panel">

                    <div class="records--list" data-title="Lista de Ocorrências">
                        
                        <table id="recordsListView" class="ocorrencias-table">
                            <thead>
                                <tr>
                                <th>ID</th>
                                <th>Título</th>
                                <th>Descrição</th>
                                <th>Data</th>
                                <th>Gravidade</th>
                                <th class="not-sortable">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($ocorrencias as $ocorrencia)

                                <tr id="{{ 'ocorrencia-'.$ocorrencia->id }}">
                                    <td>{{ $ocorrencia->id }}</td>
                                    <td>{{ $ocorrencia->titulo }}</td>
                                    <td>{{ $ocorrencia->descricao }}</td>
                                    <td>{{ $ocorrencia->data.' às '.$ocorrencia->hora }}</td>
                                    <td>{{ strtoupper($ocorrencia->gravidade) }}</td>


                                    <td>
                                        <button class="d-inline mr-2 btn-action">
                                            <a href="{{ route('ocorrencias.edit', $ocorrencia->id ) }}" class="btn-link"><i class="fa fa-pencil-alt"></i></a>
                                        </button>
                                        <form action="{{ route('ocorrencias.destroy', $ocorrencia->id) }}" method="POST" class="remove-form">
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

