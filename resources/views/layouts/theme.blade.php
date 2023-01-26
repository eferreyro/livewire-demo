<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Curso de laravel y livewire desde cero">
    <meta name="keywords" content="curso livewire desde cero">
    <meta name="author" content="PIXINVENT">
    <title>Curso Livewire Desde Cero</title>
    <link rel="apple-touch-icon" href="{{ asset('app-assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('livewire_logo_icon.ico') }}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/vendors.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/components.css') }}">

    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/menu/menu-types/vertical-menu-modern.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/cryptocoins/cryptocoins.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/charts/apexcharts.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/colors/palette-callout.css') }}">
    <!-- END: Custom CSS-->

    <livewire:styles />


</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-lg-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                    <li class="nav-item mr-auto"><a class="navbar-brand" href="/"><img class="brand-logo" alt="logo" src="{{ asset('livewire_logo.png') }}">
                            <h3 class="brand-text">Curso-Livewire</h3>
                        </a></li>
                    <li class="nav-item d-none d-lg-block nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="toggle-icon ft-toggle-right font-medium-3 white" data-ticon="ft-toggle-right"></i></a></li>
                    <li class="nav-item d-lg-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a></li>
                </ul>
            </div>
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>

                    </ul>
                    <ul class="nav navbar-nav float-right">

                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span class="mr-1 user-name text-bold-700"> @guest LuisFax @else {{ Auth()->user()->name }} @endguest</span><span class="avatar avatar-online"><img src="{{ asset('lfax_logo.png') }}" alt="avatar"><i></i></span></a>
                            <div class="dropdown-menu dropdown-menu-right">

                                <a class="dropdown-item" href="login-with-bg-image.html"><i class="ft-power"></i> Salir</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->

    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

                <li class=" navigation-header"><span data-i18n="Crypto">Temario</span><i class="la la-ellipsis-h" data-toggle="tooltip" data-placement="right" data-original-title="Crypto"></i>
                </li>
                <li class=" nav-item"><a href="#"><i class="la la-rocket"></i><span class="menu-title" data-i18n="Authentication">Starting</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="https://laravel-livewire.com/docs/2.x/installation" target="_blank"><i></i><span>Instalación</span></a>
                        </li>
                        <li><a class="menu-item" href="https://laravel-livewire.com/docs/2.x/installation#publishing-config" target="_blank"><i></i><span>Assets</span></a>
                        </li>
                        <li><a class="menu-item" href="https://laravel-livewire.com/docs/2.x/installation#publishing-config" target="_blank"><i></i><span>Configuración</span></a>
                        </li>
                    </ul>
                </li>

                <li class=" nav-item"><a href="#"><i class="ft-grid"></i><span class="menu-title" data-i18n="Authentication">Componentes</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="{{ route('fullpage') }}"><i></i><span>Inline</span></a>
                        </li>
                        <li><a class="menu-item" href="{{ route('fullpage') }}"><i></i><span>Full Page</span></a>
                        </li>
                        <li><a class="menu-item" href="{{ route('fullpage') }}"><i></i><span>Anidados</span></a>
                        </li>
                        <li><a class="menu-item" href="{{ route('bancos') }}"><i></i><span>Pasar Parámetros</span></a>
                        </li>
                        <li><a class="menu-item" href="{{ route('properties') }}"><i></i><span>Propiedades</span></a>
                        </li>
                        <li><a class="menu-item" href="{{ route('databinding') }}"><i></i><span>Databinding</span></a>
                        </li>
                        <li><a class="menu-item" href="{{ route('actions') }}"><i></i><span>Actions</span></a>
                        </li>
                        <li><a class="menu-item" href="#"><i></i><span>Lifecycle</span></a>
                        </li>
                    </ul>
                </li>
                </li>

                <li class=" nav-item"><a href="#"><i class="la la-list"></i><span class="menu-title" data-i18n="Authentication">Formularios</span></a>
                    <ul class="menu-content">
                        <li class=" nav-item"><a href="{{ route('forms') }}"><span class="menu-title" data-i18n="History">Registro</span></a>
                        </li>
                        <li class=" nav-item"><a href="{{ route('forms') }}"><span class="menu-title" data-i18n="History">Archivos</span></a>
                        </li>
                        <li class=" nav-item"><a href="{{ route('forms') }}"><span class="menu-title" data-i18n="History">Validaciones</span></a>
                        </li>

                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="la la-comment"></i><span class="menu-title" data-i18n="Authentication">Comunicacion</span></a>
                    <ul class="menu-content">
                        <li class=" nav-item"><a href="{{ route('events') }}"><span class="menu-title" data-i18n="History">Back Events</span></a>
                        </li>
                        <li class=" nav-item"><a href="{{ route('events') }}"><span class="menu-title" data-i18n="History">Front Events</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="ft-underline"></i><span class="menu-title" data-i18n="Authentication">UI Nice</span></a>
                    <ul class="menu-content">
                        <li class=" nav-item"><a href="#"><span class="menu-title" data-i18n="Wallet">Traits</span></a>
                        </li>
                        <li class=" nav-item"><a href="#"></i><span class="menu-title" data-i18n="History">Loading States</span></a>
                        </li>
                        <li class=" nav-item"><a href="#"></i><span class="menu-title" data-i18n="History">Polling</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="ft-check-square"></i><span class="menu-title" data-i18n="Authentication">Testing</span></a>
                    <ul class="menu-content">
                        <li class=" nav-item"><a href="#"></i><span class="menu-title" data-i18n="History">Example</span></a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>

    <!-- END: Main Menu-->
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                {{ $slot }}


            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2019 <a class="text-bold-800 grey darken-2" href="https://1.envato.market/modern_admin" target="_blank">PIXINVENT</a></span><span class="float-md-right d-none d-lg-block">Hand-crafted & Made with<i class="ft-heart pink"></i><span id="scroll-top"></span></span></p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('app-assets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('app-assets/vendors/js/charts/chart.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/charts/apexcharts/apexcharts.min.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('app-assets/js/core/app.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('app-assets/js/scripts/pages/dashboard-crypto.js') }}"></script>
    <!-- END: Page JS-->

    <livewire:scripts />

</body>
<!-- END: Body-->

</html>