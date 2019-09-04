<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>TravelExpress - Tour, Travel & Travel Agency Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        <!-- Place favicon.ico in the root directory -->
        <!-- CSS here -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/nice-select.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/meanmenu.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/icofont.css">
        <link rel="stylesheet" href="css/jquery-ui.css">
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <style>
        ::placeholder {
            color: white;
            opacity: 1; /* Firefox */
        }

    </style>
<body>
    <div id="app">
        <header class="header-area home-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 d-flex align-items-center">
                        <div class="logo">
                            <a href="index-2"><img src="{{asset('img/logo/logo.png')}}" alt="logo"></a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </header>
        
        <section class="slider-area ">
            
            <div class="slider-wrapper">
                <div class="slider-large-active">
                    <div class="single-slider home-2" style="background: url(img/bg/bg-2.jpg);" data-overlay="6">
                        
                    </div>
                    <div class="single-slider home-2" style="background: url(img/bg/slider.jpg);" data-overlay="6">
                        
                    </div>
                    <div class="single-slider home-2" style="background: url(img/bg/bg-2.jpg);" data-overlay="6">
                        
                    </div>
                    <div class="single-slider home-2" style="background: url(img/bg/slider.jpg);" data-overlay="6">
                        
                    </div>
                    <div class="single-slider home-2" style="background: url(img/bg/bg-2.jpg);" data-overlay="6">
                        
                    </div>
                    <div class="single-slider home-2" style="background: url(img/bg/slider.jpg);" data-overlay="6">
                        
                    </div>
                    <div class="single-slider home-2" style="background: url(img/bg/bg-2.jpg);" data-overlay="6">
                        
                    </div>
                    <div class="single-slider home-2" style="background: url(img/bg/slider.jpg);" data-overlay="6">
                        
                    </div>
                    <div class="single-slider home-2" style="background: url(img/bg/slider.jpg);" data-overlay="6">
                        
                    </div>
                    <div class="single-slider home-2" style="background: url(img/bg/bg-2.jpg);" data-overlay="6">
                        
                    </div>
                </div>
                <div class="row">
                    <div class="slider-search-form">
                        <div>
                            @if(Session::has('flash_message'))
        <div class="alert alert-success">
            <strong style="text-align: center"> {!! session('flash_message') !!}</strong>
        </div>
    @endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.login.submit') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
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
            </div>

            <div class="slider-nav">
                <div class="slider-thumb">
                    <div class="inner-thumb">
                        <img src="img/slider/slider-thumb1.jpg" alt="">
                        <div class="slider-btn-info">
                            <h4><a href="#">Khunjerab</a></h4>
                            <a class="video-play-link" href="https://www.youtube.com/watch?v=Rk6_hdRtJOE"><i class="icofont icofont-ui-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="slider-thumb">
                    <div class="inner-thumb">
                        <img src="img/slider/slider-thumb2.jpg" alt="">
                        <div class="slider-btn-info">
                            <h4><a href="#">Muree</a></h4>
                            <a class="video-play-link" href="https://www.youtube.com/watch?v=6lt2JfJdGSY"><i class="icofont icofont-ui-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="slider-thumb">
                    <div class="inner-thumb">
                        <img src="img/slider/slider-thumb3.jpg" alt="">
                        <div class="slider-btn-info">
                            <h4><a href="#">Naran-kaghan</a></h4>
                            <a class="video-play-link" href="https://www.youtube.com/watch?v=6lt2JfJdGSY"><i class="icofont icofont-ui-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="slider-thumb">
                    <div class="inner-thumb">
                        <img src="img/slider/slider-thumb4.jpg" alt="">
                        <div class="slider-btn-info">
                            <h4><a href="#">Skardu</a></h4>
                            <a class="video-play-link" href="https://www.youtube.com/watch?v=6lt2JfJdGSY"><i class="icofont icofont-ui-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="slider-thumb">
                    <div class="inner-thumb">
                        <img src="img/slider/slider-thumb1.jpg" alt="">
                        <div class="slider-btn-info">
                            <h4><a href="#">Swat</a></h4>
                            <a class="video-play-link" href="https://www.youtube.com/watch?v=6lt2JfJdGSY"><i class="icofont icofont-ui-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="slider-thumb">
                    <div class="inner-thumb">
                        <img src="img/slider/slider-thumb2.jpg" alt="">
                        <div class="slider-btn-info">
                            <h4><a href="#">Hunza</a></h4>
                            <a class="video-play-link" href="https://www.youtube.com/watch?v=6lt2JfJdGSY"><i class="icofont icofont-ui-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="slider-thumb">
                    <div class="inner-thumb">
                        <img src="img/slider/slider-thumb3.jpg" alt="">
                        <div class="slider-btn-info">
                            <h4><a href="#">Neelum</a></h4>
                            <a class="video-play-link" href="https://www.youtube.com/watch?v=6lt2JfJdGSY"><i class="icofont icofont-ui-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="slider-thumb">
                    <div class="inner-thumb">
                        <img src="img/slider/slider-thumb4.jpg" alt="">
                        <div class="slider-btn-info">
                            <h4><a href="#">Chitral</a></h4>
                            <a class="video-play-link" href="https://www.youtube.com/watch?v=6lt2JfJdGSY"><i class="icofont icofont-ui-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="slider-thumb">
                    <div class="inner-thumb">
                        <img src="img/slider/slider-thumb1.jpg" alt="">
                        <div class="slider-btn-info">
                            <h4><a href="#">Gilgit</a></h4>
                            <a class="video-play-link" href="https://www.youtube.com/watch?v=6lt2JfJdGSY"><i class="icofont icofont-ui-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="slider-thumb">
                    <div class="inner-thumb">
                        <img src="img/slider/slider-thumb2.jpg" alt="">
                        <div class="slider-btn-info">
                            <h4><a href="#">Azad Kashmir</a></h4>
                            <a class="video-play-link" href="https://www.youtube.com/watch?v=6lt2JfJdGSY"><i class="icofont icofont-ui-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--<main class="py-4">
            @yield('content')
        </main>-->
    </div>

    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/jquery.nice-select.min.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/jquery.meanmenu.min.js"></script>
        <script src="js/ajax-form.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/waypoint.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

</body>
</html>
