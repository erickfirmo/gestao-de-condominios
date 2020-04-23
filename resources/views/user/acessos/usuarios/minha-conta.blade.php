@extends('layouts.dadmin')

@section('content')

        <!-- Login Page Start -->
        <div class="m-account-w" data-bg-img="{{ url('vendor/dadmin/assets/img/account/wrapper-bg.jpg') }}">
            <div class="m-account">
                <div class="row no-gutters">
                    <div class="col-md-6">
                        <!-- Login Form Start -->
                        <div class="m-account--form-w">
                            <div class="m-account--form">
                                <!-- Logo Start -->
                                <div class="logo">
                                    <img src="{{ url('images/logo-mini-branco.png') }}" alt="#" style="width: 50%;">
                                </div>
                                <!-- Logo End -->

                                <div style="margin-bottom: 33px;">
                                    @include('user.partials._alert')
                                </div>

                                <form action="{{ route('usuarios.update', Auth::user() ) }}" method="POST">
                                <label class="m-account--title text-admin">EDIÇÃO DE USUÁRIO</label>
                                    @csrf
                                    {{ method_field('PUT') }}

                                    <div class="form-group">
                                        <div class="input-group">
                                        <div class="input-group-prepend" title="Nome">
                                                <i class="fas fa-user"></i>
                                            </div>

                                            <input title="Nome" placeholder="Digite o nome" id="nome" type="text" class="form-control{{ $errors->has('nome') ? ' is-invalid' : '' }}" name="nome" value="{{ Auth::user()->name }}" required autofocus autocomplete="off">
                                            @if ($errors->has('nome'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('nome') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    
                                    <div class="form-group">
                                        <div class="input-group">
                                        <div class="input-group-prepend" title="Identidade">
                                            <i class="fas fa-address-card"></i>
                                            </div>

                                            <input title="Identidade" placeholder="Digite a identidade" id="identidade" type="text" class="form-control{{ $errors->has('identidade') ? ' is-invalid' : '' }}" name="identidade" value="{{ Auth::user()->identidade }}" required autofocus autocomplete="off">
                                            @if ($errors->has('identidade'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('identidade') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                        <div class="input-group-prepend" title="Gênero">
                                            <i class="fas fa-address-card"></i>
                                            </div>
                                            <select name="genero" id="genero" class="form-control">
                                                <option></option>
                                                <option value="Masculino" {{ selectOption('Masculino', Auth::user()->genero) }}>Masculino</option>
                                                <option value="Feminino" {{ selectOption('Feminino', Auth::user()->genero) }}>Feminino</option>
                                                <option value="Não Definido" {{ selectOption('Não Definido', Auth::user()->genero) }}>Não Definido</option>
                                            </select>
                                            @if ($errors->has('genero'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('genero') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                                                        
                                     
                                    <div class="form-group">
                                        <div class="input-group">
                                        <div class="input-group-prepend" title="Telefone Principal">
                                                <i class="fas fa-phone"></i>
                                            </div>
                                            <span class="form-text text-error"></span>
                                            <input title="Telefone Principal" placeholder="Digite o telefone principal" id="telefone_1" type="text" class="form-control{{ $errors->has('telefone_1') ? ' is-invalid' : '' }}" name="telefone_1" value="{{ Auth::user()->telefone_1 }}" required autofocus autocomplete="off">
                                            @if ($errors->has('telefone_1'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('telefone_1') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                        <div class="input-group-prepend" title="Telefone de Emergência">
                                                <i class="fas fa-phone"></i>
                                            </div>
                                            <span class="form-text text-error"></span>
                                            <input title="Telefone de Emergência" placeholder="Digite o telefone de emergência" id="telefone_2" type="text" class="form-control{{ $errors->has('telefone_2') ? ' is-invalid' : '' }}" name="telefone_2" value="{{ Auth::user()->telefone_2 }}" autofocus autocomplete="off">
                                            @if ($errors->has('telefone_2'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('telefone_2') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                        <div class="input-group-prepend" title="Entrada">
                                            <i class="fa fa-file"></i>
                                            </div>
                                            <span class="form-text text-error"></span>
                                            <input title="Entrada" placeholder="Digite o horário de entrada" id="entrada" type="time" class="form-control{{ $errors->has('entrada') ? ' is-invalid' : '' }}" name="entrada" value="{{ Auth::user()->entrada }}" autofocus autocomplete="off">
                                            @if ($errors->has('entrada'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('entrada') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                        <div class="input-group-prepend" title="Saída">
                                            <i class="fa fa-file"></i>
                                            </div>
                                            <span class="form-text text-error"></span>
                                            <input title="Saída" placeholder="Digite o horário de saída" id="saida" type="time" class="form-control{{ $errors->has('saida') ? ' is-invalid' : '' }}" name="saida" value="{{ Auth::user()->saida }}" autofocus autocomplete="off">
                                            @if ($errors->has('saida'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('saida') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                        <div class="input-group-prepend" title="Cargo">
                                            <i class="fa fa-file"></i>
                                            </div>
                                            <span class="form-text text-error"></span>
                                            <input title="Cargo" placeholder="Digite o cargo" id="cargo" type="text" class="form-control{{ $errors->has('cargo') ? ' is-invalid' : '' }}" name="cargo" value="{{ Auth::user()->cargo }}" autofocus autocomplete="off">
                                            @if ($errors->has('cargo'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('cargo') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                        <div class="input-group-prepend" title="Permissão">
                                            <i class="fas fa-address-card"></i>
                                            </div>
                                            <select name="role_id" id="permissao" class="form-control" title="Permissão">
                                                <option></option>
                                                @foreach($roles as $role)
                                                    <option value="{{ $role->id }}" {{ selectOption($role->id, Auth::user()->role_id) }}>{{ ucwords($role->name) }}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('identidade'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('identidade') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <i class="fas fa-key"></i>
                                            </div>
                                            <span class="form-text text-error"></span>
                                            <input placeholder="Senha Atual" id="current_password" type="password" class="form-control{{ $errors->has('current_password') ? ' is-invalid' : '' }}" name="password" autocomplete="off">
                                            @if ($errors->has('current_password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('current_password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <i class="fas fa-key"></i>
                                            </div>
                                            <span class="form-text text-error"></span>
                                            <input placeholder="Nova Senha" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" autocomplete="off">
                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <i class="fas fa-key"></i>
                                            </div>

                                            <span class="form-text text-error"></span>
                                            <input placeholder="Confirme a Senha" id="password_confirmation" type="password" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" name="password_confirmation" autocomplete="off">
                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="m-account--actions">
                                        <button type="submit" class="btn btn-rounded btn-primary">SALVAR</button>
                                    </div>

                                    <div class="m-account--footer">
                                        <p>&copy;2020 Gestão de Condomínios</p>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Login Form End -->
                    </div>
                    <div class="col-md-6">
                        <!-- Login Content Start -->
                        <div class="m-account--content-w" data-bg-img="{{ url('vendor/dadmin/assets/img/account/content-bg-jpg') }}">
                            <div class="m-account--content">
                                <a href="{{ route('home') }}" class="btn btn-rounded">Voltar ao Dashboard</a>
                            </div>
                        </div>
                        <!-- Login Content End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Login Page End -->

@endsection
