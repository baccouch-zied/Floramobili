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
                                                <a href="/produits/{{$produit->id}}"><img src="{{ URL::to('/') }}/images/{{ $produit->image1 }}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
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
                                                <h4>{{$produit->nom}}</h4>
                                            </a>
                                            <h3>{{$produit->prix}}</h3>
                                     
                                        </div>
                                    </div>
                                    @endforeach

                                                                                                                                                                     
                                </div>
                            </div>


                            <div id="tab-5" class="tab-content">
                                <div class="no-slider row">
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <div class="front">
                                                <a href="/produits"><img src="{{asset('images/furniture/product/1.jpg')}}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i
                                                        class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i
                                                        class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload"
                                                        aria-hidden="true"></i></a></div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                            <a href="/produits">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00 <del>$600.00</del></h4>
                                            <ul class="color-variant">
                                                <li class="bg-light0"></li>
                                                <li class="bg-light1"></li>
                                                <li class="bg-light2"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on sale</span></div>
                                            <div class="front">
                                                <a href="/produits"><img src="{{asset('images/furniture/product/2.jpg')}}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i
                                                        class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i
                                                        class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload"
                                                        aria-hidden="true"></i></a></div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                            <a href="/produits">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00</h4>
                                            <ul class="color-variant">
                                                <li class="bg-light0"></li>
                                                <li class="bg-light1"></li>
                                                <li class="bg-light2"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <div class="front">
                                                <a href="/produits"><img src="{{asset('images/furniture/product/3.jpg')}}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i
                                                        class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i
                                                        class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload"
                                                        aria-hidden="true"></i></a></div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                            <a href="/produits">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00</h4>
                                            <ul class="color-variant">
                                                <li class="bg-light0"></li>
                                                <li class="bg-light1"></li>
                                                <li class="bg-light2"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on sale</span></div>
                                            <div class="front">
                                                <a href="/produits"><img src="{{asset('images/furniture/product/4.jpg')}}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i
                                                        class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i
                                                        class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload"
                                                        aria-hidden="true"></i></a></div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                            <a href="/produits">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00</h4>
                                            <ul class="color-variant">
                                                <li class="bg-light0"></li>
                                                <li class="bg-light1"></li>
                                                <li class="bg-light2"></li>
                                            </ul>
                                        </div>
                                    </div>                                                                                              
                                  
                                </div>
                            </div>


                            <div id="tab-6" class="tab-content">
                                <div class="no-slider row">
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <div class="front">
                                                <a href="/produits"><img src="{{asset('images/furniture/product/1.jpg')}}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i
                                                        class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i
                                                        class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload"
                                                        aria-hidden="true"></i></a></div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                            <a href="/produits">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00 <del>$600.00</del></h4>
                                            <ul class="color-variant">
                                                <li class="bg-light0"></li>
                                                <li class="bg-light1"></li>
                                                <li class="bg-light2"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on sale</span></div>
                                            <div class="front">
                                                <a href="/produits"><img src="{{asset('images/furniture/product/2.jpg')}}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i
                                                        class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i
                                                        class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload"
                                                        aria-hidden="true"></i></a></div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                            <a href="/produits">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00</h4>
                                            <ul class="color-variant">
                                                <li class="bg-light0"></li>
                                                <li class="bg-light1"></li>
                                                <li class="bg-light2"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <div class="front">
                                                <a href="/produits"><img src="{{asset('images/furniture/product/3.jpg')}}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i
                                                        class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i
                                                        class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload"
                                                        aria-hidden="true"></i></a></div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                            <a href="/produits">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00</h4>
                                            <ul class="color-variant">
                                                <li class="bg-light0"></li>
                                                <li class="bg-light1"></li>
                                                <li class="bg-light2"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on sale</span></div>
                                            <div class="front">
                                                <a href="/produits"><img src="{{asset('images/furniture/product/4.jpg')}}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i
                                                        class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i
                                                        class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload"
                                                        aria-hidden="true"></i></a></div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                            <a href="/produits">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00</h4>
                                            <ul class="color-variant">
                                                <li class="bg-light0"></li>
                                                <li class="bg-light1"></li>
                                                <li class="bg-light2"></li>
                                            </ul>
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