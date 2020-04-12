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
                            <h3 class="h3">Funcionários
                            <a href="{{ route('funcionarios.create') }}" class="btn btn-sm btn-outline-info">Adicionar Funcionário</a>
                        
                            </h3>
                            <p>
                                {{
                                    countMessage($funcionarios, [
                                        'zero' => 'Nenhum funcionário encontrado',
                                        'one' => '1 funcionário encontrado',
                                        'many' => '[X] funcionários encontrados'
                                    ])
                                }}
                            </p>
                        </div>

                        <div class="actions row">
                            <form class="search">
                                <input type="text" class="form-control d-inline" placeholder="Buscar..." onkeyup="tableFilter('funcionarios-table', this)">
                                <button type="submit" class="btn btn-rounded"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <!-- Records Header End -->
                </div>

                <div class="panel">

                    <div class="records--list" data-title="Lista de Funcionários">
                        
                        <table id="recordsListView" class="funcionarios-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome Completo</th>
                                    <th>Gênero</th>
                                    <th>Identidade</th>
                                    <th>Telefone(s)</th>
                                    <th>Cargo</th>
                                    <th class="not-sortable">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($funcionarios as $funcionario)

                                <tr id="{{ 'funcionario-'.$funcionario->id }}">
                                    <td>{{ $funcionario->id }}</td>
                                    <td>{{ $funcionario->nome_completo }}</td>
                                    <td>{{ $funcionario->genero }}</td>
                                    <td>{{ $funcionario->identidade }}</td>
                                    <td>{{ $funcionario->telefone_1.($funcionario->telefone_2 ? ', '.$funcionario->telefone_2 : '') }}</td>
                                    <td>{{ $funcionario->cargo }}</td>
                                    <td>
                                        <button class="d-inline mr-2 btn-action">
                                            <a href="{{ route('funcionarios.edit', $funcionario->id ) }}" class="btn-link"><i class="fa fa-pencil-alt"></i></a>
                                        </button>

                                        

                                        <form action="{{ route('funcionarios.destroy', $funcionario->id) }}" method="POST" class="remove-form">
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

