<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="base-url" content="{{ url('adminsignin') }}">
    <meta name="token" content="{{ csrf_token() }}">
    <meta name="b-url" content="{{ url('resend-otp') }}">
    <!-- Page Title  -->
    <title>Login</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('/assets/assets/css/dashlite.css?ver=3.1.2') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('/assets/assets/css/theme.css?ver=3.1.2') }}">
</head>

<body class="nk-body bg-white npc-general pg-auth">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="nk-block nk-block-middle nk-auth-body wide-xs">
                        <div class="brand-logo pb-4 text-center">
                            <a href="#" class="logo-link">
                                <h4>NiceRx</h4>
                            </a>
                        </div>
                        <div class="card card-bordered">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head" id="sign">
                                    <div class="nk-block-head-content">
                                        <h4 class="nk-block-title text-center">Sign-In</h4>
                                    </div>
                                </div><!-- .nk-block-head -->
                                <div id="login-form">    
                                    <form id="myform" class="form-validate is-alter" autocomplete="off" method="post">
                                        <div class="form-group">
                                            <div class="form-label-group">
                                                <label class="form-label" for="email">Email</label>
                                            </div>
                                            <div class="form-control-wrap">
                                                <input autocomplete="off" type="text" class="form-control form-control-lg" required id="email" name="email">
                                            </div>
                                        </div><!-- .form-group -->
                                        <div class="form-group">
                                            <div class="form-label-group">
                                                <label class="form-label" for="password">Password</label>
                                            </div>
                                            <div class="form-control-wrap">
                                                <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                                    <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                    <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                                </a>
                                                <input autocomplete="new-password" type="password" class="form-control form-control-lg" required id="password" name="password">
                                            </div>
                                        </div><!-- .form-group -->
                                        <div class="form-group">
                                            <button class="btn btn-lg btn-primary btn-block">Sign in</button>
                                        </div>

                                        <div id="loading" style="display:none; width: 400px; height: 50px;font-family: Times New Roman, Times, serif; color:#595858; font-size:20px; text-align:center">Loading Please wait...</div>
                                        <div class="show_msg"></div>
                                        @if($message = Session::get('error'))
                                            <div class="error">
                                            {{ $message }}
                                            </div>
                                        @endif
                                    </form>
                                </div>
                                <div id="otp-form" style="display:none">
                                    <form action="{{ url('verifylogin') }}" class="form-validate is-alter" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <div class="form-label-group">
                                                <label class="form-label" for="otp">Verification code</label>
                                            </div>
                                            <div class="form-control-wrap">
                                                <input autocomplete="off" type="number" class="form-control form-control-lg" required id="otp" name="otp">
                                            </div>
                                        </div>
                                        <input type="hidden" id="username" name="username" value="">
                                        <input type="hidden" id="pass" name="pass" value="">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-lg btn-primary btn-block">Verify</button>
                                        </div>
                                        <div class="msg1"></div>
                                        <div id="myTimer"></div>
                                        <div class="msg" style="display:none"><p>Please check your gmail for verification code.</p></div> 
                                        <div class="rsndbtn" style="display:none">
                                            <button class="resend" type="button" onclick="resendOTP()">Resend OTP</button>
                                        </div>
                                    </form>
                                    @if($message = Session::get('success'))
                                        <div class="success">
                                        {{ $message }}
                                        </div>
                                    @elseif($message = Session::get('error'))
                                        <div class="error">
                                        {{ $message }}
                                        </div>
                                    @endif
                                </div>
                            </div><!-- .nk-block -->
                        </div>
                    </div><!-- .nk-split -->
                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="{{ asset('/assets/assets/js/bundle.js?ver=3.1.2') }}"></script>
    <script src="{{ asset('/assets/assets/js/scripts.js?ver=3.1.2') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('assets/js/login.js') }}"></script>
</body>
</html>