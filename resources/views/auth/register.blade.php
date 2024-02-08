<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="">
    <!-- Page Title  -->
    <title>Registration</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('/assets/assets/css/dashlite.css?ver=3.1.2') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('/assets/assets/css/theme.css?ver=3.1.2') }}">
</head>

<body class="nk-body bg-white npc-general pg-auth">
    <div class="nk-app-root">
        <div class="nk-main ">
            <div class="nk-wrap nk-wrap-nosidebar">
                <div class="nk-content">
                    <div class="nk-block nk-block-middle nk-auth-body">
                        <div class="brand-logo pb-4 text-center">
                            <a href="#" class="logo-link">
                                <h4>NiceRx</h4>
                            </a>
                        </div>
                        <div class="card card-bordered">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h4 class="nk-block-title text-center">Register</h4>
                                    </div>
                                </div><!-- .nk-block-head -->
                                <form action="{{ url('signup') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-label" for="name">Name</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control form-control-lg" id="name" name="name" value="">
                                        </div>
                                        @error('name')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="email">Email</label>
                                        <div class="form-control-wrap">
                                            <input type="email" class="form-control form-control-lg" id="email" name="email" value="">
                                        </div>
                                        @error('email')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="password">Password</label>
                                        <div class="form-control-wrap">
                                            <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Enter your password">
                                        </div>
                                        @error('password')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-lg btn-primary btn-block">Register</button>
                                    </div> 
                                    @if ($message = Session::get('success'))
                                        <div class="alert alert-success">
                                            <p>{{ $message }}</p>
                                        </div>
                                    @elseif($message = Session::get('error'))
                                        <div class="alert alert-danger">
                                            <p>{{ $message }}</p>
                                        </div>
                                    @endif
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('/assets/assets/js/bundle.js?ver=3.1.2') }}"></script>
    <script src="{{ asset('/assets/assets/js/scripts.js?ver=3.1.2') }}"></script>
</body>
</html>