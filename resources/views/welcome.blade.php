<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>{{$page->title}}</title>
    <link href="{{ asset("/css/bootstrap.min.css") }}" rel="stylesheet">
    <link href="{{ asset("/css/font-awesome.min.css") }}" rel="stylesheet">
    <link href="{{ asset("/css/animate.min.css") }}" rel="stylesheet"> 
    <link href="{{ asset("/css/lightbox.css") }}" rel="stylesheet"> 
	<link href="{{ asset("/css/main.css") }}" rel="stylesheet">
	<link href="{{ asset("/css/responsive.css") }}" rel="stylesheet">

    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('/assets/img/photos/logo.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('/assets/img/photos/logo.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('/assets/img/photos/logo.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('/assets/img/photos/logo.png')}}">
</head><!--/head-->

<body>
	<header id="header">      
        <div class="container">
            <div class="row">
                <div class="col-sm-12 overflow">
                   <div class="social-icons pull-right">
                        <ul class="nav nav-pills">
                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                            <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                            <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div> 
                </div>
             </div>
        </div>
        <div class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="{{url('')}}">
                    	<h1><img src="{{ asset('/assets/img/photos/textlogo.png')}}" alt="logo"></h1>
                    </a>
                    
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="{{url('')}}">Home</a></li>
                        <li class="dropdown"><a href="#">Merchant <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="{{url('/merchant/login')}}">Login</a></li>
                                <li><a href="{{url('/merchant/register')}}">Register</a></li>
                            </ul>
                        </li>                    
                        <li><a href="{{url('/merchant/register')}}">Claim Restaurant</a>
                        
                        </li>
                                           
                        <li><a href="{{url('/admin/login')}}">Administrator</a></li>                    
                    </ul>
                </div>
                <div class="search">
                    <form role="form">
                        <i class="fa fa-search"></i>
                        <div class="field-toggle">
                            <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <!--/#header-->

    <section id="home-slider">
        <div class="container">
            <div class="row">
                <div class="main-slider">
                    <div class="slide-text">
                        <h1>{{$page->description}}</h1>
                        <p>{{$page->about}}</p>
                        <a href="{{url('/merchant/register')}}" class="btn btn-common">JOIN WITH US</a>
                    </div>
                    <img src="{{asset('/assets/img/photos/restaurant_pizza.jpg')}}" class="slider-hill" alt="slider image">
                    
                </div>
            </div>
        </div>
        <div class="preloader"><i class="fa fa-sun-o fa-spin"></i></div>
    </section>
    <!--/#home-slider-->

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                            <img src="images/home/icon1.png" alt="">
                        </div>
                        <h2>New OK-FOOD Interface</h2>
                        <p>The new interface for the OK-FOOD application is more informative and makes it easier for you to order food. .</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
                            <img src="images/home/icon2.png" alt="">
                        </div>
                        <h2>New Merchant Profile</h2>
                        <p>The new profile displays detailed information for each seller with photos of their top dishes.</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                            <img src="images/home/icon3.png" alt="">
                        </div>
                        <h2>Search</h2>
                        <p>This feature makes it easier for you to search for a restaurant or a particular dish.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#services-->

    <section id="action" class="responsive">
        <div class="vertical-center">
             <div class="container">
                <div class="row">
                    <div class="action take-tour">
                        <div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                            <h1 class="title">Join us as a seller</h1>
                            <p>Join us and 100,000 other SUCCESSFUL restaurants across {{$page->country}}.</p>
                        </div>
                        <div class="col-sm-5 text-center wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                            <div class="tour-button">
                                <a href="{{url('/merchant/register')}}" class="btn btn-common">JOIN US</a>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
   </section>
    <!--/#action-->

    <section id="features">
        <div class="container">
            <div class="row">
                <div class="single-features">
                    
                </div>
                
            </div>
        </div>
    </section>
     <!--/#features-->

    <!-- <section id="clients">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="clients text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                        <p><img src="images/home/clients.png" class="img-responsive" alt=""></p>
                        <h1 class="title">Happy Clients</h1>
                        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br> Ut enim ad minim veniam, quis nostrud </p>
                    </div>
                    <div class="clients-logo wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="images/home/client1.png" class="img-responsive" alt=""></a>
                        </div>
                        <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="images/home/client2.png" class="img-responsive" alt=""></a>
                        </div>
                         <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="images/home/client3.png" class="img-responsive" alt=""></a>
                        </div>
                         <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="images/home/client4.png" class="img-responsive" alt=""></a>
                        </div>
                         <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="images/home/client5.png" class="img-responsive" alt=""></a>
                        </div>
                         <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="images/home/client6.png" class="img-responsive" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section> -->
    <!--/#clients-->

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center bottom-separator">
                    <img src="{{asset('/assets/img/photos/under.png')}}" class="img-responsive inline" alt="">
                </div>
                <div class="col-md-2 col-sm-3">
                   
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="contact-info bottom">
                        <h2>Contacts</h2>
                        <address>
                        E-mail: <a href="mailto:admin@example.com">admin@example.com</a> <br> 
                        Phone: {{$page->contact}} <br> 
                        Fax: {{$page->contact}} <br> 
                        </address>

                        <h2>Address</h2>
                        <address>
                        {{$page->street}}, <br> 
                        {{$page->district}}, {{$page->city}}, {{$page->country}}.<br> 
                        </address>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="contact-form bottom">
                        <h2>Send a message</h2>
                        <form id="main-contact-form" name="contact-form" method="get" action="{{url('/sendemail')}}">
                            <div class="form-group">
                                <input type="text" id="name" name="name" class="form-control" required="required" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="email"  id="mail" name="mail" class="form-control" required="required" placeholder="Email Id">
                            </div>
                            <div class="form-group">
                                <textarea name="text" id="text" required="required" class="form-control" rows="8" placeholder="Your text here"></textarea>
                            </div>                        
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-submit" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class=" text-center">
                        <p></p>
                        <br>
                        <p>&copy; {{$page->name}} 2018. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/#footer-->

    <script type="text/javascript" src="{{ asset("js/jquery.js") }}"></script>
    <script type="text/javascript" src="{{ asset("js/bootstrap.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("js/lightbox.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("js/wow.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("js/main.js") }}"></script>   
</body>
</html>
