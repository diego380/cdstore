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
                        <li>
                            <a class="dropdown-button" href="#!" data-activates="dropdown-user">
                                Olá {{ Auth::user()->name }}!<i class="material-icons right">arrow_drop_down</i>
                            </a>
                            <ul id="dropdown-user" class="dropdown-content">
                                <li class="divider"></li>
                                <li><a href="{{ url('user/'.Auth::id()) }}">Meus dados</a></li>
                                <li><a href=""></a></li>
                                <li><a href=""></a></li>
                                <li><a href=""></a></li>
                                <li>
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
                <div class="section">
                    <h5 class="orange-text"><b>Estilos Musicais</b></h5>
                    <a href="{{ url('/estilo/Funk') }}">
                        <i class="material-icons left">music_note</i>
                        <p>Funk</p>
                    </a>
                    <a href="{{ url('/estilo/Indie') }}">
                        <i class="material-icons left">music_note</i>
                        <p>Indie</p>
                    </a>
                    <a href="{{ url('/estilo/MPB') }}">
                        <i class="material-icons left">music_note</i>
                        <p>MPB</p>
                    </a>
                    <a href="{{ url('/estilo/Pop') }}">
                        <i class="material-icons left">music_note</i>
                        <p>Pop</p>
                    </a>
                    <a href="{{ url('/estilo/PopRock') }}">
                        <i class="material-icons left">music_note</i>
                        <p>PopRock</p>
                    </a>
                    <a href="{{ url('/estilo/R&B') }}">
                        <i class="material-icons left">music_note</i>
                        <p>R&B</p>
                    </a>
                    <a href="{{ url('/estilo/Rap') }}">
                        <i class="material-icons left">music_note</i>
                        <p>Rap</p>
                    </a>
                    <a href="{{ url('/estilo/Rock') }}">
                        <i class="material-icons left">music_note</i>
                        <p>Rock</p>
                    </a>
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
                <a class="white-text text-lighten-4 right" href="http://github.com/diego380/musicstore">@Github</a>
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
</body>
</html>