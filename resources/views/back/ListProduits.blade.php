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
    <title>Administrateur</title>

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

        <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Products Category</h5>
                            </div>
                            <div class="card-body">
                                <div class="btn-popup pull-right">
                                    <a class="btn btn-primary" href="produit/create">Ajouter Produit</a>
                                </div>
                                <table class="table table-striped">
                                 <thead>
                                    <tr>
                                     <th>id</th>
                                    <th>Nom</th>
                                    <th>Prix</th>
                                    <th>categorie_id</th>
                                    <th>Description</th>
                                    <th>url</th>
                                    <th>Images</th>
                                    <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                @foreach($produits as $produit)

                                     <td>{{$produit->id}}</td>
                                    <td>{{$produit->nom}}</td>
                                    <td>{{$produit->prix}}</td>
                                    <td>{{$produit->categorie_id}}</td>

                                    <td>{{ substr(strip_tags($produit->description), 0, 50) }}</td>
                                    <td>{{$produit->url}}</td>

                                    <td><img src="{{ URL::to('/') }}/images/{{ $produit->image }}" class="img-thumbnail" width="75" />
                                    <img src="{{ URL::to('/') }}/images/{{ $produit->image1 }}" class="img-thumbnail" width="75" />
                                    <img src="{{ URL::to('/') }}/images/{{ $produit->image2 }}" class="img-thumbnail" width="75" />
                                    <img src="{{ URL::to('/') }}/images/{{ $produit->image3 }}" class="img-thumbnail" width="75" /></td>

                             <td>
                                 <a href="{{ route('produit.edit', $produit->id) }}" id="edit-user"  class="btn btn-warning" value="Edit">Modifier</a>
                                 <a href="{{ route('produit.show', $produit->id) }}" class="btn btn-dark">
          Voir
        </a>
                                 <form method="POST" action="{{ route('produit.destroy', $produit->id) }}">   
                                         @csrf
                                  @method('DELETE')
                                      <button type="submit" class="btn btn-primary servideletebtn">
                                      Supprimer
                                    </button>
                                    </form> 
                              </td>
                          

                                 </tr>
                                 @endforeach

                                 </tbody>

                            </table>
                            {{$produits->links()}}

                        </div>

                    </div>
                </div>

            </div>

    </div>

    @include('back.footer')
</div>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script>

$(document).ready(function()){

    $('.servideletebtn').click(function (e){

        e.preventDefault();
        alert('Hello');
    });
  
});
</script>



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

