@extends('layouts.frontend')

@section('content')



<section class="nav-b-i2">
    <h1 class="headin-i">Where to?</h1>

    <div class="new-bottem-bar-d index-top-d">
        <ul class="nav-bottem-barul index-top-d-ul">
            <li class="nav-bottem-barli">
                <a class="nav-bottem-barali head-down-i-c" href="#Search"><img src="{{ url('public/assets/frontend/icons/home.png') }}" class="index-img-i">
                Search All
                </a>
            </li>
            <li class="nav-bottem-barli">
            <a class="nav-bottem-barali head-down-i-c" href="#vacations"><img src="{{ url('public/assets/frontend/icons/sunset.png') }}" class="index-img-i">
                vacations
                </a>
            </li>
            <li class="nav-bottem-barli">
            <a class="nav-bottem-barali head-down-i-c" href="#Hotels"><img src="{{ url('public/assets/frontend/icons/double-bed.png') }}" class="index-img-i">
                Hotels
                </a>

            </li>
            <li class="nav-bottem-barli">
            <a class="nav-bottem-barali head-down-i-c" href="#Resturents"><img src="{{ url('public/assets/frontend/icons/cutlery.png') }}" class="index-img-i">
                Resturents
                </a>
            </li>
            <li class="nav-bottem-barli">
                <a class="nav-bottem-barali head-down-i-c" href="#flights"><img src="{{ url('public/assets/frontend/icons/airplane.png') }}" class="index-img-i">
                flights
                </a>
            </li>
            <li class="nav-bottem-barli">
                <a class="nav-bottem-barali head-down-i-c" href="#Things"><img src="{{ url('public/assets/frontend/icons/neural.png') }}" class="index-img-i">
                Things To Do
                </a>
            </li>

        </ul>
    </div>

    <form class="searchf-2 searchf3">
        <div class="search-2">
            <button class="search-button1" type="button">
                <img src="{{ url('public/assets/frontend/icons/search.png') }}" class="search-icon1">
            </button>
            <input class="search-input2" type="text" placeholder="Search....">
        </div>

        <div class="find-div">
            <button class="find-button">Search</button>
        </div>
    </form>
</section>

<main>

