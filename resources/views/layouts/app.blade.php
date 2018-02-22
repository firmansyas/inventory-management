<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/lib/bootstrap/css/bootstrap.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Metis core stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

    <!-- metisMenu stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/lib/metismenu/metisMenu.css') }}">

    <!-- onoffcanvas stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/lib/onoffcanvas/onoffcanvas.css') }}">

    <!-- animate.css stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/lib/animate.css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/lib/plupload/js/jquery.plupload.queue/css/jquery.plupload.queue.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/lib/jquery.gritter/css/jquery.gritter.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Uniform.js/2.1.2/themes/default/css/uniform.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/css/dataTables.bootstrap.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.js"></script>
    
    <!--jQuery -->
    <script src="{{ asset('assets/lib/jquery/jquery.js') }}"></script>



    <style>
        #content{
            min-height: 100vh;
        }
    </style>

</head>
<body class=" ">
    <div class="bg-dark dk" id="wrap">
        <div id="top">
            <!-- .navbar -->
            <nav class="navbar navbar-inverse navbar-static-top">
                <div class="container-fluid">


                    <!-- Brand and toggle get grouped for better mobile display -->
                    <header class="navbar-header">

                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="index.blade.php" class="navbar-brand"><img src="{{asset('assets/img/logo.png')}}" alt=""></a>

                    </header>



                    <div class="topnav">
                        <div class="btn-group">
                            <a data-placement="bottom" data-original-title="Fullscreen" data-toggle="tooltip"
                               class="btn btn-default btn-sm" id="toggleFullScreen">
                                <i class="glyphicon glyphicon-fullscreen"></i>
                            </a>
                        </div>
                        <div class="btn-group">
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();" data-toggle="tooltip" data-original-title="Logout" data-placement="bottom"
                               class="btn btn-metis-1 btn-sm">
                                <i class="fa fa-power-off"></i>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                        <div class="btn-group">
                            <a data-placement="bottom" data-original-title="Show / Hide Left" data-toggle="tooltip"
                               class="btn btn-primary btn-sm toggle-left" id="menu-toggle">
                                <i class="fa fa-bars"></i>
                            </a>
                        </div>
                    </div>


                    <div class="collapse navbar-collapse navbar-ex1-collapse">

                        <!-- .nav -->
                        <ul class="nav navbar-nav">
                            <li class='dropdown '>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    Master <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{url('barang')}}">Barang</a></li>
                                    <li><a href="{{url('customer')}}">Customer</a></li>
                                    <li><a href="{{url('supplier')}}">Supplier</a></li>
                                    <li><a href="{{url('merk-barang')}}">Merk Barang</a></li>
                                    <li><a href="{{url('kategori-barang')}}">Kategori Barang</a></li>
                                </ul>
                            </li>
                            <li class='dropdown '>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    Transaksi <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="form-general.html">Penjualan</a></li>
                                    <li><a href="form-validation.html">Pembelian</a></li>
                                    <li><a href="form-wysiwyg.html">Retur</a></li>
                                    <li><a href="form-wizard.html">PO</a></li>
                                </ul>
                            </li>
                            <li class='dropdown '>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    Laporan <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="form-general.html">Penjualan</a></li>
                                    <li><a href="form-validation.html">Pembelian</a></li>
                                    <li><a href="form-wysiwyg.html">Stok Barang</a></li>
                                </ul>
                            </li>
                        </ul>
                        <!-- /.nav -->
                    </div>
                </div>
                <!-- /.container-fluid -->
            </nav>
            <!-- /.navbar -->
            <header class="head">
                <div class="search-bar">

                    <!-- /.main-search -->
                </div>
                <!-- /.search-bar -->
                <div class="main-bar">
                    <h3>
                        @yield('main-bar')
                    </h3>
                </div>
                <!-- /.main-bar -->
            </header>
            <!-- /.head -->
        </div>
        <!-- /#top -->

        <div id="left">
            <div class="media user-media bg-dark dker">
                <div class="user-media-toggleHover">
                    <span class="fa fa-user"></span>
                </div>
                <div class="user-wrapper bg-dark">
                    <a class="user-link" href="">
                        <i class="fa fa-user" style="font-size:90px;color:white; margin-right: 10px; margin-left: 10px"></i>
                    </a>

                    <div class="media-body">
                        <h5 class="media-heading">{{ Auth::user()->name }}</h5>
                        <ul class="list-unstyled user-info">
                            <li><a href="">{{ Auth::user()->jabatan }}</a></li>
                            <li>Last Login : <br>
                                <small><i class="fa fa-calendar"></i> {{\Carbon\Carbon::parse(Auth()->user()->last_login)->formatLocalized("%d %B %Y")}} {{date("H:i:s",strtotime(Auth()->user()->last_login))}}</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #menu -->
            <ul id="menu" class="bg-blue dker">
                <li class="nav-header">Menu</li>
                <li class="nav-divider"></li>
                <li class="">
                    <a href="{{url('dashboard')}}">
                        <i class="fa fa-dashboard"></i><span class="link-title">&nbsp;Dashboard</span>
                    </a>
                </li>
                <li class="">
                    <a href="javascript:;">
                        <i class="fa fa-file-text-o"></i>
                        <span class="link-title">Master</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="collapse">
                        <li>
                            <a href="{{url('barang')}}">
                                <i class="fa fa-angle-right"></i>&nbsp; Barang </a>
                        </li>
                        <li>
                            <a href="{{url('customer')}}">
                                <i class="fa fa-angle-right"></i>&nbsp; Customers </a>
                        </li>
                        <li>
                            <a href="{{url('supplier')}}">
                                <i class="fa fa-angle-right"></i>&nbsp; Supplier </a>
                        </li>
                        <li>
                            <a href="{{url('merk-barang')}}">
                                <i class="fa fa-angle-right"></i>&nbsp; Merk Barang </a>
                        </li>
                        <li>
                            <a href="{{url('kategori-barang')}}">
                                <i class="fa fa-angle-right"></i>&nbsp; Kategori Barang </a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="javascript:;">
                        <i class="fa fa-edit"></i>
                        <span class="link-title">Transaksi</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="collapse">
                        <li>
                            <a href="{{url('penjualan')}}">
                                <i class="fa fa-angle-right"></i>&nbsp; Penjualan </a>
                        </li>
                        <li>
                            <a href="{{url('pembelian')}}">
                                <i class="fa fa-angle-right"></i>&nbsp; Pembelian </a>
                        </li>
                        <li>
                            <a href="{{url('retur')}}">
                                <i class="fa fa-angle-right"></i>&nbsp; Retur </a>
                        </li>
                        <li>
                            <a href="{{url('po')}}">
                                <i class="fa fa-angle-right"></i>&nbsp; PO </a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="javascript:;">
                        <i class=" fa fa-file-text-o"></i>
                        <span class="link-title">Laporan</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="collapse">
                        <li>
                            <a href="{{url('laporan/penjualan')}}">
                                <i class="fa fa-angle-right"></i>&nbsp; Penjualan </a>
                        </li>
                        <li>
                            <a href="{{url('laporan/pembelian')}}">
                                <i class="fa fa-angle-right"></i>&nbsp; Pembelian </a>
                        </li>
                        <li>
                            <a href="{{url('laporan/stok-barang')}}">
                                <i class="fa fa-angle-right"></i>&nbsp; Stok Barang </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- /#menu -->
        </div>
        <!-- /#left -->

        @yield('content')
    </div>
    <!-- /#wrap -->
    <footer class="Footer bg-dark dker">
        <p>2017 &copy; Metis Bootstrap Admin Template v2.4.2</p>
    </footer>

    <!-- Javascript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.26.6/js/jquery.tablesorter.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.4.1/holder.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Uniform.js/2.1.2/jquery.uniform.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>

    <!--Bootstrap -->
    <script src="{{ asset('assets/lib/bootstrap/js/bootstrap.js') }}"></script>

    <!-- MetisMenu -->
    <script src="{{ asset('assets/lib/metismenu/metisMenu.js') }}"></script>
    <!-- onoffcanvas -->
    <script src="{{ asset('assets/lib/onoffcanvas/onoffcanvas.js') }}"></script>
    <!-- Screenfull -->
    <script src="{{ asset('assets/lib/screenfull/screenfull.js') }}"></script>



    <script src="{{ asset('assets/lib/plupload/js/plupload.full.min.js') }}"></script>
    <script src="{{ asset('assets/lib/plupload/js/jquery.plupload.queue/jquery.plupload.queue.min.js') }}"></script>
    <script src="{{ asset('assets/lib/jquery.gritter/js/jquery.gritter.min.js') }}"></script>
    <script src="{{ asset('assets/lib/formwizard/js/jquery.form.wizard.js') }}"></script>

    <!-- Metis core scripts -->
    <script src="{{ asset('assets/js/core.js') }}"></script>
    <!-- Metis demo scripts -->
    <script src="{{ asset('assets/js/app.js') }}"></script>

    <script>
        $(function() {
            Metis.formWizard();
            Metis.MetisTable();
            Metis.metisSortable();
        });
    </script>
    @yield('script')
</body>
</html>
