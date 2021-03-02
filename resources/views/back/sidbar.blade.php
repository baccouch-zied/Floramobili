<div class="page-sidebar">
            <div class="main-header-left d-none d-lg-block">
                <div class="logo-wrapper"><a href="index.html"><img class="blur-up lazyloaded" src="{{asset('images/icon/test.png')}}" alt=""></a></div>
            </div>
            <div class="sidebar custom-scrollbar">
                <div class="sidebar-user text-center">
                    <div><img class="img-60 rounded-circle lazyloaded blur-up" src="{{asset('images/dashboard/man.png')}}" alt="#">
                    </div>
                    <h6 class="mt-3 f-14">Bouzomita Amine</h6>
                    <p>Gérant</p>
                </div>
                <ul class="sidebar-menu">
                    <li><a class="sidebar-header" href="/dash"><i data-feather="home"></i><span>Dashboard</span></a></li>
                    <li><a class="sidebar-header" href="/categorie"><i data-feather="box"></i> <span>Gestion Categorie</span></a>
                     
                    </li>
                    <li><a class="sidebar-header" href="/produit"><i data-feather="box"></i><span>Gestion Produits</span></a>                      
                    </li>
                    <li><a class="sidebar-header" href="/slider"><i data-feather="box"></i><span>Gestion Slider</span></a>
                    <li><a class="sidebar-header" href="/galerie"><i data-feather="box"></i><span>Gestion Galerie</span></a>
                        </li>
                        
                        </li>
                        <li><a class="sidebar-header" href="/faq"><i data-feather="box"></i><span>Gestion FAQ</span></a>
                        
                        </li>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                        @csrf
                                        <button type="submit" class="btn btn-primary">
                                      Logout
                                    </button>
                                 
                                    </form>
                         
   

                    
            </div>
            