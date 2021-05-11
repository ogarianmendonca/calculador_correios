<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <link href="{{ asset('assets/img/apple-icon.png') }}" rel="apple-touch-icon" sizes="76x76">
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon" type="image/png" >

    <title>
        Calculador Correios
    </title>

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <link href="{{ asset('assets/css/material-kit.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/demo/demo.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body class="index-page sidebar-collapse">
    <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="{{ url('/') }}">
                    HOME
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
{{--                    <li class="dropdown nav-item">--}}
{{--                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">--}}
{{--                            <i class="material-icons">apps</i> Components--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-menu dropdown-with-icons">--}}
{{--                            <a href="./index.html" class="dropdown-item">--}}
{{--                                <i class="material-icons">layers</i> All Components--}}
{{--                            </a>--}}
{{--                            <a href="https://demos.creative-tim.com/material-kit/docs/2.0/getting-started/introduction.html" class="dropdown-item">--}}
{{--                                <i class="material-icons">content_paste</i> Documentation--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </li>--}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('calculador/index') }}">
                            <i class="material-icons">apps</i> Calculador
                        </a>
                    </li>
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="https://www.creative-tim.com/product/material-kit-pro" target="_blank">--}}
{{--                            <i class="material-icons">unarchive</i> Upgrade to PRO--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank" data-original-title="Follow us on Twitter" rel="nofollow">--}}
{{--                            <i class="fa fa-twitter"></i>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.facebook.com/CreativeTim" target="_blank" data-original-title="Like us on Facebook" rel="nofollow">--}}
{{--                            <i class="fa fa-facebook-square"></i>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank" data-original-title="Follow us on Instagram" rel="nofollow">--}}
{{--                            <i class="fa fa-instagram"></i>--}}
{{--                        </a>--}}
{{--                    </li>--}}
                </ul>
            </div>
        </div>
    </nav>

    <div class="page-header header-filter clear-filter purple-filter" data-parallax="true" style="background-image: url({{ asset('assets/img/city-profile.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <div class="brand">
                        <h2>Sistema Calculador Correios</h2>
                        <h3><strong>O calculador de preços e prazos de encomendas dos Correios é destinado aos
                            clientes que possuem CONTRATO de SEDEX e PAC.</strong></h3>

                        @if (Request::segment(1) !== 'calculador')
                            <br>
                            <a type="button" class="btn btn-info" href="{{ url('calculador/index') }}">
                                <i class="material-icons">apps</i> Calculador
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if (Request::segment(1) === 'calculador')
        <div class="main main-raised">
            <div class="section section-basic">
                <div class="container">
                    @yield('content')
                </div>
            </div>
        </div>
    @endif

    <footer class="footer" data-background-color="black">
        <div class="container">
{{--            <nav class="float-left">--}}
{{--                <ul>--}}
{{--                    <li>--}}
{{--                        <a href="https://www.creative-tim.com/">--}}
{{--                            Creative Tim--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="https://www.creative-tim.com/presentation">--}}
{{--                            About Us--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="https://www.creative-tim.com/blog">--}}
{{--                            Blog--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="https://www.creative-tim.com/license">--}}
{{--                            Licenses--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </nav>--}}
{{--            <div class="copyright float-right">--}}
{{--                &copy;--}}
{{--                <script>--}}
{{--                    document.write(new Date().getFullYear())--}}
{{--                </script>--}}
{{--            </div>--}}
        </div>
    </footer>

    <script src="{{ asset('assets/js/core/jquery.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/core/popper.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/core/bootstrap-material-design.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/plugins/moment.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/plugins/bootstrap-datetimepicker.js') }}" defer></script>
    <script src="{{ asset('assets/js/plugins/nouislider.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/material-kit.js') }}" defer></script>
</body>
</html>
