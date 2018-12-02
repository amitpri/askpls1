<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Playfair+Display:700,700i,900" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="stylesheet" href="css/dark.css" type="text/css" />

    <!-- Home Demo Specific Stylesheet -->
    <link rel="stylesheet" href="demos/interior-design/interior-design.css" type="text/css" />

    <link rel="stylesheet" href="css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/animate.css" type="text/css" />
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

    <!-- Reader's Blog Demo Specific Fonts -->
    <link rel="stylesheet" href="demos/interior-design/css/fonts.css" type="text/css" />

    <link rel="stylesheet" href="css/responsive.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/colors.php?color=1c85e8" type="text/css" />

    <!-- Document Title
    ============================================= -->
    <title>AskPls | Anonymous Review System</title>

</head>

<body class="stretched side-push-panel">

    <div id="side-panel">

        <div id="side-panel-trigger-close" class="side-panel-trigger"><a href="#"><i class="icon-line-cross"></i></a></div>

        <div class="side-panel-wrap">

            <div class="widget clearfix">

                <h4 class="t400">Login</h4>

                
                <div class="line line-sm"></div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="col_full"> 
                        <label for="email" class="t400">{{ __('E-Mail Address') }}</label> 
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="col_full">
                        <label for="login-form-password" class="t400">Password:</label>  
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="col_full nobottommargin">
                        <button class="button button-rounded t400 nomargin" id="login-form-submit" name="login-form-submit" value="login">Login</button>
                        <br>   <br> 
                        <a href="/register" class=" ">Register</a> |       <a href="/password/reset" class=" ">Forgot Password?</a>
                    </div>

                </form>


            </div>

        </div>

    </div>

    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix">

        <!-- Header
        ============================================= -->
        <header id="header">

            <div id="header-wrap">

                <div class="container clearfix">

                    <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                    <div class="row justify-content-xl-between justify-content-lg-between clearfix">

                        <div class="col-lg-2 col-12 d-flex align-self-center">
                            <!-- Logo
                            ============================================= -->
                            <div id="logo">
                                <a href="demo-interior-design.html" class="standard-logo"><img src="images/logo.png" alt="Canvas Logo"></a>
                                <a href="demo-interior-design.html" class="retina-logo"><img src="images/logo@2x.png" alt="Canvas Logo"></a>
                            </div><!-- #logo end -->

                        </div>

                        <div class="col-lg-8 col-12 d-xl-flex d-lg-flex justify-content-xl-center justify-content-lg-center">
                            <!-- Primary Navigation
                            ============================================= -->
                            <nav id="primary-menu" class="with-arrows fnone clearfix">

                                <ul> 
                                    <li><a href="#"><div>Why AskPls</div></a>
                                        <ul>
                                            <li><a href="/how-it-works"><div>How it works?</div></a></li>
                                            <li><a href="/enterprises"><div>Enterprises</div></a></li> 
                                            <li><a href="/customers"><div>Customers</div></a></li> 
                                        </ul>
                                    </li>
                                    <li><a href="/product"><div>Product</div></a></li>
                                    <li><a href="#"><div>Solutions</div></a>
                                        <ul>
                                            <li><a href="/engineering"><div>Engineering</div></a></li>
                                            <li><a href="/it"><div>IT</div></a></li>
                                            <li><a href="/customer-support"><div>Customer Support</div></a></li>
                                            <li><a href="/sales"><div>Sales</div></a></li>
                                            <li><a href="/marketing"><div>Marketing</div></a></li>
                                            <li><a href="/human-resources"><div>Human Resources</div></a></li>
                                            <li><a href="/cxo"><div>CxO</div></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/prices"><div>Prices</div></a></li>
                                    <li><a href="/faqs"><div>FAQs</div></a></li>
                                    <li><a href="/contact"><div>Contact</div></a></li>
                                </ul>
                            </nav><!-- #primary-menu end -->
                        </div>

                        <div class="col-lg-2 d-none d-lg-inline-flex d-xl-inline-flex justify-content-end nomargin">
                            <!-- Top Search
                            ============================================= -->
                            <div id="side-panel-trigger" class="side-panel-trigger">
                                <a href="#" class="d-block d-lg-none"><i class="icon-line-lock"></i></a>
                                
                                <a href="#" class="d-none d-lg-block">Sign In <i class="icon-line-arrow-right"></i></a>
                            </div><!-- #top-search end -->
                        </div>
                        <a href="#" class="d-block d-lg-none mobile-side-panel side-panel-trigger"><i class="icon-line-arrow-right"></i></a>
                    </div>
                </div>

            </div>

        </header><!-- #header end -->

        <!-- Slider
        ============================================= -->
        <section id="slider" class="slider-element clearfix" style="height: 500px; margin-top:-50px;     background-size: cover;">
            <div class="vertical-middle">
                <div class="container clearfix">

                    <div class="clearfix center divcenter" style="max-width: 800px;">
                        <div class="emphasis-title">
                            <h1 class="font-secondary" style="color: black; font-size: 76px; font-weight: 900; text-shadow: 0 7px 10px rgba(0,0,0,0.07), 0 4px 4px rgba(0,0,0,0.2);">Anonymous Reviews </h1>
                            <p style="font-weight: 300; opacity: .7; color: black; text-shadow: 0 -4px 20px rgba(0, 0, 0, .25);">Get genuine anonymous Feedback from your team and improve your productivity</p>
                        </div>
       
                        <form id="widget-subscribe-form" action="/register" role="form" method="get" class="nobottommargin" data-animate="fadeInUp">
                            <div class="input-group divcenter">
                                <input type="email" id="emailid" name="emailid" class="form-control form-control-lg not-dark" placeholder="Enter your Email Address.." style="border: 0; box-shadow: none; overflow: hidden;">
                                <button type="submit" class="button " style="border-radius: 3px;">Get Started</button>  
                                 
                            </div>
                        </form>
                      
                    </div>

                </div>
            </div>

        </section>

        <!-- Content
        ============================================= -->
        <section id="content" style="margin-top:-50px;">

            <div class="content-wrap notoppadding clearfix">
 
                <div class="container topmargin-lg bottommargin-lg clearfix">

                    <div class="divcenter" style="max-width: 960px">
 
                        <div class="tabs tabs-alt tabs-responsive tabs-justify clearfix" id="tab">

                            <ul class="tab-nav clearfix">
                                <li><a href="#tabs-1"><i class="icon-line2-key"></i>24x7 Available</a></li>
                                <li><a href="#tabs-2"><i class="icon-line2-social-dropbox"></i>Complete Solutions</a></li>
                                <li><a href="#tabs-3"><i class="icon-line2-drop"></i>Water Treatments</a></li>
                                <li><a href="#tabs-4"><i class="icon-line2-pointer"></i>Location Independant</a></li>
                            </ul>

                            <div class="tab-container">

                                <div class="tab-content clearfix" id="tabs-1">
                                    <div class="story-box description-left clearfix">
                                        <div class="story-box-image">
                                            <img src="demos/interior-design/images/story/1.jpg" alt="story-image">
                                        </div>
                                        <div class="story-box-info">
                                            <h3 class="story-title">We help people to create new Website.</h3>
                                            <div class="story-box-content">
                                                <p>Uniquely productize cross-unit action items with multifunctional imperatives. Quickly communicate collaborative relationships rather than timely materials. Progressively foster unique interfaces vis-a-vis backend e-services.</p>
                                                <button class="t300 button noleftmargin button-rounded">Read Canvas's story</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-content clearfix" id="tabs-2">
                                    <div class="story-box clearfix">
                                        <div class="story-box-image">
                                            <img src="demos/interior-design/images/story/2.jpg" alt="story-image">
                                        </div>
                                        <div class="story-box-info">
                                            <h3 class="story-title">Get better results tomorrow by reading this post.</h3>
                                            <div class="story-box-content">
                                                <p>Progressively streamline future-proof networks rather than virtual channels. Intrinsicly architect performance based products with B2C communities. Appropriately underwhelm integrated information via superior platforms.</p>
                                                <button class="t300 button noleftmargin button-rounded">Read More</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-content clearfix" id="tabs-3">
                                    <div class="story-box description-left clearfix">
                                        <div class="story-box-image">
                                            <img src="demos/interior-design/images/story/3.jpg" alt="story-image">
                                        </div>
                                        <div class="story-box-info">
                                            <h3 class="story-title">TK’s recipe of the week: Guiness beef stew.</h3>
                                            <div class="story-box-content">
                                                <p>Compellingly synthesize technically sound users without technically sound vortals. Rapidiously redefine maintainable leadership with multifunctional strategic theme areas. Appropriately plagiarize business ideas vis-a-vis.</p>
                                                <button class="t300 button noleftmargin button-rounded">Read About Me</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-content clearfix" id="tabs-4">
                                    <div class="story-box clearfix">
                                        <div class="story-box-image">
                                            <img src="demos/interior-design/images/story/4.jpg" alt="story-image">
                                        </div>
                                        <div class="story-box-info">
                                            <h3 class="story-title">We help people to create new Website.</h3>
                                            <div class="story-box-content">
                                                <p>Dynamically exploit cross-platform sources vis-a-vis scalable paradigms. Efficiently plagiarize multifunctional internal or "organic" sources before intuitive innovation. Synergistically facilitate goal-oriented ROI vis-a-vis client-focused.</p>
                                                <a href="#">Read Deanne's story</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div> 

                <div class="container clearfix">

                    <div class="emphasis-title center divcenter" style="max-width: 800px">
                        <h2 class="font-secondary nott t700">3,583 happy homeowners and counting...</h2>
                    </div>

                    <div class="row bottommargin clearfix">
                        <div class="col-lg-10 offset-lg-1 col-12">
                            <div class="review-row center">
                                <h6>Top Best Reviews of Canvas</h6>
                            </div>
                        </div>

                        <div class="clear"></div>

                        <div class="col-12 reviews-lists clearfix">

                            <div id="oc-team" class="owl-carousel team-carousel bottommargin carousel-widget" data-margin="0" data-pagi="false" data-items="1" data-loop="true" data-animate-in="fadeIn" data-animate-out="fadeOut" data-autoplay="5000">

                                <div class="oc-item">
                                    <div class="row">
                                        <div class="col-lg-10 offset-lg-1 col-12">
                                            <div class="review clearfix">
                                                <div class="row">
                                                    <div class="col-12 col-md-4">
                                                        <div class="review-company">Datanetpress</div>
                                                        <div class="review-id">Themeforest Author</div>
                                                        <div class="rating-stars fright">
                                                            <i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i>
                                                        </div>
                                                        <div class="review-date">
                                                            Sold 19/11/2016<br>
                                                            after 22 days
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-8">
                                                        <div class="review-title">
                                                            <h3>Awesome Template and Good Support.</h3>
                                                        </div>
                                                        <div class="review-content">
                                                            <p>Not only is this a REALLY professionally designed website, but the support is phenomenal. They have promptly answered all of my questions (and I had several :) ) Nice job SemiColonWeb!!! I highly recommend your HTML template to anyone looking for a website. Excellent, only gripe is the php email section, that needs to be better otherwise a brilliant template and set of codes. well done. Hello, I would like to say that :SemiColonWeb" has being the SUPER BEST CUSTOMER SERVICE I HAVE EVER HAD during all my year in Envato. This Guys are the Best, not only on Design by the most Important for us, in customer service. There are fast, super professional, on time and the most important they care about their clients. 100 BIG STARS FOR EVER!!!</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="oc-item">
                                    <div class="row">
                                        <div class="col-lg-10 offset-lg-1 col-12">
                                            <div class="review clearfix">
                                                <div class="row">
                                                    <div class="col-12 col-md-4">
                                                        <div class="review-company">VarunD</div>
                                                        <div class="review-id">Themeforest Author</div>
                                                        <div class="rating-stars">
                                                            <i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i>
                                                        </div>
                                                        <div class="review-date">
                                                            Sold 21/09/2016<br>
                                                            after 39 days
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-8">
                                                        <div class="review-title">
                                                            <h3>Nice Design Quality &amp; Well Support.</h3>
                                                        </div>
                                                        <div class="review-content">
                                                            <p>Excellent, only gripe is the php email section, that needs to be better otherwise a brilliant template and set of codes. well done. Awesome theme. Using it for two different sites at the moment and it keeps on giving! Thanks SemiColonWeb! Love this template. one of the best I've worked with. Wow, very inspiring design and excellent code. One of the best HTML and bootstrap templates here on Themeforest with infinitely many features. Really Well Done! Flexible, easy to customize, amazing code quality and a good documentation. This theme fits well in various business strategies.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="oc-item">
                                    <div class="row">
                                        <div class="col-lg-10 offset-lg-1 col-12">
                                            <div class="review clearfix">
                                                <div class="row">
                                                    <div class="col-12 col-md-4">
                                                        <div class="review-company">Paultran47</div>
                                                        <div class="review-id">Themeforest Author</div>
                                                        <div class="rating-stars">
                                                            <i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i>
                                                        </div>
                                                        <div class="review-date">
                                                            Sold 03/01/2017<br>
                                                            after 11 days
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-8">
                                                        <div class="review-title">
                                                            <h3>The support is wonderful as well.</h3>
                                                        </div>
                                                        <div class="review-content">
                                                            <p>It's amazing that less than 20 dollars gets you more than 400 templates and a bunch of customisability. But what I love the most about Canvas's template is the clear and clean code structure. Everything is easy to understand and to find. This template is so well done, clean and well documented. Having examples for almost any variation that I can use as a basis. I find this much more efficient that website builders. Continue this great work! Really, really great job, guys!!</p>
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

                    <div class="col_one_third nobottommargin">
                        <div class="feature-box fbox-small fbox-center fbox-plain fbox-large nobottomborder">
                            <div class="fbox-icon">
                                <i class="icon-line2-home"></i>
                            </div>
                            <h3 class="ls0 t400 nott" style="font-size: 20px;">Commercial &amp; Personal Use</h3>
                            <p style="font-size: 16px;">Proactively reintermediate B2C infomediaries before multimedia methods of empowerment.</p>
                        </div>
                    </div>
                    <div class="col_one_third nobottommargin">
                        <div class="feature-box fbox-small fbox-center fbox-plain fbox-large nobottomborder">
                            <div class="fbox-icon">
                                <i class="icon-line2-compass"></i>
                            </div>
                            <h3 class="ls0 t400 nott" style="font-size: 20px;">Vaastu Compliant</h3>
                            <p style="font-size: 16px;">Uniquely formulate principle-centered applications after just in time opportunities.</p>
                        </div>
                    </div>
                    <div class="col_one_third nobottommargin col_last">
                        <div class="feature-box fbox-small fbox-center fbox-plain fbox-large nobottomborder">
                            <div class="fbox-icon">
                                <i class="icon-line2-directions"></i>
                            </div>
                            <h3 class="ls0 t400 nott" style="font-size: 20px;">Great Location</h3>
                            <p style="font-size: 16px;">Collaboratively reinvent ubiquitous functionalities vis future-proof systems.</p>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- #content end -->

        <!-- Footer
        ============================================= -->
        <footer id="footer" class="topmargin noborder" style="background-color: #F5F5F5;">

            <div class="container clearfix">

                <!-- Footer Widgets
                ============================================= -->
                <div class="footer-widgets-wrap clearfix">

                    <div class="col_one_fourth">
                        <div class="widget clearfix">
                            <div class="t400 lowercase nobottommargin" style="font-size: 36px; letter-spacing: -1px">Canvas</div>
                            <p class="text-muted t300">@2017</p>

                            <div class="app-links">
                                <p>Get the app</p>
                                <a href="#" class="link"><i class="icon-android2"></i> <span>Download for Android</span></a><br>
                                <a href="#" class="link"><i class="icon-apple"></i> <span>Download for IOS</span></a><br>

                            </div>
                        </div>
                    </div>

                    <div class="col_one_fourth">
                        <div class="widget widget_links clearfix">
                            <h4>Blogroll</h4>
                            <ul>
                                <li><a href="#">Documentation</a></li>
                                <li><a href="#">Feedback</a></li>
                                <li><a href="#">Plugins</a></li>
                                <li><a href="#">Support Forums</a></li>
                                <li><a href="#">Themes</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col_one_fourth">
                        <div class="widget widget_links clearfix">
                            <h4>Links</h4>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">FAQs</a></li>
                                <li><a href="#">Licence</a></li>
                                <li><a href="#">Forums</a></li>
                                <li><a href="#">Terms</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col_one_fourth col_last">
                        <div class="widget widget-twitter-feed clearfix">
                            <h4>Twitter Feed</h4>
                            <ul class="iconlist twitter-feed nobottommargin" data-username="envato" data-count="2">
                                <li></li>
                            </ul>
                        </div>
                    </div>

                </div><!-- .footer-widgets-wrap end -->

            </div>

            <div class="line nomargin"></div>

            <!-- Copyrights
            ============================================= -->
            <div id="copyrights" class="" style="background-color: #FFF">

                <div class="container clearfix">

                    <div class="col_full center nomargin">
                        <span>Copyrights &copy; 2017 All Rights Reserved by Canvas Inc.</span>
                    </div>

                </div>

            </div><!-- #copyrights end -->

        </footer><!-- #footer end -->

    </div><!-- #wrapper end -->

    <!-- Go To Top
    ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- External JavaScripts
    ============================================= -->
    <script src="js/jquery.js"></script>
    <script src="js/plugins.js"></script>

    <!-- Footer Scripts
    ============================================= -->
    <script src="js/functions.js"></script>

</body>
</html>