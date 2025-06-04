<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Charity</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/css/app.css">
    <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/themify-icons.css">
    <link rel="stylesheet" href="/css/nice-select.css">
    <link rel="stylesheet" href="/css/flaticon.css">
    <link rel="stylesheet" href="/css/gijgo.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/slicknav.css">
    <link rel="stylesheet" href="/css/style.css">
    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
</head>

<body>
    @if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
        @else
        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
        @endif
        @endauth
    </div>
    @endif

    <header>
        <div class="header-area ">
            <div class="header-top_area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-md-12 col-lg-8">
                            <div class="short_contact_list">
                                <ul>
                                    <li><a href="#"> <i class="fa fa-user"></i>Sajedul Islam</a></li>
                                    <li><a href="#"> <i class="fa fa-envelope"></i>sajedulkhairul@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                        {{-- <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-pinterest-p"></i>
                                    </a> --}}
                        {{-- Login-to-dashboard --}}
                        {{-- @if (Route::has('login'))
                                        <div class="hidden fixed top-0 right-0 sm:block">
                                            @auth
                                            <a href="{{ url('/dashboard') }}"
                        class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                        @else
                        <a href="{{ route('login') }}" class="text-sm mt-4 btn bg-green-400 btn-sm">Log
                            in</a>

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="text-sm ml-3 mt-4 btn btn-info btn-sm">Register</a>
                        @endif
                        @endauth
                    </div>
                    @endif --}}
                </div>
            </div>
        </div>
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-3">
                        <div class="logo">
                            <a href="{{url('/')}}">
                                <img src="img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9">
                        <div class="main-menu">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="{{url('/')}}">Home</a></li>
                                    <li><a href="{{url('blog')}}">Blog</a></li>
                                    <li><a href="#">Donations<i class="ti-angle-down"></i></a>
                                        <ul class="submenu">
                                            <li><a class="dropdown-item" href="{{url('food')}}">Food Donation</a>
                                            </li>
                                            <li><a class="dropdown-item" href="{{url('blood')}}">Blood Donation</a>
                                            </li>
                                            <li><a class="dropdown-item" href="{{url('medicine')}}">Medicine
                                                    Donation</a></li>
                                            <li><a class="dropdown-item" href="{{url('clothing')}}">Cloth
                                                    Donation</a></li>
                                            <li><a class="dropdown-item" href="{{url('financial')}}">Financial
                                                    Donation</a></li>
                                            <li><a class="dropdown-item" href="{{url('goods')}}">Donating Goods</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="{{url('charities')}}">Charities</a></li>
                                    <li><a href="{{url('auctions')}}">Auction</a></li>
                                    {{-- <li><a href="#">Donate</a></li> --}}
                                    {{-- <li><a href="#">Project</a></li> --}}
                                    <li><a href="#">About</a></li>
                                </ul>
                            </nav>
                            <div class="Appointment">
                                <div class="book_btn d-none d-lg-block">
                                    <a href="{{url('makeDonation')}}">Make a Donate</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </header>

    {{-- image slideer --}}
   <div class="slider_area">
    <div class="single_slider d-flex align-items-center slider_bg_1 overlay2">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="slider_text">
                        <span>আজই শুরু করুন</span>
                        <h3> শিশুদের সাহায্য করুন <br>
                            যখন তাদের সবচেয়ে প্রয়োজন</h3>
                        <p>এখনই সময় সহানুভূতির হাত বাড়িয়ে দেওয়ার। <br>
                           আপনার সাহায্য একটি জীবনের পরিবর্তন ঘটাতে পারে।</p>
                        <a href="#" class="boxed-btn3">আরও জানুন</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    {{-- End of image slider --}}

    <!-- counter_area_start  -->
    <div class="counter_area mt-4">
        <div class="container">
            <div class="counter_bg overlay">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="single_counter d-flex align-items-center justify-content-center">
                            <div class="icon">
                                <i class="flaticon-calendar"></i>
                            </div>
                            <div class="events">
                                <h3 class="counter">120</h3>
                                <p>Finished Event</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single_counter d-flex align-items-center justify-content-center">
                            <div class="icon">
                                <i class="flaticon-heart-beat"></i>
                            </div>
                            <div class="events">
                                <h3 class="counter">120</h3>
                                <p>Finished Event</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single_counter d-flex align-items-center justify-content-center">
                            <div class="icon">
                                <i class="flaticon-in-love"></i>
                            </div>
                            <div class="events">
                                <h3 class="counter">120</h3>
                                <p>Finished Event</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single_counter d-flex align-items-center justify-content-center">
                            <div class="icon">
                                <i class="flaticon-hug"></i>
                            </div>
                            <div class="events">
                                <h3 class="counter">120</h3>
                                <p>Finished Event</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- counter_area_end  -->
      <!-- counter_area_start  -->
