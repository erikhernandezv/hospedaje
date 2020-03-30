<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="erikdhv@gmail.com">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="apple-touch-icon" href="{{URL::to('/')}}/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{URL::to('/')}}/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700" rel="stylesheet">
    <!--<link href="" rel="stylesheet">-->
    {!! Html::style('https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css') !!}
    <!-- BEGIN VENDOR CSS-->
    {!! Html::style('app-assets/css/vendors.css') !!}
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    {!! Html::style('app-assets/css/app.css') !!}
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    {!! Html::style('app-assets/css/core/menu/menu-types/vertical-menu-modern.css') !!}
    {!! Html::style('app-assets/css/core/colors/palette-gradient.css') !!}
    {!! Html::style('app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css') !!}
    {!! Html::style('app-assets/vendors/css/charts/morris.css') !!}
    {!! Html::style('app-assets/fonts/simple-line-icons/style.css') !!}
    {!! Html::style('app-assets/css/core/colors/palette-gradient.css') !!}
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    {!! Html::style('assets/css/style.css') !!}
    <!-- END Custom CSS-->
</head>

<body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
    <!-- fixed-top-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                    <li class="nav-item mr-auto">
                        <a class="navbar-brand" href="index.html">
                            <img class="brand-logo" alt="modern admin logo" src="{{URL::to('/')}}/app-assets/images/logo/logo.png">
                            <h3 class="brand-text">{{ config('app.name', 'Laravel') }}</h3>
                        </a>
                    </li>
                    <li class="nav-item d-none d-md-block float-right"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="toggle-icon ft-toggle-right font-medium-3 white" data-ticon="ft-toggle-right"></i></a></li>
                    <li class="nav-item d-md-none">
                        <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a>
                    </li>
                </ul>
            </div>
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-user nav-item">
                            <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <span class="mr-0">Hola,
                                    <span class="user-name text-bold-700">
                                        @if(Auth::check()) 
                                            {{ Auth::user()->name }} 
                                        @else 
                                            No Autenticado
                                        @endif
                                    </span>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="{!! route('users.edit', [Auth::user()->id]) !!}"><i class="ft-user"></i> Edit Profile </a>
                                <a class="dropdown-item" href="#"><i class="ft-mail"></i> My Inbox</a>
                                <a class="dropdown-item" href="#"><i class="ft-check-square"></i> Task</a>
                                <a class="dropdown-item" href="#"><i class="ft-message-square"></i> Chats</a>

                                <div class="dropdown-divider"></div><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="ft-power"></i> Salir</a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                </form>
                            </div>
                        </li>
                        <li class="dropdown dropdown-notification nav-item">
                            <a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-bell"></i>
                                <span class="badge badge-pill badge-default badge-danger badge-default badge-up badge-glow">5</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <h6 class="dropdown-header m-0">
                                        <span class="grey darken-2">Notifications</span>
                                    </h6>
                                    <span class="notification-tag badge badge-default badge-danger float-right m-0">5 New</span>
                                </li>
                                <li class="scrollable-container media-list w-100">
                                    <a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i class="ft-plus-square icon-bg-circle bg-cyan"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">You have new order!</h6>
                                                <p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">30 minutes ago</time>
                                                </small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i class="ft-download-cloud icon-bg-circle bg-red bg-darken-1"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading red darken-1">99% Server load</h6>
                                                <p class="notification-text font-small-3 text-muted">Aliquam tincidunt mauris eu risus.</p>
                                                <small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Five hour ago</time>
                                                </small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i class="ft-alert-triangle icon-bg-circle bg-yellow bg-darken-3"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading yellow darken-3">Warning notifixation</h6>
                                                <p class="notification-text font-small-3 text-muted">Vestibulum auctor dapibus neque.</p>
                                                <small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time>
                                                </small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i class="ft-check-circle icon-bg-circle bg-cyan"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Complete the task</h6>
                                                <small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last week</time>
                                                </small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i class="ft-file icon-bg-circle bg-teal"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Generate monthly report</h6>
                                                <small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last month</time>
                                                </small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all notifications</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>




    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <!--***************************************************-->
    <!---Aquí inicial el Menú -->
    <!--***************************************************-->
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="main-menu-content">
            <!--Menú para las opciones de usuario, roles y permisos-->
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            @if(auth()->user()->can('usuarios') || auth()->user()->hasRole(config('seguridad.rol_admin')))
                <li class=" navigation-header">
                    <span data-i18n="nav.category.layouts">Accesos</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="Layouts"></i>
                </li>
                <li class=" nav-item"><a href="#"><i class="la la-columns"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Usuarios</span></a>
                    <ul class="menu-content">
                    @if(auth()->user()->can('usuarios_create') || auth()->user()->hasRole(config('seguridad.rol_admin')))
                        <li><a class="menu-item" href="{{ route('register') }}" data-i18n="nav.page_layouts.1_column">Registrar usuarios</a>
                        </li>
                    @endif
                    @if(auth()->user()->can('usuarios_search') || auth()->user()->hasRole(config('seguridad.rol_admin')))
                        <li><a class="menu-item" href="{{ route('users.index') }}" data-i18n="nav.page_layouts.2_columns">Consultar usuarios</a>
                        </li>
                    @endif
                    </ul>
                </li>
            @endif
            </ul>
            <!-- Menú para las opciones de Configuraciones / parametrizaciones del sistema de información -->
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            @if(auth()->user()->can('usuarios') || auth()->user()->hasRole(config('seguridad.rol_admin')))
                <li class=" navigation-header">
                    <span data-i18n="nav.category.layouts">Parametrizaciones</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="Layouts"></i>
                </li>
                <li class=" nav-item"><a href="#"><i class="la la-columns"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Dotaciones</span></a>
                    <ul class="menu-content">
                        @if(auth()->user()->can('usuarios_create') || auth()->user()->hasRole(config('seguridad.rol_admin')))
                            <li><a class="menu-item" href="{{ route('dotacions.create') }}" data-i18n="nav.page_layouts.1_column">Ingresar</a>
                            </li>
                        @endif
                    </ul>
                    <ul class="menu-content">
                        @if(auth()->user()->can('usuarios_create') || auth()->user()->hasRole(config('seguridad.rol_admin')))
                            <li><a class="menu-item" href="{{ route('dotacions.index') }}" data-i18n="nav.page_layouts.1_column">Consultar</a>
                            </li>
                        @endif
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="la la-columns"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Eps</span></a>
                    <ul class="menu-content">
                        @if(auth()->user()->can('usuarios_create') || auth()->user()->hasRole(config('seguridad.rol_admin')))
                            <li><a class="menu-item" href="{{ route('eps.create') }}" data-i18n="nav.page_layouts.1_column">Ingresar</a>
                            </li>
                        @endif
                    </ul>
                    <ul class="menu-content">
                        @if(auth()->user()->can('usuarios_create') || auth()->user()->hasRole(config('seguridad.rol_admin')))
                            <li><a class="menu-item" href="{{ route('eps.index') }}" data-i18n="nav.page_layouts.1_column">Consultar</a>
                            </li>
                        @endif
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="la la-columns"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Equipos</span></a>
                    <ul class="menu-content">
                        @if(auth()->user()->can('usuarios_create') || auth()->user()->hasRole(config('seguridad.rol_admin')))
                            <li><a class="menu-item" href="{{ route('register') }}" data-i18n="nav.page_layouts.1_column">Ingresar</a>
                            </li>
                        @endif
                    </ul>
                    <ul class="menu-content">
                        @if(auth()->user()->can('usuarios_create') || auth()->user()->hasRole(config('seguridad.rol_admin')))
                            <li><a class="menu-item" href="{{ route('register') }}" data-i18n="nav.page_layouts.1_column">Consultar</a>
                            </li>
                        @endif
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="la la-columns"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Personas</span></a>
                    <ul class="menu-content">
                        @if(auth()->user()->can('usuarios_create') || auth()->user()->hasRole(config('seguridad.rol_admin')))
                            <li><a class="menu-item" href="{{ route('register') }}" data-i18n="nav.page_layouts.1_column">Ingresar</a>
                            </li>
                        @endif
                    </ul>
                    <ul class="menu-content">
                        @if(auth()->user()->can('usuarios_create') || auth()->user()->hasRole(config('seguridad.rol_admin')))
                            <li><a class="menu-item" href="{{ route('register') }}" data-i18n="nav.page_layouts.1_column">Consultar</a>
                            </li>
                        @endif
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="la la-columns"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Servicios</span></a>
                    <ul class="menu-content">
                        @if(auth()->user()->can('usuarios_create') || auth()->user()->hasRole(config('seguridad.rol_admin')))
                            <li><a class="menu-item" href="{{ route('register') }}" data-i18n="nav.page_layouts.1_column">Ingresar</a>
                            </li>
                        @endif
                    </ul>
                    <ul class="menu-content">
                        @if(auth()->user()->can('usuarios_create') || auth()->user()->hasRole(config('seguridad.rol_admin')))
                            <li><a class="menu-item" href="{{ route('register') }}" data-i18n="nav.page_layouts.1_column">Consultar</a>
                            </li>
                        @endif
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="la la-columns"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Vehiculos</span></a>
                    <ul class="menu-content">
                        @if(auth()->user()->can('usuarios_create') || auth()->user()->hasRole(config('seguridad.rol_admin')))
                            <li><a class="menu-item" href="{{ route('register') }}" data-i18n="nav.page_layouts.1_column">Ingresar</a>
                            </li>
                        @endif
                    </ul>
                    <ul class="menu-content">
                        @if(auth()->user()->can('usuarios_create') || auth()->user()->hasRole(config('seguridad.rol_admin')))
                            <li><a class="menu-item" href="{{ route('register') }}" data-i18n="nav.page_layouts.1_column">Consultar</a>
                            </li>
                        @endif
                    </ul>
                </li>
            @endif
            </ul>
            
            <!-- Menú para las opciones de Operación o Logica del negocio del sistema de información -->
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            @if(auth()->user()->can('usuarios') || auth()->user()->hasRole(config('seguridad.rol_admin')))
                <li class=" navigation-header">
                    <span data-i18n="nav.category.layouts">Operación</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="Layouts"></i>
                </li>
                <li class=" nav-item"><a href="#"><i class="la la-columns"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Ingreso al hospedaje</span></a>
                    <ul class="menu-content">
                    @if(auth()->user()->can('usuarios_create') || auth()->user()->hasRole(config('seguridad.rol_admin')))
                        <li><a class="menu-item" href="{{ route('register') }}" data-i18n="nav.page_layouts.1_column">Registrar usuarios</a>
                        </li>
                    @endif
                    @if(auth()->user()->can('usuarios_search') || auth()->user()->hasRole(config('seguridad.rol_admin')))
                        <li><a class="menu-item" href="{{ route('users.index') }}" data-i18n="nav.page_layouts.2_columns">Consultar usuarios</a>
                        </li>
                    @endif
                    </ul>
                </li>

                <li class=" nav-item"><a href="#"><i class="la la-columns"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Alimentación</span></a>
                    <ul class="menu-content">
                    @if(auth()->user()->can('usuarios_create') || auth()->user()->hasRole(config('seguridad.rol_admin')))
                        <li><a class="menu-item" href="{{ route('register') }}" data-i18n="nav.page_layouts.1_column">Registrar usuarios</a>
                        </li>
                    @endif
                    @if(auth()->user()->can('usuarios_search') || auth()->user()->hasRole(config('seguridad.rol_admin')))
                        <li><a class="menu-item" href="{{ route('users.index') }}" data-i18n="nav.page_layouts.2_columns">Consultar usuarios</a>
                        </li>
                    @endif
                    </ul>
                </li>

                <li class=" nav-item"><a href="#"><i class="la la-columns"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Caja Menor</span></a>
                    <ul class="menu-content">
                    @if(auth()->user()->can('usuarios_create') || auth()->user()->hasRole(config('seguridad.rol_admin')))
                        <li><a class="menu-item" href="{{ route('register') }}" data-i18n="nav.page_layouts.1_column">Registrar usuarios</a>
                        </li>
                    @endif
                    @if(auth()->user()->can('usuarios_search') || auth()->user()->hasRole(config('seguridad.rol_admin')))
                        <li><a class="menu-item" href="{{ route('users.index') }}" data-i18n="nav.page_layouts.2_columns">Consultar usuarios</a>
                        </li>
                    @endif
                    </ul>
                </li>

                <li class=" nav-item"><a href="#"><i class="la la-columns"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Mantenimiento de Equipos</span></a>
                    <ul class="menu-content">
                    @if(auth()->user()->can('usuarios_create') || auth()->user()->hasRole(config('seguridad.rol_admin')))
                        <li><a class="menu-item" href="{{ route('register') }}" data-i18n="nav.page_layouts.1_column">Registrar usuarios</a>
                        </li>
                    @endif
                    @if(auth()->user()->can('usuarios_search') || auth()->user()->hasRole(config('seguridad.rol_admin')))
                        <li><a class="menu-item" href="{{ route('users.index') }}" data-i18n="nav.page_layouts.2_columns">Consultar usuarios</a>
                        </li>
                    @endif
                    </ul>
                </li>

                <li class=" nav-item"><a href="#"><i class="la la-columns"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Revisión de vehiculos</span></a>
                    <ul class="menu-content">
                    @if(auth()->user()->can('usuarios_create') || auth()->user()->hasRole(config('seguridad.rol_admin')))
                        <li><a class="menu-item" href="{{ route('register') }}" data-i18n="nav.page_layouts.1_column">Registrar usuarios</a>
                        </li>
                    @endif
                    @if(auth()->user()->can('usuarios_search') || auth()->user()->hasRole(config('seguridad.rol_admin')))
                        <li><a class="menu-item" href="{{ route('users.index') }}" data-i18n="nav.page_layouts.2_columns">Consultar usuarios</a>
                        </li>
                    @endif
                    </ul>
                </li>

            @endif
            </ul>


            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" navigation-header">
                    <span data-i18n="nav.category.layouts">Layouts</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="Layouts"></i>
                </li>
                <li class=" nav-item"><a href="#"><i class="la la-columns"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Page layouts</span><span class="badge badge badge-pill badge-danger float-right mr-2">New</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="layout-1-column.html" data-i18n="nav.page_layouts.1_column">1 column</a>
                        </li>
                        <li><a class="menu-item" href="layout-2-columns.html" data-i18n="nav.page_layouts.2_columns">2 columns</a>
                        </li>
                        <li><a class="menu-item" href="#" data-i18n="nav.page_layouts.3_columns.main">Content Sidebar</a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="layout-content-left-sidebar.html" data-i18n="nav.page_layouts.3_columns.left_sidebar">Left sidebar</a>
                                </li>
                                <li><a class="menu-item" href="layout-content-left-sticky-sidebar.html" data-i18n="nav.page_layouts.3_columns.left_sticky_sidebar">Left sticky sidebar</a>
                                </li>
                                <li><a class="menu-item" href="layout-content-right-sidebar.html" data-i18n="nav.page_layouts.3_columns.right_sidebar">Right sidebar</a>
                                </li>
                                <li><a class="menu-item" href="layout-content-right-sticky-sidebar.html" data-i18n="nav.page_layouts.3_columns.right_sticky_sidebar">Right sticky sidebar</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="menu-item" href="#" data-i18n="nav.page_layouts.3_columns_detached.main">Content Det. Sidebar</a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="layout-content-detached-left-sidebar.html" data-i18n="nav.page_layouts.3_columns_detached.detached_left_sidebar">Detached left sidebar</a>
                                </li>
                                <li><a class="menu-item" href="layout-content-detached-left-sticky-sidebar.html" data-i18n="nav.page_layouts.3_columns_detached.detached_sticky_left_sidebar">Detached sticky left sidebar</a>
                                </li>
                                <li><a class="menu-item" href="layout-content-detached-right-sidebar.html" data-i18n="nav.page_layouts.3_columns_detached.detached_right_sidebar">Detached right sidebar</a>
                                </li>
                                <li><a class="menu-item" href="layout-content-detached-right-sticky-sidebar.html" data-i18n="nav.page_layouts.3_columns_detached.detached_sticky_right_sidebar">Detached sticky right sidebar</a>
                                </li>
                            </ul>
                        </li>
                        <li class="navigation-divider"></li>
                        <li><a class="menu-item" href="layout-fixed-navbar.html" data-i18n="nav.page_layouts.fixed_navbar">Fixed navbar</a>
                        </li>
                        <li><a class="menu-item" href="layout-fixed-navigation.html" data-i18n="nav.page_layouts.fixed_navigation">Fixed navigation</a>
                        </li>
                        <li><a class="menu-item" href="layout-fixed-navbar-navigation.html" data-i18n="nav.page_layouts.fixed_navbar_navigation">Fixed navbar &amp; navigation</a>
                        </li>
                        <li><a class="menu-item" href="layout-fixed-navbar-footer.html" data-i18n="nav.page_layouts.fixed_navbar_footer">Fixed navbar &amp; footer</a>
                        </li>
                        <li class="navigation-divider"></li>
                        <li><a class="menu-item" href="layout-fixed.html" data-i18n="nav.page_layouts.fixed_layout">Fixed layout</a>
                        </li>
                        <li><a class="menu-item" href="layout-boxed.html" data-i18n="nav.page_layouts.boxed_layout">Boxed layout</a>
                        </li>
                        <li><a class="menu-item" href="layout-static.html" data-i18n="nav.page_layouts.static_layout">Static layout</a>
                        </li>
                        <li class="navigation-divider"></li>
                        <li><a class="menu-item" href="layout-light.html" data-i18n="nav.page_layouts.light_layout">Light layout</a>
                        </li>
                        <li><a class="menu-item" href="layout-dark.html" data-i18n="nav.page_layouts.dark_layout">Dark layout</a>
                        </li>
                        <li><a class="menu-item" href="layout-semi-dark.html" data-i18n="nav.page_layouts.semi_dark_layout">Semi dark layout</a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="la la-navicon"></i><span class="menu-title" data-i18n="nav.navbars.main">Navbars</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="navbar-light.html" data-i18n="nav.navbars.nav_light">Navbar Light</a>
                        </li>
                        <li><a class="menu-item" href="navbar-dark.html" data-i18n="nav.navbars.nav_dark">Navbar Dark</a>
                        </li>
                        <li><a class="menu-item" href="navbar-semi-dark.html" data-i18n="nav.navbars.nav_semi">Navbar Semi Dark</a>
                        </li>
                        <li><a class="menu-item" href="navbar-brand-center.html" data-i18n="nav.navbars.nav_brand_center">Brand Center</a>
                        </li>
                        <li><a class="menu-item" href="navbar-fixed-top.html" data-i18n="nav.navbars.nav_fixed_top">Fixed Top</a>
                        </li>
                        <li><a class="menu-item" href="#" data-i18n="nav.navbars.nav_hide_on_scroll.main">Hide on Scroll</a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="navbar-hide-on-scroll-top.html" data-i18n="nav.navbars.nav_hide_on_scroll.nav_hide_on_scroll_top">Hide on Scroll Top</a>
                                </li>
                                <li><a class="menu-item" href="navbar-hide-on-scroll-bottom.html" data-i18n="nav.navbars.nav_hide_on_scroll.nav_hide_on_scroll_bottom">Hide on Scroll Bottom</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="menu-item" href="navbar-components.html" data-i18n="nav.navbars.nav_components">Navbar Components</a>
                        </li>
                        <li><a class="menu-item" href="navbar-styling.html" data-i18n="nav.navbars.nav_styling">Navbar Styling</a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="la la-arrows-v"></i><span class="menu-title" data-i18n="nav.vertical_nav.main">Vertical Nav</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="#" data-i18n="nav.vertical_nav.vertical_navigation_types.main">Navigation Types</a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="../vertical-menu-template" data-i18n="nav.vertical_nav.vertical_navigation_types.vertical_menu">Vertical Menu</a>
                                </li>
                                <li><a class="menu-item" href="../vertical-modern-menu-template" data-i18n="nav.vertical_nav.vertical_navigation_types.vertical_modern-menu">Vertical Modern Menu</a>
                                </li>
                                <li><a class="menu-item" href="../vertical-overlay-menu-template" data-i18n="nav.vertical_nav.vertical_navigation_types.vertical_overlay">Vertical Overlay</a>
                                </li>
                                <li><a class="menu-item" href="../vertical-compact-menu-template" data-i18n="nav.vertical_nav.vertical_navigation_types.vertical_compact">Vertical Compact</a>
                                </li>
                                <li><a class="menu-item" href="../vertical-content-menu-template" data-i18n="nav.vertical_nav.vertical_navigation_types.vertical_content">Vertical Content</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="menu-item" href="vertical-nav-fixed.html" data-i18n="nav.vertical_nav.vertical_nav_fixed">Fixed Navigation</a>
                        </li>
                        <li><a class="menu-item" href="vertical-nav-static.html" data-i18n="nav.vertical_nav.vertical_nav_static">Static Navigation</a>
                        </li>
                        <li><a class="menu-item" href="vertical-nav-light.html" data-i18n="nav.vertical_nav.vertical_nav_light">Navigation Light</a>
                        </li>
                        <li><a class="menu-item" href="vertical-nav-dark.html" data-i18n="nav.vertical_nav.vertical_nav_dark">Navigation Dark</a>
                        </li>
                        <li><a class="menu-item" href="vertical-nav-accordion.html" data-i18n="nav.vertical_nav.vertical_nav_accordion">Accordion Navigation</a>
                        </li>
                        <li><a class="menu-item" href="vertical-nav-collapsible.html" data-i18n="nav.vertical_nav.vertical_nav_collapsible">Collapsible Navigation</a>
                        </li>
                        <li><a class="menu-item" href="vertical-nav-flipped.html" data-i18n="nav.vertical_nav.vertical_nav_flipped">Flipped Navigation</a>
                        </li>
                        <li><a class="menu-item" href="vertical-nav-native-scroll.html" data-i18n="nav.vertical_nav.vertical_nav_native_scroll">Native scroll</a>
                        </li>
                        <li><a class="menu-item" href="vertical-nav-right-side-icon.html" data-i18n="nav.vertical_nav.vertical_nav_right_side_icon">Right side icons</a>
                        </li>
                        <li><a class="menu-item" href="vertical-nav-bordered.html" data-i18n="nav.vertical_nav.vertical_nav_bordered">Bordered Navigation</a>
                        </li>
                        <li><a class="menu-item" href="vertical-nav-disabled-link.html" data-i18n="nav.vertical_nav.vertical_nav_disabled_link">Disabled Navigation</a>
                        </li>
                        <li><a class="menu-item" href="vertical-nav-styling.html" data-i18n="nav.vertical_nav.vertical_nav_styling">Navigation Styling</a>
                        </li>
                        <li><a class="menu-item" href="vertical-nav-tags-pills.html" data-i18n="nav.vertical_nav.vertical_nav_tags_pills">Tags &amp; Pills</a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="la la-arrows-h"></i><span class="menu-title" data-i18n="nav.horz_nav.main">Horizontal Nav</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="#" data-i18n="nav.horz_nav.horizontal_navigation_types.main">Navigation Types</a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="../horizontal-menu-template" data-i18n="nav.horz_nav.horizontal_navigation_types.horizontal_left_icon_navigation">Left Icon Navigation</a>
                                </li>
                                <li><a class="menu-item" href="../horizontal-menu-template-nav" data-i18n="nav.horz_nav.horizontal_navigation_types.horizontal_menu_template_nav">Top Icon Navigation</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="la la-header"></i><span class="menu-title" data-i18n="nav.page_headers.main">Page Headers</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="headers-breadcrumbs-basic.html" data-i18n="nav.page_headers.headers_breadcrumbs_basic">Breadcrumbs basic</a>
                        </li>
                        <li><a class="menu-item" href="headers-breadcrumbs-top.html" data-i18n="nav.page_headers.headers_breadcrumbs_top">Breadcrumbs top</a>
                        </li>
                        <li><a class="menu-item" href="headers-breadcrumbs-bottom.html" data-i18n="nav.page_headers.headers_breadcrumbs_bottom">Breadcrumbs bottom</a>
                        </li>
                        <li><a class="menu-item" href="headers-breadcrumbs-top-with-description.html" data-i18n="nav.page_headers.headers_breadcrumbs_top_with_description">Breadcrumbs top with desc</a>
                        </li>
                        <li><a class="menu-item" href="headers-breadcrumbs-with-button.html" data-i18n="nav.page_headers.headers_breadcrumbs_with_button">Breadcrumbs with button</a>
                        </li>
                        <li><a class="menu-item" href="headers-breadcrumbs-with-round-button.html" data-i18n="nav.page_headers.headers_breadcrumbs_with_round_button">Breadcrumbs with button 2</a>
                        </li>
                        <li><a class="menu-item" href="headers-breadcrumbs-with-button-group.html" data-i18n="nav.page_headers.headers_breadcrumbs_with_button_group">Breadcrumbs with buttons</a>
                        </li>
                        <li><a class="menu-item" href="headers-breadcrumbs-with-description.html" data-i18n="nav.page_headers.headers_breadcrumbs_breadcrumbs_with_description">Breadcrumbs with desc</a>
                        </li>
                        <li><a class="menu-item" href="headers-breadcrumbs-with-search.html" data-i18n="nav.page_headers.headers_breadcrumbs_breadcrumbs_with_search">Breadcrumbs with search</a>
                        </li>
                        <li><a class="menu-item" href="headers-breadcrumbs-with-stats.html" data-i18n="nav.page_headers.headers_breadcrumbs_breadcrumbs_with_stats">Breadcrumbs with stats</a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="la la-download"></i><span class="menu-title" data-i18n="nav.footers.main">Footers</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="footer-light.html" data-i18n="nav.footers.footer_light">Footer Light</a>
                        </li>
                        <li><a class="menu-item" href="footer-dark.html" data-i18n="nav.footers.footer_dark">Footer Dark</a>
                        </li>
                        <li><a class="menu-item" href="footer-transparent.html" data-i18n="nav.footers.footer_transparent">Footer Transparent</a>
                        </li>
                        <li><a class="menu-item" href="footer-fixed.html" data-i18n="nav.footers.footer_fixed">Footer Fixed</a>
                        </li>
                        <li><a class="menu-item" href="footer-components.html" data-i18n="nav.footers.footer_components">Footer Components</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--***************************************************-->
    <!--Aquí Termina el menu-->
    <!--***************************************************-->

    <!--******************************************-->
    <!--Contenido Pagina-->
    <!--*****************************************-->

    <div class="content-body">
        <div class="app-content content">
            <div class="content-wrapper">
                <div class="content-header row">
                    <div class="content-header-left col-md-6 col-12 mb-1">
                        <h2 class="content-header-title">@yield('titulopanelprincipal')</h2>
                    </div>
                    <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-12">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{URL::to('/')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item active">@yield('titulopanelprincipal')
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="content-body">
                    <!-- Introduction -->
                    <div class="card">
                        <div class="card-header">
                            <h4 id="basic-forms" class="card-title">@yield('titulosecundario')</h4>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0"><!--data-action="collapse"-->
                                    @yield('add')
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content" aria-expanded="true">
                            <div class="card-body">
                                @yield('content')
                                <!--<p class="card-text">Modern admin is super flexible, powerful, clean & modern responsive <strong>bootstrap admin template</strong> with unlimited possibilities. It includes 7 pre-built templates with organized folder
                                    structure, clean & commented code, 1500+ pages, 1000+ components, 100+ charts, 50+ advance cards (widgets) and many more. Modern admin provides RTL support, searchable navigation, unique menu layouts, advance cards
                                    and
                                    incredible support. Modern admin can be used for any type of web applications: Project Management, eCommerce backends, CRM, Analytics, Fitness or any custom admin panels. It comes with 3 niche dashboards. Modern
                                    admin
                                    template is powered with HTML 5, SASS, GRUNT, PUG [Pug] & Twitter Bootstrap 4 which looks great on Desktops, Tablets, and Mobile Devices. Modern bootstrap admin template comes with starter kit which will help
                                    developers to get started quickly.</p>

                                <h6 class="mt-2">Dependencies</h6>
                                <hr>
                                <ul>
                                    <li><a href="https://v4-alpha.getbootstrap.com/" target="_blank">Bootstrap 4</a></li>
                                    <li><a href="https://github.com/pugjs/pug" target="_blank">Pug (pug)</a></li>
                                    <li><a href="http://sass-lang.com/" target="_blank">Sass</a></li>
                                    <li><a href="http://gruntjs.com/" target="_blank">Grunt</a></li>
                                    <li><a href="http://gulpjs.com/" target="_blank">Gulp</a></li>
                                    <li><a href="https://jquery.com/" target="_blank">jQuery v2.1.4</a></li>
                                </ul>

                                <h6 class="mt-2">Bowser Support</h6>
                                <hr>
                                <p>Modern is built to work best in the latest desktop and mobile and tablet browsers,</p>
                                <ul>
                                    <li>Chrome (latest)</li>
                                    <li>FireFox (latest)</li>
                                    <li>Safari (latest)</li>
                                    <li>Opera (latest)</li>
                                    <li>IE10+</li>
                                </ul>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--******************************************-->
    <!--Contenido Pagina-->
    <!--*****************************************-->

    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
            <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2019. </span>
            <span class="float-md-right d-block d-md-inline-blockd-none d-lg-block"><a class="text-bold-800 grey darken-2" href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">PIXINVENT </a>, All rights
                reserved.</span>
        </p>
    </footer>
    <!-- BEGIN VENDOR JS-->
    {!! Html::script('app-assets/vendors/js/vendors.min.js') !!}

    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    {!! Html::script('app-assets/vendors/js/charts/chart.min.js') !!}
    {!! Html::script('app-assets/vendors/js/charts/raphael-min.js') !!}
    {!! Html::script('app-assets/vendors/js/charts/morris.min.js') !!}
    {!! Html::script('app-assets/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js') !!}
    {!! Html::script('app-assets/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js') !!}
    {!! Html::script('app-assets/data/jvector/visitor-data.js') !!}
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN MODERN JS-->
    {!! Html::script('app-assets/js/core/app-menu.js') !!}
    {!! Html::script('app-assets/js/core/app.js') !!}
    {!! Html::script('app-assets/js/scripts/customizer.js') !!}
    <!-- END MODERN JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    {!! Html::script('app-assets/js/scripts/pages/dashboard-sales.js') !!}
    <!-- END PAGE LEVEL JS-->
    <!-- BEGIN OWNWE PAGE LEVEL JS***-->
    <script type="text/javascript">
        @yield('scripts')    
    </script>
    
    <!-- END OWNWE PAGE LEVEL JS***-->
</body>

</html>
