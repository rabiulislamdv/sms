<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/')}}css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('/')}}css/all.css">
    <link rel="stylesheet" href="{{asset('/')}}css/style.css">
    <title>@yield('title')</title>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-light shadow sticky-top ">
    <div class="container">
        <a href="" class="navbar-brand">LOGO</a>
        <ul class="navbar-nav">
            <li><a href="{{route('home')}}" class="nav-link">Home</a></li>
            <li><a href="" class="nav-link">All Course</a></li>
            <li><a href="{{route('user-login')}}" class="nav-link">Login</a></li>
            <li><a href="{{route('user-register')}}" class="nav-link">Registration</a></li>
        </ul>
    </div>

</nav>

@yield('body')

<!-- FOOTER
    ================================================== -->
<footer class="position-relative pt-0">
    <div class="bg-primary py-1-9 mb-6 mb-xxl-10">
        <div class="container">
            <div class="row mt-n1-9 align-items-center">
                <div class="col-md-6 col-lg-4 mt-1-9">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <img src="" class="" alt="...">
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <p class="mb-0 text-white">Contact Us</p>
                            <h3 class="mb-0 h5 text-white">01969100545</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mt-1-9 text-start text-lg-center">
                    <div class="footer-logo">

                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mt-1-9">
                    <div class="d-flex align-items-center text-lg-end">
                        <div class="flex-grow-1 ms-3 ms-lg-0 me-lg-3 order-2 order-lg-1">
                            <p class="mb-0 text-white">Mail Us</p>
                            <h3 class="mb-0 h5 text-white">info@roseit.com</h3>
                        </div>
                        <div class="flex-shrink-0 order-1 order-lg-2">
                            <img src="" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-dark">
        <div class="container">
            <div class="row mt-n5 pb-6 pb-xxl-10 ">
                <div class="col-md-6 col-lg-5 mt-5">
                    <h3 class="text-white h5 mb-1-9">About Company</h3>
                    <h4 class="text-white mb-1-9 fw-light w-75 display-27 lh-base opacity8">We have 14+ years experience. Helping you overcome technology challenges.</h4>
                    <ul class="social-icon-style1">
                        <li>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href=""><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href=""><i class="fab fa-youtube"></i></a>
                        </li>
                        <li>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-3 mt-5">
                    <div class="ps-0">
                        <h3 class="text-white h5 mb-1-9">Contacts</h3>
                        <ul class="footer-link mb-0 list-unstyled">
                            <li class="text-white mb-3">
                                <strong>Adress:</strong> <span class="opacity8"><p>Dhaka</p></span>
                            </li>
                            <li class="text-white mb-3">
                                <strong>Email:</strong> <span class="opacity8">info@roseit.com</span>
                            </li>
                            <li class="text-white">
                                <strong>Phone:</strong> <span class="opacity8">01969100545</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mt-5 offset-lg-1">
                    <div class="ps-xl-4">
                        <h3 class="text-white h5 mb-1-9">Newsletter</h3>
                        <p class="text-white opacity8 mb-3">Subscribe to our newsletter to receive updates on the latest news!</p>
                        <form class="quform newsletter-form" action="https://solutichtml.websitelayout.net/quform/newsletter-two.php" method="post" enctype="multipart/form-data" onclick="">

                            <div class="quform-elements">
                                <div class="row">

                                    <!-- Begin Text input element -->
                                    <div class="col-md-12">
                                        <div class="quform-element mb-0">
                                            <div class="quform-input">
                                                <input class="form-control" id="email_address" type="text" name="email_address" placeholder="Subscribe with us">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Text input element -->

                                    <!-- Begin Submit button -->
                                    <div class="col-md-12">
                                        <div class="quform-submit-inner">
                                            <button class="btn btn-white text-white m-0" type="submit"><i class="fas fa-paper-plane"></i></button>
                                        </div>
                                        <div class="quform-loading-wrap"><span class="quform-loading"></span></div>
                                    </div>
                                    <!-- End Submit button -->
                                </div>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-dark">
        <div class="py-4 border-top border-color-light-white">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 text-center">
                        <p class="d-inline-block text-white mb-0">&copy; <span class="current-year"></span> Powered by <a href="#!" class="text-primary text-white-hover">RoseIT</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<script src="{{asset('/')}}js/jquery-3.6.4.min.js"></script>
<script src="{{asset('/')}}js/bootstrap.js"></script>
</body>
</html>