<div class="container">
    <div class="row container">
        <div class="col-12">
            <h2 class="text-center mt-3" style="color: black;">আমাদের প্রকল্প সম্পর্কে</h2>
            <p class="mt-3" style="color: black;">
                এই চ্যারিটি সিস্টেমটি পলাশতলী গ্রামে শুরু হওয়া একটি মহৎ সামাজিক উদ্যোগ, যার লক্ষ্য সমাজের পিছিয়ে পড়া ও অসহায় মানুষদের পাশে দাঁড়ানো।
            </p>
            <p style="color: black;">
                আমাদের কার্যক্রমের মধ্যে রয়েছে খাদ্য বিতরণ, পুরাতন ও নতুন কাপড় বিতরণ, বিনামূল্যে চিকিৎসা সহায়তা, শিক্ষা উপকরণ সরবরাহ এবং স্বাস্থ্য সচেতনতা কার্যক্রম পরিচালনা।
            </p>
            <p style="color: black;">
                চ্যারিটি সিস্টেমে রয়েছে বিভিন্ন দানের ধরণ যেমন: খাদ্য, কাপড়, ওষুধ, শিক্ষা, স্বাস্থ্য, সমাজকল্যাণ ইত্যাদি। দাতারা সহজেই তাদের পছন্দ অনুযায়ী যে কোনো খাতে অনুদান দিতে পারেন।
            </p>
            <p style="color: black;">
                আমাদের ব্লগ বিভাগে নিয়মিত সমাজসেবামূলক তথ্য, ঘটনার বিবরণ, এবং জনসচেতনতা বৃদ্ধির মতো বিষয়বস্তু প্রকাশ করা হয় যা মানুষকে উৎসাহিত করে সমাজের জন্য কিছু করতে।
            </p>
            <p style="color: black;">
                আমরা স্বেচ্ছাসেবক নিবন্ধনের সুযোগ দিয়েছি, যেখানে যেকেউ স্বেচ্ছায় আমাদের সঙ্গে যুক্ত হয়ে কাজ করতে পারেন। এতে একদিকে সমাজের উপকার হয়, অন্যদিকে তরুণদের ভেতরে মানবিক মূল্যবোধ গড়ে ওঠে।
            </p>
            <p style="color: black;">
                ভবিষ্যতে আমাদের লক্ষ্য আরও গ্রাম ও অঞ্চলজুড়ে এই সেবা সম্প্রসারণ করা যাতে বাংলাদেশের প্রত্যন্ত অঞ্চলের মানুষও এই সুবিধা পেতে পারে।
            </p>
            <p style="color: black;">
                এই প্রকল্প সম্পূর্ণভাবে মানুষের সহানুভূতি, ভালোবাসা ও দায়িত্ববোধের উপর ভিত্তি করে পরিচালিত হয়। আমরা বিশ্বাস করি, সমাজের সকল শ্রেণির মানুষের সম্মিলিত প্রচেষ্টায় একটি সুন্দর ও মানবিক সমাজ গড়ে তোলা সম্ভব।
            </p>
        </div>
    </div>
</div>


    <!-- counter_area_end  -->


    {{-- body --}}
   <div class="container-fluid mt-5 mb-5 bg-indigo-100">
    <div class="row gx-4 gy-4 mx-3">
        <div class="col-12 col-sm-6 col-md-4">
            <div class="card h-100">
                <img src="img/volunteer.jpg" class="card-img-top" alt="Volunteer">
                <div class="card-body d-flex justify-content-center">
                    <a href="{{ url('volunteer') }}" class="btn btn-outline-success">Volunteer</a>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4">
            <div class="card h-100">
                <img src="img/event.jpg" class="card-img-top" alt="Events">
                <div class="card-body d-flex justify-content-center">
                    <a href="{{ url('events') }}" class="btn btn-outline-success">Events</a>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4">
            <div class="card h-100">
                <img src="img/camp.jpg" class="card-img-top" alt="Campaigns">
                <div class="card-body d-flex justify-content-center">
                    <a href="#" class="btn btn-outline-success">Campaigns</a>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4">
            <div class="card h-100">
                <img src="img/sdg.jpg" class="card-img-top" alt="SDG Goals">
                <div class="card-body d-flex justify-content-center">
                    <a href="#" class="btn btn-outline-success">SDG's Goals</a>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4">
            <div class="card h-100">
                <img src="img/auction.jpg" class="card-img-top" alt="Auction History">
                <div class="card-body d-flex justify-content-center">
                    <a href="#" class="btn btn-outline-success">Auction History</a>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4">
            <div class="card h-100">
                <img src="img/ngo.jpg" class="card-img-top" alt="NGOs">
                <div class="card-body d-flex justify-content-center">
                    <a href="#" class="btn btn-outline-success">NGO's</a>
                </div>
            </div>
        </div>
    </div>
