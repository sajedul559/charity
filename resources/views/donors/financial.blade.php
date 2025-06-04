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

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col">
                <img src="img/financial.jpg" class="img-fluid w-auto mt-5" alt="">
            </div>
        </div>
    </div>

<div class="container my-5">
  <div class="row align-items-center g-5">
    <div class="col-md-6">
      <h1 class="mb-4 display-4 fw-bold text-primary">আর্থিক সহায়তা</h1>
      <p class="fs-5 text-muted lh-relaxed">
        অনুদান হলো অর্থের এমন একটি রূপ যা উপহার হিসেবে প্রদান করা হয়। স্পষ্ট করার জন্য, অনুদান গ্রান্ট বা চুক্তির মতো নয়। নিচে এই তিনটির সংজ্ঞা দেওয়া হলো:
      </p>
      <p class="fs-5 text-muted lh-relaxed">
        <strong>উপহার (Gift):</strong> দাতার পক্ষ থেকে স্বেচ্ছায় অর্থ হস্তান্তর, যা মানবতাবাদী উদ্দেশ্যে দেওয়া হয়। গ্রহণের পর, এই উপহার সম্পূর্ণভাবে গ্রহণকারী প্রতিষ্ঠানের মালিকানা হবে এবং যেকোনো প্রকল্প বা কাজের মালিকানা প্রতিষ্ঠানই রাখবে। দাতা গ্রহণের পর কোনো নিয়ন্ত্রণ রাখতে পারবেন না।
      </p>
      <p class="fs-5 text-muted lh-relaxed">
        <strong>গ্রান্ট (Grant):</strong> আর্থিক সহায়তার একটি প্রক্রিয়া যা নির্দিষ্ট গবেষণার জন্য স্পন্সর থেকে প্রদান করা হয়। প্রকল্পের সফলতা নিশ্চিত করার দায়িত্ব মূলত গ্রান্ট গ্রহীতার উপর থাকে, যিনি স্পন্সরের নির্ধারিত শর্তগুলো পূরণ করবেন।
      </p>
      <p class="fs-5 text-muted lh-relaxed mb-0">
        <strong>চুক্তি (Contract):</strong> একটি আইনগতভাবে বাধ্যতামূলক চুক্তি যা স্পন্সর এবং গ্রহীতার মধ্যে তৈরি হয়। এতে নির্দিষ্ট পরিষেবা বা প্রকল্পের ফলাফল সরবরাহ করার দায়িত্ব গ্রহীতার থাকে এবং স্পন্সর তা প্রদান করার জন্য বাধ্য থাকে।
      </p>
    </div>
    <div class="col-md-6 text-center">
      <img 
        src="img/finanacial_blog.jpg" 
        alt="আর্থিক সহায়তা" 
        class="img-fluid rounded shadow"
        style="max-height: 400px; object-fit: cover;"
      >
    </div>
  </div>
</div>


<div class="container mt-5">
  <div class="position-relative">
    <!-- Background image with dark overlay -->
    <img 
      src="{{ asset('img/financial_form.jpg') }}" 
      alt="Financial Form Background" 
      class="w-100 rounded shadow" 
      style="height: 450px; object-fit: cover; filter: brightness(0.35);"
    />
    
    <!-- Form container positioned over the image -->
    <div 
      class=" top-50 start-50 translate-middle bg-white bg-opacity-95 p-5 rounded shadow" 
      
    >
      <!-- Donor Information Heading -->
      <h2 class="fw-bold text-success text-center mb-4">
        Donor Information
      </h2>

      <form action="" method="POST" novalidate>
        @csrf
        <div class="row g-3 mb-3">
          <div class="col-md-6">
            <label for="firstName" class="form-label fw-semibold">First Name</label>
            <input type="text" name="firstName" id="firstName" class="form-control" placeholder="Enter your first name" required>
          </div>
          <div class="col-md-6">
            <label for="lastName" class="form-label fw-semibold">Last Name</label>
            <input type="text" name="lastName" id="lastName" class="form-control" placeholder="Enter your last name" required>
          </div>
        </div>

        <div class="row g-3 mb-3">
          <div class="col-md-6">
            <label for="mobilePhone" class="form-label fw-semibold">Mobile Phone</label>
            <input type="tel" name="mobilePhone" id="mobilePhone" class="form-control" placeholder="+8801XXXXXXXXX" required>
          </div>
          <div class="col-md-6">
            <label for="email" class="form-label fw-semibold">Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="example@mail.com" required>
          </div>
        </div>

        <div class="row g-3 mb-3">
          <div class="col-md-6">
            <label for="town" class="form-label fw-semibold">Town</label>
            <input type="text" name="town" id="town" class="form-control" placeholder="Enter your town" required>
          </div>
          <div class="col-md-3">
            <label for="state" class="form-label fw-semibold">State</label>
            <input type="text" name="state" id="state" class="form-control" placeholder="State" required>
          </div>
          <div class="col-md-3">
            <label for="postCode" class="form-label fw-semibold">Post Code</label>
            <input type="number" name="postCode" id="postCode" class="form-control" placeholder="Post Code" required>
          </div>
        </div>

        <!-- Financial Information Heading -->
        <h2 class="fw-bold text-success text-center my-4">
          Financial Information
        </h2>

        <div class="row g-3 mb-3">
          <div class="col-md-6">
            <label for="payment" class="form-label fw-semibold">Payment Type</label>
            <select name="payment" id="payment" class="form-select" required>
              <option value="" disabled selected>Select Your Payment Type</option>
              <option value="Cash">Cash</option>
              <option value="Mobile Banking">Mobile Banking</option>
              <option value="Bank Cheque">Bank Cheque</option>
            </select>
          </div>
          <div class="col-md-6">
            <label for="amount" class="form-label fw-semibold">Amount</label>
            <input type="number" name="amount" id="amount" class="form-control" placeholder="Enter amount" required min="1" step="any">
          </div>
        </div>

        <div class="mb-4">
          <label for="description" class="form-label fw-semibold">Donor Notes</label>
          <textarea name="description" id="description" class="form-control" rows="4" placeholder="Additional notes or messages"></textarea>
        </div>

        <div class="text-center">
          <button type="submit" class="btn btn-success btn-lg px-5 fw-semibold">
            Donate
          </button>
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
