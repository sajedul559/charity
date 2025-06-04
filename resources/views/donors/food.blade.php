<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">

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
    <title>Charity</title>
</head>

<body>
    <header>
        <div class="header-area ">
            <div class="header-top_area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-md-12 col-lg-8">
                            <div class="short_contact_list">
                                <ul>
                                    <li><a href="#"> <i class="fa fa-user"></i> Sajedul Islam</a></li>
                                    <li><a href="#"> <i class="fa fa-envelope"></i>sajedulkhairul@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6 col-lg-4">
                            <div class="social_media_links d-none d-lg-block">
                                {{-- <a href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-pinterest-p"></i>
                            </a> --}}
                                {{-- Login-to-dashboard --}}
                                @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 sm:block">
                                    @auth
                                    <a href="{{ url('/dashboard') }}"
                                        class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                                    @else
                                    <a href="{{ route('login') }}" class="text-sm mt-4 btn bg-green-400 btn-sm">Log
                                        in</a>

                                    @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="text-sm ml-3 mt-4 btn btn-info btn-sm">Register</a>
                                    @endif
                                    @endauth
                                </div>
                                @endif
                            </div>
                        </div>
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
                                        <li><a href="About.html">Blog</a></li>
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
                                        <li><a href="#">Charities</a></li>
                                        <li><a href="#">Auction</a></li>
                                        {{-- <li><a href="#">Donate</a></li> --}}
                                        {{-- <li><a href="#">Project</a></li> --}}
                                        <li><a href="#">About</a></li>
                                    </ul>
                                </nav>
                                <div class="Appointment">
                                    <div class="book_btn d-none d-lg-block">
                                        <a data-scroll-nav='1' href="#">Make a Donate</a>
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
    <div class="single_slider d-flex align-items-center food_bg_img overlay2">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="slider_text">
                        <span>ক্ষুধা নয়, হোক ভালোবাসা।</span>
                        <h3> ক্ষুধার্ত মানুষদের <br>খাবার দিন ভালোবাসায়</h3>
                        <p>একটি খাবার অনেক কিছু বদলে দিতে পারে। <br>
                            আপনার সাহায্যে কেউ পাবে নতুন আশার আলো।</p>
                        <a href="#" class="boxed-btn3">আরও জানুন</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



   <div class="container-fluid">
    <div class="row bg-green-200 my-5 p-5">
        <div class="col-md-6">
            <h1 class="text-size">একটি খাবার, একটি জীবন – খাদ্য দানে আপনার সহায়তা দিন</h1>
            <p class="fw-light fs-5">
                বিশ্ব বাজারে খাদ্যের চাহিদা কত দ্রুত পরিবর্তিত হতে পারে, তা ২০০০ দশকের মাঝামাঝি সময়ে স্পষ্টভাবে দেখা গেছে। দুই দশক ধরে, বিশ্ব জনসংখ্যা বৃদ্ধি, রেকর্ড পরিমাণ ফসল উৎপাদন, নতুন প্রযুক্তি, আয় বৃদ্ধি এবং খাদ্যাভ্যাসে বৈচিত্র্যতা বৃদ্ধির কারণে বিশ্বব্যাপী খাদ্যের চাহিদা ক্রমাগত বেড়েছে। </p>
                 

            <p class="fw-light fs-5">
                বিশ্বব্যাপী লাখ লাখ মানুষ প্রতিদিন না খেয়ে থাকে। খাদ্য হচ্ছে একটি মৌলিক অধিকার, তবুও দারিদ্র্য, দুর্যোগ এবং অর্থনৈতিক বৈষম্যের কারণে অনেকে সেই অধিকার থেকে বঞ্চিত। আমাদের একটু সহানুভূতি এবং সাহায্য তাদের জীবনে বিশাল পরিবর্তন আনতে পারে।
            </p>
            <p class="fw-light fs-5">
                বিশ্বব্যাপী লাখ লাখ মানুষ প্রতিদিন না খেয়ে থাকে। খাদ্য হচ্ছে একটি মৌলিক অধিকার, তবুও দারিদ্র্য, দুর্যোগ এবং অর্থনৈতিক বৈষম্যের কারণে অনেকে সেই অধিকার থেকে বঞ্চিত। আমাদের একটু সহানুভূতি এবং সাহায্য তাদের জীবনে বিশাল পরিবর্তন আনতে পারে।
            </p>
            <p class="fw-light fs-5">
                ২০০০ সালের পর থেকে বৈশ্বিক খাদ্য পরিস্থিতি অনেক দ্রুত পরিবর্তন হয়েছে। শস্য উৎপাদনের হার চাহিদার সঙ্গে তাল মেলাতে পারেনি। ২০০৫ সালের পর হতাশাজনক ফসল এবং তেলের দাম বৃদ্ধির কারণে খাদ্য উৎপাদনের খরচ অনেক বেড়ে যায়। এর ফলে দরিদ্র মানুষদের জন্য ন্যূনতম খাদ্য নিশ্চিত করাও কঠিন হয়ে দাঁড়ায়।
            </p>
            <p class="fw-light fs-5">
                আমরা বিশ্বাস করি, একসাথে চেষ্টা করলে ক্ষুধার বিরুদ্ধে জয় সম্ভব। আপনি যদি একটি খাবার দান করেন, কেউ হয়তো একটি দিন বাঁচার সুযোগ পাবে। আমরা আপনাকে আহ্বান জানাই—এগিয়ে আসুন, দান করুন এবং একটি পরিবর্তনের অংশ হোন।
            </p>
            <p class="fw-light fs-5 text-success">
                "একজন ক্ষুধার্ত মানুষের মুখে হাসি ফোটানোই সবচেয়ে বড় মানবতা।"
            </p>
        </div>
        <div class="col-md-6">
            <img src="img/hunger.jpg" alt="খাদ্য সংকট">
        </div>
    </div>