</div>


   <div class="container">
    <div class="row mt-5">
        <div class="col-md-6">
            <img src="{{ asset('img/support.png')}}" alt="সহায়তা ছবি">
        </div>
        <div class="col-md-6">
            <div class="mt-4 ml-4">
                <div class="vl bg-success"></div>
                <p class="fw-bold fs-1">অন্যদের সাহায্য করা</p>
                <p class="fw-bold fs-1">আসলে নিজেকেই সাহায্য করা</p>
                <div class="mt-5">
                    <p class="fw-light fs-4">
                        জীবনের উদ্দেশ্য শুধুমাত্র সুখী হওয়া নয়। বরং উপকারে আসা, সৎ হওয়া, সহানুভূতিশীল হওয়া এবং
                        এমন কিছু করা যার মাধ্যমে বোঝা যায় আপনি ভালোভাবে বেঁচে ছিলেন এবং সমাজে কিছু অবদান রেখেছেন।
                    </p>
                </div>
                <div class="my-5">
                    <a href="#" class="btn btn-success text-gray-900">আমাদের প্রভাব</a>
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- reson_area_start  -->
<div class="reson_area section_padding bg-light">
    <div class="container">
        <!-- Section Title -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-6">
                <div class="section_title text-center">
                    <h3 class="fw-bold"><span>একতায় নতুন দিগন্ত</span></h3>
                </div>
            </div>
        </div>

        <!-- Cards -->
        <div class="row g-4 justify-content-center">
            @foreach([
                ['img' => '1.png', 'title' => 'তহবিল সংগ্রহ', 'desc' => 'গরীব, অসহায় ও দুস্থ মানুষের পাশে দাঁড়াতে আমরা নিয়মিতভাবে তহবিল সংগ্রহ করি। এই তহবিল দিয়ে খাবার, কাপড়, ওষুধ এবং শিক্ষাসামগ্রী সরবরাহ করা হয়।'],
                ['img' => '2.png', 'title' => 'রক্তদান ক্যাম্প', 'desc' => 'জরুরি সময় ও দুর্ঘটনার মুহূর্তে রক্তের প্রয়োজন মেটাতে আমরা রক্তদান ক্যাম্প আয়োজন করি। এতে বহু জীবন বাঁচানো সম্ভব হয়।'],
                ['img' => '3.png', 'title' => 'বন্ধুসুলভ স্বেচ্ছাসেবক', 'desc' => 'আমাদের স্বেচ্ছাসেবকরা আন্তরিকভাবে কাজ করেন সমাজে ইতিবাচক প্রভাব ফেলতে। তারা সময়, শ্রম ও ভালোবাসা দিয়ে মানুষের মুখে হাসি ফোটায়।']
            ] as $item)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card border-0 shadow-sm h-100 text-center p-4 bg-white rounded-4">
                        <div class="mb-3">
                            <img 
                                src="{{ asset('img/help/' . $item['img']) }}" 
                                alt="{{ $item['title'] }}" 
                                class="img-fluid rounded-circle border border-3 border-primary shadow mx-auto d-block"
                                style="width: 130px; height: 130px; object-fit: cover;">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-semibold mb-3">{{ $item['title'] }}</h5>
                            <p class="card-text text-muted mb-3">{{ $item['desc'] }}</p>
                            <a href="#" class="btn btn-outline-primary btn-sm rounded-pill">বিস্তারিত দেখুন</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>



    <!-- reson_area_end  -->

    {{-- Sponser Ship --}}
    {{-- <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card bg-dark text-white">
                    <img class="card-img img_opacity" src="{{ asset('img/Sponsr.jpg')}}" alt="Card image">
                    <div class="card-img-overlay">
                        <p class="card-text sponsr_text text-center text-gray-900 mt-48">Supported People</p>
                        <p class="card-text text-center mt-10 text-dark font-weight-light fs-4">There is nothing more
                            beautiful than someone who goes out of their way to make life beautiful for others</p>

                        <div class="row row-cols-1 row-cols-md-6 g-2 mt-5">
                            <div class="col">
                                <div class="card" style="width: 12rem; height: 8rem">
                                    <img src="img/spn1.png" class="card-img-top" alt="...">
                                </div>
                            </div>

                            <div class="col">
                                <div class="card" style="width: 12rem; height: 8rem">
                                    <img src="img/spn2.png" class="card-img-top" alt="...">
                                </div>
                            </div>

                            <div class="col">
                                <div class="card" style="width: 12rem; height: 8rem">
                                    <img src="img/spn3.png" class="card-img-top" alt="...">
                                </div>
                            </div>

                            <div class="col">
                                <div class="card" style="width: 12rem; height: 8rem">
                                    <img src="img/spn4.png" class="card-img-top" alt="...">
                                </div>
                            </div>

                            <div class="col">
                                <div class="card" style="width: 12rem; height: 8rem">
                                    <img src="img/spn5.png" class="card-img-top" alt="...">
                                </div>
                            </div>

                            <div class="col">
                                <div class="card text-center" style="width: 12rem; height: 8rem">
                                    <img src="img/spn5.png" class="card-img-top" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
<div class="container-fluid mb-5">
    <div class="row">
        <div class="col-12">
            <div class="card border-0 bg-dark text-white position-relative overflow-hidden">

                <!-- Background Image Layer -->
                <div class="position-absolute top-0 start-0 w-100 h-100" style="z-index: 1;">
                    <img src="{{ asset('img/Sponsr.jpg') }}" alt="Background" class="w-100 h-100" style="object-fit: cover; opacity: 0.3;">
                </div>

                <!-- Overlay Content -->
                <div class="position-relative z-2 text-center px-3 py-5">
                    <div class="container">
                        <!-- Title -->
                        <h2 class="fw-bold text-white mb-3 fs-4 fs-md-2">যাঁরা আমাদের পাশে ছিলেন</h2>
                        <p class="text-light fs-6 mb-4">
                            একজন মানুষ সবচেয়ে সুন্দর তখনই হয়, যখন সে অন্যের জীবনে আলো ছড়িয়ে দেয়।
                        </p>

                        <!-- Sponsor Image Grid -->
                        <div class="row g-3 justify-content-center">
                            @foreach (['spn1.png', 'spn2.png', 'spn3.png', 'spn4.png', 'spn5.png', 'spn5.png'] as $img)
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex justify-content-center mb-1">
                                    <div class="bg-white rounded shadow-sm p-2 w-100 text-center" style="height: 100px;">
                                        <img src="{{ asset('img/' . $img) }}" class="img-fluid h-100" style="max-height: 80px; object-fit: contain;" alt="Sponsor">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>





    {{-- Home Blog --}}
   <div class="container my-5">
    <div class="row">
        <div class="col-md-6">
            <div class="mt-4 ml-4">
                <div class="vl bg-success"></div>
                <p class="fw-bold fs-1"><b>আমাদের উদ্যোগ সম্পর্কে জানুন</b></p>
                <div class="mt-5">
                    <p class="fw-light fs-6 text-left">
                        আমরা গরীব ও অসহায় মানুষের পাশে দাঁড়িয়ে তাদের জীবন মানোন্নয়নে কাজ করে যাচ্ছি।
                        খাদ্য, বস্ত্র, ওষুধ এবং শিক্ষা সামগ্রী সরবরাহের মাধ্যমে তাদের প্রতিদিনের চ্যালেঞ্জ কমাতে সহায়তা করি।
                    </p>

                    <p class="fw-light fs-6 text-left">
                        আমাদের স্বেচ্ছাসেবকরা মানবতার সেবায় নিবেদিতপ্রাণ, যারা ভালোবাসা ও শ্রম দিয়ে সমাজে ইতিবাচক পরিবর্তন আনছেন।
                        আমরা নিয়মিত রক্তদান ক্যাম্প, তহবিল সংগ্রহ এবং জরুরি সাহায্য কর্মসূচি পরিচালনা করি,
                        যা বহু জীবন রক্ষায় সহায়ক হয়েছে।
                    </p>

                    <p class="fw-light fs-6 text-left">
                        আপনাদের সহযোগিতা ও দানে আমরা আরও বড় মাত্রায় কাজ করতে সক্ষম হবো,
                        তাই আমাদের সাথে যুক্ত হয়ে এই মহৎ যাত্রায় অংশ নিন এবং অন্যদের জীবনে আলোর আলো ছড়ান।
                    </p>
                </div>
                <div class="my-5">
                    <a href="#" class="btn btn-success text-gray-900">আরো জানুন</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('img/blog.png')}}" alt="আমাদের উদ্যোগ">
        </div>
    </div>
