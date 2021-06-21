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
                <li class="nav-item active">
                    <a class="nav-link" href="{{asset('/about')}}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{asset('/shop')}}">Shop</a>
                </li>
                <li class="nav-item">
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
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2 style="color:#5E7DAC">About Our Shop</h2>
                        <p>Welcome to Classic Madina Motors! Before buying a motorcycle, many people’s doesn’t have enough time to spent in the motorcycle showroom to gather detailed information and analyze about all the brands and models. As a result most of the time buyers don’t know which brand or model is appropriate for them. Classic Madina Motors, makes it easy to simplify motorcycle buyer’s work. Here we mentioned almost all the motorcycle brands and their product details which is available in Bangladesh, we have presented details specifications and overview including price. We are one of the reliable and mentioned bike showroom and servicing center in chattogram. We offer any kind of new and reconditioned branded bike to the customers with service.<br><br>

                            Customers can easily buy their expected bike of YAMAHA, BAJAJ, TVS, SUZUKI, RUNNER, HERO, HONDA, KTM and APRILA and so on with a reliable price with low cost of servicing. We are only one, that giving these affectionate facilities to the customer’s classes. <br><br>

                            Though we are giving these kinds of mentioned facilities of buying and selling, we have top classes of branded bike along with the latest model of bike in Bangladesh as well as in the world class. Customers can easily get any kind of technical and mechanical bike services within a moment.<br><br>

                            We definitely can say with the highest confidence that we do not support anything of illegal ways of buying and selling bike. We are always aware of this section because of honesty and patriotism of our country. <br><br>

                            So Contact with us to buy your hopeful and affectionate bike or servicing bike already you have.<br><br>

                            Thank You.<br>
                            Md: Ariful Islam Irad<br>
                            Founder and Chief Engineer of Classic Madina Motors Chattogram.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection