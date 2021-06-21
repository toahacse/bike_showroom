@extends('front-end.master')

@section('front_end_nav')
    <nav class="navigation navbar navbar-expand-md navbar-dark ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExample04">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{asset('/')}}">Home</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{asset('/about')}}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{asset('/shop')}}">Shop</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{asset('/service')}}">Our Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{asset('/contact_us')}}">Contact Us</a>
                </li>

            </ul>
        </div>
    </nav>
@endsection

@section('front_end_body')

    <div class="about">
        <div class="container">
            <div class="row d_flex">
                <div class="col-md-5">
                    <div class="about_img">
                        <figure><img src="{{asset('/')}}/front_end/images/service.png" alt="#"/></figure>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="titlepage">
                        <h2 style="color:#5E7DAC">Our Services</h2>
                        <p>Customers can easily buy their expected bike of YAMAHA, BAJAJ, TVS, SUZUKI, RUNNER, HERO, HONDA, KTM and APRILA and so on with a reliable price with low cost of servicing. <br><br>
                            Though we are giving these kinds of mentioned facilities of buying and selling, we have top classes of branded bike along with the latest model of bike in Bangladesh as well as in the world class. <br><br>
                            Customers can easily get any kind of technical and mechanical bike services within a moment.<br><br>
                            So Contact with us to buy your hopeful and affectionate bike or servicing bike already you have.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection