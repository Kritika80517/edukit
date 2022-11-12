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
    <link rel="stylesheet" href="{{ asset('style.css') }}">

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
                            <a href="index.html"><img src="{{ asset('img/core-img/logo.png') }}" alt=""></a>
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
                            <a href="#"><img src="/{{ asset('img/core-img/call2.png') }}" alt=""> +800
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
                        <h2>Interview Question's</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Interview Question's</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    {{-- Question's Answer's Area  --}}

    <section class="queestion-answer-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#html-interview-ques" class="btn credit-btn mt-50">HTML</a>
                </div>
                <div class="col-md-3">
                    <a href="#css-interview-ques" class="btn credit-btn mt-50">CSS</a>
                </div>
                <div class="col-md-3">
                    <a href="#boostrap-interview-ques" class="btn credit-btn mt-50">Bootstrap</a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="btn credit-btn mt-50">JavaScript</a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="btn credit-btn mt-50">PHP</a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="btn credit-btn mt-50">Laravel</a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="btn credit-btn mt-50">Node.js</a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="btn credit-btn mt-50">MySQL</a>
                </div>
            </div>
        </div>
    </section>
    <section class="credit-faq-area section-padding-100-0" id="html-interview-ques">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center mb-100">
                        <div class="line"></div>
                        <p>Question-Answer</p>
                        <h2>HTML Interview</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- FAQ Area -->
                <div class="col-12 col-lg-12">
                    <div class="accordions mb-50" id="accordion" role="tablist" aria-multiselectable="true">
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h5>What does HTML for ? </h5>
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio1" autocomplete="off">
                                    <label for="vbtn-radio1">Hyper Text and Markup Language</label>
                                </div>
                                <div class="col-md-4">
                                    <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio2" autocomplete="off">
                                    <label for="vbtn-radio2">Home Tool Markup Language</label>
                                </div>
                                <div class="col-md-4">
                                    <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio3" autocomplete="off">
                                    <label for="vbtn-radio3">Hyper Text Markup language</label>
                                </div>
                                <p>
                                    <button class="btn collapsed" type="button" aria-expanded="true" aria-controls="collapseOne"
                                     data-parent="#accordion" data-toggle="collapse" href="#collapseOne">Ans
                                    </button>
                                </p>
                                <div id="collapseOne" class="accordion-content collapse ml-2">
                                   <h4> <b>c</b></h4>
                                </div>
                            </div>
                        </div>
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h5>What does HTML for ? </h5>
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio4" autocomplete="off" >
                                    <label for="vbtn-radio4">Hyper Text and Markup Language</label>
                                </div>
                                <div class="col-md-4">
                                    <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio5" autocomplete="off">
                                    <label for="vbtn-radio5">Home Tool Markup Language</label>
                                </div>
                                <div class="col-md-4">
                                    <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio6" autocomplete="off">
                                    <label for="vbtn-radio6">Hyper Text Markup language</label>
                                </div>
                            
                                <p>
                                    <button class="btn collapsed" type="button" aria-expanded="true" aria-controls="collapseTwo"
                                     data-parent="#accordion" data-toggle="collapse" href="#collapseTwo">Ans
                                    </button>
                                </p>
                                <div id="collapseTwo" class="accordion-content collapse ml-2">
                                   <h4> <b>c</b></h4>
                                </div>
                            </div>
                        </div>

                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h5>What does HTML for ? </h5>
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio7" autocomplete="off">
                                    <label for="vbtn-radio7">Hyper Text and Markup Language</label>
                                </div>
                                <div class="col-md-4">
                                    <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio8" autocomplete="off">
                                    <label for="vbtn-radio8">Home Tool Markup Language</label>
                                </div>
                                <div class="col-md-4">
                                    <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio9" autocomplete="off">
                                    <label for="vbtn-radio9">Hyper Text Markup language</label>
                                </div>
                                
                                <p>
                                    <button class="btn collapsed" type="button" aria-expanded="true" aria-controls="collapseThree"
                                     data-parent="#accordion" data-toggle="collapse" href="#collapseThree">Ans
                                    </button>
                                </p>
                                <div id="collapseThree" class="accordion-content collapse ml-2">
                                   <h4> <b>c</b></h4>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- css interview question answer start --}}
    <section class="credit-faq-area section-padding-100-0" id="css-interview-ques">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center mb-100">
                        <div class="line"></div>
                        <p>Question-Answer</p>
                        <h2>CSS Interview</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- FAQ Area -->
                <div class="col-12 col-lg-12">
                    <div class="accordions mb-50" id="accordion" role="tablist" aria-multiselectable="true">
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h5>What is CSS ? </h5>
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="radio" class="btn-check" name="css-radio" id="css-radio1" autocomplete="off">
                                    <label for="css-radio1">Hyper Text and Markup Language</label>
                                </div>
                                <div class="col-md-4">
                                    <input type="radio" class="btn-check" name="css-radio" id="css-radio2" autocomplete="off">
                                    <label for="css-radio2">Home Tool Markup Language</label>
                                </div>
                                <div class="col-md-4">
                                    <input type="radio" class="btn-check" name="css-radio" id="css-radio3" autocomplete="off">
                                    <label for="css-radio3">Hyper Text Markup language</label>
                                </div>
                                <p>
                                    <button class="btn collapsed" type="button" aria-expanded="true" aria-controls="collapseOne"
                                     data-parent="#accordion" data-toggle="collapse" href="#collapseOne">Ans
                                    </button>
                                </p>
                                <div id="collapseOne" class="accordion-content collapse ml-2">
                                   <h4> <b>c</b></h4>
                                </div>
                            </div>
                        </div>
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h5>What is CSS ? </h5>
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="radio" class="btn-check" name="css-radio" id="css-radio4" autocomplete="off" >
                                    <label for="css-radio4">Hyper Text and Markup Language</label>
                                </div>
                                <div class="col-md-4">
                                    <input type="radio" class="btn-check" name="css-radio" id="css-radio5" autocomplete="off">
                                    <label for="css-radio5">Home Tool Markup Language</label>
                                </div>
                                <div class="col-md-4">
                                    <input type="radio" class="btn-check" name="css-radio" id="css-radio6" autocomplete="off">
                                    <label for="css-radio6">Hyper Text Markup language</label>
                                </div>
                            
                                <p>
                                    <button class="btn collapsed" type="button" aria-expanded="true" aria-controls="collapseTwo"
                                     data-parent="#accordion" data-toggle="collapse" href="#collapseTwo">Ans
                                    </button>
                                </p>
                                <div id="collapseTwo" class="accordion-content collapse ml-2">
                                   <h4> <b>c</b></h4>
                                </div>
                            </div>
                        </div>

                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h5>What is CSS ? </h5>
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="radio" class="btn-check" name="css-radio" id="css-radio7" autocomplete="off">
                                    <label for="css-radio7">Hyper Text and Markup Language</label>
                                </div>
                                <div class="col-md-4">
                                    <input type="radio" class="btn-check" name="css-radio" id="css-radio8" autocomplete="off">
                                    <label for="css-radio8">Home Tool Markup Language</label>
                                </div>
                                <div class="col-md-4">
                                    <input type="radio" class="btn-check" name="css-radio" id="css-radio9" autocomplete="off">
                                    <label for="css-radio9">Hyper Text Markup language</label>
                                </div>
                                
                                <p>
                                    <button class="btn collapsed" type="button" aria-expanded="true" aria-controls="collapseThree"
                                     data-parent="#accordion" data-toggle="collapse" href="#collapseThree">Ans
                                    </button>
                                </p>
                                <div id="collapseThree" class="accordion-content collapse ml-2">
                                   <h4> <b>c</b></h4>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- css interview question answer end --}}

    {{-- bootstrap question answer start --}}
    <section class="credit-faq-area section-padding-100-0" id="boostrap-interview-ques">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center mb-100">
                        <div class="line"></div>
                        <p>Question-Answer</p>
                        <h2>Bootstrap Interview</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- FAQ Area -->
                <div class="col-12 col-lg-12">
                    <div class="accordions mb-50" id="accordion" role="tablist" aria-multiselectable="true">
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h5>What is Bootstrap ? </h5>
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="radio" class="btn-check" name="bootstrap-radio" id="bootstrap-radio1" autocomplete="off">
                                    <label for="bootstrap-radio1">Hyper Text and Markup Language</label>
                                </div>
                                <div class="col-md-4">
                                    <input type="radio" class="btn-check" name="bootstrap-radio" id="bootstrap-radio2" autocomplete="off">
                                    <label for="bootstrap-radio2">Home Tool Markup Language</label>
                                </div>
                                <div class="col-md-4">
                                    <input type="radio" class="btn-check" name="bootstrap-radio" id="bootstrap-radio3" autocomplete="off">
                                    <label for="bootstrap-radio3">Hyper Text Markup language</label>
                                </div>
                                <p>
                                    <button class="btn collapsed" type="button" aria-expanded="true" aria-controls="collapseOne"
                                     data-parent="#accordion" data-toggle="collapse" href="#collapseOne">Ans
                                    </button>
                                </p>
                                <div id="collapseOne" class="accordion-content collapse ml-2">
                                   <h4> <b>c</b></h4>
                                </div>
                            </div>
                        </div>
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h5>What is Bootstrap ? </h5>
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="radio" class="btn-check" name="bootstrap-radio" id="bootstrap-radio4" autocomplete="off" >
                                    <label for="bootstrap-radio4">Hyper Text and Markup Language</label>
                                </div>
                                <div class="col-md-4">
                                    <input type="radio" class="btn-check" name="bootstrap-radio" id="bootstrap-radio5" autocomplete="off">
                                    <label for="bootstrap-radio5">Home Tool Markup Language</label>
                                </div>
                                <div class="col-md-4">
                                    <input type="radio" class="btn-check" name="bootstrap-radio" id="bootstrap-radio6" autocomplete="off">
                                    <label for="bootstrap-radio6">Hyper Text Markup language</label>
                                </div>
                            
                                <p>
                                    <button class="btn collapsed" type="button" aria-expanded="true" aria-controls="collapseTwo"
                                     data-parent="#accordion" data-toggle="collapse" href="#collapseTwo">Ans
                                    </button>
                                </p>
                                <div id="collapseTwo" class="accordion-content collapse ml-2">
                                   <h4> <b>c</b></h4>
                                </div>
                            </div>
                        </div>

                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h5>What is Bootstrap ? </h5>
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="radio" class="btn-check" name="bootstrap-radio" id="bootstrap-radio7" autocomplete="off">
                                    <label for="bootstrap-radio7">Hyper Text and Markup Language</label>
                                </div>
                                <div class="col-md-4">
                                    <input type="radio" class="btn-check" name="bootstrap-radio" id="bootstrap-radio8" autocomplete="off">
                                    <label for="bootstrap-radio8">Home Tool Markup Language</label>
                                </div>
                                <div class="col-md-4">
                                    <input type="radio" class="btn-check" name="bootstrap-radio" id="bootstrap-radio9" autocomplete="off">
                                    <label for="bootstrap-radio9">Hyper Text Markup language</label>
                                </div>
                                
                                <p>
                                    <button class="btn collapsed" type="button" aria-expanded="true" aria-controls="collapseThree"
                                     data-parent="#accordion" data-toggle="collapse" href="#collapseThree">Ans
                                    </button>
                                </p>
                                <div id="collapseThree" class="accordion-content collapse ml-2">
                                   <h4> <b>c</b></h4>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- bootstrap question answer end --}}

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
                                <img src="{{ asset('img/bg-img/7.jpg') }}" alt="">
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
                                <img src="{{ asset('img/bg-img/8.jpg') }}" alt="">
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
                                <img src="{{ asset('img/bg-img/9.jpg') }}" alt="">
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
    <script src="{{ asset('js/jquery/jquery-2.2.4.min.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ asset('js/bootstrap/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
    <!-- All Plugins js -->
    <script src="{{ asset('js/plugins/plugins.js') }}"></script>
    <!-- Active js -->
    <script src="{{ asset('js/active.js') }}"></script>
</body>

</html>
