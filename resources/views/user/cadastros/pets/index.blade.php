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
                            <h2 class="page--title h5">Pets</h2>
                            <!-- Page Title End -->

                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('pets.index') }}">Pets</a></li>
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
                            <h3 class="h3">Pets
                            <a href="{{ route('pets.create') }}" class="btn btn-sm btn-outline-info">Adicionar Pet</a>
                        
                            </h3>
                            <p>
                                {{
                                    countMessage($pets, [
                                        'zero' => 'Nenhum pet encontrado',
                                        'one' => '1 pet encontrado',
                                        'many' => '[X] pets encontrados'
                                    ])
                                }}
                            </p>
                        </div>

                        <div class="actions row">
                            <form class="search">
                                <input type="text" class="form-control d-inline" placeholder="Buscar..." onkeyup="tableFilter('pets-table', this)">
                                <button type="submit" class="btn btn-rounded"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <!-- Records Header End -->
                </div>

                <div class="panel">

                    <div class="records--list" data-title="Lista de Pets">
                        
                        <table id="recordsListView" class="pets-table">
                            <thead>
                                <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Espécie</th>
                                <th>Raça</th>
                                <th>Cor</th>
                                <th>Morador</th>
                                <th>Descrição</th>
                                <th class="not-sortable">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pets as $pet)

                                <tr id="{{ 'pet-'.$pet->id }}">
                                    <td>{{ $pet->id }}</td>
                                    <td>{{ $pet->nome }}</td>
                                    <td>{{ $pet->especie }}</td>
                                    <td>{{ $pet->raca }}</td>
                                    <td>{{ $pet->cor }}</td>
                                    <td>{{ $pet->morador }}</td>
                                    <td>{{ $pet->descricao }}</td>
                                    <td>
                                        <button class="d-inline mr-2 btn-action">
                                            <a href="{{ route('pets.edit', $pet->id ) }}" class="btn-link"><i class="fa fa-pencil-alt"></i></a>
                                        </button>
                                        <form action="{{ route('pets.destroy', $pet->id) }}" method="POST" class="remove-form">
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

