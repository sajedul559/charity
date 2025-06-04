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

    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <img src="img/clothing.jpeg" class="img-fluid w-auto mt-5" alt="">
            </div>
        </div>
    </div>

<div class="container-fluid bg-light py-5">
    <div class="row align-items-center">
        <!-- Text Section -->
        <div class="col-md-6 px-5">
            <h1 class="display-5 fw-bold text-success mb-4">পরিচ্ছন্ন হৃদয়ের প্রতিচ্ছবি – পুরনো কাপড়, নতুন আশার আলো</h1>
            <p class="fs-5 text-secondary">
                আপনার অপ্রয়োজনীয় কাপড় হতে পারে কারো জীবনের প্রয়োজনীয় চাহিদা। আমাদের সমাজে এখনো অনেক মানুষ আছেন,
                যারা শীতকালে একটি উষ্ণ কাপড়ের জন্য কষ্ট করেন বা যারা প্রতিদিনের ব্যবহারের জন্য কাপড়ের অভাবে ভোগেন।<br><br>

                কাপড় দান করলে আপনি শুধু একটি জিনিসই দিচ্ছেন না—আপনি দিচ্ছেন আত্মবিশ্বাস, দিচ্ছেন মর্যাদা, দিচ্ছেন
                বেঁচে থাকার সাহস। এটি সাহায্য করে অসহায় মানুষ, পথশিশু, যুদ্ধাহত মুক্তিযোদ্ধা কিংবা প্রাকৃতিক দুর্যোগে
                ক্ষতিগ্রস্ত পরিবারের পাশে দাঁড়াতে।<br><br>

                আপনার একটি ছোট পদক্ষেপ কাউকে এনে দিতে পারে বিশাল স্বস্তি। দান করা শিখায় উদারতা, ভালোবাসা ও মানবিকতা।
                এই মানবিক গুণগুলো আমাদের সমাজকে করে তোলে আরও সুন্দর ও সহানুভূতিশীল।
                <strong>আপনিও এগিয়ে আসুন—পুরনো কাপড় দিন, নতুন আশার আলো জ্বালান!</strong>
            </p>
        </div>

        <!-- Image Section -->
        <div class="col-md-6 text-center">
            <img src="img/cloth_blog.jpg" alt="Donate Cloth" class="img-fluid rounded shadow-sm" style="max-height: 500px;">
        </div>
    </div>
</div>


<div class="container my-5">
    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-header bg-success text-white text-center py-4 rounded-top-4">
            <h2 class="mb-0">কাপড় দান ফর্ম (Cloth Donation Form)</h2>
        </div>
        <div class="card-body bg-light px-5 py-4">
            <form action="" method="POST">
                @csrf

                <!-- Donor Information -->
                <h4 class="text-primary mb-3">🧍‍♂️ Donor Information</h4>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" name="firstName" id="firstName" placeholder="Enter First Name">
                    </div>
                    <div class="col-md-6">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Enter Last Name">
                    </div>
                    <div class="col-md-6">
                        <label for="mobilePhone" class="form-label">Mobile Number</label>
                        <input type="text" class="form-control" name="mobilePhone" id="mobilePhone" placeholder="01XXXXXXXXX">
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="example@email.com">
                    </div>
                    <div class="col-md-6">
                        <label for="town" class="form-label">Town</label>
                        <input type="text" class="form-control" name="town" id="town" placeholder="Enter Town">
                    </div>
                    <div class="col-md-3">
                        <label for="state" class="form-label">State</label>
                        <input type="text" class="form-control" name="state" id="state" placeholder="Enter State">
                    </div>
                    <div class="col-md-3">
                        <label for="postCode" class="form-label">Post Code</label>
                        <input type="text" class="form-control" name="postCode" id="postCode" placeholder="Postal Code">
                    </div>
                </div>

                <!-- Cloth Information -->
                <hr class="my-4">
                <h4 class="text-primary mb-3">👕 Cloth Information</h4>
                <div class="row g-3">
                    <div class="col-12">
                        <label class="form-label d-block">Select Cloth Type</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="clothType[]" value="Male" id="male">
                            <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="clothType[]" value="Female" id="female">
                            <label class="form-check-label" for="female">Female</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="clothType[]" value="Kids" id="kids">
                            <label class="form-check-label" for="kids">Kids</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="clothType[]" value="Old" id="old">
                            <label class="form-check-label" for="old">Old</label>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="colthName" class="form-label">Cloth Name</label>
                        <input type="text" class="form-control" name="colthName" id="colthName" placeholder="e.g. T-shirt, Saree">
                    </div>
                    <div class="col-md-6">
                        <label for="size" class="form-label">Size</label>
                        <input type="text" class="form-control" name="size" id="size" placeholder="e.g. S, M, L, XL">
                    </div>
                    <div class="col-md-6">
                        <label for="quantity" class="form-label">Quantity</label>
                        <input type="number" class="form-control" name="quantity" id="quantity" placeholder="Number of clothes">
                    </div>
                    <div class="col-md-6">
                        <label for="location" class="form-label">Drop-off/Pick-up Location</label>
                        <input type="text" class="form-control" name="location" id="location" placeholder="Enter Address">
                    </div>
                    <div class="col-md-6">
                        <label for="status" class="form-label">Condition/Status</label>
                        <input type="text" class="form-control" name="status" id="status" placeholder="New/Used/Good Condition">
                    </div>
                    <div class="col-md-6">
                        <label for="comment" class="form-label">Comment (Optional)</label>
                        <textarea class="form-control" name="comment" id="comment" rows="2" placeholder="Any extra information"></textarea>
                    </div>
                </div>

                <!-- Submit -->
                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-success px-4 py-2">📦 Submit Donation</button>
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
