@extends('front-end.master')


@section('front_end_nav')
<nav class="navigation navbar navbar-expand-md navbar-dark ">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsExample04">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{asset('/')}}">Home</a>
            </li>
            <li class="nav-item">
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

       <section class="banner_main">
	  <div class="overlay"></div>
			<video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
				<source src="{{asset('/')}}/front_end/images/video_running.mov" type="video/mp4">
			</video>
		<div class="container h-100">
	<div class="aos-item" data-aos="zoom-in-left" data-aos-duration="1500">
	<div class="aos-item__inner">
    <div class="slider-content-area">
		<div class="slide-text">
			<h1 class="homepage-three-title">Classic <span>Madina</span> Motors</h1>
		</div>
	</div>
	</div>
	</div>
	</div>
      </section>


    <div class="about">
        <div class="container">
            <div class="row d_flex">
                <div class="col-md-5">
                    <div class="about_img">
                        <figure><img src="{{asset('/')}}/front_end/images/about.png" alt="#"/></figure>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="titlepage">
                        <h2 style="color:#5E7DAC">About Our Shop</h2>
                        <p>Welcome to Classic Madina Motors! Before buying a motorcycle, many people’s doesn’t have enough time to spent in the motorcycle showroom to gather detailed information and analyze about all the brands and models. As a result most of the time buyers don’t know which brand or model is appropriate for them. Classic Madina Motors, makes it easy to simplify motorcycle buyer’s work. Here we mentioned almost all the motorcycle brands and their product details which is available in Bangladesh, we have presented details specifications and overview including price. </p>
                        <a class="read_more" href="{{asset('/about')}}">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bikes">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="titlepage">
                        <h2 style="color:#5E7DAC">Our New Motor Bike</h2>
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

                <a class="read_more1" href="{{asset('/shop')}}">See More</a>

            </div>
        </div>
    </div>
    <div id="about" class="shop">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5">
                    <div  class="shop_img">
                        <div class="img-zoom-container">
                            <img id="myimage" src="{{asset($bike->bike_image)}}" width="100%" alt="#">
                            <div id="myresult" class="img-zoom-result"></div>
                        </div>
                        <script>
                            function imageZoom(imgID, resultID) {
                                var img, lens, result, cx, cy;
                                img = document.getElementById(imgID);
                                result = document.getElementById(resultID);
                                /* Create lens: */
                                lens = document.createElement("DIV");
                                lens.setAttribute("class", "img-zoom-lens");
                                /* Insert lens: */
                                img.parentElement.insertBefore(lens, img);
                                /* Calculate the ratio between result DIV and lens: */
                                cx = result.offsetWidth / lens.offsetWidth;
                                cy = result.offsetHeight / lens.offsetHeight;
                                /* Set background properties for the result DIV */
                                result.style.backgroundImage = "url('" + img.src + "')";
                                result.style.backgroundSize = (img.width * cx) + "px " + (img.height * cy) + "px";
                                /* Execute a function when someone moves the cursor over the image, or the lens: */
                                lens.addEventListener("mousemove", moveLens);
                                img.addEventListener("mousemove", moveLens);
                                /* And also for touch screens: */
                                lens.addEventListener("touchmove", moveLens);
                                img.addEventListener("touchmove", moveLens);
                                function moveLens(e) {
                                    var pos, x, y;
                                    /* Prevent any other actions that may occur when moving over the image */
                                    e.preventDefault();
                                    /* Get the cursor's x and y positions: */
                                    pos = getCursorPos(e);
                                    /* Calculate the position of the lens: */
                                    x = pos.x - (lens.offsetWidth / 2);
                                    y = pos.y - (lens.offsetHeight / 2);
                                    /* Prevent the lens from being positioned outside the image: */
                                    if (x > img.width - lens.offsetWidth) {x = img.width - lens.offsetWidth;}
                                    if (x < 0) {x = 0;}
                                    if (y > img.height - lens.offsetHeight) {y = img.height - lens.offsetHeight;}
                                    if (y < 0) {y = 0;}
                                    /* Set the position of the lens: */
                                    lens.style.left = x + "px";
                                    lens.style.top = y + "px";
                                    /* Display what the lens "sees": */
                                    result.style.backgroundPosition = "-" + (x * cx) + "px -" + (y * cy) + "px";
                                }
                                function getCursorPos(e) {
                                    var a, x = 0, y = 0;
                                    e = e || window.event;
                                    /* Get the x and y positions of the image: */
                                    a = img.getBoundingClientRect();
                                    /* Calculate the cursor's x and y coordinates, relative to the image: */
                                    x = e.pageX - a.left;
                                    y = e.pageY - a.top;
                                    /* Consider any page scrolling: */
                                    x = x - window.pageXOffset;
                                    y = y - window.pageYOffset;
                                    return {x : x, y : y};
                                }
                            }
                        </script>
                        <script>
                            imageZoom("myimage", "myresult");
                        </script>

                    </div>
                </div>
                <div class="col-md-7 padding_right0">
                    <div class="max_width">
                        <div class="titlepage">
                            <h2>Best Motor Bike At Our Shop</h2>
                            <p> <span class="blu">Description :</span>{{$bike->description}}<br>
                                <span class="blu">Brand :</span> {{$bike->brand}}<br>
                                <span class="blu">Model :</span> {{$bike->model}}<br>
                                <span class="blu">KM run:</span> {{$bike->km_run}} cc<br>
                                <span class="blu">Price:</span> {{$bike->price}} TK<br>
                                <span class="blu">Location:</span> {{$bike->location}}<br/>
                                <span class="blu">Call:</span> {{$bike->number}}<br/>

                            </p>
                            <a class="read_more" href="{{asset('/contact_us')}}">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection