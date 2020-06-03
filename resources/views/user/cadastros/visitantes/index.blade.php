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
                            <h2 class="page--title h5">Visitantes</h2>
                            <!-- Page Title End -->

                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('visitantes.index') }}">Visitantes</a></li>
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
                            <h3 class="h3">Visitantes
                            <a href="{{ route('visitantes.create') }}" class="btn btn-sm btn-outline-info">Adicionar Visitante</a>
                        
                            </h3>
                            <p>
                                {{
                                    countMessage($visitantes, [
                                        'zero' => 'Nenhum morador encontrado',
                                        'one' => '1 morador encontrado',
                                        'many' => '[X] visitantes encontrados'
                                    ])
                                }}
                            </p>
                        </div>

                        <div class="actions row">
                            <form class="search">
                                <input type="text" class="form-control d-inline" placeholder="Buscar..." onkeyup="tableFilter('visitantes-table', this)">
                                <button type="submit" class="btn btn-rounded"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <!-- Records Header End -->
                </div>

                <div class="panel">

                    <div class="records--list" data-title="Lista de Visitantes">
                        
                        <table id="recordsListView" class="visitantes-table">
                            <thead>
                                <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Gênero</th>
                                <th>Imóvel</th>
                                <th>Proprietário do Imóvel</th>
                                <th class="not-sortable">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($visitantes as $visitante)

                                <tr id="{{ 'visitante-'.$visitante->id }}">
                                    <td>{{ $visitante->id }}</td>
                                    <td>{{ $visitante->nome }}</td>
                                    <td>{{ $visitante->entrada }}</td>
                                    <td>{{ 'Nº '.$visitante->imovel->numero.' - Bloco '.$visitante->imovel->bloco }}</td>
                                    <td>{{ $visitante->proprietario ? 'Sim' : 'Não' }}</td>
                                    <td>
                                        <button class="d-inline mr-2 btn-action">
                                            <a href="{{ route('visitantes.edit', $visitante->id ) }}" class="btn-link"><i class="fa fa-pencil-alt"></i></a>
                                        </button>
                                        <form action="{{ route('visitantes.destroy', $visitante->id) }}" method="POST" class="remove-form">
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

