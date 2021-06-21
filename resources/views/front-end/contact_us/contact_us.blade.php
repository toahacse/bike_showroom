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
                <li class="nav-item">
                    <a class="nav-link" href="{{asset('/service')}}">Our Services</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{asset('/contact_us')}}">Contact Us</a>
                </li>

            </ul>
        </div>
    </nav>
@endsection

@section('front_end_body')

    <div id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <form id="request" class="main_form" action="{{ route('contact_us') }}" method="post">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-12 ">
                                <h3>Contact Us</h3>
                                <h3 class="text-center text-success">{{Session::get('massege')}}</h3>
                            </div>
                            <div class="col-md-12 ">
                                <input class="contactus" placeholder="Name" required type="text" name="name">
                            </div>
                            <div class="col-md-12">
                                <input class="contactus" placeholder="Phone Number" required type="number" name="number">
                            </div>
                            <div class="col-md-12">
                                <input class="contactus" placeholder="Email" type="email" name="email">
                            </div>
                            <div class="col-md-12">
                                <input class="contactusmess" placeholder="Message" required type="text" name="massage">
                            </div>
                            <div class="col-md-12">
                                <input type="submit" class="send_btn" value="Send">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="map_section">
                <div id="map">
                    <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1304.4783018153562!2d91.84767670759639!3d22.36790443305592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ad2775008473c5%3A0x8dee1322d879d373!2sNew%20Chadgaon%20Police%20Station%2C%20Chittagong!5e0!3m2!1sen!2sbd!4v1583733946145!5m2!1sen!2sbd" width="100%" height="80%" frameborder="0" style="border:0;" allowfullscreen=""></iframe></p>
                </div>
            </div>
        </div>
    </div>

@endsection