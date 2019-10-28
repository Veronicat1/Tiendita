<!DOCTYPE html>
<html class="has-sticky-footer" lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Tiendita</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="../dist/css/bootstrap-essentials.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="fill" style="margin-bottom: 61px;">

    <!-- Layout Start -->

    <div class="container container-smooth mt-xs-4 mb-xs-4">
        <header role="banner">

            <nav class="navbar navbar-default" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                    <a class="navbar-brand" href="#">Tiendita</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Base de Datos <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Categoria</a></li>
                                <li><a href="#">Figuras</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Contactos</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="buscar" class="btn btn-default btn-block-xs">Buscar</button>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                    @if (Route::has('login'))
                    <div class="navbar-brand"><a href="#"></a></li>
                        @auth
                            @else
                                <a  href="{{ route('login') }}">Login</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>

        </header>
        <main role="main" class="page-main">
            <div class="page-heading">
                <h1 class="page-header mt-xs-4">
                    Tiendita De Figuras
                </h1>

                <ol class="breadcrumb">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li class="active">Current</li>
                </ol>

            </div>
            <aside role="complementary" class="page-sidebar break-xs">

                <div class="list-group ">
                    <a href="#item1" class="list-group-item">Item 1</a>
                    <a href="#item2" class="list-group-item">Item 2</a>
                    <a href="#item3" class="list-group-item">Item 3</a>
                </div>

            </aside>
            <div class="page-content pl-sm-4">
                <h2 id="item1">Item 1</h2>
                <p>

                </p>
                <h2 id="item2">Item 2</h2>
                <p>

                </p>
                <h2 id="item3">Item 3</h2>
                <p>

                </p>


            </div>
        </main>
    </div>
    <footer role="contentinfo" class="footer navbar-inverse">
        <div class="container">
            <p></p>
        </div>
    </footer>
    <!-- Layout End -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="../dist/js/bootstrap-essentials.min.js"></script>


</body></html>
