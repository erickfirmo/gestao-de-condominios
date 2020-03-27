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
                            <h3 class="h3">Empresas
                            <!--<a href="#" class="btn btn-sm btn-outline-info">Manage Orders</a>-->
                        
                            </h3>
                            <p>
                                {{
                                    countMessage($empresas, [
                                        'zero' => 'Nenhuma empresa encontrada',
                                        'one' => '1 empresa encontrada',
                                        'many' => '[X] empresas encontradas'
                                    ])
                                }}
                            </p>
                        </div>

                        <div class="actions row">
                            <form class="search">
                                <input type="text" class="form-control d-inline" placeholder="Buscar..." onkeyup="tableFilter('empresas-table', this)">
                                <button type="submit" class="btn btn-rounded"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <!-- Records Header End -->
                </div>

                <div class="panel">

                    <div class="records--list" data-title="Lista de Empresas">
                        
                        <table id="recordsListView" class="empresas-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Razão Social</th>
                                    <th>Nome Fantasia</th>
                                    <th>Cnpj</th>
                                    <th>Email</th>
                                    <th>Telefone(s)</th>
                                    <th>Responsável</th>



                                    <th class="not-sortable">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($empresas as $empresa)

                                <tr id="{{ 'empresa-'.$empresa->id }}">
                                    <td>{{ $empresa->id }}</td>
                                    <td>{{ $empresa->razao_social }}</td>
                                    <td>{{ $empresa->nome_fantasia }}</td>
                                    <td>{{ $empresa->cnpj }}</td>
                                    <td>{{ $empresa->email }}</td>
                                    <td>{{ $empresa->telefone_1.($empresa->telefone_2 ? ', '.$empresa->telefone_2 : '') }}</td>
                                    <td>{{ $empresa->responsavel_para_contato }}</td>

                                    <td>
                                        <button class="d-inline mr-2 btn-action">
                                            <a href="{{ route('superadmin.empresas.edit', $empresa->id ) }}" class="btn-link"><i class="fa fa-pencil-alt"></i></a>
                                        </button>

                                        

                                        <form action="{{ route('superadmin.empresas.destroy', $empresa->id) }}" method="POST" class="remove-form">
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

    @include('admin.partials._footer')
</main>
<!-- Main Container End -->

@push('js')
    <script src="{{ asset('js/table-filter.js') }}"></script>
@endpush

@endsection

