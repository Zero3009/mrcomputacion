<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

      
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/AdminLTE.css" />
    <link rel="stylesheet" href="/skins/skin-blue.css" />
    
    <script type="text/javascript" src="/plugins/bootstrap-3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/plugins/bootstrap-3.3.7/css/bootstrap.min.css" />
    <script type="text/javascript" src="/plugins/jQuery/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="/plugins/jQuery/jquery-ui.min.js"></script>

    <link rel="stylesheet" href="/plugins/jQuery/jquery-ui.min.css" />
    <link rel="stylesheet" href="/plugins/jQuery/jquery-ui.theme.min.css" />
    
    <link rel="stylesheet" href="/plugins/datatables/jquery.dataTables.min.css" />
    <script type="text/javascript" src="/plugins/datatables/datatables.min.js"></script>
    <script type="text/javascript" src="/plugins/datatables/datatables.bootstrap.js"></script>


        <!-- Styles -->
        
    </head>
    <body class="skin-blue sidebar-mini">
        <div class="wrapper">
            {{-- HEADER --}}
            <header class="main-header">
                <a href="{{ url('/') }}" class="logo" style="background-color: #0c99ce;">
                    <span class="logo-mini"><b>P</b>YP</span>{{-- mini logo --}}
                     <img src="/img/logo.png" alt="MR Computación">
                </a>
                <nav class="navbar navbar-static-top" role="navigation" style="background-color: #00ACEC;">
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"></a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">              
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out"></i> Cerrar sesión</a></li>
                        </ul>
                    </div>
                </nav>
            </header>
        {{-- SIDEBAR --}}
        <aside class="main-sidebar">
                <section class="sidebar">
                    <ul class="sidebar-menu">
                        <li class="header">PANEL DE CONTROL</li>
                        <li class="active">
                            <a href="/admin"><i class='glyphicon glyphicon-home'></i><span>Inicio</span></a>
                        </li>
                        <li>
                            <a href="/admin/usuarios"><i class='glyphicon glyphicon-user'></i> <span>Ingresar productos</span></a>
                        </li>
                        <li>
                            <a href="/admin/etiquetas"><i class='glyphicon glyphicon-tag'></i> <span>Salida productos</span></a>
                        </li>
                        <li>
                            <a href="/admin/estilos"><i class='glyphicon glyphicon-tint'></i> <span>Gestionar estilos</span></a>
                        </li>
                        <li>
                            <a href="/admin/areasconfig"><i class='glyphicon glyphicon-pawn'></i> <span>Gestionar areas</span></a>
                        </li>
                        <li>
                            <a href="/admin/capasutiles"><i class='glyphicon glyphicon-pawn'></i> <span>Gestionar capas utiles</span></a>
                        </li>
                        <li>
                            <a href="/admin/exportar"><i class='glyphicon glyphicon-export'></i> <span>Exportar</span></a>
                        </li>

                    </ul>
                </section>
            </aside>
        {{-- CONTENIDO --}}
            <div class="content-wrapper">
                <section class="content">
                    @yield('main-content')
                </section>
            </div>  
    </body>
</html>