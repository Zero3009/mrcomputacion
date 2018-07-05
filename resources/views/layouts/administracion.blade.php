<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Planificación</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <link rel="stylesheet" href="/AdminLTE.css" />
    <link rel="stylesheet" href="/skins/skin-blue.css" />

    

    <script type="text/javascript" src="/plugins/jQuery/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="/plugins/jQuery/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/plugins/bootstrap-3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/plugins/bootstrap-3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/plugins/jQuery/jquery-ui.min.css" />
    <link rel="stylesheet" href="/plugins/jQuery/jquery-ui.theme.min.css" />
    <link rel="stylesheet" href="/plugins/datatables/jquery.dataTables.min.css" />

    <script type="text/javascript" src="/plugins/datatables/datatables.min.js"></script>
    <script type="text/javascript" src="/plugins/datatables/datatables.bootstrap.js"></script>


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
                    <ul class="sidebar-menu" id= "ui">
                        <li class="header">PANEL DE CONTROL</li>
                        <li class="{{ Request::segment(2) === 'stock' ? 'active' : null }}">
                            <a href="/"><i class='glyphicon glyphicon-dashboard'></i><span>Dashboard</span></a>
                        </li>
                        <li class="{{ Request::segment(2) === 'addprovs' ? 'active' : null }}">
                            <a href="/admin/addprovs"><i class='glyphicon glyphicon-user'></i> <span>Gestionar proveedores</span></a>
                        </li>
                        <li class="{{ Request::segment(2) === 'etiquetas' ? 'active' : null }}">
                            <a href="/admin/etiquetas"><i class='glyphicon glyphicon-tag'></i> <span>Gestionar etiquetas</span></a>
                        </li>
                        <li class="{{ Request::segment(2) === 'estilos' ? 'active' : null }}">
                            <a href="/admin/estilos"><i class='glyphicon glyphicon-tint'></i> <span>Gestionar estilos</span></a>
                        </li>
                        <li class="{{ Request::segment(2) === 'areasconfig' ? 'active' : null }}">
                            <a href="/admin/areasconfig"><i class='glyphicon glyphicon-pawn'></i> <span>Gestionar areas</span></a>
                        </li>
                        <li class="{{ Request::segment(2) === 'capasutiles' ? 'active' : null }}">
                            <a href="/admin/capasutiles"><i class='glyphicon glyphicon-pawn'></i> <span>Gestionar capas utiles</span></a>
                        </li>
                        <li class="{{ Request::segment(2) === 'exportar' ? 'active' : null }}">
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

        </div>
        @yield('js')
    </body>
</html>
