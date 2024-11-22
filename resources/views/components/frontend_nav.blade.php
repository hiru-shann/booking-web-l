<section class=" section1 section1-i"  id="mainheader">
    <nav class="navbar navbar-expand-sm nav1">
        <div class="container-fluid div-1 ">
            <a class="navbar-brand logo1" href="{{ url('/')  }}"><img src ="{{ url('public/assets/frontend/images/logo2.png') }}"
            alt="Your Booking Site Logo" class="img-fluid logoimg"> <!-- Adjust width as needed --></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="{{ url('/') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="mynavbar" >

                <form class="searchf">
                        <div class="search-1">
                            <button class="search-button1" type="button" >
                            <img src="{{ url('public/assets/frontend/icons/search.png') }}" class="search-icon1">
                            </button>
                            <input class="search-input1" type="text" placeholder="Search...." >
                        </div>
                </form>

                <div class="collapse navbar-collapse nav-2">
                    <ul class="navbar-nav me-auto">

                        <li class="nav-item dropdown">
                            <a type="button" class="nav-hnames nav-link " href="#" id="discoverDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Discover</a>
                            <ul class="dropdown-menu" aria-labelledby="discoverDropdown">
                                <li><a class="dropdown-item" href="#">Travelers' Choice</a></li>
                                <li><a class="dropdown-item" href="#">Travel Stories</a></li>

                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a type="button" class="nav-hnames nav-link" href="#" id="discoverDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Tips</a>
                            <ul class="dropdown-menu" aria-labelledby="discoverDropdown">
                                <li><a class="dropdown-item" href="#">View my trips</a></li>
                                <li><a class="dropdown-item" href="#">Start a new trip</a></li>
                                <li><a class="dropdown-item" href="#">Create trip with AI</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown" >
                            <a type="button" class="nav-hnames nav-link" href="#" id="discoverDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Review</a>
                            <ul class="dropdown-menu" aria-labelledby="discoverDropdown">
                                <li><a class="dropdown-item" href="#">Write a review</a></li>
                                <li><a class="dropdown-item" href="#">Post photos</a></li>
                                <li><a class="dropdown-item" href="#">Add a place</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>

                <div class="currency-d" >
                    <button class="btn icon" type="button">
                        <i class="bi bi-globe2"></i>
                    </button>
                    <div class="line"></div>
                    <div class="currency-n">
                        <a class="currency-nhtml">USD</a>
                    </div>
                </div>

                <div class="collapse navbar-collapse profile-icon">
                    <ul class="navbar-nav ms-auto">
                        <!-- Profile Icon and Dropdown Toggle -->
                        <li class="nav-item dropdown">
                            <a class="nav-link profile-page-a" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-circle"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                                <li><a class="dropdown-item" href="#">Trips</a></li>
                                <li><a class="dropdown-item" href="#">Write a review</a></li>
                                <li><a class="dropdown-item" href="{{ url('/') }}/profile">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Bookings</a></li>
                                <li><a class="dropdown-item" href="#">Messages</a></li>
                                <li><a class="dropdown-item" href="#">Account Info</a></li>
                                <li><a class="dropdown-item" href="#">Sign Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="sing-b-l">
                    <button type="submit" id="sing-b" class ="btn btn-success sing-b d-none" id="singin" onclick="singin()" >sing in</button>
                </div>

            </div>

        </div>
    </nav>

    <div class= "new-bottem-bar-d">
        <ul class="nav-bottem-barul">
            <li class="nav-bottem-barli">
                <a class="nav-bottem-barali" href="{{ url('/') }}/hotels">Hotels</a>
            </li>
            <li class="nav-bottem-barli">
                <a class="nav-bottem-barali" href="{{ url('/') }}/vacations">Vacations</a>
            </li>
            <li class="nav-bottem-barli">
                <a class="nav-bottem-barali" href="{{ url('/') }}/resturents">Resturents</a>
            </li>
            <li class="nav-bottem-barli">
                <a class="nav-bottem-barali" href="{{ url('/') }}/flight" >flights</a>
            </li>
            <li class="nav-bottem-barli">
                <a class="nav-bottem-barali" href="{{ url('/') }}/rentalCars">Rental Cars</a>
            </li>
            <li class="nav-bottem-barli">
                <a class="nav-bottem-barali" href="{{ url('/') }}/curies">Cruises</a>
            </li>
            <li class="nav-bottem-barli">
                <a class="nav-bottem-barali" href="{{ url('/') }}/forms">Forms</a>
            </li>
            <li class="nav-bottem-barli">
                <a class="nav-bottem-barali" href="{{ url('/') }}/thingToDo">Things To Do</a>
            </li>
        </ul>
    </div>
