<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="multikart">
    <meta name="keywords" content="multikart">
    <meta name="author" content="multikart">
    <link rel="icon" href="{{asset('images/favicon/icon1.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('images/favicon/icon1.png')}}" type="image/x-icon">
    <title>FLORA MOBLIE</title>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/fontawesome.css')}}">

    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/slick-theme.css')}}">

    <!-- Animate icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('css/themify-icons.css')}}">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('css/color5.css')}}" media="screen" id="color">

</head>

<body class="dark">

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
                        <h2>produit</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">accueil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">produit</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!-- section start -->
    <section>
        <div class="collection-wrapper">
            <div class="container">
                <div class="row">
@foreach($produit as $produit)
                              <div class="col-lg-6">
                                    <div class="product-slick">
                                        <div><img src="{{ URL::to('/') }}/images/{{ $produit->image }}" alt=""
                                                class="img-fluid blur-up lazyload image_zoom_cls-0"></div>
                                        <div><img src="{{ URL::to('/') }}/images/{{ $produit->image1 }}" alt=""
                                                class="img-fluid blur-up lazyload image_zoom_cls-1"></div>
                                        <div><img src="{{ URL::to('/') }}/images/{{ $produit->image2 }}" alt=""
                                                class="img-fluid blur-up lazyload image_zoom_cls-2"></div>
                                        <div><img src="{{ URL::to('/') }}/images/{{ $produit->image3 }}" alt=""
                                                class="img-fluid blur-up lazyload image_zoom_cls-3"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 p-0">
                                            <div class="slider-nav">
                                                <div><img src="{{ URL::to('/') }}/images/{{ $produit->image }}" alt=""
                                                        class="img-fluid blur-up lazyload"></div>
                                                <div><img src="{{ URL::to('/') }}/images/{{ $produit->image1 }}" alt=""
                                                        class="img-fluid blur-up lazyload"></div>
                                                <div><img src="{{ URL::to('/') }}/images/{{ $produit->image2 }}" alt=""
                                                        class="img-fluid blur-up lazyload"></div>
                                                <div><img src="{{ URL::to('/') }}/images/{{ $produit->image3 }}" alt=""
                                                        class="img-fluid blur-up lazyload"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                    <div class="col-lg-6 rtl-text">
                        <div class="product-right">
                            <h2>{{$produit->nom}}</h2>
                            <h3>{{$produit->prix}}</h3>
                       
                         
                            <div class="product-buttons"><a href="/contact" 
                                    class="btn btn-solid">Contacter nous</a> <a href="#" class="btn btn-solid">appeler nous</a>
                            </div>
                            <div class="border-product">
                                <h6 class="product-title">product details</h6>
                                <p>{{$produit->description}}</p>
                            </div>
                            <div class="border-product">
                                <div class="product-icon">
                                    <ul class="product-social">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                   
                                </div>
                            </div>
                     
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    

    <section class="tab-product m-0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                        <li class="nav-item"><a class="nav-link active" id="top-home-tab" data-toggle="tab"
                                href="#top-home" role="tab" aria-selected="true">Description</a>
                            <div class="material-border"></div>
                        </li>
                  
                        <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-toggle="tab"
                                href="#top-contact" role="tab" aria-selected="false">Video</a>
                            <div class="material-border"></div>
                        </li>
                       
                    </ul>
                    <div class="tab-content nav-material" id="top-tabContent">
                        <div class="tab-pane fade show active" id="top-home" role="tabpanel"
                            aria-labelledby="top-home-tab">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has
                                survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged. It was popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum
                                is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                                industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and scrambled it to make a type specimen book. It has survived not only
                                five centuries, but also the leap into electronic typesetting, remaining essentially
                                unchanged. It was popularised in the 1960s with the release of Letraset sheets
                                containing Lorem Ipsum passages, and more recently with desktop publishing software like
                                Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>
             
                        <div class="tab-pane fade" id="top-contact" role="tabpanel" aria-labelledby="contact-top-tab">
                            <div class="mt-4 text-center">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/BUWzX78Ye_8"
                                    allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            </div>
                        </div>
           
                    </div>
                </div>
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