<section class="main-i-d" id="Search">

    <div class="search-all">
        <img src="{{ url('public/assets/frontend/images/indeximg1.jpg') }}">
        <div class="index-d-i-2">
            <div class="div-index-span-1">
                <span>
                    Discover your perfect getaway,
                    <br>
                    planned in seconds!
                </span>
                <br>
                <span>
                    Get a custom-made itinerary filled with ideas
                    <br>
                    for your next adventure.
                </span>
                <br>
                <button class="btn-tryi">
                    <a class="aib" href="#">
                        Try it
                    </a>
                </button>
            </div>

            <img src="{{ url('public/assets/frontend/images/indeximg1.jpg') }}">

        </div>

    </div>

    <div class="container-fluid vacation" id="vaccations">

        <div class="hotes-index-dv">
            <div class="imagegrid-index">
                <div>
                    <h4 class="helitei">Dream Your Next Trip</h4>
                </div>
                <div class="image-gridi">

                    <div class="grid-itemi">
                        <h4 class="headerindex-img-topic">dfgfsdfs</h4>
                        <img src="{{ url('public/assets/frontend/images/imgvac1.jpg') }}" alt="img">
                        <img  class="icon-index" src="{{ url('public/assets/frontend/icons/heart.png') }}" alt="icon">
                    </div>
                    <div class="grid-itemi">
                        <h4 class="headerindex-img-topic" >sdfsdfsdfd</h4>
                        <img src="{{ url('public/assets/frontend/images/imgvac2.jpg') }}" alt="img">
                        <img  class="icon-index" src="{{ url('public/assets/frontend/icons/heart.png') }}" alt="icon">
                    </div>
                    <div class="grid-itemi">
                        <h4 class="headerindex-img-topic" >fdsfsdfsdsdf</h4>
                        <img src="{{ url('public/assets/frontend/images/imgvac3.jpg') }}" alt="img">
                        <img  class="icon-index" src="{{ url('public/assets/frontend/icons/heart.png') }}" alt="icon">
                    </div>
                    <div class="grid-itemi">
                        <h4 class="headerindex-img-topic" >sdfsdsdfsd</h4>
                        <img src="{{ url('public/assets/frontend/images/imgvac4.jpg') }}" alt="img">
                        <img  class="icon-index" src="{{ url('public/assets/frontend/icons/heart.png') }}" alt="icon">
                    </div>
                    <div class="grid-itemi">
                        <h4 class="headerindex-img-topic" >fsdfsdfsd</h4>
                        <img src="{{ url('public/assets/frontend/images/imgvac5.jpg') }}" alt="img">
                        <img  class="icon-index" src="{{ url('public/assets/frontend/icons/heart.png') }}" alt="icon">
                    </div>

                </div>
            </div>

            <!-- Embed the Pexels video -->
            <video controls autoplay muted loop class="video" >
                <source src="{{ url('public/assets/frontend/images/video.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>

    </div>

    <div class="container-fluid resturent" id="Resturents">

        <div class="row my-2 row-index" style="margin-top: 20px !important;">
            <div class="col-12 ">
                <h4 class="">Treat yourself to an award-winning meal</h4>
                <p class="index-resturent">2024’s Travelers’ Choice Awards Best of the Best Restaurants</p>
            </div>
        </div>
        <div class="row my-2 row-index1">
            <div class="col-12 col-md-3 d-flex justify-content-around    ">
                <div class="card" style="width: 18rem;">
                    <a href="{{ url('/') }}/hotel" class="">
                        <img src="{{ url('public/assets/frontend/images/hotel1.jpeg') }}" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3  d-flex justify-content-around   ">
                <div class="card" style="width: 18rem;">
                    <a href="{{ url('/') }}/hotel" class="">
                        <img src="{{ url('public/assets/frontend/images/hotel1.jpeg') }}" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3  d-flex justify-content-around  ">
                <div class="card" style="width: 18rem;">
                    <a href="{{ url('/') }}/hotel" class="">
                        <img src="{{ url('public/assets/frontend/images/hotel1.jpeg') }}" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3  d-flex justify-content-around  ">
                <div class="card" style="width: 18rem;">
                    <a href="{{ url('/') }}/hotel" class="">
                        <img src="{{ url('public/assets/frontend/images/hotel1.jpeg') }}" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row my-2 row-index" >
            <div class="col-12  ">
                <h4 class="">Treat yourself to an award-winning meal</h4>
                <p class="index-resturent">2024’s Travelers’ Choice Awards Best of the Best Restaurants</p>
            </div>
        </div>
        <div class="row my-2 pb-3 row-index1">
            <div class="col-12 col-md-3  d-flex justify-content-around    ">
                <div class="card" style="width: 18rem;">
                    <a href="{{ url('/') }}/hotel" class="">
                        <img src="{{ url('public/assets/frontend/images/hotel1.jpeg') }}" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3  d-flex justify-content-around   ">
                <div class="card" style="width: 18rem;">
                    <a href="{{ url('/') }}/hotel" class="">
                        <img src="{{ url('public/assets/frontend/images/hotel1.jpeg') }}" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3  d-flex justify-content-around  ">
                <div class="card" style="width: 18rem;">
                    <a href="{{ url('/') }}/hotel" class="">
                        <img src="{{ url('public/assets/frontend/images/hotel1.jpeg') }}" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3  d-flex justify-content-around  ">
                <div class="card" style="width: 18rem;">
                    <a href="{{ url('/') }}/hotel" class="">
                        <img src="{{ url('public/assets/frontend/images/hotel1.jpeg') }}" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid resturent  hotels" id="Hotels">

        <div class="row my-2 pt-4 row-index" style="margin-top: 20px !important;">
            <div class="col-12  ">
                <h4 class="">Treat yourself to an award-winning meal</h4>
                <p class="index-resturent">2024’s Travelers’ Choice Awards Best of the Best Restaurants</p>
            </div>
        </div>
        <div class="row my-2 row-index2 ">
            <div class="col-12 col-md-4 d-flex justify-content-around    ">
                <div class="card mx-5  border-0" >
                    <div class=" imagediv"></div>
                    <a href="{{ url('/') }}/hotel" class="">
                        <img src="{{ url('public/assets/frontend/images/hotel1.jpeg') }}" class="card-img-top p-2" alt="...">
                    </a>
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4  d-flex justify-content-around   ">
                <div class="card mx-5  border-0" >
                    <div class=" imagediv"></div>
                    <a href="{{ url('/') }}/hotel" class="">
                        <img src="{{ url('public/assets/frontend/images/hotel1.jpeg') }}" class="card-img-top p-2" alt="...">
                    </a>
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4  d-flex justify-content-around  ">
                <div class="card mx-5  border-0" >
                    <div class=" imagediv"></div>
                    <a href="{{ url('/') }}/hotel" class="">
                        <img src="{{ url('public/assets/frontend/images/hotel1.jpeg') }}" class="card-img-top p-2" alt="...">
                    </a>
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row my-2 row-index" style="margin-top: 60px !important;">
            <div class="col-12  ">
                <h4 class="">Treat yourself to an award-winning meal</h4>
                <p class="index-resturent">2024’s Travelers’ Choice Awards Best of the Best Restaurants</p>
            </div>
        </div>
        <div class="row my-2 row-index1">
            <div class="col-12 col-md-3 d-flex justify-content-around    ">
                <div class="card" style="width: 18rem;">
                    <a href="{{ url('/') }}/hotel" class="">
                        <img src="{{ url('public/assets/frontend/images/hotel1.jpeg') }}" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3  d-flex justify-content-around   ">
                <div class="card" style="width: 18rem;">
                    <a href="{{ url('/') }}/hotel" class="">
                        <img src="{{ url('public/assets/frontend/images/hotel1.jpeg') }}" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3  d-flex justify-content-around  ">
                <div class="card" style="width: 18rem;">
                    <a href="{{ url('/') }}/hotel" class="">
                        <img src="{{ url('public/assets/frontend/images/hotel1.jpeg') }}" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3  d-flex justify-content-around  ">
                <div class="card" style="width: 18rem;">
                    <a href="{{ url('/') }}/hotel" class="">
                        <img src="{{ url('public/assets/frontend/images/hotel1.jpeg') }}" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flight">

    </div>

    <div class="things-to-do">

    </div>

</section>

</main>


@endsection

@push('css')
    <style>

    </style>
@endpush

@push('scripts')
    <script>

    </script>
@endpush

