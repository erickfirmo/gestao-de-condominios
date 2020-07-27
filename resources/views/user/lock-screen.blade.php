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
                        <img src="assets/img/avatars/01_80x80.png" alt="">

                        <h3 class="h3">Érick Firmo <i class="fa fa-unlock"></i></h3>
                    </div>

                    <form action="#" method="post">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <i class="fas fa-key"></i>
                                </div>

                                <input type="password" name="password" placeholder="Password" class="form-control" autocomplete="off" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-rounded btn-info">Unlock</button>
                        </div>

                        <div class="m-account--footer">
                            <p>&copy; 2018 ThemeLooks</p>
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
