<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('/')}}/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="{{asset('/')}}/admin/css/jquery.dataTables.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{asset('/')}}/admin/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('/')}}/admin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{asset('/')}}/admin/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('/')}}/admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a style="font-size: 22px;" class="navbar-brand" href="{{asset('/home')}}">Modhina Motors(Website Admin)</a>

        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <li>
                <a style="font-size: 16px" href="{{asset('/buy_bike')}}"><i style="font-size: 18px" class="fa fa-pencil-square-o"></i> Document Entry!</a>
            </li>
            <li>
                <a style="font-size: 16px" href="{{asset('/stock_management')}}"><i style="font-size: 18px" class="fa fa-calculator"></i> Stocks & Sales Management</a>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> {{ Auth::user()->name }} <i class="fa fa-caret-down"> </i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                  <li>

                  </li>
                    <li><a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <center>{{ __('Logout') }}</center>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">

                        </div>
                        <!-- /input-group -->
                    </li>
                    <li style="font-size: 18px">
                        <a href="{{asset('/home')}}"><i class="fa fa-home fa-fw"></i> Home</a>
                    </li><br>

                    <li style="font-size: 18px">
                        <a href="{{asset('/Add-Bike')}}"><i class="fa fa-motorcycle fa-fw"></i> Add Bike</a>
                    </li><br>

                    <li style="font-size: 18px">
                        <a href="{{asset('/Manage-Bike')}}"><i class="fa fa-motorcycle fa-fw"></i> Manage Bike</a>
                    </li><br>
                    <li style="font-size: 18px">
                        <a href="{{asset('/user_comments')}}"><i class="fa fa-envelope"></i> Customer Comments</a>
                    </li>

                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">

                @yield('admin_body')

            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->


    </div>
    <!-- /#page-wrapper -->

</div>


        <p style="text-align: center">© 2020 All Rights Reserved. Design by<a href="#"> MD.Ismat Toaha</a></p>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="{{asset('/')}}/admin/vendor/jquery/jquery.min.js"></script>
<script src="{{asset('/')}}/admin/js/jquery.dataTables.js"></script>
<script>
    $(document).ready(function () {
        $('#bikeManage').DataTable();
    });
</script>
<!-- Bootstrap Core JavaScript -->
<script src="{{asset('/')}}/admin/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{asset('/')}}/admin/vendor/metisMenu/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="{{asset('/')}}/admin/vendor/raphael/raphael.min.js"></script>
<script src="{{asset('/')}}/admin/vendor/morrisjs/morris.min.js"></script>
<script src="{{asset('/')}}/admin/data/morris-data.js"></script>

<!-- Custom Theme JavaScript -->
<script src="{{asset('/')}}/admin/dist/js/sb-admin-2.js"></script>


</body>

</html>
