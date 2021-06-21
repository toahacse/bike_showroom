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
                <li class="nav-item ">
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
                            <h2>{{$bike->model}}</h2>
                            <p> <span class="blu">Description :</span>{{$bike->description}}<br>
                                <span class="blu">Brand :</span> {{$bike->brand}}<br>
                                <span class="blu">KM run:</span> {{$bike->km_run}} cc<br>
                                <span class="blu">Price:</span> {{$bike->price}} TK<br>
                                <span class="blu">Location:</span> {{$bike->location}}<br/>
                                <span class="blu">Call:</span> {{$bike->number}}<br/>

                            </p>

                            {{--<a class="read_more" href="{{asset('/contact_us')}}">Shop Now</a>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection