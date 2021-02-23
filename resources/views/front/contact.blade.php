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
                        <h2>faq</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    <section class="contact-page section-b-space">
        <div class="container">
            <div class="row section-b-space">
                <div class="col-lg-7 map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d989.1298818926119!2d11.111963294601995!3d33.5007764410396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13aaef81bfdd2277%3A0x12aee5059a1eafbd!2sMoubilia!5e0!3m2!1sfr!2stn!4v1613936643000!5m2!1sfr!2stn" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="col-lg-5">
                    <div class="contact-right">
                        <ul>
                            <li>
                                <div class="contact-icon"><img src="{{asset('images/icon/phone.png')}}"
                                        alt="Generic placeholder image">
                                    <h6>Contact Us</h6>
                                </div>
                                <div class="media-body">
                                    <p>+91 123 - 456 - 7890</p>
                                    <p>+86 163 - 451 - 7894</p>
                                </div>
                            </li>
                            <li>
                                <div class="contact-icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <h6>Address</h6>
                                </div>
                                <div class="media-body">
                                    <p>ABC Complex,Near xyz, New York</p>
                                    <p>USA 123456</p>
                                </div>
                            </li>
                            <li>
                                <div class="contact-icon"><img src="{{asset('images/icon/email.png')}}"
                                        alt="Generic placeholder image">
                                    <h6>Address</h6>
                                </div>
                                <div class="media-body">
                                    <p>Support@Shopcart.com</p>
                                    <p>info@shopcart.com</p>
                                </div>
                            </li>
                            <li>
                                <div class="contact-icon"><i class="fa fa-fax" aria-hidden="true"></i>
                                    <h6>Fax</h6>
                                </div>
                                <div class="media-body">
                                    <p>Support@Shopcart.com</p>
                                    <p>info@shopcart.com</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <form class="theme-form" method="POST" action="/contact">
                    @csrf
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="name">Nom</label>
                                <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrer votre nom"
                                    required="">
                            </div>
                            <div class="col-md-6">
                                <label for="email">Prenom</label>
                                <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prenom" required="">
                            </div>
                            <div class="col-md-6">
                                <label for="review">Telephone</label>
                                <input type="text" class="form-control" id="telephone" name="telephone"  placeholder="Enter your number"
                                    required="">
                            </div>
                            <div class="col-md-6">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email" required="">
                            </div>
                            <div class="col-md-12">
                                <label for="review">Votre message</label>
                                <textarea class="form-control" placeholder="Write Your Message"
                                    id="exampleFormControlTextarea1" name="message" rows="6"></textarea>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-solid" type="submit">Send Your Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--Section ends-->

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