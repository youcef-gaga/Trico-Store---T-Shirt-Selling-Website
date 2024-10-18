<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" href="{{ asset('img.favicon.png') }}" />

    <title>Mon T-Shirt</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/carousel.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}" />

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/album.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/tshirt.css') }}" rel="stylesheet" />
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js"
        integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous">
    </script>
</head>

<body>
    <!-- START HEADER -->
    <header>
        <div class="navbar navbar-dark bg-dark box-shadow">
            <div class="container d-flex justify-content-between">
                <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="mr-2">
                        <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z">
                        </path>
                        <circle cx="12" cy="13" r="4"></circle>
                    </svg>
                    <strong>Mon T-Shirt</strong>
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                         <a class="nav-link" href="{{ route('cart_index') }}">Panier<i class="fa fa-shopping-cart"></i></a>
                    </li>
                </ul>
            </div>
        </div>


    </header>
    <!-- END HEADER -->


    @yield('content')
    <!-- FOOTER -->
    <footer class="footer-10 bg-dark" style="margin-top: 200px;">
        <div class="container" style="padding-top: 50px;">
            <div class="row">
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-4 mb-md-0 mb-4">

                        </div>
                        <div class="col-md-4 mb-md-0 mb-4">
                            <h2 class="footer-heading">Social</h2>
                            <ul class="list-unstyled">
                                <li><a href="https://www.facebook.com" class="d-block"
                                        target="_blank">Facebook</a></li>
                                <li><a href="https://www.instagram.com" class="d-block"
                                        target="_blank">Instagram</a></li>
                                <li><a href="https://www.twitter.com" class="d-block" target="_blank">Twitter</a>
                                </li>
                                <li><a href="https://www.linkedin.com" class="d-block"
                                        target="_blank">LinkedIn</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-5 mb-md-0 mb-4">
                    <h2 class="footer-heading">Subscribe</h2>
                    <form action="#" class="subscribe-form">
                        <div class="form-group d-flex">
                            <input type="text" class="form-control rounded-left" placeholder="Enter email address">
                            <button type="submit" class="form-control submit rounded-right">Subscribe</button>
                        </div>
                        <span class="subheading">Get digital marketing updates in your mailbox</span>
                    </form>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>

    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/holder.min.js"></script>
</body>

</html>