</div>

    {{-- End of Home Blog --}}

    <!-- latest_activites_area_start  -->
   <div class="latest_activites_area">
    <div class="video_bg_1 video_activite d-flex align-items-center justify-content-center">
        <a class="popup-video" href="https://www.youtube.com/watch?v=MG3jGHnBVQs">
            <i class="flaticon-ui"></i>
        </a>
    </div>
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-lg-7">
                <div class="activites_info">
                    <div class="section_title">
                        <h3> <span>আমাদের সাম্প্রতিক</span><br>
                            কার্যক্রম দেখুন</h3>
                    </div>
                    <p class="para_1">আমরা প্রতিনিয়ত চেষ্টা করে যাচ্ছি অভুক্ত ও দরিদ্র মানুষের মুখে খাবার তুলে দিতে। আমাদের এই উদ্যোগে আপনিও হতে পারেন অংশীদার।</p>
                    <p class="para_2">প্রতিদিন হাজারো মানুষ না খেয়ে ঘুমায়। আপনার ছোট একটি সহায়তা হতে পারে তাদের জীবনে একটুখানি স্বস্তির নিশ্বাস। আসুন, একসাথে ক্ষুধামুক্ত একটি সমাজ গড়ে তুলি।</p>
                    <a href="{{url('makeDonation')}}" class="boxed-btn4">এখনই দান করুন</a>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- latest_activites_area_end  -->

    <!-- popular_causes_area_start  -->
    <div class="popular_causes_area section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb-55">
                        <h3><span>Popular Causes</span></h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="causes_active owl-carousel">
                        <div class="single_cause">
                            <div class="thumb">
                                <img src="img/causes/1.png" alt="">
                            </div>
                            <div class="causes_content">
                                <div class="custom_progress_bar">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 30%;"
                                            aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                            <span class="progres_count">
                                                30%
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="balance d-flex justify-content-between align-items-center">
                                    <span>Raised: $5000.00 </span>
                                    <span>Goal: $9000.00 </span>
                                </div>
                                <h4>Help us to Send Food</h4>
                                <p>The passage is attributed to an
                                    unknown typesetter in the century
                                    who is thought</p>
                            </div>
                        </div>
                        <div class="single_cause">
                            <div class="thumb">
                                <img src="img/causes/2.png" alt="">
                            </div>
                            <div class="causes_content">
                                <div class="custom_progress_bar">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 30%;"
                                            aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                            <span class="progres_count">
                                                30%
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="balance d-flex justify-content-between align-items-center">
                                    <span>Raised: $5000.00 </span>
                                    <span>Goal: $9000.00 </span>
                                </div>
                                <h4>Clothes For Everyone</h4>
                                <p>The passage is attributed to an
                                    unknown typesetter in the century
                                    who is thought</p>
                            </div>
                        </div>
                        <div class="single_cause">
                            <div class="thumb">
                                <img src="img/causes/3.png" alt="">
                            </div>
                            <div class="causes_content">
                                <div class="custom_progress_bar">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 30%;"
                                            aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                            <span class="progres_count">
                                                30%
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="balance d-flex justify-content-between align-items-center">
                                    <span>Raised: $5000.00 </span>
                                    <span>Goal: $9000.00 </span>
                                </div>
                                <h4>Water For All Children</h4>
                                <p>The passage is attributed to an
                                    unknown typesetter in the century
                                    who is thought</p>
                               
                            </div>
                        </div>
                        <div class="single_cause">
                            <div class="thumb">
                                <img src="img/causes/1.png" alt="">
                            </div>
                            <div class="causes_content">
                                <div class="custom_progress_bar">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 30%;"
                                            aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                            <span class="progres_count">
                                                30%
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="balance d-flex justify-content-between align-items-center">
                                    <span>Raised: $5000.00 </span>
                                    <span>Goal: $9000.00 </span>
                                </div>
                                <h4>Help us to Send Food</h4>
                                <p>The passage is attributed to an
                                    unknown typesetter in the century
                                    who is thought</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- popular_causes_area_end  -->

    <!-- news__area_start  -->
    <div class="news__area section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb-55">
                        <h3><span>News & Updates</span></h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="news_active owl-carousel">
                        <div class="single__blog d-flex align-items-center">
                            <div class="thum">
                                <img src="img/news/1.png" alt="">
                            </div>
                            <div class="newsinfo">
                                <span>July 18, 2019</span>
                                <a href="single-blog.html">
                                    <h3>Pure Water Is More
                                        Essential</h3>
                                </a>
                                <p>The passage experienced a
                                    surge in popularity during the
                                    1960s when used it on their
                                    sheets, and again.</p>
                                <a class="read_more" href="{{url('/news')}}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{url('/news')}}" class="btn btn-success my-4">Read More</a>
        </div>
    </div>
    <!-- news__area_end  -->

    {{-- Sign Up to Hear from us --}}
 <div class="container my-5">
    <div class="p-5  bg-light bg-opacity-10 rounded shadow-sm">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <h2 class="fw-bold mb-3">Subscribe to Our Newsletter</h2>
                <p class="text-muted mb-4">Stay informed with our quarterly updates on events, activities, and opportunities to make an impact.</p>
            </div>
        </div>

        <form method="POST" action="" class="row g-3 justify-content-center mt-4">
            @csrf

            <div class="col-md-3">
                <label for="first_name" class="form-label">First Name</label>
                <input type="text" name="subFirst" class="form-control" id="first_name" placeholder="Your first name">
            </div>

            <div class="col-md-3">
                <label for="last_name" class="form-label">Last Name</label>
                <input type="text" name="subLast" class="form-control" id="last_name" placeholder="Your last name">
            </div>

            <div class="col-md-4">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" name="subEmail" class="form-control" id="email" placeholder="example@mail.com">
            </div>

            <div class="col-12 text-center mt-3">
                <button type="submit" class="btn btn-success px-5 py-2 fw-bold">Subscribe</button>
            </div>

            @if (session()->has('message'))
            <div class="col-12">
                <div class="alert alert-success text-center mt-3">
                    {{ session('message') }}
                </div>
            </div>
            @endif
        </form>
    </div>
