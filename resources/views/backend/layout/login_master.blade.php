<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META ============================================= -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="adminpopular" />
    <!-- DESCRIPTION -->
    <meta name="description" content="AdminPopular : Bootstrap 4 Responsive Admnin Template" />
    <!-- FAVICONS ICON ============================================= -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backend') }}/assets/images/favicon.png" />
    <!-- PAGE TITLE HERE ============================================= -->
    <title>Adminpopular : Bootstrap 5 Responsive Admin Template</title>
    <!-- MOBILE SPECIFIC ============================================= -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/assets/css/assets.css">
    <!-- MAIN STYLE ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/assets/css/dashboard.css">
</head>

<body>
    <div class="loader"></div>
    <!-- header start -->
    <section class="login-content">
        <div class="login-box">
            <form class="login-form" action="https://www.codepopular.com/adminpopular/index.html">
                <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
                <div class="mb-3">
                    <label class="control-label" for="username">USERNAME</label>
                    <input class="form-control" id="username" type="text" placeholder="Email" autofocus>
                </div>
                <div class="mb-3">
                    <label class="control-label" for="password">PASSWORD</label>
                    <input class="form-control" id="password" type="password" placeholder="Password">
                </div>
                <div class="mb-3">
                    <div class="utility">
                        <div class="animated-checkbox">
                            <label>
                                <input type="checkbox"><span class="label-text">Stay Signed in</span>
                            </label>
                        </div>
                        <p class="semibold-text mb-2"><a href="#" data-toggle="flip">Forgot Password ?</a></p>
                    </div>
                </div>
                <div class="form-group btn-container">
                    <button class="btn btn-primary btn-block w-100"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN
                        IN</button>
                </div>
            </form>
            <form class="forget-form" action="https://www.codepopular.com/adminpopular/index.html">
                <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Forgot Password ?</h3>
                <div class="mb-3">
                    <label class="control-label" for="for-e">EMAIL</label>
                    <input class="form-control" id="for-e" type="text" placeholder="Email">
                </div>
                <div class="form-group btn-container">
                    <button class="btn btn-primary btn-block w-100"><i
                            class="fa fa-unlock fa-lg fa-fw"></i>RESET</button>
                </div>
                <div class="form-group mt-3">
                    <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i>
                            Back to Login</a></p>
                </div>
            </form>
        </div>
    </section>
    <!-- Jquery javascript library -->
    <script src="{{ asset('backend') }}/assets/js/jquery.min.js"></script>
    <!-- Bootstrap bundle javascript -->
    <script src="{{ asset('backend') }}/assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Custom scrollbar javascript -->
    <script src='{{ asset('backend') }}/assets/vendors/scroll/scrollbar.min.js'></script>
    <!-- Custom script -->
    <script src="{{ asset('backend') }}/assets/js/functions.js"></script>
    <script src="{{ asset('backend') }}/assets/js/admin.js"></script>
    <script>
        // Login Page Flipbox control
        $('.login-content [data-toggle="flip"]').click(function () {
            $('.login-box').toggleClass('flipped');
            return false;
        });
    </script>
</body>
</html>