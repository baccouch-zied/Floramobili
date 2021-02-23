<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="multikart">
    <meta name="keywords" content="multikart">
    <meta name="author" content="multikart">
    <link rel="icon" href="{{asset('images/favicon/5.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('images/favicon/5.png')}}" type="image/x-icon">
    <title>Multikart - Multi-purpopse E-commerce Html Template</title>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/fontawesome.css')}}">

    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/slick-theme.css')}}">

    <!-- Animate icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/themify-icons.css')}}">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/color5.css')}}" media="screen" id="color">

</head>

<body>

    <!-- loader start -->
    
    <!-- loader end -->


    <!-- header start -->
    @include('front.header')
    <!-- header end -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>gallerie</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">gallerie</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    <section class="portfolio-section portfolio-padding ratio2_3">
        <div class="container">
            <div align="center" id="form1">
                <button class="filter-button project_button active" data-filter="all">tous</button>
                <button class="filter-button project_button" data-filter="produits">produits</button>
                <button class="filter-button project_button" data-filter="equipe">Equipe</button>
                <button class="filter-button project_button" data-filter="local">Local</button>
                <button class="filter-button project_button" data-filter="autre">Autre</button>

            </div>
            <div class="row  zoom-gallery">
            @foreach($galeries as $galerie)
                <div class="isotopeSelector filter {{$galerie->type}} col-lg-4 col-sm-6">
                    <div class="overlay">
                        <div class="border-portfolio">
                            <a href="{{ URL::to('/') }}/images/{{ $galerie->image }}">
                                <div class="overlay-background">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </div>
                                <img src="{{ URL::to('/') }}/images/{{ $galerie->image }}"
                                    class="img-fluid blur-up lazyload bg-img">
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach

              
            </div>
        </div>
    </section>

    @include('front.footer')

<div class="tap-top">
    <div><i class="fa fa-angle-double-up"></i></div>
</div>
<!-- tap to top end -->


<!-- latest jquery-->
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>


<!-- popper js-->
<script src="{{asset('js/popper.min.js')}}"></script>

<!-- slick js-->
<script src="{{asset('js/slick.js')}}"></script>

<!-- menu js-->
<script src="{{asset('js/menu.js')}}"></script>

<!-- lazyload js-->
<script src="{{asset('js/lazysizes.min.js')}}"></script>

<!-- Bootstrap js-->
<script src="{{asset('js/bootstrap.js')}}"></script>

<!-- Bootstrap Notification js-->
<script src="{{asset('js/bootstrap-notify.min.js')}}"></script>

<!-- Theme js-->
<script src="{{asset('js/script.js')}}"></script>

<script>
    $(window).on('load', function() {
        setTimeout(function() {
            $('#exampleModal').modal('show');
        }, 2500);
    });

    function openSearch() {
        document.getElementById("search-overlay").style.display = "block";
    }

    function closeSearch() {
        document.getElementById("search-overlay").style.display = "none";
    }
</script>
</body>

</html>