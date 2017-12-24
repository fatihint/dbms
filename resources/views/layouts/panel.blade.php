<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CompactLab</title>
    <!-- Bootstrap core CSS-->
    <!-- Bootstrap core CSS-->


    <!-- Custom fonts for this template-->

    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/e12295a3e8.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Page level plugin CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    <!-- Custom styles for this template-->

    <link rel="stylesheet" type="text/css" href="{{ asset('css/sb-admin.css') }}">
    <!-- Custom fonts for this template-->
    <!-- Page level plugin CSS-->

    <!-- Custom styles for this template-->

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="/profile">CompactLab Restaurant Managment System</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link" href="/home">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text">Anasayfa</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                <a class="nav-link" href="/statistics">
                    <i class="fa fa-fw fa-area-chart"></i>
                    <span class="nav-link-text">İstatistik Grafikleri</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                <a class="nav-link" href="/products">
                    <i class="fa fa-fw fa-table"></i>
                    <span class="nav-link-text">Menü</span>
                </a>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                <a class="nav-link" href="/orders">
                    <i class="fa fa-fw fa-area-chart"></i>
                    <span class="nav-link-text">Sipariş Listesi</span>
                </a>
            </li>
            @if (Auth::User()->role_id==1)                
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
                        <i class="fa fa-fw fa-sitemap"></i>
                        <span class="nav-link-text">Kullanıcı Sayfaları</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="collapseMulti">
                        <li>
                            <a href="/admin/personels">Personel Listesi</a>
                        </li>

                        <li>
                            <a href="/admin/customers">Müşteri Listesi</a>
                        </li>
                    </ul>
                </li>
            @endif
        </ul>
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <div class="container">
                <div class="dropdown">
                    <button style="color: none;"class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">EREN KARA
                        <span class="caret"style="color: white"></span></button>
                    <ul class="dropdown-menu">
                        <li id="liste"><a tabindex="-1" href="/profile">Profil</a></li>
                        <li  id="liste" class="nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                            <i class="fa fa-fw fa-sign-out"></i>Logoutt</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="profil-pic">
                <img src="https://www.cii-ibf.com/images/speakers/BernardChan.jpg" width="60">
            </div>
        </ul>
    </div>
</nav>
   <div class="content-wrapper">
      <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">CompactLab</li>
        </ol>

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fa fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="{{url('/logout')}}">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        @yield('content')

        <!-- Core plugin JavaScript-->

          <script type="text/javascript" src="{{ asset('js/jquery.easing.js') }}"></script>
        <!-- Page level plugin JavaScript-->

          <script type="text/javascript" src="{{ asset('js/Chart.js') }}"></script>


          <script type="text/javascript" src="{{asset('js/jquery.dataTables.js') }}"></script>


          <script type="text/javascript" src="{{asset('js/dataTables.bootstrap4.js') }}"></script>

          <!-- Custom scripts for all pages-->

          <script type="text/javascript" src="{{asset('js/sb-admin.js') }}"></script>

        <!-- Custom scripts for this page-->

          <script type="text/javascript" src="{{ asset('js/sb-admin-datatables.js') }}"></script>


          <script type="text/javascript" src="{{asset('js/sb-admin-charts.js') }}"></script>

  </div>
   </div>
</body>
<footer class="sticky-footer">
    <div class="container">
        <div class="text-center">
            <small>Copyright © CompactLab 2017</small>
        </div>
    </div>
</footer>
</html>
