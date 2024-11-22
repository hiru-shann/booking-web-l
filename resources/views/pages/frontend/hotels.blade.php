@extends('layouts.frontend')

@section('content')

<div class="main-b1">
    <div class="mainp">
        <p class="ptopic">
        To make life the most beautiful; Let's use BookMyJourney.
        </p>
    </div>
    <form class="searchf-2">
        <div class="search-2">
            <button class="search-button1" type="button" >
                <img src="{{ url('public/assets/frontend/icons/search.png') }}" class="search-icon1">
            </button>
            <input class="search-input2" type="text" placeholder="Search...." >
        </div>
        <div class="calender-div">
            <button class="button-calender"><img src="{{ url('public/assets/frontend/icons/calendar.png') }}" class="calender-img"></button>
            <input class="date-c-d" placeholder="Enter Date">
        </div>
        <div class="select-r-m">
            <button class="button-bedi"><img src="{{ url('public/assets/frontend/icons/double-bed.png') }}" class="bedi-img"></button>
            <p class="pnumberas1">1</p>
            <button class="button-useri"><img src="{{ url('public/assets/frontend/icons/user.png') }}" class="useri-img"></button>
            <p class="pnumberas1">2</p>
        </div>
        <div class="find-div">
            <button class="find-button" >Find Hotels</button>
        </div>
    </form>
    <img src="{{ url('public/assets/frontend/images/p4.jpg') }}" alt="A beautiful sunset over the mountains" class="full-image">
</div>

