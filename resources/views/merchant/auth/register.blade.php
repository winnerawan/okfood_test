<!doctype html>
<!--[if lte IE 9]>     <html lang="en" class="no-focus lt-ie10 lt-ie10-msg"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en" class="no-focus"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

<title>{{$page->title}}</title>


<!-- Codebase framework -->
<link rel="stylesheet" id="css-main" href="{{ asset("/assets/css/login.css") }}">

<!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
<!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
<!-- END Stylesheets -->
</head>
    <body>
        <!-- Page Container -->
        <!--
            Available classes for #page-container:

        GENERIC

            'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Codebase() -> uiHandleTheme())

        SIDEBAR & SIDE OVERLAY

            'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
            'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
            'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
            'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
            'sidebar-inverse'                           Dark themed sidebar

            'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
            'side-overlay-o'                            Visible Side Overlay by default

            'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

        HEADER

            ''                                          Static Header if no class is added
            'page-header-fixed'                         Fixed Header

        HEADER STYLE

            ''                                          Classic Header style if no class is added
            'page-header-modern'                        Modern Header style
            'page-header-inverse'                       Dark themed Header (works only with classic Header style)
            'page-header-glass'                         Light themed Header with transparency by default
                                                        (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
            'page-header-glass page-header-inverse'     Dark themed Header with transparency by default
                                                        (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

        MAIN CONTENT LAYOUT

            ''                                          Full width Main Content if no class is added
            'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
            'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
        -->
        <!doctype html>
        <!--[if lte IE 9]>     <html lang="en" class="no-focus lt-ie10 lt-ie10-msg"> <![endif]-->
        <!--[if gt IE 9]><!--> <html lang="en" class="no-focus"> <!--<![endif]-->
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        
                <title>Codebase - Bootstrap 4 Admin Template &amp; UI Framework</title>
        
                <meta name="description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
                <meta name="author" content="pixelcave">
                <meta name="robots" content="noindex, nofollow">
        
                <!-- Open Graph Meta -->
                <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
                <meta property="og:site_name" content="Codebase">
                <meta property="og:description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
                <meta property="og:type" content="website">
                <meta property="og:url" content="">
                <meta property="og:image" content="">
        
                <!-- Icons -->
                <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
                <link rel="shortcut icon" href="assets/img/favicons/favicon.png">
                <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicons/favicon-192x192.png">
                <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon-180x180.png">
                <!-- END Icons -->
        
                <!-- Stylesheets -->
                <!-- Codebase framework -->
                <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">
        
                <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
                <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
                <!-- END Stylesheets -->
            </head>
            <body>
                <!-- Page Container -->
                <!--
                    Available classes for #page-container:
        
                GENERIC
        
                    'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Codebase() -> uiHandleTheme())
        
                SIDEBAR & SIDE OVERLAY
        
                    'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
                    'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
                    'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
                    'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
                    'sidebar-inverse'                           Dark themed sidebar
        
                    'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
                    'side-overlay-o'                            Visible Side Overlay by default
        
                    'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)
        
                HEADER
        
                    ''                                          Static Header if no class is added
                    'page-header-fixed'                         Fixed Header
        
                HEADER STYLE
        
                    ''                                          Classic Header style if no class is added
                    'page-header-modern'                        Modern Header style
                    'page-header-inverse'                       Dark themed Header (works only with classic Header style)
                    'page-header-glass'                         Light themed Header with transparency by default
                                                                (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
                    'page-header-glass page-header-inverse'     Dark themed Header with transparency by default
                                                                (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)
        
                MAIN CONTENT LAYOUT
        
                    ''                                          Full width Main Content if no class is added
                    'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
                    'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
                -->
                <div id="page-container" class="main-content-boxed">
                    <!-- Main Container -->
                    <main id="main-container">
                        <!-- Page Content -->
                        <div class="bg-image" style="background-image: url('{{asset("assets/img/photos/restaurant.jpg") }}">
                            <div class="row mx-0 bg-black-op">
                                <div class="hero-static col-md-6 col-xl-8 d-none d-md-flex align-items-md-end">
                                    <div class="p-30 invisible" data-toggle="appear">
                                        <p class="font-size-h3 font-w600 text-white mb-5">
                                            We're very happy you are joining us!
                                        </p>
                                        <p class="font-size-h5 text-white">
                                            <!-- <i class="fa fa-angles-right"></i> Create your account today and receive 50% off. -->
                                        </p>
                                        <p class="text-white-op">
                                        Copyright &copy; {{$page->name}} <span class="js-year-copy"> 2018</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="hero-static col-md-6 col-xl-4 d-flex align-items-center bg-white">
                                    <div class="content content-full">
                                       <!-- Header -->
                                <div class="px-30 py-10">
                                <a class="link-effect font-w700" href="{{url('/')}}">
                                    <span class="font-size-l text-primary-dark">{{$page->title}}</span><span class="font-size-xl"></span>
                                </a>
                                <h1 class="h3 font-w700 mt-30 mb-10">Create New Account</h1>
                                <h2 class="h5 font-w400 text-muted mb-0">Please add your details</h2>
                            </div>
                            <!-- END Header -->
        
                                        <!-- Sign Up Form -->
                                        <!-- jQuery Validation (.js-validation-signup class is initialized in js/pages/op_auth_signup.js) -->
                                        <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                        <form class="js-validation-signup px-30" action="{{url('/merchant/register')}}" method="post" onSubmit="validate()">
                                        {{ csrf_field() }}

                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} form-material floating">
                                                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                                                        @if ($errors->has('name'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                @endif
                                                        <label for="signup-username">Username</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <div class="form-material floating">
                                                        <input type="email" class="form-control" id="email" name="email"  value="{{ old('email') }}">
                                                        @if ($errors->has('email'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                                <label for="email">Email</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <div class="form-material floating">
                                                        <input type="password" class="form-control" id="password" name="password" >
                                                        @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                                        <label for="signup-password">Password</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <div class="form-material floating">
                                                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                                                        @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                                                        <label for="signup-password-confirm">Password Confirmation</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="agree" name="agree">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-description">I agree to Terms &amp; Conditions</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-sm btn-hero btn-alt-success">
                                                    <i class="fa fa-plus mr-10"></i> Create Account
                                                </button>
                                                <div class="mt-30">
                                                    <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="#" data-toggle="modal" data-target="#modal-terms">
                                                        <i class="fa fa-book text-muted mr-5"></i> Read Terms
                                                    </a>
                                                    <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="{{url('/merchant/login')}}">
                                                        <i class="fa fa-user text-muted mr-5"></i> Sign In
                                                    </a>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- END Sign Up Form -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Page Content -->
        
                    </main>
                    <!-- END Main Container -->
                </div>
                <!-- END Page Container -->
        
                <!-- Terms Modal -->
                <div class="modal fade" id="modal-terms" tabindex="-1" role="dialog" aria-labelledby="modal-terms" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-slidedown" role="document">
                        <div class="modal-content">
                            <div class="block block-themed block-transparent mb-0">
                                <div class="block-header bg-primary-dark">
                                    <h3 class="block-title">Terms &amp; Conditions</h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                            <i class="si si-close"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                                    <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                                    <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-alt-success" data-dismiss="modal">
                                    <i class="fa fa-check"></i> Perfect
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Terms Modal -->
        
        
              <!-- Codebase Core JS -->
        <script src="{{ asset("/assets/js/jquery.min.js") }}"></script>
        <script src="{{ asset("/assets/js/popper.min.js") }}"></script>
        <script src="{{ asset("/assets/js/bootstrap.min.js") }}"></script>
        <script src="{{ asset("/assets/js/jquery.slimscroll.min.js") }}"></script>
        <script src="{{ asset("/assets/js/jquery.scrollLock.min.js") }}"></script>
        <script src="{{ asset("/assets/js/jquery.appear.min.js") }}"></script>
        <script src="{{ asset("/assets/js/jquery.countTo.min.js") }}"></script>
        <script src="{{ asset("/assets/js/js.cookie.min.js") }}"></script>
        <script src="{{ asset("/assets/js/login.js") }}"></script>


        <!-- Page JS Plugins -->
        <script src="{{ asset("/assets/js/jquery.validate.min.js") }}"></script>

        <!-- Page JS Code -->
        <script src="{{ asset("/assets/js/op_auth_signin.js") }}"></script>
        <script type=text/javascript>
function validate(){
    var agreeBox = document.getElementById('agree');
    if (!agreeBox.checked){
        alert('You must agree!');
        return false;
    }
    return true;
}
</script>
            </body>
        </html>