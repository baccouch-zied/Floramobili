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
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/fontawesome.css')}}">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/flag-icon.css')}}">

    <!-- jsgrid css-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/jsgrid.css')}}">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin.css')}}">

</head>

<body>

<!-- page-wrapper Start-->
<div class="page-wrapper">

    <!-- Page Header Start-->
    @include('back.header')
    <!-- Page Header Ends -->

    <!-- Page Body Start-->
    <div class="page-body-wrapper">

        <!-- Page Sidebar Start-->
        @include('back.sidbar')
    </div>
    <div class="page-body">

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Details Categorie
                        <small>Administrateur</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Gestion Categorie</li>
                    <li class="breadcrumb-item active">Details Categorie</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="card">
        <div class="row product-page-main card-body">
            <div class="col-xl-4">
 <table>
 <tr>
 <td><img src="{{ URL::to('/') }}/images/{{ $categorie->image }}" class="img-thumbnail" width="200" />
 <img src="{{ URL::to('/') }}/images/{{ $categorie->image1 }}" class="img-thumbnail" width="200" />
                             </td>
                             
 </tr>
 
 </table>
            </div>
            <div class="col-xl-8">
                <div class="product-page-details product-right mb-0">
                    <h2>{{$categorie->nom}}</h2>
                    <hr>
                    <h6 class="product-title">Categorie details</h6>
                    <p>{{$categorie->description}}</p>
                    <div class="product-price digits mt-2">
                        <h3></h3>
                    </div>
         
                    <hr>
           
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

</div>













    @include('back.footer')
</div>





<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>

<!-- Bootstrap js-->
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>

<!-- feather icon js-->
<script src="{{asset('js/icons/feather-icon/feather.min.js')}}"></script>
<script src="{{asset('js/icons/feather-icon/feather-icon.js')}}"></script>

<!-- Sidebar jquery-->
<script src="{{asset('js/sidebar-menu.js')}}"></script>

<!--Customizer admin-->
<script src="{{asset('js/admin-customizer.js')}}"></script>

<!-- Jsgrid js-->
<script src="{{asset('js/jsgrid/jsgrid.min.js')}}"></script>
<script src="{{asset('js/jsgrid/griddata-manage-product.js')}}"></script>
<script src="{{asset('js/jsgrid/jsgrid-manage-product.js')}}"></script>

<!--right sidebar js-->
<script src="{{asset('js/chat-menu.js')}}"></script>

<!--script admin-->
<script src="{{asset('js/admin-script.js')}}"></script>

