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
                            <a href="index.html"><img src="img/core-img/logo.png" alt=""></a>
                        </div>

                        <!-- Top Contact Info -->
                        <div class="top-contact-info d-flex align-items-center">
                            <a href="#" data-toggle="tooltip" data-placement="bottom"
                                title="25 th Street Avenue, Los Angeles, CA"><img src="img/core-img/placeholder.png"
                                    alt=""> <span>25 th Street Avenue, Los Angeles, CA</span></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom"
                                title="office@yourfirm.com"><img src="img/core-img/message.png" alt="">
                                <span>office@yourfirm.com</span></a>
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
                        <h2>Elements</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Elements</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Elements Area Start ##### -->
    <section class="elements-area section-padding-100-0">
        <div class="container">
            <div class="row">

                <!-- ========== Buttons ========== -->
                <div class="col-12">
                    <div class="elements-title mb-30">
                        <div class="line"></div>
                        <h2>Buttons</h2>
                    </div>
                    <!-- Buttons -->
                    <div class="credit-buttons-area mb-100">
                        <a href="#" class="btn credit-btn m-2">Discover</a>
                        <a href="#" class="btn credit-btn btn-2 m-2">Discover</a>
                        <a href="#" class="btn credit-btn btn-3 m-2">Discover</a>
                    </div>
                </div>

                <!-- ========== Progress Bars & Accordions ========== -->
                <div class="col-12">
                    <div class="elements-title mb-30">
                        <div class="line"></div>
                        <h2>Accordians &amp; Tabs</h2>
                    </div>
                </div>

                <!-- ##### Accordians ##### -->
                <div class="col-12 col-lg-6">
                    <div class="accordions mb-100" id="accordion" role="tablist" aria-multiselectable="true">
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6><a role="button" class="" aria-expanded="true" aria-controls="collapseOne"
                                    data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Mauris
                                    gravida neque augue, euismod
                                    <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                </a></h6>
                            <div id="collapseOne" class="accordion-content collapse show">
                                <p>Nam tristique ex vel magna tincidunt, ut porta nisl finibus. Vivamus eu dolor eu quam
                                    varius rutrum. Fusce nec justo id sem aliquam fringilla nec non lacus. Suspendisse
                                    eget lobortis nisi, ac cursus odio. Vivamus nibh velit, rutrum at ipsum ac,
                                    dignissim iaculis ante.</p>
                            </div>
                        </div>
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseTwo"
                                    data-parent="#accordion" data-toggle="collapse" href="#collapseTwo">Pellentesque
                                    sit amet velit a libero viverra
                                    <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                </a>
                            </h6>
                            <div id="collapseTwo" class="accordion-content collapse">
                                <p>Nam tristique ex vel magna tincidunt, ut porta nisl finibus. Vivamus eu dolor eu quam
                                    varius rutrum. Fusce nec justo id sem aliquam fringilla nec non lacus. Suspendisse
                                    eget lobortis nisi, ac cursus odio. Vivamus nibh velit, rutrum at ipsum ac,
                                    dignissim iaculis ante.</p>
                            </div>
                        </div>
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" aria-expanded="true" aria-controls="collapseThree"
                                    class="collapsed" data-parent="#accordion" data-toggle="collapse"
                                    href="#collapseThree">Quisque fringilla orci lacus, ut vestibulum
                                    <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                </a>
                            </h6>
                            <div id="collapseThree" class="accordion-content collapse">
                                <p>Nam tristique ex vel magna tincidunt, ut porta nisl finibus. Vivamus eu dolor eu quam
                                    varius rutrum. Fusce nec justo id sem aliquam fringilla nec non lacus. Suspendisse
                                    eget lobortis nisi, ac cursus odio. Vivamus nibh velit, rutrum at ipsum ac,
                                    dignissim iaculis ante.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ##### Tabs ##### -->
                <div class="col-12 col-lg-6">
                    <div class="credit-tabs-content">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" id="tab--1" data-toggle="tab" href="#tab1" role="tab"
                                    aria-controls="tab1" aria-selected="false">Mauris gravida</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab--2" data-toggle="tab" href="#tab2" role="tab"
                                    aria-controls="tab2" aria-selected="false">Pellentesque</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" id="tab--3" data-toggle="tab" href="#tab3"
                                    role="tab" aria-controls="tab3" aria-selected="true">Quisque</a>
                            </li>
                        </ul>

                        <div class="tab-content mb-100" id="myTabContent">
                            <div class="tab-pane fade" id="tab1" role="tabpanel" aria-labelledby="tab--1">
                                <div class="credit-tab-content">
                                    <!-- Tab Text -->
                                    <div class="credit-tab-text">
                                        <p>Nam tristique ex vel magna tincidunt, ut porta nisl finibus. Vivamus eu dolor
                                            eu quam varius rutrum. Fusce nec justo id sem aliquam fringilla nec non
                                            lacus. Suspendisse eget lobortis nisi, ac cursus odio. Vivamus nibh velit,
                                            rutrum at ipsum ac, dignissim iaculis ante.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab--2">
                                <div class="credit-tab-content">
                                    <!-- Tab Text -->
                                    <div class="credit-tab-text">
                                        <p>Nam tristique ex vel magna tincidunt, ut porta nisl finibus. Vivamus eu dolor
                                            eu quam varius rutrum. Fusce nec justo id sem aliquam fringilla nec non
                                            lacus. Suspendisse eget lobortis nisi, ac cursus odio. Vivamus nibh velit,
                                            rutrum at ipsum ac, dignissim iaculis ante.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show active" id="tab3" role="tabpanel"
                                aria-labelledby="tab--3">
                                <div class="credit-tab-content">
                                    <!-- Tab Text -->
                                    <div class="credit-tab-text">
                                        <p>Nam tristique ex vel magna tincidunt, ut porta nisl finibus. Vivamus eu dolor
                                            eu quam varius rutrum. Fusce nec justo id sem aliquam fringilla nec non
                                            lacus. Suspendisse eget lobortis nisi, ac cursus odio. Vivamus nibh velit,
                                            rutrum at ipsum ac, dignissim iaculis ante.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ========== Loaders ========== -->
                <div class="col-12">
                    <div class="elements-title mb-30">
                        <div class="line"></div>
                        <h2>Loaders</h2>
                    </div>
                </div>

                <div class="col-12">
                    <!-- Loaders Area Start -->
                    <div class="our-skills-area">
                        <div class="row">

                            <div class="col-12 col-sm-4 col-lg-2">
                                <div class="single-skils-area mb-70">
                                    <div id="circle4" class="circle" data-value="0.90">
                                        <div class="skills-text">
                                            <span>90%</span>
                                        </div>
                                    </div>
                                    <p>Energy</p>
                                </div>
                            </div>

                            <div class="col-12 col-sm-4 col-lg-2">
                                <div class="single-skils-area mb-70">
                                    <div id="circle5" class="circle" data-value="0.75">
                                        <div class="skills-text">
                                            <span>75%</span>
                                        </div>
                                    </div>
                                    <p>power</p>
                                </div>
                            </div>

                            <div class="col-12 col-sm-4 col-lg-2">
                                <div class="single-skils-area mb-70">
                                    <div id="circle6" class="circle" data-value="0.97">
                                        <div class="skills-text">
                                            <span>97%</span>
                                        </div>
                                    </div>
                                    <p>resource</p>
                                </div>
                            </div>

                            <div class="col-12 col-sm-4 col-lg-2">
                                <div class="single-skils-area mb-70">
                                    <div id="circle7" class="circle" data-value="0.90">
                                        <div class="skills-text">
                                            <span>90%</span>
                                        </div>
                                    </div>
                                    <p>Energy</p>
                                </div>
                            </div>

                            <div class="col-12 col-sm-4 col-lg-2">
                                <div class="single-skils-area mb-70">
                                    <div id="circle8" class="circle" data-value="0.75">
                                        <div class="skills-text">
                                            <span>75%</span>
                                        </div>
                                    </div>
                                    <p>power</p>
                                </div>
                            </div>

                            <div class="col-12 col-sm-4 col-lg-2">
                                <div class="single-skils-area mb-70">
                                    <div id="circle9" class="circle" data-value="0.97">
                                        <div class="skills-text">
                                            <span>97%</span>
                                        </div>
                                    </div>
                                    <p>resource</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- ========== Milestones ========== -->
                <div class="col-12">
                    <div class="elements-title mb-30">
                        <div class="line"></div>
                        <h2>Milestone</h2>
                    </div>
                </div>

                <div class="col-12">
                    <div class="credit-cool-facts-area">
                        <div class="row">

                            <div class="col-12 col-sm-6 col-lg-3">
                                <!-- Single Cool Facts -->
                                <div class="single-cool-fact d-flex align-items-center mb-100">
                                    <div class="scf-icon mr-15">
                                        <i class="icon-piggy-bank"></i>
                                    </div>
                                    <div class="scf-text">
                                        <h2><span class="counter">8710</span></h2>
                                        <p>Clients</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3">
                                <!-- Single Cool Facts -->
                                <div class="single-cool-fact d-flex align-items-center mb-100">
                                    <div class="scf-icon mr-15">
                                        <i class="icon-coin"></i>
                                    </div>
                                    <div class="scf-text">
                                        <h2><span class="counter">35</span></h2>
                                        <p>Creditors</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3">
                                <!-- Single Cool Facts -->
                                <div class="single-cool-fact d-flex align-items-center mb-100">
                                    <div class="scf-icon mr-15">
                                        <i class="icon-diamond"></i>
                                    </div>
                                    <div class="scf-text">
                                        <h2><span class="counter">12</span></h2>
                                        <p>awards</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3">
                                <!-- Single Cool Facts -->
                                <div class="single-cool-fact d-flex align-items-center mb-100">
                                    <div class="scf-icon mr-15">
                                        <i class="icon-wallet"></i>
                                    </div>
                                    <div class="scf-text">
                                        <h2><span class="counter">5632</span></h2>
                                        <p>Сash loans</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- ========== Icon Boxes ========== -->
                <div class="col-12">
                    <div class="elements-title mb-30">
                        <div class="line"></div>
                        <h2>Icon Boxes</h2>
                    </div>
                </div>

                <div class="col-12">
                    <div class="row">
                        <!-- Single Service Area -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="single-service-area d-flex mb-100">
                                <div class="icon">
                                    <i class="icon-profits"></i>
                                </div>
                                <div class="text">
                                    <h5>All the loans</h5>
                                    <p>Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut
                                        ultricies orci, lobortis egestas sem.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Service Area -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="single-service-area d-flex mb-100">
                                <div class="icon">
                                    <i class="icon-money-1"></i>
                                </div>
                                <div class="text">
                                    <h5>Easy and fast answer</h5>
                                    <p>Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut
                                        ultricies orci, lobortis egestas sem.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Service Area -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="single-service-area d-flex mb-100">
                                <div class="icon">
                                    <i class="icon-coin"></i>
                                </div>
                                <div class="text">
                                    <h5>No additional papers</h5>
                                    <p>Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut
                                        ultricies orci, lobortis egestas sem.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ========== Web Icons ========== -->
                <div class="col-12">
                    <div class="elements-title mb-30">
                        <div class="line"></div>
                        <h2>Web Icons</h2>
                    </div>
                </div>

                <div class="col-12 mb-70">
                    <div class="row">

                        <!-- Single Icons -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icons mb-30">
                                <i class="icon-point-of-service"></i>
                                <span>icon-point-of-service</span>
                            </div>
                        </div>

                        <!-- Single Icons -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icons mb-30">
                                <i class="icon-purse"></i>
                                <span>icon-purse</span>
                            </div>
                        </div>

                        <!-- Single Icons -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icons mb-30">
                                <i class="icon-tax-1"></i>
                                <span>icon-tax-1</span>
                            </div>
                        </div>

                        <!-- Single Icons -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icons mb-30">
                                <i class="icon-diamond"></i>
                                <span>icon-diamond</span>
                            </div>
                        </div>

                        <!-- Single Icons -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icons mb-30">
                                <i class="icon-tax"></i>
                                <span>icon-tax</span>
                            </div>
                        </div>

                        <!-- Single Icons -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icons mb-30">
                                <i class="icon-profits-1"></i>
                                <span>icon-profits-1</span>
                            </div>
                        </div>

                        <!-- Single Icons -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icons mb-30">
                                <i class="icon-safebox"></i>
                                <span>icon-safebox</span>
                            </div>
                        </div>

                        <!-- Single Icons -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icons mb-30">
                                <i class="icon-idea"></i>
                                <span>icon-idea</span>
                            </div>
                        </div>

                        <!-- Single Icons -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icons mb-30">
                                <i class="icon-smartphone-1"></i>
                                <span>icon-smartphone-1</span>
                            </div>
                        </div>

                        <!-- Single Icons -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icons mb-30">
                                <i class="icon-piggy-bank"></i>
                                <span>icon-piggy-bank</span>
                            </div>
                        </div>

                        <!-- Single Icons -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icons mb-30">
                                <i class="icon-pound-sterling"></i>
                                <span>icon-pound-sterling</span>
                            </div>
                        </div>

                        <!-- Single Icons -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icons mb-30">
                                <i class="icon-yuan"></i>
                                <span>icon-yuan</span>
                            </div>
                        </div>

                        <!-- Single Icons -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icons mb-30">
                                <i class="icon-bitcoin"></i>
                                <span>icon-bitcoin</span>
                            </div>
                        </div>

                        <!-- Single Icons -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icons mb-30">
                                <i class="icon-dollar"></i>
                                <span>icon-dollar</span>
                            </div>
                        </div>

                        <!-- Single Icons -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icons mb-30">
                                <i class="icon-euro"></i>
                                <span>icon-euro</span>
                            </div>
                        </div>

                        <!-- Single Icons -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icons mb-30">
                                <i class="icon-exchange"></i>
                                <span>icon-exchange</span>
                            </div>
                        </div>

                        <!-- Single Icons -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icons mb-30">
                                <i class="icon-growth"></i>
                                <span>icon-growth</span>
                            </div>
                        </div>

                        <!-- Single Icons -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icons mb-30">
                                <i class="icon-briefcase-1"></i>
                                <span>icon-briefcase-1</span>
                            </div>
                        </div>

                        <!-- Single Icons -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icons mb-30">
                                <i class="icon-briefcase"></i>
                                <span>icon-briefcase</span>
                            </div>
                        </div>

                        <!-- Single Icons -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icons mb-30">
                                <i class="icon-gold-ingot"></i>
                                <span>icon-gold-ingot</span>
                            </div>
                        </div>

                        <!-- Single Icons -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icons mb-30">
                                <i class="icon-auction"></i>
                                <span>icon-auction</span>
                            </div>
                        </div>

                        <!-- Single Icons -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icons mb-30">
                                <i class="icon-search"></i>
                                <span>icon-search</span>
                            </div>
                        </div>

                        <!-- Single Icons -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icons mb-30">
                                <i class="icon-check"></i>
                                <span>icon-check</span>
                            </div>
                        </div>

                        <!-- Single Icons -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icons mb-30">
                                <i class="icon-profits"></i>
                                <span>icon-profits</span>
                            </div>
                        </div>

                        <!-- Single Icons -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icons mb-30">
                                <i class="icon-loss"></i>
                                <span>icon-loss</span>
                            </div>
                        </div>

                        <!-- Single Icons -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icons mb-30">
                                <i class="icon-invoice"></i>
                                <span>icon-invoice</span>
                            </div>
                        </div>

                        <!-- Single Icons -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icons mb-30">
                                <i class="icon-smartphone"></i>
                                <span>icon-smartphone</span>
                            </div>
                        </div>

                        <!-- Single Icons -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icons mb-30">
                                <i class="icon-coin-1"></i>
                                <span>icon-coin-1</span>
                            </div>
                        </div>

                        <!-- Single Icons -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icons mb-30">
                                <i class="icon-calculator"></i>
                                <span>icon-calculator</span>
                            </div>
                        </div>

                        <!-- Single Icons -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icons mb-30">
                                <i class="icon-bank"></i>
                                <span>icon-bank</span>
                            </div>
                        </div>

                        <!-- Single Icons -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icons mb-30">
                                <i class="icon-atm-machine-1"></i>
                                <span>icon-atm-machine-1</span>
                            </div>
                        </div>

                        <!-- Single Icons -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icons mb-30">
                                <i class="icon-atm-machine"></i>
                                <span>icon-atm-machine</span>
                            </div>
                        </div>

                        <!-- Single Icons -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icons mb-30">
                                <i class="icon-money-bag"></i>
                                <span>icon-money-bag</span>
                            </div>
                        </div>

                        <!-- Single Icons -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icons mb-30">
                                <i class="icon-credit-card-1"></i>
                                <span>icon-credit-card-1</span>
                            </div>
                        </div>

                        <!-- Single Icons -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icons mb-30">
                                <i class="icon-credit-card"></i>
                                <span>icon-credit-card</span>
                            </div>
                        </div>

                        <!-- Single Icons -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icons mb-30">
                                <i class="icon-wallet"></i>
                                <span>icon-wallet</span>
                            </div>
                        </div>

                        <!-- Single Icons -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icons mb-30">
                                <i class="icon-money-1"></i>
                                <span>icon-money-1</span>
                            </div>
                        </div>

                        <!-- Single Icons -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icons mb-30">
                                <i class="icon-balance"></i>
                                <span>icon-balance</span>
                            </div>
                        </div>

                        <!-- Single Icons -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icons mb-30">
                                <i class="icon-money"></i>
                                <span>icon-money</span>
                            </div>
                        </div>

                        <!-- Single Icons -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icons mb-30">
                                <i class="icon-coin"></i>
                                <span>icon-coin</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### Elements Area End ##### -->

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
                                <img src="img/bg-img/7.jpg" alt="">
                            </div>
                            <div class="news-content">
                                <a href="#">How to get the best loan?</a>
                                <div class="news-meta">
                                    <a href="#" class="post-author"><img src="img/core-img/pencil.png"
                                            alt=""> Jane Smith</a>
                                    <a href="#" class="post-date"><img src="img/core-img/calendar.png"
                                            alt=""> April 26</a>
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
                                    <a href="#" class="post-author"><img src="img/core-img/pencil.png"
                                            alt=""> Jane Smith</a>
                                    <a href="#" class="post-date"><img src="img/core-img/calendar.png"
                                            alt=""> April 26</a>
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
                                    <a href="#" class="post-author"><img src="img/core-img/pencil.png"
                                            alt=""> Jane Smith</a>
                                    <a href="#" class="post-date"><img src="img/core-img/calendar.png"
                                            alt=""> April 26</a>
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
                            <a href="index.html" class="footer-logo"><img src="img/core-img/logo.png"
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
