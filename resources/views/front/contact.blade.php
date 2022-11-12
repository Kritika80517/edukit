<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Credit - Loan &amp; Credit Company HTML Template</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/core-img/favicon.ico') }}">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('style.css')}}">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 d-flex justify-content-between">
                        <!-- Logo Area -->
                        <div class="logo">
                            <a href="{{ url('index') }}"><img src="{{ asset('img/core-img/logo.png') }}"
                                    alt=""></a>
                        </div>

                        <!-- Top Contact Info -->
                        <div class="top-contact-info d-flex align-items-center">
                            <a href="#" data-toggle="tooltip" data-placement="bottom"
                                title="25 th Street Avenue, Los Angeles, CA"><img
                                    src="{{ asset('img/core-img/placeholder.png') }}" alt=""> <span>25 th Street
                                    Avenue, Los Angeles, CA</span></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom"
                                title="office@yourfirm.com"><img src="{{ asset('img/core-img/message.png') }}"
                                    alt=""> <span>office@yourfirm.com</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="credit-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="creditNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            {{-- <div class="classynav">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="services.html">Services</a></li>
                                            <li><a href="post.html">Post</a></li>
                                            <li><a href="single-post.html">Single Post</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="elements.html">Elements</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="services.html">Services</a></li>
                                    <li><a href="#">Portfolio</a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="#">Portfolio 1</a></li>
                                                <li><a href="#">Portfolio 2</a></li>
                                                <li><a href="#">Portfolio 3</a></li>
                                                <li><a href="#">Portfolio 4</a></li>
                                                <li><a href="#">Portfolio 5</a></li>
                                                <li><a href="#">Portfolio 6</a></li>
                                                <li><a href="#">Portfolio 7</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="#">Portfolio 8</a></li>
                                                <li><a href="#">Portfolio 9</a></li>
                                                <li><a href="#">Portfolio 10</a></li>
                                                <li><a href="#">Portfolio 11</a></li>
                                                <li><a href="#">Portfolio 12</a></li>
                                                <li><a href="#">Portfolio 13</a></li>
                                                <li><a href="#">Portfolio 14</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="#">Portfolio 15</a></li>
                                                <li><a href="#">Portfolio 16</a></li>
                                                <li><a href="#">Portfolio 17</a></li>
                                                <li><a href="#">Portfolio 18</a></li>
                                                <li><a href="#">Portfolio 19</a></li>
                                                <li><a href="#">Portfolio 20</a></li>
                                                <li><a href="#">Portfolio 21</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="#">Portfolio 22</a></li>
                                                <li><a href="#">Portfolio 23</a></li>
                                                <li><a href="#">Portfolio 24</a></li>
                                                <li><a href="#">Portfolio 25</a></li>
                                                <li><a href="#">Portfolio 26</a></li>
                                                <li><a href="#">Portfolio 27</a></li>
                                                <li><a href="#">Portfolio 28</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="post.html">Blog</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div> --}}
                            <div class="classynav">
                                <ul>
                                    <li><a href="{{ url('index') }}">Home</a></li>
                                    <li><a href="{{ url('about') }}">About Us</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="{{ url('index') }}">Home</a></li>
                                            <li><a href="{{ url('about') }}">About Us</a></li>
                                            <li><a href="{{ url('services') }}">Services</a></li>
                                            <li><a href="{{ url('post') }}">Post</a></li>
                                            <li><a href="{{ url('single-post') }}">Single Post</a></li>
                                            <li><a href="{{ url('contact') }}">Contact</a></li>
                                            <li><a href="{{ url('elements') }}">Elements</a></li>
                                            <li><a href="{{ url('privacy-policy') }}">Privacy Policy</a></li>
                                            <li><a href="{{ url('interview-ques') }}">Interview Question's</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ url('services') }}">Services</a></li>
                                    <li><a href="#">Portfolio</a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="#">Portfolio 1</a></li>
                                                <li><a href="#">Portfolio 2</a></li>
                                                <li><a href="#">Portfolio 3</a></li>
                                                <li><a href="#">Portfolio 4</a></li>
                                                <li><a href="#">Portfolio 5</a></li>
                                                <li><a href="#">Portfolio 6</a></li>
                                                <li><a href="#">Portfolio 7</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="#">Portfolio 8</a></li>
                                                <li><a href="#">Portfolio 9</a></li>
                                                <li><a href="#">Portfolio 10</a></li>
                                                <li><a href="#">Portfolio 11</a></li>
                                                <li><a href="#">Portfolio 12</a></li>
                                                <li><a href="#">Portfolio 13</a></li>
                                                <li><a href="#">Portfolio 14</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="#">Portfolio 15</a></li>
                                                <li><a href="#">Portfolio 16</a></li>
                                                <li><a href="#">Portfolio 17</a></li>
                                                <li><a href="#">Portfolio 18</a></li>
                                                <li><a href="#">Portfolio 19</a></li>
                                                <li><a href="#">Portfolio 20</a></li>
                                                <li><a href="#">Portfolio 21</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="#">Portfolio 22</a></li>
                                                <li><a href="#">Portfolio 23</a></li>
                                                <li><a href="#">Portfolio 24</a></li>
                                                <li><a href="#">Portfolio 25</a></li>
                                                <li><a href="#">Portfolio 26</a></li>
                                                <li><a href="#">Portfolio 27</a></li>
                                                <li><a href="#">Portfolio 28</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="{{ url('post') }}">Blog</a></li>
                                    <li><a href="{{ url('contact') }}">Contact</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Contact -->
                        <div class="contact">
                            <a href="#"><img src="{{ asset('img/core-img/call2.png') }}" alt=""> +800
                                49 900 900</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/13.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Contact</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Single Contact Area -->
                <div class="col-12 col-lg-4">
                    <div class="single-contact-area mb-100">
                        <!-- Logo -->
                        <a href="#" class="d-block mb-50"><img src="{{ asset('img/core-img/logo.png') }}"
                                alt=""></a>
                        <p>Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci,
                            lobortis egestas sem. Tut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut
                            ultricies orci, lobortis.</p>
                    </div>
                </div>

                <!-- Single Contact Area -->
                <div class="col-12 col-lg-4">
                    <div class="single-contact-area mb-100">
                        <div class="contact-advisor">
                            <h5>Contact an advisor</h5>
                            <!-- Single Advisor -->
                            <div class="single-advisor d-flex align-items-center">
                                <div class="advisor-img">
                                    <img src="{{ asset('img/bg-img/25.jpg') }}" alt="">
                                </div>
                                <div class="advisor-info">
                                    <h6>James Smith</h6>
                                    <span>Advisor</span>
                                    <p>+456 347 53433</p>
                                </div>
                            </div>
                            <!-- Single Advisor -->
                            <div class="single-advisor d-flex align-items-center">
                                <div class="advisor-img">
                                    <img src="{{ asset('img/bg-img/26.jpg') }}" alt="">
                                </div>
                                <div class="advisor-info">
                                    <h6>Michael Williams</h6>
                                    <span>Advisor</span>
                                    <p>+456 347 53433</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Contact Area -->
                <div class="col-12 col-lg-4">
                    <div class="single-contact-area mb-100">
                        <div class="contact--area contact-page">
                            <!-- Contact Content -->
                            <div class="contact-content">
                                <h5>Get in touch</h5>

                                <!-- Single Contact Content -->
                                <div class="single-contact-content d-flex align-items-center">
                                    <div class="icon">
                                        <img src="{{ asset('img/core-img/location.png') }}" alt="">
                                    </div>
                                    <div class="text">
                                        <p>3007 Sarah Drive <br> Franklin, LA 70538</p>
                                    </div>
                                </div>
                                <!-- Single Contact Content -->
                                <div class="single-contact-content d-flex align-items-center">
                                    <div class="icon">
                                        <img src="{{ asset('img/core-img/call.png') }}" alt="">
                                    </div>
                                    <div class="text">
                                        <p>337-413-9538</p>
                                        <span>mon-fri , 08.am - 17.pm</span>
                                    </div>
                                </div>
                                <!-- Single Contact Content -->
                                <div class="single-contact-content d-flex align-items-center">
                                    <div class="icon">
                                        <img src="{{ asset('img/core-img/message2.png') }}" alt="">
                                    </div>
                                    <div class="text">
                                        <p>contact@yourbusiness.com</p>
                                        <span>we reply in 24 hrs</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- ##### Google Maps ##### -->
        <div class="map-area">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22236.40558254599!2d-118.25292394686001!3d34.057682914027104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2z4Kay4Ka4IOCmj-CmnuCnjeCmnOCnh-CmsuCnh-CmuCwg4KaV4KeN4Kav4Ka-4Kay4Ka_4Kar4KeL4Kaw4KeN4Kao4Ka_4Kav4Ka84Ka-LCDgpq7gpr7gprDgp43gppXgpr_gpqgg4Kav4KeB4KaV4KeN4Kak4Kaw4Ka-4Ka34KeN4Kaf4KeN4Kaw!5e0!3m2!1sbn!2sbd!4v1532328708137"
                allowfullscreen></iframe>
            <!-- Contact Area -->
            <div class="contact---area">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <!-- Contact Area -->
                            <div class="contact-form-area contact-page">
                                <h4 class="mb-50">Send a message</h4>

                                <form action="#" method="post">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="name"
                                                    placeholder="Your Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control" id="email"
                                                    placeholder="Your E-mail">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="subject"
                                                    placeholder="Your Subject">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea name="message" class="form-control" id="message" cols="30" rows="10"
                                                    placeholder="Your Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn credit-btn mt-30" type="submit">Send</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

    <!-- ##### Newsletter Area Start ###### -->
    <section class="newsletter-area section-padding-100 bg-img jarallax"
        style="background-image: url(img/bg-img/6.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-lg-8">
                    <div class="nl-content text-center">
                        <h2>Subscribe to our newsletter</h2>
                        <form action="#" method="post">
                            <input type="email" name="nl-email" id="nlemail" placeholder="Your e-mail">
                            <button type="submit">Subscribe</button>
                        </form>
                        <p>Curabitur elit turpis, maximus quis ullamcorper sed, maximus eu neque. Cras ultrices erat nec
                            auctor blandit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Newsletter Area End ###### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area section-padding-100-0">
        <div class="container">
            <div class="row">

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-100">
                        <h5 class="widget-title">About Us</h5>
                        <!-- Nav -->
                        <nav>
                            <ul>
                                <li><a href="#">Homepage</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Services &amp; Offers</a></li>
                                <li><a href="#">Portfolio Presentation</a></li>
                                <li><a href="#">The News</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-100">
                        <h5 class="widget-title">Solutions</h5>
                        <!-- Nav -->
                        <nav>
                            <ul>
                                <li><a href="#">Our Loans</a></li>
                                <li><a href="#">Trading &amp; Commerce</a></li>
                                <li><a href="#">Banking &amp; Private Equity</a></li>
                                <li><a href="#">Industrial &amp; Factory</a></li>
                                <li><a href="#">Financial Solutions</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-100">
                        <h5 class="widget-title">Our Loans</h5>
                        <!-- Nav -->
                        <nav>
                            <ul>
                                <li><a href="#">Our Loans</a></li>
                                <li><a href="#">Trading &amp; Commerce</a></li>
                                <li><a href="#">Banking &amp; Private Equity</a></li>
                                <li><a href="#">Industrial &amp; Factory</a></li>
                                <li><a href="#">Financial Solutions</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-100">
                        <h5 class="widget-title">Latest News</h5>

                        <!-- Single News Area -->
                        <div class="single-latest-news-area d-flex align-items-center">
                            <div class="news-thumbnail">
                                <img src="{{asset('img/bg-img/7.jpg')}}" alt="">
                            </div>
                            <div class="news-content">
                                <a href="#">How to get the best loan?</a>
                                <div class="news-meta">
                                    <a href="#" class="post-author"><img
                                            src="{{ asset('img/core-img/pencil.png') }}" alt=""> Jane
                                        Smith</a>
                                    <a href="#" class="post-date"><img
                                            src="{{ asset('img/core-img/calendar.png') }}" alt=""> April
                                        26</a>
                                </div>
                            </div>
                        </div>

                        <!-- Single News Area -->
                        <div class="single-latest-news-area d-flex align-items-center">
                            <div class="news-thumbnail">
                                <img src="{{asset('img/bg-img/8.jpg')}}" alt="">
                            </div>
                            <div class="news-content">
                                <a href="#">A new way to get a loan</a>
                                <div class="news-meta">
                                    <a href="#" class="post-author"><img
                                            src="{{ asset('img/core-img/pencil.png') }}" alt=""> Jane
                                        Smith</a>
                                    <a href="#" class="post-date"><img
                                            src="{{ asset('img/core-img/calendar.png') }}" alt=""> April
                                        26</a>
                                </div>
                            </div>
                        </div>

                        <!-- Single News Area -->
                        <div class="single-latest-news-area d-flex align-items-center">
                            <div class="news-thumbnail">
                                <img src="{{asset('img/bg-img/9.jpg')}}" alt="">
                            </div>
                            <div class="news-content">
                                <a href="#">Finance you home</a>
                                <div class="news-meta">
                                    <a href="#" class="post-author"><img
                                            src="{{ asset('img/core-img/pencil.png') }}" alt=""> Jane
                                        Smith</a>
                                    <a href="#" class="post-date"><img
                                            src="{{ asset('img/core-img/calendar.png') }}" alt=""> April
                                        26</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Copywrite Area -->
        <div class="copywrite-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="copywrite-content d-flex flex-wrap justify-content-between align-items-center">
                            <!-- Footer Logo -->
                            <a href="index.html" class="footer-logo"><img src="{{ asset('img/core-img/logo.png') }}"
                                    alt=""></a>

                            <!-- Copywrite Text -->
                            <p class="copywrite-text"><a href="#">
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script> All rights reserved | This template is made with <i
                                        class="fa fa-heart-o" aria-hidden="true"></i> by <a
                                        href="https://colorlib.com" target="_blank">Colorlib</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{asset('js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('js/bootstrap/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('js/bootstrap/bootstrap.min.js')}}"></script>
    <!-- All Plugins js -->
    <script src="{{asset('js/plugins/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('js/active.js')}}"></script>
</body>

</html>
