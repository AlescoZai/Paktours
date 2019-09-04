<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>PakTours</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        <!-- Place favicon.ico in the root directory -->
        <!-- CSS here -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/meanmenu.css') }}">
        <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('css/icofont.css') }}">
        <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
        <link rel="stylesheet" href="{{ asset('css/default.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">

</head>
<body id="body-top">
    <div id="app">
        <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
            <div class="container">
                <!--<a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'PakTours') }}
                </a>-->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            

                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @if(Auth::check())
        <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

          <a href="index-2"><img src="{{asset('img/logo/logo.png')}}" alt="logo"></a>

          <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
            <i class="fas fa-bars"></i>
          </button>

          <!-- Navbar Search -->
          <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
              <div class="input-group-append">
                
              </div>
            </div>
          </form>

          <!-- Navbar -->
          <ul class="navbar-nav ml-auto ml-md-0">
                        
            <li class="nav-item dropdown">
                <!-- To display user's name on navbar instead of user icon -->
                <!--<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
                </a>
                -->
                <div class="form-inline">
                <b style="color: #989898"> {{ Auth::user()->name }} </b>    
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user-circle fa-fw"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                    <h5 class="dropdown-item">Hi, {{ Auth::user()->name }}!</h5>
                    <!--
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"></a>
                    <a class="dropdown-item" href="#">Activity Log</a>
                    <div class="dropdown-divider"></div>
                    -->
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>              
                </div>
            </li>
          </ul>

        </nav>

        <div class="container-fluid">
            <div class="row wrapper"  style="min-height: calc(100vh - 50px);">
                <aside class="col-12 col-sm-3 p-0 bg-dark">
                    <nav class="navbar navbar-expand-sm navbar-dark bg-dark align-items-start flex-sm-column flex-row">
                        <a class="navbar-brand" href="http://localhost:8000/admin">
                            <i class="fa fa-columns fa-fw"></i> Dashboard</a>
                        <a href class="navbar-toggler" data-toggle="collapse" data-target=".sidebar">
                           <span class="navbar-toggler-icon"></span>
                        </a>
                        <div class="collapse navbar-collapse" id="navbarResponsive">
                            <ul class="flex-column navbar-nav w-100 justify-content-between mr-auto">
                                <li class="nav-item">
                                    <a class="nav-link px-0 text-truncate" href="http://localhost:8000/User" data-parent="#navbar1" data-toggle="tooltip" data-target="#m0" aria-expanded="false">
                                        <i class="fas fa-user fa-fw"></i> <span class="">User</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-0 text-truncate" href="http://localhost:8000/Contact" data-parent="#navbar1" data-toggle="tooltip" data-target="#m0" aria-expanded="false">
                                        <i class="fas fa-user fa-fw"></i> <span class="">Messages</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-0 text-truncate" href="http://localhost:8000/Travel" data-parent="#navbar1" data-toggle="tooltip" data-target="#m0" aria-expanded="false">
                                        <i class="fas fa-object-group fa-fw"></i> <span class="">Travel Agencies</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link pl-0 dropdown-toggle text-nowrap" href="#" data-parent="#navbar1" data-toggle="collapse" data-target="#m1" aria-expanded="false">
                                        <i class="fas fa-train fa-fw"></i><span class="">Tours</span>
                                    </a>
                                    <div class="collapse" id="m1">
                                        <ul class="flex-column nav">                                    
                                            <a class="nav-link px-0 text-truncate" href="http://localhost:8000/Admin_Tour">View Tours</a>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </aside>
            <main class="col bg-faded py-3">
                
                @include('partial.errors')

                @include('partial.success')

                <main class="py-4">
                    @yield('content')
                </main>

            </main>

            <!-- Scroll to Top Button-->
            <!--<a class="scroll-to-top rounded" href="#page-top">
                <i class="fa fa-angle-up"></i>-->
            </a>
            <!-- Logout Modal-->

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Logout!</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>

                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="http://127.0.0.1:8000/Logout">Logout</a>
                        </div>

                    </div>
                </div>
            </div>
            </div>
        </div>
        <!-- /#wrapper -->
        

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Paktours 2018</span>
            </div>
          </div>
        </footer>
    </div>
    @endif

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    
    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <!-- Page level plugin JavaScript-->
    <script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.js') }}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin.min.js') }}"></script>
    <!-- Custom scripts for this page-->
    <script src="{{ asset('js/sb-admin-datatables.min.js') }}"></script>
    <script src="{{ asset('js/sb-admin-charts.min.js') }}"></script>
    
    <script>
      function confirmdelete()
      {
        var x = confirm("Are you sure you want to delete?");
        if (x)
          return true;
        else
        return false;
      }
      function confirmedit()
    {
        var x = confirm("Are you sure you want to edit?");
        if (x)
          return true;
        else
        return false;
    }
    </script>
</body>
</html>
