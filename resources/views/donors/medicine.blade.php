
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
                                    <li><a href="#"> <i class="fa fa-user"></i>Sajedul Islam</a></li>
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

    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <img src="img/medicine.jpg" class="img-fluid w-auto mt-5" alt="">
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row my-5 p-5">
            <div class="col-md-6">
                <h1 class="text-size">ওষুধ দিন, জীবন ফিরে দিন</h1>
                <p class="fw-light fs-5">
                    বিশ্বের অনেক দেশেই, বিশেষ করে নিম্ন ও মধ্যম আয়ের দেশগুলোতে, প্রয়োজনীয় ওষুধ ও চিকিৎসা সরঞ্জামের চরম সংকট দেখা যায়। এই সংকট কখনো কখনো সরকার, ফার্মাসিউটিক্যাল কোম্পানি কিংবা বেসরকারি সংগঠনের (NGO) ওষুধ দানের মাধ্যমে কিছুটা লাঘব হয়।
                </p>
                <p class="fw-light fs-5">
                    অনেক সময় জরুরি মুহূর্তে যেমন ভূমিকম্প, বন্যা বা যুদ্ধপরিস্থিতিতে ওষুধ দানই হয়ে ওঠে সবচেয়ে প্রয়োজনীয় সহায়তা। আবার কিছু দীর্ঘমেয়াদী স্বাস্থ্য কর্মসূচির অংশ হিসেবেও ওষুধ দান গুরুত্বপূর্ণ, যেমন অবহেলিত রোগ প্রতিরোধ কর্মসূচি।
                </p>
                <p class="fw-light fs-5">
                    ভালোভাবে পরিচালিত ওষুধ দান কর্মসূচি দরিদ্র জনগোষ্ঠীর জন্য স্বাস্থ্যসেবার দুয়ার খুলে দেয়। যেমন—২০০১ সালে গুজরাট ভূমিকম্পের পর বা মের্ক কোম্পানির আইভারমেকটিন দান কর্মসূচি। তবে অপরিকল্পিত বা অনুপযুক্ত ওষুধ দান বিপরীত প্রভাব ফেলতে পারে। অতিরিক্ত বা মেয়াদোত্তীর্ণ ওষুধ দানের ফলে যেমন ক্ষতি হয়, তেমনি সংরক্ষণ ও নিষ্পত্তির খরচও বেড়ে যায়।
                </p>
                <p class="fw-light fs-5">
                    তাই আসুন, সচেতনভাবে এবং দায়িত্ব নিয়ে প্রয়োজনীয় ও কার্যকর ওষুধ দান করি—যা হবে সত্যিকারের জীবন রক্ষার হাতিয়ার।
                </p>
            </div>
            <div class="col-md-6">
                <img src="img/medicine_blog.jpg" alt="ওষুধ দান">
            </div>
        </div>
    </div>

<div class="container my-5">
    <div class="card shadow-lg border-0">
        <div class="card-header bg-success text-white text-center py-4 rounded-top">
            <h2 class="mb-0">Medicine Donation Form</h2>
            <small>Your small help can save a life</small>
        </div>

        <div class="card-body px-5 py-4">
            <form action="" method="POST">
                @csrf

                <!-- Donor Information -->
                <h4 class="text-success mb-3">Donor Information</h4>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="text" name="firstName" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="text" name="lastName" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label for="mobilePhone" class="form-label">Mobile Phone</label>
                        <input type="text" name="mobilePhone" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label for="town" class="form-label">Town</label>
                        <input type="text" name="town" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="state" class="form-label">State</label>
                        <input type="text" name="state" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="postCode" class="form-label">Post Code</label>
                        <input type="text" name="postCode" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label for="selectTime" class="form-label">Preferred Time</label>
                        <input type="time" name="selectTime" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label for="selectDate" class="form-label">Preferred Date</label>
                        <input type="date" name="selectDate" class="form-control">
                    </div>
                </div>

                <hr class="my-4">

                <!-- Medicine Information -->
                <h4 class="text-success mb-3">Medicine Information</h4>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="drugName" class="form-label">Drug Name</label>
                        <input type="text" name="drugName" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label for="lotNumber" class="form-label">Lot Number (if available)</label>
                        <input type="text" name="lotNumber" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="expireTime" class="form-label">Expiration Date</label>
                        <input type="text" name="expireTime" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="source" class="form-label">Source</label>
                        <input type="text" name="source" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="quantity" class="form-label">Quantity Remaining</label>
                        <input type="text" name="quantity" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="ndc" class="form-label">NDC#</label>
                        <input type="text" name="ndc" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="drugStrength" class="form-label">Drug Strength</label>
                        <input type="text" name="drugStrength" class="form-control">
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="d-flex justify-content-center mt-5">
                    <button type="submit" class="btn btn-success px-5 py-2 fs-5">Submit Donation</button>
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
