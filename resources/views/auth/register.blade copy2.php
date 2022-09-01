@extends('frondend/layout/register_master')
@section('content')
<div class="login-register-area pt-130 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 ms-auto me-auto">
                <div class="login-register-wrapper">
                    <div class="tab-pane">
                        <div class="login-form-container">
                            <div class="login-register-form">
                                <form action="{{ route('register') }}" method="POST">
                                    @csrf
                                    <input type="text" name="firstname" value="{{ old('firstname') }}"  placeholder="First Name">
                                    <input type="text" name="lastname" value="{{ old('lastname') }}"  placeholder="Last Name">
                                    <input type="text" name="phone" value="{{ old('phone') }}" placeholder="Phone">
                                    <input name="email" value="{{ old('email') }}" placeholder="Email" type="email">
                                    <input type="password" name="password" placeholder="Password">
                                    <input type="password" name="password_confirmation" placeholder=" Confirm Password">
                                    <div class="button-box">
                                        <button class="default-btn" type="submit"><span>Register</span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection