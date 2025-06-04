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
                                    <li><a href="#"> <i class="fa fa-users"></i>Sajedul Islam</a></li>
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
    {{-- <div class="container-fluid">
        <div class="row">
            <div class="col">
                <img src="img/blood.jpg" class="img-fluid w-auto mt-5" alt="">
            </div>
        </div>
    </div>
     --}}
<div class="slider_area">
    <div class="single_slider d-flex align-items-center blood_bg_img overlay2">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="slider_text">
                        <span>রক্ত নয়, আপনি দিচ্ছেন জীবনের নতুন সুযোগ</span>
                        <h3> যখন প্রয়োজন রক্তের,<br> আপনি হতে পারেন একজন বীর</h3>
                        <p>একটি ব্যাগ রক্ত দিতে হয়তো আপনার কিছু সময় লাগবে,<br> কিন্তু এটি কারো পুরো জীবন বাঁচাতে পারে।</p>
                        <a href="#" class="boxed-btn3">আরও জানুন</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    {{-- End of Image Slider --}}

   <div class="container-fluid">
    <div class="row my-5 p-5">
        <div class="col-md-6">
            <h1 class="text-size">মানুষের পাশে দাঁড়ান, রক্ত দিয়ে ভালোবাসা ছড়ান</h1>

            <p class="fw-light fs-5">
                রক্তদান শুধু একটি মানবিক দায়িত্ব নয়, এটি জীবন রক্ষার এক অপরিহার্য উপায়। দুর্ঘটনা, অস্ত্রোপচার, ক্যানসার, থ্যালাসেমিয়া, ডেঙ্গু সহ নানা জটিল রোগে আক্রান্ত রোগীদের রক্ত প্রয়োজন হয়। আপনি যে রক্ত দান করেন, সেটি কোনো মেশিন দিয়ে তৈরি করা যায় না—এটা শুধু একজন মানুষই দিতে পারে আর একজন মানুষকে।
            </p>

            <p class="fw-light fs-5">
                ২০শতকের শুরুতে কার্ল ল্যান্ডস্টাইনার যখন এ, বি, ও রক্তের গ্রুপ আবিষ্কার করেন, তখনই আধুনিক রক্ত সঞ্চালনের ভিত্তি তৈরি হয়। সেই সময় রক্তকে সংরক্ষণ করার উপায় ছিল না, তাই রক্তদাতা ও গ্রহীতাকে একই সময়ে একত্রে থাকা লাগত। ফলে রক্তদান ছিল সীমিত এবং জটিল।
            </p>

            <p class="fw-light fs-5">
                বিশ্বযুদ্ধের সময় যখন বহু সৈনিক রক্তপাতজনিত কারণে প্রাণ হারাচ্ছিল, তখনই আরও উন্নত রক্ত সংরক্ষণ এবং সরবরাহ ব্যবস্থার প্রয়োজনীয়তা দেখা দেয়। এই চাহিদা থেকেই বিকশিত হয় আধুনিক ব্লাড ব্যাংকিং পদ্ধতি।
            </p>

            <p class="fw-light fs-5">
                আজকের দিনে, নিয়মিত রক্তদানের মাধ্যমে হাজারো প্রাণ বাঁচানো সম্ভব। প্রতি ৪ সেকেন্ডে একজন মানুষ রক্তের অপেক্ষায় থাকে। আপনি যদি সুস্থ থাকেন এবং বয়স ১৮ থেকে ৬০ বছরের মধ্যে হয়, তাহলে আপনি রক্তদান করতে পারেন। এটি আপনার স্বাস্থ্যেরও উপকারে আসে—রক্ত সঞ্চালন ভালো হয়, হৃদযন্ত্র সুস্থ থাকে এবং মনেও আসে এক প্রশান্তি।
            </p>

            <p class="fw-light fs-5 text-success">
                একটি ব্যাগ রক্ত কোনো কিছুর চেয়ে দামি নয়—এটি একটি নতুন জীবন।
            </p>
        </div>
        <div class="col-md-6">
            <img src="img/blood_blog.jpg" alt="রক্তদান সচেতনতা" class="img-fluid rounded shadow">
        </div>
    </div>
</div>


<div class="container my-5">
    <div class="card shadow-lg border-0">
        <div class="card-header bg-success text-white text-center py-4 rounded-top">
        
      <h3>Blood Donation Form</h3>
    </div>
    <div class="card-body">
      <form action="" method="POST" novalidate>
        @csrf
        
        <!-- Name Fields -->
        <div class="row mb-3">
          <div class="col-md-6">
            <label for="firstName" class="form-label fw-semibold">First Name</label>
            <input type="text" id="firstName" name="firstName" class="form-control" placeholder="John" required>
          </div>
          <div class="col-md-6">
            <label for="lastName" class="form-label fw-semibold">Last Name</label>
            <input type="text" id="lastName" name="lastName" class="form-control" placeholder="Doe" required>
          </div>
        </div>

        <!-- Contact Info -->
        <div class="mb-3">
          <label for="mobilePhone" class="form-label fw-semibold">Mobile Phone</label>
          <input type="tel" id="mobilePhone" name="mobilePhone" class="form-control" placeholder="+123 456 7890" required>
        </div>

        <div class="mb-3">
          <label for="email" class="form-label fw-semibold">E-mail</label>
          <input type="email" id="email" name="email" class="form-control" placeholder="example@mail.com" required>
        </div>

        <!-- Location -->
        <div class="row mb-3">
          <div class="col-md-6">
            <label for="town" class="form-label fw-semibold">Town</label>
            <input type="text" id="town" name="town" class="form-control" placeholder="Town Name">
          </div>
          <div class="col-md-6">
            <label for="state" class="form-label fw-semibold">State</label>
            <input type="text" id="state" name="state" class="form-control" placeholder="State Name">
          </div>
        </div>

        <div class="mb-3">
          <label for="postCode" class="form-label fw-semibold">Post Code</label>
          <input type="text" id="postCode" name="postCode" class="form-control" placeholder="12345">
        </div>

        <div class="mb-3">
          <label for="clinic" class="form-label fw-semibold">Name Your Clinic</label>
          <input type="text" id="clinic" name="clinic" class="form-control" placeholder="Clinic Name">
        </div>

        <!-- Date & Time -->
        <div class="row mb-3">
          <div class="col-md-6">
            <label for="selectTime" class="form-label fw-semibold">Select Your Time</label>
            <input type="time" id="selectTime" name="selectTime" class="form-control">
          </div>
          <div class="col-md-6">
            <label for="selectDate" class="form-label fw-semibold">Select Your Date</label>
            <input type="date" id="selectDate" name="selectDate" class="form-control">
          </div>
        </div>

        <!-- Messages -->
        <div class="mb-3">
          <label for="description" class="form-label fw-semibold">Any Messages?</label>
          <textarea id="description" name="description" rows="3" class="form-control" placeholder="Write any additional info here..."></textarea>
        </div>

        <!-- Blood Group -->
        <div class="mb-4">
          <label for="bloodGroup" class="form-label fw-semibold">Select Your Blood Group</label>
          <select id="bloodGroup" name="bloodGroup" class="form-select" required>
            <option value="" disabled selected>Select Your Blood Group</option>
            <option value="A+">A+</option>
            <option value="AB+">AB+</option>
            <option value="A-">A-</option>
            <option value="AB-">AB-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
          </select>
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
