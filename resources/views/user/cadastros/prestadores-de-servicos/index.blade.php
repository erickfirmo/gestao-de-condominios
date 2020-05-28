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
                            <h2 class="page--title h5">Prestadores de Serviços</h2>
                            <!-- Page Title End -->

                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('prestadores-de-servicos.index') }}">Prestadores de Serviços</a></li>
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
                            <h3 class="h3">Prestadores de Serviços
                            <a href="{{ route('prestadores-de-servicos.create') }}" class="btn btn-sm btn-outline-info">Adicionar Prestador de Serviços</a>
                        
                            </h3>
                            <p>
                                {{
                                    countMessage($prestadores_de_servicos, [
                                        'zero' => 'Nenhum prestador de serviços encontrado',
                                        'one' => '1 prestador de serviços encontrado',
                                        'many' => '[X] prestadores-de-servicos encontrados'
                                    ])
                                }}
                            </p>
                        </div>

                        <div class="actions row">
                            <form class="search">
                                <input type="text" class="form-control d-inline" placeholder="Buscar..." onkeyup="tableFilter('prestadores-de-servicos-table', this)">
                                <button type="submit" class="btn btn-rounded"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <!-- Records Header End -->
                </div>

                <div class="panel">

                    <div class="records--list" data-title="Lista de Prestadores de Serviços">
                        
                        <table id="recordsListView" class="prestadores-de-servicos-table">
                            <thead>
                                <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Entrada</th>
                                <th>Saída</th>
                                <th>Identidade</th>
                                <th class="not-sortable">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($prestadores_de_servicos as $prestador_de_servicos)

                                <tr id="{{ 'prestador-de-servicos-'.$prestador_de_servicos->id }}">
                                    <td>{{ $prestador_de_servicos->id }}</td>
                                    <td>{{ $prestador_de_servicos->nome }}</td>
                                    <td>{{ $prestador_de_servicos->entrada }}</td>
                                    <td>{{ $prestador_de_servicos->saida }}</td>
                                    <td>{{ $prestador_de_servicos->morador()->nome.' - Nº '.$prestador_de_servicos->morador()->imovel()->numero.' Bloco '.$prestador_de_servicos->morador()->imovel()->bloco }}</td>
                                    <td>
                                        <button class="d-inline mr-2 btn-action">
                                            <a href="{{ route('prestadores-de-servicos.edit', $prestador_de_servicos->id ) }}" class="btn-link"><i class="fa fa-pencil-alt"></i></a>
                                        </button>
                                        <form action="{{ route('prestadores-de-servicos.destroy', $prestador_de_servicos->id) }}" method="POST" class="remove-form">
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

