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

    <section class="section-b-space ratio_asos">
        <div class="collection-wrapper">
            <div class="container">
                <div class="row">
                    <div class="collection-content col">
                        <div class="page-main-content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="top-banner-wrapper">
                                        <a href="#"><img src="{{ URL::to('/') }}/images/{{ $categorie->image1 ?? ''}}" class="img-fluid blur-up lazyload" alt="" style="padding-left:300px ;"></a>
                                        <div class="top-banner-content small-section">
                                            <h4>{{$categorie->nom ?? ''}}</h4>
                                            <h5>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            </h5>
                                            <p>{{$categorie->description ?? ''}}</p>
                                        </div>
                                    </div>
                                    <div class="collection-product-wrapper">
                                        
                                        <div class="product-wrapper-grid">
                                            <div class="row margin-res">
                                            
                                            @foreach($produits as $produit)

                                                <div class="col-xl-3 col-6 col-grid-box">
                                                    <div class="product-box">
                                                        <div class="img-wrapper">
                                                            <div class="front">
                                                                <a href="/produits/{{$produit->id}}"><img src="{{ URL::to('/') }}/images/{{ $produit->image1 ?? ''}}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                            </div>
                                                            <div class="back">
                                                                <a href="/produits/{{$produit->id}}"><img src="{{ URL::to('/') }}/images/{{ $produit->image2 ?? ''}}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                            </div>
                                                            <div class="cart-info cart-wrap">
                                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i
                                                                        class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i
                                                                        class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i
                                                                        class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i
                                                                        class="ti-reload" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="product-detail">
                                                            <div>
                                                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                                                <a href="product-page(no-sidebar).html">
                                                                    <h6>{{$produit->nom ?? ''}}</h6>
                                                                </a>
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                                                                    of type and scrambled it to make a type specimen book</p>
                                                                <h4>$500.00</h4>
                                                            
                                                            </div>
                                                        </div>
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