</section>



<section class="sectionmain-d" id="sectionmain-d" style="{{ url('/') == url()->current() ? '' : 'display:none;' }}">

    <section class="section2 " id="nav-2" >
        <nav class="navbar navbar-expand-sm nav-2i  ">
            <div class="container-fluid div-2">
                <div class="div-nav-logo">
                    <a class="navbar-brand logo1" href="{{ url('/') }}"><img src="{{ url('public/assets/frontend/images/logo2.png') }}"
                            alt="Your Booking Site Logo" class="img-fluid logoimgi"> <!-- Adjust width as needed --></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="{{ url('/') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse nav-2id">
                    <ul class="navbar-nav me-autoi">

                        <li class="nav-item dropdown">
                            <a type="button" class="nav-hnames nav-link " href="#" id="discoverDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Discover</a>
                            <ul class="dropdown-menu" aria-labelledby="discoverDropdown">
                                <li><a class="dropdown-item" href="#">Travelers' Choice</a></li>
                                <li><a class="dropdown-item" href="#">Travel Stories</a></li>

                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a type="button" class="nav-hnames nav-link" href="#" id="discoverDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Tips</a>
                            <ul class="dropdown-menu" aria-labelledby="discoverDropdown">
                                <li><a class="dropdown-item" href="#">View my trips</a></li>
                                <li><a class="dropdown-item" href="#">Start a new trip</a></li>
                                <li><a class="dropdown-item" href="#">Create trip with AI</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown" >
                            <a type="button" class="nav-hnames nav-link" href="#" id="discoverDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Review</a>
                            <ul class="dropdown-menu" aria-labelledby="discoverDropdown">
                                <li><a class="dropdown-item" href="#">Write a review</a></li>
                                <li><a class="dropdown-item" href="#">Post photos</a></li>
                                <li><a class="dropdown-item" href="#">Add a place</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown" >
                            <a type="button" class="nav-hnames nav-link" href="#" id="discoverDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">More</a>
                            <ul class="dropdown-menu" aria-labelledby="discoverDropdown">
                                <li><a class="dropdown-item" href="#">Cruises</a></li>
                                <li><a class="dropdown-item" href="#">Rental Cars</a></li>
                                <li><a class="dropdown-item" href="#">AForums</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="right-continer">
                    <div class="currency-d ">
                        <button class="btn icon" type="button">
                            <i class="bi bi-globe2"></i>
                        </button>
                        <div class="line"></div>
                        <div class="currency-n">
                            <a class="currency-nhtml currency-nhtmli">USD</a>
                        </div>
                    </div>

                    <div class="collapse navbar-collapse profile-icon">
                        <ul class="navbar-nav ms-auto">
                            <!-- Profile Icon and Dropdown Toggle -->
                            <li class="nav-item dropdown">
                                <a class="nav-link profile-page-a" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-person-circle"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                                    <li><a class="dropdown-item" href="#">Trips</a></li>
                                    <li><a class="dropdown-item" href="#">Write a review</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/') }}/profile">Profile</a></li>
                                    <li><a class="dropdown-item" href="#">Bookings</a></li>
                                    <li><a class="dropdown-item" href="#">Messages</a></li>
                                    <li><a class="dropdown-item" href="#">Account Info</a></li>
                                    <li><a class="dropdown-item" href="#">Sign Out</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class="sing-b-l">
                        <button type="submit" id="sing-b" class="btn btn-success sing-b d-none" id="singin" onclick="singin()">sing in</button>
                    </div>
                </div>
            </div>
        </nav>
    </section>

</section>
