<!DOCTYPE html>
<html lang="en">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Multikart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Multikart admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{asset('images/favicon/icon1.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('images/favicon/icon1.png')}}" type="image/x-icon">
    <title>Login</title>

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/fontawesome.css')}}">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/themify.css')}}">

    <!-- slick icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/slick-theme.css')}}">

    <!-- jsgrid css-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/jsgrid.css')}}">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin.css')}}">

</head>
<body>

<style>
.bg-primary{
    background-color: #000000;
    color: #ffffff;
}
</style>
<!-- page-wrapper Start-->
<div class="page-wrapper">
    <div class="authentication-box">
        <div class="container">
            <div class="row">
                <div class="col-md-5 p-0 card-left">
                    <div class="card bg-primary">
                        <div class="svg-icon">
                        <a href="#"> <img src="{{asset('images/icon/test.png')}}"
                                        class="img-fluid blur-up lazyload" alt=""></a>
                        </div>
                       

                        <div class="single-item">
                            <div>
                                <div>
                                    <h3>Bienvunue Administrateur</h3>
                                </div>
                            </div>
                     
                        </div>
                    </div>
                </div>
                <div class="col-md-7 p-0 card-right">
                    <div class="card tab2-card">
                        <div class="card-body">
                            <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                            <li class="nav-item">
                                    <a class="nav-link active" id="top-profile-tab" data-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="true"><span class="icon-user mr-2"></span>Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/register"><span class="icon-unlock mr-2"></span>Register</a>
                             </li>

                            </ul>
                            <div class="tab-content" id="top-tabContent">
                                <div class="tab-pane fade show active" id="top-profile" role="tabpanel" aria-labelledby="top-profile-tab">
                                    <form class="form-horizontal auth-form" method="POST" action="{{ route('login') }}">
                                    @csrf
                                        <div class="form-group">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror

                                        </div>
                                        <div class="form-group">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">
                                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                      @enderror
                                        </div>
                                        <div class="form-terms">
                                            <div class="custom-control custom-checkbox mr-sm-2">
                                                <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} >
                                                <label class="custom-control-label" for="customControlAutosizing">Remember me</label>
                                                @if (Route::has('password.request'))
                                    <a class="btn btn-default forgot-pass" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                      @endif
                                            </div>
                                        </div>
                                        <div class="form-button">
                                            <button class="btn btn-primary" type="submit">{{ __('Login') }}</button>
                                        </div>
                                        <div class="form-footer">
                                            <span>Or Login up with social platforms</span>
                                            <ul class="social">
                                                <li><a class="icon-facebook" href=""></a></li>
                                                <li><a class="icon-twitter" href=""></a></li>
                                                <li><a class="icon-instagram" href=""></a></li>
                                                <li><a class="icon-pinterest" href=""></a></li>
                                            </ul>
                                        </div>
                                    </form>
                                </div>
                            

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="/" class="btn btn-primary back-btn"><i data-feather="arrow-left"></i>back</a>
        </div>
    </div>
</div>

<!-- latest jquery-->
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>

<!-- Bootstrap js-->
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="../assets/js/bootstrap.js')}}"></script>

<!-- feather icon js-->
<script src="{{asset('js/icons/feather-icon/feather.min.js')}}"></script>
<script src="{{asset('js/icons/feather-icon/feather-icon.js')}}"></script>

<!-- Sidebar jquery-->
<script src="{{asset('js/sidebar-menu.js')}}"></script>
<script src="{{asset('js/slick.js')}}"></script>

<!-- Jsgrid js-->
<script src="{{asset('js/jsgrid/jsgrid.min.js')}}"></script>
<script src="{{asset('js/jsgrid/griddata-invoice.js')}}"></script>
<script src="{{asset('js/jsgrid/jsgrid-invoice.js')}}"></script>

<!-- lazyload js-->
<script src="{{asset('js/lazysizes.min.js')}}"></script>

<!--right sidebar js-->
<script src="{{asset('js/chat-menu.js')}}"></script>

<!--script admin-->
<script src="{{asset('js/admin-script.js')}}"></script>
<script>
    $('.single-item').slick({
            arrows: false,
            dots: true
        }
    );
</script>

</body>
</html>
