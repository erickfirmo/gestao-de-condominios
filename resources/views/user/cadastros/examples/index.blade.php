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
                            <h2 class="page--title h5">Examples</h2>
                            <!-- Page Title End -->

                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.examples.index') }}">Examples</a></li>
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
                            <h3 class="h3">Examples
                            <!--<a href="#" class="btn btn-sm btn-outline-info">Manage Orders</a>-->
                        
                            </h3>
                            <p>{{ count($examples) == 1 ? count($examples).' Exemplo encontrado' : count($examples).' Exemplos encontrados' }}</p>
                        </div>

                        <!--<div class="actions">
                            <form action="#" class="search">
                                <input type="text" class="form-control" placeholder="Order ID or Customer Name..." required>
                                <button type="submit" class="btn btn-rounded"><i class="fa fa-search"></i></button>
                            </form>
                        </div>-->
                    </div>
                    <!-- Records Header End -->
                </div>

                @include('admin.partials._alert')


                <div class="panel">

                    <div class="records--list" data-title="Lista de Exemplos">
                        <table id="recordsListView">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th class="not-sortable">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($examples as $example)

                                <tr id="{{ 'example-'.$example->id }}">
                                    <td>{{ $example->id }}</td>
                                    <td>{{ $example->nome }}</td>
                                    <td>
                                        <div class="dropleft">
                                            <a href="#" class="btn-link" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>

                                            <div class="dropdown-menu">
                                                <a href="{{ route('admin.examples.edit', $example->id ) }}" class="dropdown-item">Editar</a>
                                                <form action="{{ route('admin.examples.destroy', $example->id) }}" method="POST">
                                                    @csrf
                                                    {{method_field('DELETE')}}
                                                    <button class="dropdown-item btn-remove">Excluir</button>
                                                </form>
                                            </div>
                                        </div>
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


@endsection

