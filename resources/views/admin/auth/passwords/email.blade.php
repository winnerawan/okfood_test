

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
        <link rel="shortcut icon" href="{{ asset("/assets/img/favicons/favicon.png") }}">
        <link rel="icon" type="image/png" sizes="192x192" href="{{ asset("/assets/img/favicons/favicon-192x192.png") }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset("/assets/img/favicons/apple-touch-icon-180x180.png") }}">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Codebase framework -->
        <link rel="stylesheet" id="css-main" href="{{ asset("/assets/css/codebase.min.css") }}">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
    </head>
    <body>
 <div id="page-container" class="main-content-boxed">

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="bg-body-dark bg-pattern" style="background-image: url('assets/img/various/bg-pattern-inverse.png');">
                    <div class="row mx-0 justify-content-center">
                        <div class="hero-static col-lg-6 col-xl-4">
                            <div class="content content-full overflow-hidden">
                                <!-- Header -->
                                <div class="py-30 text-center">
                                    <a class="link-effect font-w700" href="index.html">
                                        <i class="si si-fire"></i>
                                        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                                        <span class="font-size-xl text-primary-dark">code</span><span class="font-size-xl">base</span>
                                    </a>
                                    <h1 class="h4 font-w700 mt-30 mb-10">Don’t worry, we’ve got your back</h1>
                                    <h2 class="h5 font-w400 text-muted mb-0">Please enter your username or email</h2>
                                </div>
                                <!-- END Header -->

                                <!-- Reminder Form -->
                                <!-- jQuery Validation (.js-validation-reminder class is initialized in js/pages/op_auth_reminder.js) -->
                                <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/password/email') }}">
                                {{ csrf_field() }}
                                            <div class="block block-themed block-rounded block-shadow">
                                        <div class="block-header bg-gd-primary">
                                            <h3 class="block-title">Password Reminder</h3>
                                            <div class="block-options">
                                                <button type="button" class="btn-block-option">
                                                    <i class="si si-wrench"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="block-content">
                                            <div class="form-group row form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                <div class="col-12" >
                                                    <label for="reminder-credential">Email</label>
                                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                                                    @if ($errors->has('email'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group text-center">
                                                <button type="submit" class="btn btn-alt-primary">
                                                    <i class="fa fa-asterisk mr-10"></i> Password Reminder
                                                </button>
                                            </div>
                                        </div>
                                        <div class="block-content bg-body-light">
                                            <div class="form-group text-center">
                                                <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="{{url('/admin/login')}}">
                                                    <i class="fa fa-user text-muted mr-5"></i> Sign In
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- END Reminder Form -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->
        <!-- Codebase Core JS -->
        <script src="{{ asset("/assets/js/core/jquery.min.js") }}"></script>
        <script src="{{ asset("/assets/js/core/popper.min.js") }}"></script>
        <script src="{{ asset("/assets/js/core/bootstrap.min.js") }}"></script>
        <script src="{{ asset("/assets/js/core/jquery.slimscroll.min.js") }}"></script>
        <script src="{{ asset("/assets/js/core/jquery.scrollLock.min.js") }}"></script>
        <script src="{{ asset("/assets/js/core/jquery.appear.min.js") }}"></script>
        <script src="{{ asset("/assets/js/core/jquery.countTo.min.js") }}"></script>
        <script src="{{ asset("/assets/js/core/js.cookie.min.js") }}"></script>
        <script src="{{ asset("/assets/js/codebase.js") }}"></script>


        <!-- Page JS Plugins -->
        <script src="{{ asset("/assets/js/plugins/jquery-validation/jquery.validate.min.js") }}"></script>

        <!-- Page JS Code -->
        <script src="{{ asset("/assets/js/pages/op_auth_reminder.js") }}"></script>
    </body>
</html>