<div class="hotel-b-d">
    <div>
        <h4 class="helite">Elite Accommodations</h4>
    </div>
    <div class="image-grid">

        <div class="grid-item">

            <a href="{{ url('/') }}/hotel">
                <img src="{{ url('public/assets/frontend/images/pd7.jpg') }}" >
                <img src="{{ url('public/assets/frontend/icons/heart.png') }}" class="icon-hotels-h">
            </a>
            <div class="ms-3 mt-2">
                <h class="fw-normal fs-5">Rambagh Palace</h>
                <div class="ratings me-3 mb-1 fw-normal">
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <span class="">167</span>
                </div>
                <span class="FS-6">$$$$ • American, Steakhouse, Gluten free options</span>
            </div>
        </div>
        <div class="grid-item">
            <a href="{{ url('/') }}/hotel">
                <img src="{{ url('public/assets/frontend/images/pd8.jpg') }}">
                <img src="{{ url('public/assets/frontend/icons/heart.png') }}" class="icon-hotels-h">
            </a>
            <div class="ms-3 mt-2">
                <h class="fw-normal fs-5">Rambagh Palace</h>
                <div class="ratings me-3 mb-1 fw-normal">
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <span class="">167</span>
                </div>
                <span class="FS-6">$$$$ • American, Steakhouse, Gluten free options</span>
            </div>
        </div>
        <div class="grid-item">
            <a href="{{ url('/') }}/hotel">
                <img src="{{ url('public/assets/frontend/images/pd9.jpg') }}">
                <img src="{{ url('public/assets/frontend/icons/heart.png') }}" class="icon-hotels-h">
            </a>
            <div class="ms-3 mt-2">
                <h class="fw-normal fs-5">Rambagh Palace</h>
                <div class="ratings me-3 mb-1 fw-normal">
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <span class="">167</span>
                </div>
                <span class="FS-6">$$$$ • American, Steakhouse, Gluten free options</span>
            </div>
        </div>
    </div>

    <div>
        <h4 class="helite">Top Related</h4>
    </div>
    <div class="image-grid">
        <div class="grid-item">
            <a href="{{ url('/') }}/hotel">
                <img src="{{ url('public/assets/frontend/images/pd4.jpg') }}">
                <img src="{{ url('public/assets/frontend/icons/heart.png') }}" class="icon-hotels-h">
            </a>
            <div class="ms-3 mt-2">
                <h class="fw-normal fs-5">Rambagh Palace</h>
                <div class="ratings me-3 mb-1 fw-normal">
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <span class="">167</span>
                </div>
                <span class="FS-6">$$$$ • American, Steakhouse, Gluten free options</span>
            </div>
        </div>
        <div class="grid-item">
            <a href="{{ url('/') }}/hotel">
                <img src="{{ url('public/assets/frontend/images/pd5.jpg') }}">
                <img src="{{ url('public/assets/frontend/icons/heart.png') }}" class="icon-hotels-h">
            </a>
            <div class="ms-3 mt-2">
                <h class="fw-normal fs-5">Rambagh Palace</h>
                <div class="ratings me-3 mb-1 fw-normal">
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <span class="">167</span>
                </div>
                <span class="FS-6">$$$$ • American, Steakhouse, Gluten free options</span>
            </div>
        </div>
        <div class="grid-item">
            <a href="{{ url('/') }}/hotel">
                <img src="{{ url('public/assets/frontend/images/pd6.jpg') }}">
                <img src="{{ url('public/assets/frontend/icons/heart.png') }}" class="icon-hotels-h">
            </a>
            <div class="ms-3 mt-2">
                <h class="fw-normal fs-5">Rambagh Palace</h>
                <div class="ratings me-3 mb-1 fw-normal">
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <span class="">167</span>
                </div>
                <span class="FS-6">$$$$ • American, Steakhouse, Gluten free options</span>
            </div>
        </div>
    </div>

    <div>
        <h4 class="helite">Elite Accommodations</h4>
    </div>
    <div class="container image-grid2">

        <div class="grid-item">
            <a href="{{ url('/') }}/hotel">
                <img src="{{ url('public/assets/frontend/images/pd7.jpg') }}" class="image-hotel-change">
                <img src="{{ url('public/assets/frontend/icons/heart.png') }}" class="icon-hotels-h">
            </a>
            <div class="ms-3 mt-2">
                <h class="fw-normal fs-5">Rambagh Palace</h>
                <div class="ratings me-3 mb-1 fw-normal">
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <span class="">167</span>
                </div>
                <span class="FS-6">$$$$ • American, Steakhouse, Gluten free options</span>
            </div>
        </div>
        <div class="grid-item">
            <a href="{{ url('/') }}/hotel">
                <img src="{{ url('public/assets/frontend/images/pd8.jpg') }}" class="image-hotel-change">
                <img src="{{ url('public/assets/frontend/icons/heart.png') }}" class="icon-hotels-h">
            </a>
            <div class="ms-3 mt-2">
                <h class="fw-normal fs-5">Rambagh Palace</h>
                <div class="ratings me-3 mb-1 fw-normal">
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <span class="">167</span>
                </div>
                <span class="FS-6">$$$$ • American, Steakhouse, Gluten free options</span>
            </div>
        </div>
        <div class="grid-item">
            <a href="{{ url('/') }}/hotel">
                <img src="{{ url('public/assets/frontend/images/pd9.jpg') }}" class="image-hotel-change">
                <img src="{{ url('public/assets/frontend/icons/heart.png') }}" class="icon-hotels-h">
            </a>
            <div class="ms-3 mt-2">
                <h class="fw-normal fs-5">Rambagh Palace</h>
                <div class="ratings me-3 mb-1 fw-normal">
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <span class="">167</span>
                </div>
                <span class="FS-6">$$$$ • American, Steakhouse, Gluten free options</span>
            </div>
        </div>
        <div class="grid-item">
            <a href="{{ url('/') }}/hotel">
                <img src="{{ url('public/assets/frontend/images/pd9.jpg') }}" class="image-hotel-change">
                <img src="{{ url('public/assets/frontend/icons/heart.png') }}" class="icon-hotels-h">
            </a>
            <div class="ms-3 mt-2">
                <h class="fw-normal fs-5">Rambagh Palace</h>
                <div class="ratings me-3 mb-1 fw-normal">
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <span class="">167</span>
                </div>
                <span class="FS-6">$$$$ • American, Steakhouse, Gluten free options</span>
            </div>
        </div>
    </div>


    <div>
        <h4 class="helite">Elite Accommodations</h4>
    </div>
    <div class="image-grid ">

        <div class="grid-item">
            <a href="{{ url('/') }}/hotel">
                <img src="{{ url('public/assets/frontend/images/pd7.jpg') }}">
                <img src="{{ url('public/assets/frontend/icons/heart.png') }}" class="icon-hotels-h">
            </a>
            <div class="ms-3 mt-2">
                <h class="fw-normal fs-5">Rambagh Palace</h>
                <div class="ratings me-3 mb-1 fw-normal">
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <span class="">167</span>
                </div>
                <span class="FS-6">$$$$ • American, Steakhouse, Gluten free options</span>
            </div>
        </div>
        <div class="grid-item">
            <a href="{{ url('/') }}/hotel">
                <img src="{{ url('public/assets/frontend/images/pd8.jpg') }}">
                <img src="{{ url('public/assets/frontend/icons/heart.png') }}" class="icon-hotels-h">
            </a>
            <div class="ms-3 mt-2">
                <h class="fw-normal fs-5">Rambagh Palace</h>
                <div class="ratings me-3 mb-1 fw-normal">
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <span class="">167</span>
                </div>
                <span class="FS-6">$$$$ • American, Steakhouse, Gluten free options</span>
            </div>
        </div>
        <div class="grid-item">
            <a href="{{ url('/') }}/hotel">
                <img src="{{ url('public/assets/frontend/images/pd9.jpg') }}">
                <img src="{{ url('public/assets/frontend/icons/heart.png') }}" class="icon-hotels-h">
            </a>
            <div class="ms-3 mt-2">
                <h class="fw-normal fs-5">Rambagh Palace</h>
                <div class="ratings me-3 mb-1 fw-normal">
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                        <circle cx="9" cy="9" r="9" />
                    </svg>
                    <span class="">167</span>
                </div>
                <span class="FS-6">$$$$ • American, Steakhouse, Gluten free options</span>
            </div>
        </div>
    </div>

</div>


@endsection

@push('css')
    <style>

    </style>
@endpush

@push('scripts')
    <script>

    </script>
@endpush


