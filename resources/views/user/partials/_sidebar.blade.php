<!-- Sidebar Start -->
<aside class="sidebar" data-trigger="scrollbar">
    <!-- Sidebar Profile Start -->
    <div class="sidebar--profile">
        <div class="profile--img">
            <a href="#" class="logo" style="text-align:center;">
                <img src="{{ Auth::user()->foto_de_perfil != '' ? Auth::user()->foto_de_perfil : '/images/profile-pic.png' }}" alt="Perfil"  style="border-radius: 50%;">
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
                        <a href="{{ route('home' ) }}">
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
                            <span>Imóveis</span>
                        </a>

                                
                        <ul>
                            <li><a href="{{ route('imoveis.index' ) }}"><i class="fas fa-bars"></i> Listar Todas</a></li>
                            <li><a href="{{ route('imoveis.create') }}"><i class="fas fa-plus"></i> Novo Cadastro</a></li>
                        </ul>
                    </li>   

                    <li>
                        <a href="#">
                        <i class="fas fa-user"></i>
                            <span>Moradores</span>
                        </a>

                                
                        <ul>
                            <li><a href="{{ route('moradores.index' ) }}"><i class="fas fa-bars"></i> Listar Todas</a></li>
                            <li><a href="{{ route('moradores.create') }}"><i class="fas fa-plus"></i> Novo Cadastro</a></li>
                        </ul>
                    </li>    
                               
                    <li>
                        <a href="#">
                        <i class="fas fa-user"></i>
                            <span>Entregas</span>
                        </a>

                        <ul>
                            <li><a href="{{ route('entregas.index' ) }}"><i class="fas fa-bars"></i> Listar Todas</a></li>
                            <li><a href="{{ route('entregas.create' ) }}"><i class="fas fa-plus"></i> Novo Cadastro</a></li>
                        </ul>
                    </li> 

                    <li>
                        <a href="#">
                        <i class="fas fa-user"></i>
                            <span>Visitantes</span>
                        </a>
                        <ul>
                            <li><a href="{{ route('visitantes.index' ) }}"><i class="fas fa-bars"></i> Listar Todas</a></li>
                            <li><a href="{{ route('visitantes.create' ) }}"><i class="fas fa-plus"></i> Novo Cadastro</a></li>
                        </ul>
                    </li>                   
    
                    <li>
                        <a href="#">
                        <i class="fas fa-user"></i>
                            <span>Prestadores de Serviços</span>
                        </a>
                        <ul>
                            <li><a href="{{ route('prestadores-de-servicos.index' ) }}"><i class="fas fa-bars"></i> Listar Todas</a></li>
                            <li><a href="{{ route('prestadores-de-servicos.create' ) }}"><i class="fas fa-plus"></i> Novo Cadastro</a></li>
                        </ul>
                    </li>

        
                    
                    <li>
                        <a href="#">
                        <i class="fas fa-user"></i>
                            <span>Áreas Comuns</span>
                        </a>

                        <ul>
                            <li><a href="{{ route('areas-comuns.index' ) }}"><i class="fas fa-bars"></i> Listar Todas</a></li>
                            <li><a href="{{ route('areas-comuns.create' ) }}"><i class="fas fa-plus"></i> Novo Cadastro</a></li>
                        </ul>
                    </li>    

                    <li>
                        <a href="#">
                        <i class="fas fa-user"></i>
                            <span>Reservas</span>
                        </a>

                        <ul>
                            <li><a href="{{ route('reservas.index') }}"><i class="fas fa-bars"></i> Listar Todas</a></li>
                            <li><a href="{{ route('reservas.create') }}"><i class="fas fa-plus"></i> Novo Cadastro</a></li>
                        </ul>
                    </li>   
                                
                </ul>
            </li>

            <li>
                <a href="#">GARAGEM</a>
                <ul>
                    <li>
                        <a href="#">
                        <i class="fas fa-user"></i>
                            <span>Vagas</span>
                        </a>

                        <ul>
                            <li><a href="{{ route('vagas.index' ) }}"><i class="fas fa-bars"></i> Listar Todas</a></li>
                            <li><a href="{{ route('vagas.create' ) }}"><i class="fas fa-plus"></i> Novo Cadastro</a></li>
                        </ul>
                    </li>       

                    <li>
                        <a href="#">
                        <i class="fas fa-user"></i>
                            <span>Veículos</span>
                        </a>

                        <ul>
                            <li><a href="{{ route('veiculos.index' ) }}"><i class="fas fa-bars"></i> Listar Todas</a></li>
                            <li><a href="{{ route('veiculos.create' ) }}"><i class="fas fa-plus"></i> Novo Cadastro</a></li>
                        </ul>
                    </li>                   
                </ul>
            </li>

            <li>
                <a href="#">ACESSOS</a>
                <ul>
                    <li>
                        <a href="#">
                        <i class="fas fa-user"></i>
                            <span>Usuários</span>
                        </a>

                        <ul>
                            <li><a href="{{ route('usuarios.index') }}"><i class="fas fa-bars"></i> Listar Todos</a></li>
                            <li><a href="{{ route('usuarios.create') }}"><i class="fas fa-plus"></i> Cadastrar Usuário</a></li>
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
                            <span>Ocorrências</span>
                        </a>

                        <ul>
                            <li><a href="{{ route('ocorrencias.index') }}"><i class="fas fa-bars"></i> Listar Todas</a></li>
                            <li><a href="{{ route('ocorrencias.index') }}"><i class="fas fa-plus"></i> Novo Cadastro</a></li>
                        </ul>
                    </li>      

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