</div>


<div class="container my-5">
    <div class="card shadow-lg border-0">
        <div class="card-header bg-success text-white text-center py-4 rounded-top">
            <h3>District Donation Form</h3>
        </div>
        <div class="card-body">
            <form action="" method="POST" novalidate>
                @csrf

                <!-- District Selection -->
                <div class="mb-4">
                    <label class="form-label fw-semibold d-block mb-2">Select District(s):</label>
                    <div class="row">
                        @foreach (['Dhaka', 'Chittagong', 'Rajshahi', 'Sylhet', 'Barishal', 'Khulna', 'Moyamensing'] as $district)
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="category[]" value="{{ $district }}" id="district_{{ $district }}">
                                    <label class="form-check-label" for="district_{{ $district }}">
                                        {{ $district }}
                                    </label>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Name Fields -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="firstName" class="form-label fw-semibold">First Name</label>
                        <input type="text" id="firstName" name="firstName" class="form-control" placeholder="Enter first name">
                    </div>
                    <div class="col-md-6">
                        <label for="lastName" class="form-label fw-semibold">Last Name</label>
                        <input type="text" id="lastName" name="lastName" class="form-control" placeholder="Enter last name">
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="mb-3">
                    <label for="mobilePhone" class="form-label fw-semibold">Mobile Phone</label>
                    <input type="text" id="mobilePhone" name="mobilePhone" class="form-control" placeholder="e.g. 01XXXXXXXXX">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label fw-semibold">Email Address</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="you@example.com">
                </div>

                <!-- Location Info -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="town" class="form-label fw-semibold">Town</label>
                        <input type="text" id="town" name="town" class="form-control" placeholder="Enter town">
                    </div>
                    <div class="col-md-6">
                        <label for="state" class="form-label fw-semibold">State</label>
                        <input type="text" id="state" name="state" class="form-control" placeholder="Enter state">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="postCode" class="form-label fw-semibold">Post Code</label>
                    <input type="text" id="postCode" name="postCode" class="form-control" placeholder="Enter post code">
                </div>

                <!-- Headline -->
                <div class="mb-3">
                    <label for="heading" class="form-label fw-semibold">Headline</label>
                    <input type="text" id="heading" name="heading" class="form-control" placeholder="Enter a short headline">
                </div>

                <!-- Description -->
                <div class="mb-3">
                    <label for="description" class="form-label fw-semibold">Description</label>
                    <textarea id="description" name="description" class="form-control" rows="4" placeholder="Describe your donation or purpose..."></textarea>
                </div>

                <!-- Method Selection -->
                <div class="mb-4">
                    <label for="selectMethod" class="form-label fw-semibold">Select Method</label>
                    <select id="selectMethod" name="selectMethod" class="form-select">
                        <option value="">-- Select Method --</option>
                        <option value="Home">Home</option>
                        <option value="Resturant">Restaurant</option>
                        <option value="Convention">Convention</option>
                    </select>
                </div>

                <!-- Submit Button -->
                <div class="d-flex justify-content-center mt-4">
                    <button type="submit" class="btn btn-success px-5 py-2 fs-5">Donate</button>
                </div>
            </form>
        </div>
    </div>
</div>



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
    <script src="{{asset('js/myscript.js')}}"></script>
</body>

</html>
