<html>
<head>
    <title>Classic Madina Motors</title>
    <link rel="shortcut icon" href="{{asset('/')}}/front_end/images/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="{{asset('/')}}/front_end/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/')}}/front_end/css/style.css">
    <link rel="stylesheet" href="{{asset('/')}}/front_end/css/responsive.css">
    <link rel="stylesheet" href="{{asset('/')}}/front_end/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
</head>
<body class="main-layout position_head">
<header>
    <div class="fixed-top">
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="{{asset('/')}}"><img src="{{asset('/')}}/front_end/images/logo.png" alt="#" /> <img src="{{asset('/')}}/front_end/images/name1.png" alt="#" style="width:70%; float:right; margin-top:20px;"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                        @yield('front_end_nav')
                    </div>
                </div>
            </div>
        </div>
    </div></header>

@yield('front_end_body')



<footer>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <ul class="location_icon">
                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a><br>
                            <p style="font-size:18px;">Classic Madina Motors</p>
                            S. K Market, Circle of new chandgaon thana, Beside Flyover, Bohoddarhat, Chattogram, Bangladesh</li>
                        <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i></a><br> +8801813-669887<br>+8801819-037816</li>
                        <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a><br><br> surf@gmail.com</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>© 2020 All Rights Reserved. Design by<a href="#"> MD.Ismat Toaha</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="{{asset('/')}}/front_end/js/jquery.min.js"></script>
<script src="{{asset('/')}}/front_end/js/popper.min.js"></script>
<script src="{{asset('/')}}/front_end/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('/')}}/front_end/js/jquery-3.0.0.min.js"></script>
<script src="{{asset('/')}}/front_end/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="{{asset('/')}}/front_end/js/custom.js"></script>
</body>
</html>

