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
   @include('front.header')
    <!-- loader end -->


    <!-- header start -->
    
    <!-- header end -->


    <!-- Home slider -->
    <section class="p-0">
        <div class="slide-1 home-slider">
        @foreach($sliders as $slider)

            <div>
                <div class="home text-left">
                    <img src="{{ URL::to('/') }}/images/{{ $slider->image ?? ''}}"  alt="" class="bg-img blur-up lazyload">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="slider-contain">
                                    <div>
                                        <h4>{{$slider->soutitre ?? ''}}</h4>
                                        <h1>{{$slider->titre ?? ''}}</h1><a href="/NosCategories" class="btn btn-solid">Voir Plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

    
        </div>
    </section>
    <!-- Home slider end -->


    <!-- collection banner -->
    <section class="banner-furniture ratio_45">
        <div class="container-fluid">
            <div class="row partition3">
            @foreach($categories as $categorie)

                <div class="col-md-4">

                    <a href="#">
                        <div class="collection-banner p-right text-right">
                            <div class="img-part">
                                <img src="{{ URL::to('/') }}/images/{{ $categorie->image1 ?? ''}}" alt="" class="img-fluid blur-up lazyload bg-img">
                            </div>
                            <div class="contain-banner banner-3">
                                <div>
                                    <h4>{{$categorie->nom ?? ''}}</h4>
                                    <h2>{{$categorie->nom ?? ''}}</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                  

                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- collection banner end -->


    <!-- Tab product -->
    <div name="new" class="title1 section-t-space">
        <h4>produit exclusive</h4>
        <h2 class="title-inner1">Nouveaux Produits</h2>
    </div>

<section class="section-b-space p-t-0 ratio_asos">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="theme-tab">
             
                        <div class="tab-content-cls">
                            <div id="{{$categorie->nom}}" class="tab-content active default">
                                <div class="no-slider row">
                                @foreach($produits as $produit)

                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <div class="front">
                                                <a href="/produits/{{$produit->id}}"><img src="{{ URL::to('/') }}/images/{{ $produit->image1 ?? ''}}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i
                                                        class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i
                                                        class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload"
                                                        aria-hidden="true"></i></a></div>
                                        </div>
                                        <div class="product-detail">
                                            <a href="/produits">
                                            <hr>
                                                <h4>{{$produit->nom ?? ''}}</h4>
                                            </a>
                                            <h3>{{$produit->prix ?? ''}}</h3>
                                     
                                        </div>
                                    </div>
                                    @endforeach

                                                                                                                                                                     
                                </div>
                            </div>
 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    
    <!-- Tab product end -->


    <!-- Parallax banner -->
    <section class="p-0">
        <div class="full-banner parallax text-center p-left">
            <img src="{{asset('images/parallax/me.jpg')}}" alt="" class="bg-img blur-up lazyload">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="banner-contain">
                            <h2>Depuis 2006</h2>
                            <h3>Meilleur endroit</h3>
                            <h4>Offre Spécial</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Parallax banner end -->


    <!-- blog section -->
    <section class="instagram ratio_square">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 p-0">
                    <h2 class="title-borderless"># instagram</h2>

<!-- SnapWidget -->
<!-- SnapWidget -->
<!-- SnapWidget -->
<!-- SnapWidget -->
<iframe src="https://snapwidget.com/embed/919080" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden;  width:1560px; height:260px"></iframe><!-- SnapWidget -->
<!-- SnapWidget -->
                       
                       
                       
                        
                </div>
            </div>
        </div>
    </section>    <!-- blog section end-->


    <!-- footer -->
    @include('front.footer')
    <!-- footer end -->


    <!--modal popup start-->

    <!--modal popup end-->


    <!-- Quick-view modal popup start-->
 
    <!-- Quick-view modal popup end-->



    <!-- theme setting -->
    <a href="javascript:void(0)" onclick="openSetting()">
 
    </a>
       <!-- theme setting -->


    <!-- Add to cart modal popup start-->
 
    <!-- Add to cart modal popup end-->


    <!-- tap to top start -->
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