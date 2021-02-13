
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>L.R.Tiqui Builders Inc.</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        .sidelogin{
		height: 100%;
		width: 0;
		position: fixed;
		z-index: 1;
		top: 0;
		right: 0;
		overflow-x: hidden;
		transition: 0.5s;
        padding-top: 200px;
        flex: 1 1 auto;
        min-height: 1px;
    }
    .auth-fluid{
        position:relative;
        display:-webkit-box;
        display:-ms-flexbox;
        display:flex;
        -webkit-box-align:center;
        -ms-flex-align:center;
        align-items:center;
        min-height:94.5vh;
        -webkit-box-orient:horizontal;
        -webkit-box-direction:normal;
        -ms-flex-direction:row;
        flex-direction:row;
        -webkit-box-align:stretch;
        -ms-flex-align:stretch;
        align-items:stretch;
        background:url(/assets/img/login-images/li-6.jpg) center;
        background-size:cover
    }
    .auth-fluid-form-box{
        max-width:480px;
        border-radius:0;
        z-index:2;
        padding:3rem 2rem;
        background-color:#fff;
        position:relative;
        width:100%
    }
    .auth-fluid-right{
        /* padding:6rem 3rem; */
        -webkit-box-flex:1;
        -ms-flex:1;
        flex:1;
        position:relative;
        color:#fff;
        background-color:rgba(0,0,0,.3)
    }
    .footer-alt{
        left:0;
        border:none;
        text-align:center
    }
    
    </style>
</head>
    <body>
        <div id="app">
            <nav class="navbar navbar-light bg-white">
                <div class="container">
                    <a class="navbar-brand">L.R.Tiqui Builders Inc.</a>
                </div>
            </nav>
        </div>

        <div class="auth-fluid">
            <!--Auth fluid left content -->
            <div class="auth-fluid-right text-center">
                 <!-- end auth-user-testimonial-->
            </div>

            <div class="auth-fluid-form-box">
                <div class="align-items-center d-flex">
                    <div class="card-body">
                        <!-- title-->
                        <h4 class="mt-0">Sign In</h4>
                        <p class="text-muted mb-4">Enter your email address and password to access account.</p>

                        <!-- form -->
                        <form method="POST" action="{{ route('login') }}">
                        @csrf
                            <div class="form-group">
                                <label for="emailaddress">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                
                                <label for="password">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter your password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            {{-- <div class="form-group mb-3">
                                <div class="custom-control custom-checkbox">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="checkbox-signin">{{ __('Remember Me') }}</label>
                                </div>
                            </div> --}}

                            <div class="form-group mb-0 text-center">
                                <button class="btn btn-primary btn-block" type="submit"><i class="mdi mdi-login"></i> {{ __('Login') }} </button>
                                @if (Route::has('password.request'))
                                <a class="btn btn-link btn-block" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                            <!-- social-->
                            

                        </form>
                        <!-- end form-->

                        <!-- Footer-->
                        <footer class="footer footer-alt">
                            <p class="text-muted">Don't have an account? <a href="register" class="text-muted ml-1"><b>Sign Up</b></a></p>
                        </footer>

                    </div> <!-- end .card-body -->
                </div>
                 <!-- end .align-items-center.d-flex.h-100-->
            </div>
            <!-- end auth-fluid-form-box-->

            <!-- Auth fluid right content -->
            
            <!-- end Auth fluid right content -->
        </div>
        <!-- end auth-fluid-->
               
    </body>
    <!-- <script>
		function openNav(){
			document.getElementById("mySidelogin").style.width="460px";
			document.getElementById("carouselExampleInterval").style.marginRight="460px";
		}
		function closeNav(){
			document.getElementById("mySidelogin").style.width="0";
			document.getElementById("carouselExampleInterval").style.marginRight="-50px";
		}
	</script> -->
</html>



