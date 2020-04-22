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
                    <h2 class="page--title h5">Usuários</h2>
                    <!-- Page Title End -->

                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('usuarios.index') }}">Usuários</a></li>
                        <li class="breadcrumb-item active"><span>Editar</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Header End -->

    <!-- Main Content Start -->
    <section class="main--content">
        <div class="row gutter-20">
            <div class="col-md-12">
                <!-- Panel Start -->
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Editar Usuário</h3>
                        <form action="{{ route('usuarios.destroy', $user) }}" method="POST" class="remove-form" style="float:right">
                            {{method_field('DELETE')}}
                            <a href="#"><button class="btn btn-rounded btn-danger">Deletar Usuário</button></a>
                        </form>
                    </div>

                    <div class="panel-content">
                        <div class="lds-ring"><div></div><div></div><div></div><div></div></div>

                        <form action="{{ route('usuarios.update', $user) }}" method="POST" class="show-onload d-none">
                            @csrf
                            {{ method_field('PUT') }}

                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Nome</span>
                                <div class="col-md-10">
                                    <span id="nome-text-error" class="form-text text-error"></span>
                                    <input type="text" name="nome" class="form-control" id="nome" maxlenght="80" value="{{ $user->name }}">
                                </div>
                            </div>
                            <!-- Form Group End -->

                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Identidade</span>
                                <div class="col-md-10">
                                    <span id="identidade-text-error" class="form-text text-error"></span>
                                    <input type="text" name="identidade" class="form-control" id="identidade" maxlenght="11" value="{{ $user->identidade }}">
                                </div>
                            </div>
                            <!-- Form Group End -->

                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right py-0">Gênero</span> 
                                <div class="col-md-10 form-inline">
                                    <div class="d-block w-100">
                                        <span id="genero-text-error" class="form-text text-error"></span>
                                    </div>
                                    <label class="form-radio mr-3">
                                        <input type="radio" name="genero" value="Masculino" class="form-radio-input" {{ $user->genero == 'Masculino' ? 'checked' : null }}>
                                        <span class="form-radio-label">Masculino</span>
                                    </label>
                                    <label class="form-radio mr-3">
                                        <input type="radio" name="genero" value="Feminino" class="form-radio-input" {{ $user->genero == 'Feminino' ? 'checked' : null }}>
                                        <span class="form-radio-label">Feminino</span>
                                    </label>
                                    <label class="form-radio">
                                        <input type="radio" name="genero" value="Não Definido" class="form-radio-input" {{ $user->genero == 'Não Definido' ? 'checked' : null }}>
                                        <span class="form-radio-label">Não Definido</span>
                                    </label>
                                </div>
                            </div>
                            <!-- Form Group End -->        
                            
                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Entrada</span>
                                <div class="col-md-10">
                                    <span id="entrada-text-error" class="form-text text-error"></span>
                                    <input type="time" name="entrada" class="form-control" id="entrada" maxlenght="30" value="{{ $user->entrada }}">
                                </div>
                            </div>
                            <!-- Form Group End -->

                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Saída</span>
                                <div class="col-md-10">
                                    <span id="saida-text-error" class="form-text text-error"></span>
                                    <input type="time" name="saida" class="form-control" id="saida" maxlenght="30" value="{{ $user->saida }}">
                                </div>
                            </div>
                            <!-- Form Group End -->

                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Foto</span>
                                <div class="col-md-10">
                                    <span id="foto-text-error" class="form-text text-error"></span>
                                    <input type="text" name="foto" class="form-control" value="{{ $user->foto }}">
                                </div>
                            </div>
                            <!-- Form Group End -->
                            
                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Telefone 1</span>
                                <div class="col-md-10">
                                    <span id="telefone_1-text-error" class="form-text text-error"></span>
                                    <input type="text" name="telefone_1" class="form-control" id="telefone_1" maxlenght="11" value="{{ $user->telefone_1 }}">
                                </div>
                            </div>
                            <!-- Form Group End -->

                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Telefone 2</span>
                                <div class="col-md-10">
                                    <span id="telefone_2-text-error" class="form-text text-error"></span>
                                    <input type="text" name="telefone_2" class="form-control" id="telefone_2" maxlenght="11" value="{{ $user->telefone_2 }}">
                                </div>
                            </div>
                            <!-- Form Group End -->

                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Cargo</span>
                                <div class="col-md-10">
                                    <span id="cargo-text-error" class="form-text text-error"></span>
                                    <input type="text" name="cargo" class="form-control" id="cargo" maxlenght="30" value="{{ $user->cargo }}">
                                </div>
                            </div>
                            <!-- Form Group End -->    

                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Permissão</span>
                                <div class="col-md-10">
                                    <span id="role_id-text-error" class="form-text text-error"></span>
                                    <select name="role_id" id="role_id" class="form-control">
                                        <option></option>
                                        @foreach($roles as $role)
                                            <option value="{{ $role->id }}" {{ selectOption($role->id, $user->role_id) }}>{{ ucwords($role->name) }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- Form Group End -->

                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right"></span>
                                <div class="col-md-10">
                                    <input type="checkbox" name="change_password" value="1" class="form-check-input">
                                    <label class="form-check">
                                        <input type="checkbox" name="change_password" value="1" class="form-check-input" {{ checkboxState(old('change_password'), 1) }}>
                                        <span class="form-check-label">Alterar Senha</span>
                                    </label>
                                </div>
                            </div>
                            <!-- Form Group End -->

                            <div id="password-box" style="display:none;">
                                <!-- Form Group Start -->
                                <div class="form-group row">
                                    <span class="label-text col-md-2 col-form-label text-md-right">Senha Atual</span>
                                    <div class="col-md-10">
                                        <span id="current_password-text-error" class="form-text text-error"></span>
                                        <input type="password" name="current_password" class="form-control" id="current_password" maxlenght="40">
                                    </div>
                                </div>
                                <!-- Form Group End -->

                                <!-- Form Group Start -->
                                <div class="form-group row">
                                    <span class="label-text col-md-2 col-form-label text-md-right">Nova Senha</span>
                                    <div class="col-md-10">
                                        <span id="password-text-error" class="form-text text-error"></span>
                                        <input type="password" name="password" class="form-control" id="password" maxlenght="40">
                                    </div>
                                </div>
                                <!-- Form Group End -->

                                <!-- Form Group Start -->
                                <div class="form-group row">
                                    <span class="label-text col-md-2 col-form-label text-md-right">Confirmação de Senha</span>
                                    <div class="col-md-10">
                                        <span id="password_confirmation-text-error" class="form-text text-error"></span>
                                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" maxlenght="40">
                                    </div>
                                </div>
                                <!-- Form Group End -->
                            </div>
                    
                            <div class="row">
                                <div class="col-lg-10 offset-lg-2">
                                    <input type="submit" value="Salvar" class="btn btn-sm btn-rounded btn-success">
                                    <a href="{{ route('usuarios.index') }}"><button type="button" class="btn btn-sm btn-rounded btn-outline-secondary">Cancelar</button></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Panel End -->
            </div>
        </div>
    </section>

    @include('user.partials._footer')
</main>

<!-- Main Container End -->

@push('js')
<script type="text/javascript">
    //window.onload = function() {
        var password_box = document.getElementById('password-box');
        if(password_box.checked == true) {
            password_box.style.display = 'block';
        } else {
            password_box.style.display = 'none';
        }
    //}
    
</script>
@endpush

@endsection

