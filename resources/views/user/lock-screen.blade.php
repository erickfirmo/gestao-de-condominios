@extends('layouts.dadmin')

@section('content')

 <!-- Wrapper Start -->
 <div class="wrapper">
    <!-- Forgot Password Page Start -->
    <div class="m-account-w" data-bg-img="assets/img/account/wrapper-bg.jpg">
        <div class="m-account m-account-lock">
            <!-- Forgot Password Form Start -->
            <div class="m-account--form-w">
                <div class="m-account--form m-account--lock">
                    <div class="m-account--user">
                        <img src="{{ Auth::user()->foto != '#' ? Auth::user()->foto : '/images/profile-pic.png' }}" alt="Foto de Perfil">

                        <h3 class="h3">{{ Auth::user()->name }} <i class="fa fa-unlock"></i></h3>
                    </div>

                    <form action="{{ route('unlock-screen') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <i class="fas fa-key"></i>
                                </div>

                                <input type="password" name="password" placeholder="Digite sua senha..." class="form-control" autocomplete="off" autofocus required>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-rounded btn-info">Desbloquear</button>
                        </div>

                        <div class="m-account--footer">
                            <p>&copy; 2020 Gestão de Condomínios</p>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Forgot Password Form End -->
        </div>
    </div>
    <!-- Forgot Password Page End -->
</div>
<!-- Wrapper End -->

@endsection
