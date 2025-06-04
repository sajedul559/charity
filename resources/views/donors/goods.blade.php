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

    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col">
                <img src="img/goods.jpg" class="img-fluid w-auto mt-5" alt="">
            </div>
        </div>
    </div>

   <div class="container my-5">
  <div class="row align-items-center g-5 p-4 bg-light rounded shadow-sm">
    <!-- Text Section -->
    <div class="col-lg-6">
      <h1 class="display-5 fw-bold mb-4">পণ্য দান করুন</h1>
      <p class="fs-5 text-secondary">
        অধিকাংশ চ্যারিটি সংস্থা শুধুমাত্র নতুন, ব্যবহার করা হয়নি বা প্রায় নতুন অবস্থায় থাকা আইটেম ব্যবহার করতে পারে। আপনার পুরানো, ক্ষতিগ্রস্ত সোফা, জং লাগা ওয়াশিং মেশিন, বা অন্য কোনো ব্যবহারকৃত সামগ্রীর জন্য যদি আপনার কোনো দরকার না থাকে, তবে সম্ভবত কোনো চ্যারিটি সংস্থাও তা গ্রহণ করবে না। একইভাবে, আপনার জন্য খারাপ বিনিয়োগ হয়ে যাওয়া টাইমশেয়ার চ্যারিটি সংস্থার জন্য তেমন উপকারে আসবে না। 
      </p>
      <p class="fs-5 text-secondary">
        পণ্য দানের পরিবর্তে নগদ অর্থ দান করলে আপনি চ্যারিটি সংস্থাগুলোকে আরও বেশি নমনীয়তা প্রদান করেন যাতে তারা সেই অর্থ প্রয়োজনীয় মানুষের বা প্রাণীদের কাছে পৌঁছে দিতে পারে। নিজে পণ্য বিক্রি করলে আপনি লাভালাভকারী মধ্যস্থতাকারীদের কেটে নেওয়া বড় অংশ থেকে মুক্তি পান, যা চ্যারিটি উদ্দেশ্যের জন্য বরাদ্দ অর্থের বড় অংশ। এছাড়াও, নিজে বিক্রি করলে চ্যারিটি সংস্থাগুলোকে বিক্রয় বা পুনরুদ্ধারে সময় ও অর্থ ব্যয় করতে হয় না, ফলে তারা সরাসরি তাদের মিশন পূরণে বেশি সম্পদ ব্যয় করতে পারে। অবশেষে, নিজেরাই বিক্রি করলে আপনি দানের সঠিক মূল্য জানেন যা আপনি আইআরএস-এ রিপোর্ট করতে পারবেন এবং আপনার কর রিটার্নের জন্য মূল্য অনুমান নিয়ে চিন্তা করতে হবে না।
      </p>
    </div>

    <!-- Image Section -->
    <div class="col-lg-6 text-center">
      <img 
        src="img/goods_blog.jpg" 
        alt="Donate Goods" 
        class="img-fluid rounded shadow"
        style="max-height: 400px; object-fit: cover;"
      />
    </div>
  </div>
</div>


<div class="container my-5">
  <div class="card shadow-lg border-0">
    <div class="card-header bg-success text-white text-center py-4 rounded-top">
      <h2 class="mb-0">Goods Donation Form</h2>
      <small>Your generous contribution makes a difference</small>
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

        <!-- Goods Information -->
        <h4 class="text-success mb-3">Goods Information</h4>
        <div class="row g-3">
          <div class="col-md-6">
            <label for="goodsCategory" class="form-label">Goods Category</label>
            <select name="goodsCategory" class="form-select" required>
              <option value="" selected disabled>Select a category</option>
              <option value="Convenience Products">Convenience Products</option>
              <option value="Shopping Products">Shopping Products</option>
              <option value="Speciality">Speciality</option>
              <option value="Unsought">Unsought</option>
              <option value="Electric Product">Electric Product</option>
            </select>
          </div>
          <div class="col-md-6">
            <label for="goodsName" class="form-label">Goods Name</label>
            <input type="text" name="goodsName" class="form-control" required>
          </div>
          <div class="col-md-6">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="number" name="quantity" class="form-control" min="1" required>
          </div>
          <div class="col-md-6">
            <label for="conditions" class="form-label">Conditions</label>
            <input type="text" name="conditions" class="form-control" placeholder="e.g. New, Used, Like New" required>
          </div>
          <div class="col-md-12">
            <label for="pickUpPoint" class="form-label">Pick-up Point</label>
            <input type="text" name="pickUpPoint" class="form-control" placeholder="Where can we pick up the goods?" required>
          </div>
          <div class="col-md-12">
            <label for="description" class="form-label">Additional Message</label>
            <textarea name="description" class="form-control" rows="3" placeholder="Any extra information or message"></textarea>
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
