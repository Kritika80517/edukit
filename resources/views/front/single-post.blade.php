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
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

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
                            <a href="index.html"><img src="img/core-img/logo.png" alt=""></a>
                        </div>

                        <!-- Top Contact Info -->
                        <div class="top-contact-info d-flex align-items-center">
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="25 th Street Avenue, Los Angeles, CA"><img src="img/core-img/placeholder.png" alt=""> <span>25 th Street Avenue, Los Angeles, CA</span></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="office@yourfirm.com"><img src="img/core-img/message.png" alt=""> <span>office@yourfirm.com</span></a>
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
                                    <li><a href="{{url('index')}}">Home</a></li>
                                    <li><a href="{{url('about')}}">About Us</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="{{url('index')}}">Home</a></li>
                                            <li><a href="{{url('about')}}">About Us</a></li>
                                            <li><a href="{{url('services')}}">Services</a></li>
                                            <li><a href="{{url('post')}}">Post</a></li>
                                            <li><a href="{{url('single-post')}}">Single Post</a></li>
                                            <li><a href="{{url('contact')}}">Contact</a></li>
                                            <li><a href="{{url('elements')}}">Elements</a></li>
                                            <li><a href="{{ url('privacy-policy') }}">Privacy Policy</a></li>
                                            <li><a href="{{ url('interview-ques') }}">Interview Question's</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{url('services')}}">Services</a></li>
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
                                    <li><a href="{{url('post')}}">Blog</a></li>
                                    <li><a href="{{url('contact')}}">Contact</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Contact -->
                        <div class="contact">
                            <a href="#"><img src="img/core-img/call2.png" alt=""> +800 49 900 900</a>
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
                        <h2>Single Blog</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Single Blog</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Post Details Area Start ##### -->
    <section class="post-news-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Post Details Content Area -->
                <div class="col-12 col-lg-8">
                    <div class="post-details-content mb-100">
                        <img src="img/bg-img/22.jpg" alt="">
                        <p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Proin ac urna at lectus volutpat lobortis. Vestibulum venenatis iaculis diam vitae lobortis. Donec tincidunt viverra elit, sed consectetur est pr etium ac.</p>
                        <p>Mauris nec mauris tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elit nisl, faucibus eu tempus vel, imperdiet at felis. Sed sed nibh et augue feugiat pharetra. Praesent ultrices nec tortor et gravida. Sed id rhoncus est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur vitae luctus turpis. Maecenas diam ex, mattis vel dolor ut, fermentum consectetur ex.</p>
                        <img src="img/bg-img/23.jpg" alt="">
                        <p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Proin ac urna at lectus volutpat lobortis. Vestibulum venenatis iaculis diam vitae lobortis. Donec tincidunt viverra elit, sed consectetur est pr etium ac.</p>
                        <p>Mauris nec mauris tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elit nisl, faucibus eu tempus vel, imperdiet at felis. Sed sed nibh et augue feugiat pharetra. Praesent ultrices nec tortor et gravida. Sed id rhoncus est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur vitae luctus turpis. Maecenas diam ex, mattis vel dolor ut, fermentum consectetur ex. </p>
                        <img src="img/bg-img/24.jpg" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elit nisl, faucibus eu tempus vel, imperdiet at felis. Sed sed nibh et augue feugiat pharetra. Praesent ultrices nec tortor et gravida. Sed id rhoncus est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur vitae luctus turpis. Maecenas diam ex, mattis vel dolor ut, fermentum consectetur ex.</p>
                    </div>

                    <!-- Comment Area Start -->
                    <div class="comment_area clearfix mb-100">
                        <h4 class="mb-50">Comments</h4>

                        <ol>
                            <!-- Single Comment Area -->
                            <li class="single_comment_area">
                                <!-- Comment Content -->
                                <div class="comment-content d-flex">
                                    <!-- Comment Author -->
                                    <div class="comment-author">
                                        <img src="img/bg-img/32.jpg" alt="author">
                                    </div>
                                    <!-- Comment Meta -->
                                    <div class="comment-meta">
                                        <div class="d-flex">
                                            <a href="#" class="post-author">Maria Williams</a>
                                            <a href="#" class="post-date">June 23, 2018 </a>
                                            <a href="#" class="reply">Reply</a>
                                        </div>
                                        <p>Consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla placerat, tinci dunt mi. Nullam vel orci dui. Su spendisse sit amet laoreet neque. Fusce sagittis sus cipit sem a consequat.</p>
                                    </div>
                                </div>
                                <ol class="children">
                                    <li class="single_comment_area">
                                        <!-- Comment Content -->
                                        <div class="comment-content d-flex">
                                            <!-- Comment Author -->
                                            <div class="comment-author">
                                                <img src="img/bg-img/33.jpg" alt="author">
                                            </div>
                                            <!-- Comment Meta -->
                                            <div class="comment-meta">
                                                <div class="d-flex">
                                                    <a href="#" class="post-author">Christian Williams</a>
                                                    <a href="#" class="post-date">April 15, 2018</a>
                                                    <a href="#" class="reply">Reply</a>
                                                </div>
                                                <p>Consectetur adipiscing elit. Praesent vel tortor facilisis, Nullam vel orci dui. Su spendisse sit amet laoreet neque.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ol>
                            </li>

                            <!-- Single Comment Area -->
                            <li class="single_comment_area">
                                <!-- Comment Content -->
                                <div class="comment-content d-flex">
                                    <!-- Comment Author -->
                                    <div class="comment-author">
                                        <img src="img/bg-img/32.jpg" alt="author">
                                    </div>
                                    <!-- Comment Meta -->
                                    <div class="comment-meta">
                                        <div class="d-flex">
                                            <a href="#" class="post-author">Lisa Moore</a>
                                            <a href="#" class="post-date">June 23, 2018</a>
                                            <a href="#" class="reply">Reply</a>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla placerat, tincidunt mi. Nullam vel orci dui. Su spendisse sit amet laoreet neque. Fusce sagittis suscipit.</p>
                                    </div>
                                </div>
                            </li>
                        </ol>
                    </div>

                    <div class="post-a-comment-area mb-100 clearfix">
                        <h4 class="mb-50">Leave a reply</h4>

                        <!-- Reply Form -->
                        <div class="contact-form-area">
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <input type="text" class="form-control" id="name" placeholder="Name*">
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <input type="email" class="form-control" id="email" placeholder="Email*">
                                    </div>
                                    <div class="col-12">
                                        <input type="text" class="form-control" id="subject" placeholder="Website">
                                    </div>
                                    <div class="col-12">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn credit-btn mt-30" type="submit">Submit Comment</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Widget -->
                <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                    <div class="sidebar-area mb-100">

                        <!-- Single Sidebar Widget -->
                        <div class="single-widget-area search-widget">
                            <form action="#" method="post">
                                <input type="search" name="search" placeholder="Search">
                                <button type="submit">Search</button>
                            </form>
                        </div>

                        <!-- Single Sidebar Widget -->
                        <div class="single-widget-area cata-widget">
                            <div class="widget-heading">
                                <div class="line"></div>
                                <h4>Categories</h4>
                            </div>

                            <ul>
                                <li><a href="#">Advices</a></li>
                                <li><a href="#">Budgeting</a></li>
                                <li><a href="#">Fast cash</a></li>
                                <li><a href="#">Loans for students</a></li>
                                <li><a href="#">Money hacks</a></li>
                                <li><a href="#">Payday Loans</a></li>
                                <li><a href="#">Quick cash</a></li>
                                <li><a href="#">Supplement income</a></li>
                                <li><a href="#">Сash loans</a></li>
                            </ul>
                        </div>

                        <!-- Single Sidebar Widget -->
                        <div class="single-widget-area tabs-widget">
                            <div class="widget-heading">
                                <div class="line"></div>
                                <h4>Latest News</h4>
                            </div>

                            <div class="credit-tabs-content">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link" id="tab--1" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false">Latest</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" id="tab--2" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">Popular</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="tab--3" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="true">Comments</a>
                                    </li>
                                </ul>

                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade" id="tab1" role="tabpanel" aria-labelledby="tab--1">
                                        <div class="credit-tab-content">
                                            <!-- Single News Area -->
                                            <div class="single-news-area d-flex align-items-center">
                                                <div class="news-thumbnail">
                                                    <img src="img/bg-img/10.jpg" alt="">
                                                </div>
                                                <div class="news-content">
                                                    <span>July 18, 2018</span>
                                                    <a href="#">How to get the best loan online</a>
                                                    <div class="news-meta">
                                                        <a href="#" class="post-author"><img src="img/core-img/pencil.png" alt=""> Jane Smith</a>
                                                        <a href="#" class="post-date"><img src="img/core-img/calendar.png" alt=""> April 26</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Single News Area -->
                                            <div class="single-news-area d-flex align-items-center">
                                                <div class="news-thumbnail">
                                                    <img src="img/bg-img/11.jpg" alt="">
                                                </div>
                                                <div class="news-content">
                                                    <span>July 18, 2018</span>
                                                    <a href="#">A new way to finance your dream home</a>
                                                    <div class="news-meta">
                                                        <a href="#" class="post-author"><img src="img/core-img/pencil.png" alt=""> Jane Smith</a>
                                                        <a href="#" class="post-date"><img src="img/core-img/calendar.png" alt=""> April 26</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Single News Area -->
                                            <div class="single-news-area d-flex align-items-center">
                                                <div class="news-thumbnail">
                                                    <img src="img/bg-img/12.jpg" alt="">
                                                </div>
                                                <div class="news-content">
                                                    <span>July 18, 2018</span>
                                                    <a href="#">10 tips to get the best loan for you</a>
                                                    <div class="news-meta">
                                                        <a href="#" class="post-author"><img src="img/core-img/pencil.png" alt=""> Jane Smith</a>
                                                        <a href="#" class="post-date"><img src="img/core-img/calendar.png" alt=""> April 26</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade show active" id="tab2" role="tabpanel" aria-labelledby="tab--2">
                                        <div class="credit-tab-content">
                                            <!-- Single News Area -->
                                            <div class="single-news-area d-flex align-items-center">
                                                <div class="news-thumbnail">
                                                    <img src="img/bg-img/10.jpg" alt="">
                                                </div>
                                                <div class="news-content">
                                                    <span>July 18, 2018</span>
                                                    <a href="#">How to get the best loan online</a>
                                                    <div class="news-meta">
                                                        <a href="#" class="post-author"><img src="img/core-img/pencil.png" alt=""> Jane Smith</a>
                                                        <a href="#" class="post-date"><img src="img/core-img/calendar.png" alt=""> April 26</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Single News Area -->
                                            <div class="single-news-area d-flex align-items-center">
                                                <div class="news-thumbnail">
                                                    <img src="img/bg-img/11.jpg" alt="">
                                                </div>
                                                <div class="news-content">
                                                    <span>July 18, 2018</span>
                                                    <a href="#">A new way to finance your dream home</a>
                                                    <div class="news-meta">
                                                        <a href="#" class="post-author"><img src="img/core-img/pencil.png" alt=""> Jane Smith</a>
                                                        <a href="#" class="post-date"><img src="img/core-img/calendar.png" alt=""> April 26</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Single News Area -->
                                            <div class="single-news-area d-flex align-items-center">
                                                <div class="news-thumbnail">
                                                    <img src="img/bg-img/12.jpg" alt="">
                                                </div>
                                                <div class="news-content">
                                                    <span>July 18, 2018</span>
                                                    <a href="#">10 tips to get the best loan for you</a>
                                                    <div class="news-meta">
                                                        <a href="#" class="post-author"><img src="img/core-img/pencil.png" alt=""> Jane Smith</a>
                                                        <a href="#" class="post-date"><img src="img/core-img/calendar.png" alt=""> April 26</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab--3">
                                        <div class="credit-tab-content">
                                            <!-- Single News Area -->
                                            <div class="single-news-area d-flex align-items-center">
                                                <div class="news-thumbnail">
                                                    <img src="img/bg-img/10.jpg" alt="">
                                                </div>
                                                <div class="news-content">
                                                    <span>July 18, 2018</span>
                                                    <a href="#">How to get the best loan online</a>
                                                    <div class="news-meta">
                                                        <a href="#" class="post-author"><img src="img/core-img/pencil.png" alt=""> Jane Smith</a>
                                                        <a href="#" class="post-date"><img src="img/core-img/calendar.png" alt=""> April 26</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Single News Area -->
                                            <div class="single-news-area d-flex align-items-center">
                                                <div class="news-thumbnail">
                                                    <img src="img/bg-img/11.jpg" alt="">
                                                </div>
                                                <div class="news-content">
                                                    <span>July 18, 2018</span>
                                                    <a href="#">A new way to finance your dream home</a>
                                                    <div class="news-meta">
                                                        <a href="#" class="post-author"><img src="img/core-img/pencil.png" alt=""> Jane Smith</a>
                                                        <a href="#" class="post-date"><img src="img/core-img/calendar.png" alt=""> April 26</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Single News Area -->
                                            <div class="single-news-area d-flex align-items-center">
                                                <div class="news-thumbnail">
                                                    <img src="img/bg-img/12.jpg" alt="">
                                                </div>
                                                <div class="news-content">
                                                    <span>July 18, 2018</span>
                                                    <a href="#">10 tips to get the best loan for you</a>
                                                    <div class="news-meta">
                                                        <a href="#" class="post-author"><img src="img/core-img/pencil.png" alt=""> Jane Smith</a>
                                                        <a href="#" class="post-date"><img src="img/core-img/calendar.png" alt=""> April 26</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Post Details Area End ##### -->

    <!-- ##### Newsletter Area Start ###### -->
    <section class="newsletter-area section-padding-100 bg-img jarallax" style="background-image: url(img/bg-img/6.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-lg-8">
                    <div class="nl-content text-center">
                        <h2>Subscribe to our newsletter</h2>
                        <form action="#" method="post">
                            <input type="email" name="nl-email" id="nlemail" placeholder="Your e-mail">
                            <button type="submit">Subscribe</button>
                        </form>
                        <p>Curabitur elit turpis, maximus quis ullamcorper sed, maximus eu neque. Cras ultrices erat nec auctor blandit.</p>
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
                                <img src="img/bg-img/7.jpg" alt="">
                            </div>
                            <div class="news-content">
                                <a href="#">How to get the best loan?</a>
                                <div class="news-meta">
                                    <a href="#" class="post-author"><img src="img/core-img/pencil.png" alt=""> Jane Smith</a>
                                    <a href="#" class="post-date"><img src="img/core-img/calendar.png" alt=""> April 26</a>
                                </div>
                            </div>
                        </div>

                        <!-- Single News Area -->
                        <div class="single-latest-news-area d-flex align-items-center">
                            <div class="news-thumbnail">
                                <img src="img/bg-img/8.jpg" alt="">
                            </div>
                            <div class="news-content">
                                <a href="#">A new way to get a loan</a>
                                <div class="news-meta">
                                    <a href="#" class="post-author"><img src="img/core-img/pencil.png" alt=""> Jane Smith</a>
                                    <a href="#" class="post-date"><img src="img/core-img/calendar.png" alt=""> April 26</a>
                                </div>
                            </div>
                        </div>

                        <!-- Single News Area -->
                        <div class="single-latest-news-area d-flex align-items-center">
                            <div class="news-thumbnail">
                                <img src="img/bg-img/9.jpg" alt="">
                            </div>
                            <div class="news-content">
                                <a href="#">Finance you home</a>
                                <div class="news-meta">
                                    <a href="#" class="post-author"><img src="img/core-img/pencil.png" alt=""> Jane Smith</a>
                                    <a href="#" class="post-date"><img src="img/core-img/calendar.png" alt=""> April 26</a>
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
                            <a href="index.html" class="footer-logo"><img src="img/core-img/logo.png" alt=""></a>

                            <!-- Copywrite Text -->
                            <p class="copywrite-text"><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>