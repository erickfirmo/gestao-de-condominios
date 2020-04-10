<!-- Sidebar Start -->
<aside class="sidebar" data-trigger="scrollbar">
    <!-- Sidebar Profile Start -->
    <div class="sidebar--profile">
        <div class="profile--img">
            <a href="#" class="logo" style="text-align:center;">
                <img src="{{ Auth::user()->foto_de_perfil != '' ? Auth::user()->foto_de_perfil : '/images/profile-pic.png' }}" alt="Perfil" style="border-radius: 50%;">
            </a>
        </div>

        <div class="profile--name">
            <a href="#" class="btn-link">{{ Auth::user()->name }}</a>
        </div>

        <div class="profile--nav">
            <ul class="nav">
                <li class="nav-item">
                    <a href="#" class="nav-link" title="User Profile">
                        <i class="fa fa-user"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" title="Lock Screen">
                        <i class="fa fa-lock"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" title="Messages">
                        <i class="fa fa-envelope"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" title="Logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out-alt"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Sidebar Profile End -->

    <!-- Sidebar Navigation Start -->
    <div class="sidebar--nav">
        <ul>
            <li>
                <ul>
                    <li class="active">
                        <a href="{{ route('admin.home' ) }}">
                            <i class="fa fa-home"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="javascript:void(0)">
                    <span>Cadastros</span> 
                </a>

                <ul>
                    <li>
                        <a href="#">
                        <i class="fas fa-user"></i>
                            <span>Empresas</span>
                        </a>

                                
                        <ul>
                            <li><a href="{{ route('admin.empresas.index' ) }}"><i class="fas fa-bars"></i> Listar Todas</a></li>
                            <li><a href="{{ route('admin.empresas.create') }}"><i class="fas fa-plus"></i> Novo Cadastro</a></li>
                        </ul>
                    </li>                   
                </ul>
                <ul>
                    <li>
                        <a href="#">
                        <i class="fas fa-user"></i>
                            <span>Condomínios</span>
                        </a>

                                
                        <ul>
                            <li><a href="{{ route('admin.condominios.index' ) }}"><i class="fas fa-bars"></i> Listar Todas</a></li>
                            <li><a href="{{ route('admin.condominios.create') }}"><i class="fas fa-plus"></i> Novo Cadastro</a></li>
                        </ul>
                    </li>          
                </ul>

            </li>

            <li>
                <a href="#">USUÁRIOS</a>
                <ul>
                    <li>
                        <a href="#">
                        <i class="fas fa-user"></i>
                            <span>Administradores</span>
                        </a>

                        <ul>
                            <li><a href="#"><i class="fas fa-bars"></i> Listar Todas</a></li>
                            <li><a href="#"><i class="fas fa-plus"></i> Novo Cadastro</a></li>
                        </ul>
                    </li>                   
                </ul>
                <ul>
                    <li>
                        <a href="#">
                        <i class="fas fa-user"></i>
                            <span>Usuários</span>
                        </a>

                        <ul>
                            <li><a href="#"><i class="fas fa-bars"></i> Listar Todas</a></li>
                            <li><a href="#"><i class="fas fa-plus"></i> Novo Cadastro</a></li>
                        </ul>
                    </li>                   
                </ul>
            </li>


            <li>
                <a href="#">FINANCEIRO</a>
                <ul>
                    <li>
                        <a href="#">
                        <i class="fas fa-user"></i>
                            <span>Receitas</span>
                        </a>

                        <ul>
                            <li><a href="{{ route('admin.receitas.index' ) }}"><i class="fas fa-bars"></i> Listar Todas</a></li>
                            <li><a href="{{ route('admin.receitas.create' ) }}"><i class="fas fa-plus"></i> Novo Cadastro</a></li>
                        </ul>
                    </li>                   
                </ul>
                <ul>
                    <li>
                        <a href="#">
                        <i class="fas fa-user"></i>
                            <span>Despesas</span>
                        </a>

                        <ul>
                            <li><a href="{{ route('admin.despesas.index' ) }}"><i class="fas fa-bars"></i> Listar Todas</a></li>
                            <li><a href="{{ route('admin.despesas.create' ) }}"><i class="fas fa-plus"></i> Novo Cadastro</a></li>
                        </ul>
                    </li>                   
                </ul>
                <ul>
                    <li>
                        <a href="#">
                        <i class="fas fa-user"></i>
                            <span>Faturas</span>
                        </a>

                        <ul>
                            <li><a href="{{ route('admin.faturas.index' ) }}"><i class="fas fa-bars"></i> Listar Todas</a></li>
                            <li><a href="{{ route('admin.faturas.create' ) }}"><i class="fas fa-plus"></i> Novo Cadastro</a></li>
                        </ul>
                    </li>                   
                </ul>
                <ul>
                    <li>
                        <a href="#">
                        <i class="fas fa-user"></i>
                            <span>Boletos</span>
                        </a>

                        <ul>
                            <li><a href="{{ route('admin.boletos.index' ) }}"><i class="fas fa-bars"></i> Listar Todas</a></li>
                            <li><a href="{{ route('admin.boletos.create' ) }}"><i class="fas fa-plus"></i> Novo Cadastro</a></li>
                        </ul>
                    </li>                   
                </ul>
            </li>

            
            <li>
                <a href="#">OUTROS</a>
                <ul>
                    <li>
                        <a href="#">
                        <i class="fas fa-user"></i>
                            <span>Relatórios</span>
                        </a>

                        <ul>
                            <li><a href="#"><i class="fas fa-bars"></i> Listar Todas</a></li>
                            <li><a href="#"><i class="fas fa-plus"></i> Novo Cadastro</a></li>
                        </ul>
                    </li>                   
                </ul>
            </li>
            
        </ul>
    </div>
    <!-- Sidebar Navigation End -->

    <!-- Sidebar Widgets Start -->
    <!--<div class="sidebar--widgets">
        <div class="widget">
            <h3 class="h6 widget--title">Information Summary</h3>

            <div class="summary--widget">
                <div class="summary--item">
                    <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#2bb3c0">5,6,7,9,15,5,6,7,9,11,7,9,11,7,9,9,3,2</p>

                    <p class="summary--title">Daily Traffic</p>
                    <p class="summary--stats">307.512</p>
                </div>

                <div class="summary--item">
                    <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#e16123">2,3,7,7,9,11,9,7,9,11,9,7,5,4,9,7,5,4</p>

                    <p class="summary--title">Average Usage</p>
                    <p class="summary--stats">2,371,527</p>
                </div>

                <div class="summary--item">
                    <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#cccccc">5,6,7,9,15,5,6,7,9,11,7,9,11,7,9,9,3,2</p>

                    <p class="summary--title">Disk Usage</p>
                    <p class="summary--stats">37.5%</p>
                </div>

                <div class="summary--item">
                    <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#009378">2,3,7,7,9,11,9,7,9,11,9,7,5,4,9,7,5,4</p>

                    <p class="summary--title">CPU Usage</p>
                    <p class="summary--stats">37.05-32</p>
                </div>
                
                <div class="summary--item">
                    <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#ff4040">5,6,7,9,15,5,6,7,9,11,7,9,11,7,9,9,3,2</p>

                    <p class="summary--title">Memory Usage</p>
                    <p class="summary--stats">37.05%</p>
                </div>
            </div>
        </div>
    </div>-->
    <!-- Sidebar Widgets End -->
</aside>
<!-- Sidebar End -->