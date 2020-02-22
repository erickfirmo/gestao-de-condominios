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
                <div class="col-lg-12">
                    <!-- Page Title Start -->
                    <h2 class="page--title h5">Dashboard</h2>
                    <!-- Page Title End -->

                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">Página Inicial</li>
                    </ul>

                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Manual de Uso</h3>
                            <div class="dropdown">
                            </div>
                        </div>
                        <div class="panel-content">

                            <p>
                                <h2><i class="fas fa-list-ol"></i>Welcome!</h2>
                            </p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Header End -->

    @include('admin.partials._footer')
</main>
<!-- Main Container End -->
@endsection
