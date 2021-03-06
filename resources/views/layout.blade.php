<!DOCTYPE html>
<html>
<head>
    <title>CD STORE - @yield('pagina_titulo')</title>

    <!--Import Google Icon Font-->
    <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css" media="screen,projection">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link href="/css/styles.css" rel="stylesheet">

</head>
<body>
    <header>
        <nav>
            <div class="nav-wrapper  deep-purple darken-1 row">
                <a href="{{ route('index') }}" class="brand-logo col offset-l1">
                    
               <img class="responsive-img" style="width: 250px; padding: 10px;" src="/img/LOGO1.png">
                    
                </a>
                <a href="#" data-activates="mobile-menu" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li>
                        <a href="{{ route('carrinho.compras') }}">
                            <i class="material-icons left">shopping_basket</i>
                            Minhas compras
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('carrinho.index') }}">
                            <i class="material-icons left">shopping_cart</i>
                            Carrinho
                        </a>
                    </li>
                    @if (Auth::guest())
                        <li>
                            <a href="{{ url('/login') }}">
                                <i class="material-icons left">account_circle</i>
                                Entrar
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/register') }}">
                                <i class="material-icons left">fiber_new</i>
                                Cadastre-se
                            </a>
                        </li>
                    @else
                        <li class="active">
                            <a class="dropdown-button" href="#!" data-activates="dropdown-user">
                                Olá <b>{{ Auth::user()->name }}</b>!<i class="material-icons right">arrow_drop_down</i>
                            </a>
                            <ul id="dropdown-user" class="dropdown-content">
                                <li class="divider"></li>
                                <li><a href="{{ url('user/edit/'.Auth::id()) }}">Meus dados</a></li>
                                @if(Auth::user()->admin == 1)
                                <li><a href="{{ url('admin/user/list') }}">Usuários</a></li>
                                <li><a href="{{ url('admin/produtos') }}">Produtos</a></li>
                                <li><a href="{{ url('admin/cupons') }}">Cupons</a></li>
                                <li><a href="{{ url('admin/vendas') }}">Vendas</a></li>
                                @endif
                                <div class="divider"></div>
                                <li class="active">
                                    <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Sair
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="row">
            <div class="col s12 m3 l2">

                <div class="section row">
                    <form method="get" action="{{ url('busca') }}">
                        <h6 class="orange-text"><b>Pesquisar</b></h6>
                        <input type="search" name="chave" value="" placeholder="">
                        <select name="categoria">
                            <option>Categoria...</option>
                            <option value="artista">Artista</option>
                            <option value="titulo">CD</option>
                        </select>
                        <button type="submit" class="btn right deep-purple darken-1"><i class="material-icons left">search</i>Buscar</button>
                    </form>
                </div>
                <div class="divider"></div>
                <div class="section row">
                    <h6 class="orange-text">
                        <i class="material-icons">queue_music</i><b> Estilos Musicais</b>
                    </h6>
                    <table>
                        <tbody>
                            <tr>
                                <td>
                                    <h7>
                                        <a href="{{ url('/estilo/Funk') }}">
                                        <i class="material-icons left">music_note</i>
                                        Funk
                                        </a>
                                    </h7>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h7>
                                        <a href="{{ url('/estilo/Indie') }}">
                                        <i class="material-icons left">music_note</i>
                                        Indie
                                        </a>
                                    </h7>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h7>
                                        <a href="{{ url('/estilo/MPB') }}">
                                        <i class="material-icons left">music_note</i>
                                        MPB
                                        </a>
                                    </h7>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h7>
                                        <a href="{{ url('/estilo/Pop') }}">
                                        <i class="material-icons left">music_note</i>
                                        Pop
                                        </a>
                                    </h7>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h7>
                                        <a href="{{ url('/estilo/PopRock') }}">
                                        <i class="material-icons left">music_note</i>
                                        PopRock
                                        </a>
                                    </h7>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h7>
                                        <a href="{{ url('/estilo/R&B') }}">
                                        <i class="material-icons left">music_note</i>
                                        R&B
                                        </a>
                                    </h7>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h7>
                                        <a href="{{ url('/estilo/Rap') }}">
                                        <i class="material-icons left">music_note</i>
                                        Rap
                                        </a>
                                    </h7>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h7>
                                        <a href="{{ url('/estilo/Rock') }}">
                                        <i class="material-icons left">music_note</i>
                                        Rock
                                        </a>
                                    </h7>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col s12 m9 l10">
                @yield('pagina_conteudo')
            </div>
        </div>
        

        @if(!Auth::guest())
            <form id="logout-form" action="{{ url('/logout') }}" method="POST" class="hide">
                {{ csrf_field() }}
            </form>
        @endif
    </main>
    <footer class="page-footer deep-purple darken-1">
        <div class="footer-copyright">
            <div class="container">
                Equipe: Diego, Diogo, Georgia | PROINT II
                <a class="white-text text-lighten-4 right" href="http://github.com/diego380/cdstore">@Github</a>
            </div>
        </div>
    </footer>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
    @stack('scripts')
    <script type="text/javascript">
        $( document ).ready(function(){
            $(".button-collapse").sideNav();
            $('select').material_select();
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.13/jquery.mask.min.js"></script>
    <script src="/js/cdstore.js"></script>
</body>
</html>