<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIS ESTOQUE</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b7962066fb.js" crossorigin="anonymous"></script>
    <link href="/css/styles.css" rel="stylesheet" />


    <!-- SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="/assets/demo/chart-area-demo.js"></script>
    <script src="/assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="/assets/demo/datatables-demo.js"></script>
</head>

<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" href="/">
        <i class="fa-solid fa-cart-flatbed"></i> -
        <strong> SIS ESTOQUE</strong></a>
    <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">

    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                {{--                        <div class="dropdown-divider"></div>--}}
                <a class="dropdown-item" href="{{route('sair')}}">Sair</a>
            </div>
        </li>
    </ul>
</nav>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">
                        <a class="text-white text-decoration-none" href="/">
                            <div class="d-flex justify-content-center">
                                <i class="fa-solid fa-cart-flatbed fa-6x"></i>
                            </div>
                        </a>
                    </div>

                    <div class="sb-sidenav-menu-heading">Interface</div>

                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Cadastrar
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{route('tipoEstoques.create')}}"><i class='fas fa-file-alt mr-2'></i>Tipo de Estoque</a>
                            <a class="nav-link" href="{{route('categorias.create')}}"><i class='fas fa-file-alt mr-2'></i>Categoria</a>
                            <a class="nav-link" href="{{route('estoques.create')}}"><i class='fas fa-file-alt mr-2'></i>Produto</a>
                            <a class="nav-link" href="{{route('usuarios.create')}}"><i class='fas fa-file-alt mr-2'></i>Usuário</a>
                        </nav>

                    </div>

                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayoutss" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-boxes"></i></div>
                        Estoque
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayoutss" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{route('tipoEstoques.index')}}"><i class='fas fa-file-alt mr-2'></i>Tipos de Estoque</a>
                            <a class="nav-link" href="{{route('categorias.index')}}"><i class='fas fa-file-alt mr-2'></i>Categorias</a>
                            <a class="nav-link" href="{{route('estoques.index')}}"><i class='fas fa-file-alt mr-2'></i>Estoque Produto</a>
                            <a class="nav-link" href="{{route('movimentacao.index')}}"><i class='fas fa-file-alt mr-2'></i>Entrada / Saída</a>
                        </nav>

                    </div>

{{--                    <div class="sb-sidenav-menu-heading">Estoque</div>--}}


{{--                    <div class="sb-sidenav-menu-heading">Estrada e saída</div>--}}

                </div>


            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Usuário logado: </div>
{{--                {{\Illuminate\Support\Facades\Auth::user()->nome}}--}}

            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">
        <div class="container-solid">
            @yield('conteudo')
        </div>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Flavio Sistemas - 2022</div>
                </div>
            </div>
        </footer>
    </div>
</div>
<script src="/js/scripts.js"></script>3
@yield('script')
</body>
</html>
