
@extends('backend/layout/login_master')
    <div class="loader"></div>
    <!-- header start -->
    <section class="login-content">
        <div class="login-box">
            <form class="login-form" action="{{ route('login') }}" method="post">
                @csrf
                <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
                <div class="mb-3">
                    <label class="control-label" for="username">USERNAME</label>
                    <input class="form-control"  name="email" value="{{ old('email') }}" type="text" placeholder="Email" autofocus>
                </div>
                <div class="mb-3">
                    <label class="control-label" for="password">PASSWORD</label>
                    <input class="form-control"  name="password" value="{{ old('passwaord') }}" type="password" placeholder="Password">
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



        </div>
    </section>
    <!-- Jquery javascript library -->
    {{-- <script src="assets/js/jquery.min.js"></script>
    <!-- Bootstrap bundle javascript -->
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Custom scrollbar javascript -->
    <script src='assets/vendors/scroll/scrollbar.min.js'></script>
    <!-- Custom script -->
    <script src="assets/js/functions.js"></script>
    <script src="assets/js/admin.js"></script>
    <script>
        // Login Page Flipbox control
        $('.login-content [data-toggle="flip"]').click(function () {
            $('.login-box').toggleClass('flipped');
            return false;
        });
    </script> --}}
</body>
</html>