</div>

    {{-- end of sign-up --}}

    <!-- footer_start  -->
    <footer class="footer bg-green-300">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4 ">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="img/footer_logo.png" alt="">
                                </a>
                            </div>
                            <p class="address_text">Lorem ipsum dolor sit amet, <br> consectetur adipiscing elit, sed do
                                <br> eiusmod tempor incididunt ut labore.
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-dribbble"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Services
                            </h3>
                            <ul class="links">
                                <li><a href="#">Donate</a></li>
                                <li><a href="#">Sponsor</a></li>
                                <li><a href="#">Fundraise</a></li>
                                <li><a href="#">Volunteer</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Contacts
                            </h3>
                            <div class="contacts">
                                <p>01882632239 <br>
                                    sajedulkhairul@gmail.com <br>
                                    Raipura, Narsingdi,
                                    Dhaka, Bangaldesh
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Top News
                            </h3>
                            <ul class="news_links">
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/news/news_1.png" alt="">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">
                                            <h4>School for African
                                                Childrens</h4>
                                        </a>
                                        <span>Jun 12, 2019</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/news/news_2.png" alt="">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">
                                            <h4>School for African
                                                Childrens</h4>
                                        </a>
                                        <span>Jun 12, 2019</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="row">
                    <div class="bordered_1px "></div>
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <p class="text-center ">
                                Copyright &copy; 
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                    Sajedul Islam
                            </p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer_end  -->




    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('js/ajax-form.js')}}"></script>
    <script src="{{asset('js/waypoints.min.js')}}"></script>
    <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('js/scrollIt.js')}}"></script>
    <script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script src="{{asset('js/nice-select.min.js')}}"></script>
    <script src="{{asset('js/jquery.slicknav.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/gijgo.min.js')}}"></script>
    <!--contact js-->
    <script src="{{asset('js/contact.js')}}"></script>
    <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('js/jquery.form.js')}}"></script>
    <script src="{{asset('js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('js/mail-script.js')}}"></script>

    <script src="{{asset('js/main.js')}}"></script>
</body>

</html>
