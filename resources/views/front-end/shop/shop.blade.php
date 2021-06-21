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
                <li class="nav-item active">
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

    <div class="bikes">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="titlepage">
                        <h2 style="color:#5E7DAC">Our Motor Bike</h2>
                        <p>We are one of the reliable and mentioned bike showroom and servicing center in chattogram. We offer any kind of new and reconditioned branded bike to the customers with service. we are presenting you the best Motor Bike in low Price. We are always with you.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                @foreach($bikes as $bike)
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="bikes_box">
                        <center><img src="{{asset($bike->bike_image)}}" alt="#"  style="height: 200px;" /></center>
                        <h4 style="margin-top: 20px"><span class="blu">Model :</span> {{$bike->model}}</h4>
                        <h4><span class="blu">KM run:</span> {{$bike->km_run}} cc</h4>
                        <h4><span class="blu">Price:</span> {{$bike->price}} TK</h4>
                        <h4><span class="blu">Location:</span> {{$bike->location}}</h4>
                        <center><a class="read_more mt-2" href="{{ route('bike_detais',['id'=>$bike->id]) }}">More Details</a></center>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection