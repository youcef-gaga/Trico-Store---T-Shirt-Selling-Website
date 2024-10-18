<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" href="{{ asset('img.favicon.png') }}" />

    <title>Tricoo Store</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/carousel.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}" />

    <!-- Custom styles for this template -->
   <!/assest nos permet de recupérer les fichier depuis public>
    <link href="{{ asset('css/album.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/tshirt.css') }}" rel="stylesheet" />
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js"
        integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous">
    </script>
</head>

<body>
       <!-- START HEADER -->
    <header class="bg-dark">
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
                    <strong>Tricoo Store</strong>
                </a>
                <ul class="navbar-nav" style="display: felex;flex-direction:row;align-items:center;">
                    <li class="nav-item" style="margin-right: 30px;">
                      <a href="{{ route('login') }}" style="color:white;">Login</a><br/>
                    </li>
                    <li class="nav-item" style="margin-right: 30px;">
                      <a href="{{ route('signup') }}" style="color:white;">Sign Up</a><br/>
                    </li>
                </ul>
            </div>
        </div>

        <!-- HERO SECTION -->
        <div class="container my-5">
            <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center">
                <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                    <h1 class="display-1 fw-bold lh-1>" style="color: aliceblue">
                      Tricoo <br> Store
                    </h1>
                    <p class="lead" style="margin-bottom: 100px; color: rgb(42, 42, 42);">
                      Find your perfect shirt!!!
                    </p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                      <a class="btn btn-dark btn-lg px-4 me-md-2 fw-bold" href="{{ route('signup') }}" role="button">sign up</a>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1 p-0">
                    <img class="rounded-lg-3"
                        src="{{     asset('Produit/hero.png') }}" alt=""
                        height="500" />
                </div>
            </div>
        </div>
        <!-- NAVIGATION BAR -->
        <nav class="navbar navbar-expand-lg navbar-light bg-red">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- NAVIGATION MENU -->
            <div class="collapse navbar-collapse justify-content-between container" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="categories/film.html">Films</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="categories/serie-tv.html">Séries TV</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="categories/musique.html">Musique</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="categories/jeux-video.html"
                      >Jeux-vidéos</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="categories/sport.html">Sport</a>
                  </li>
                </ul>
                <ul class="navbar-nav">
                  <li class="nav-item" style="margin-right: 30px;">
                    <a class="nav-link" href="{{ route('cart_index') }}">Panier<i class="fa fa-shopping-cart"></i></a>
                  </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- END HEADER -->
    <main>
<// le yeild reserve une place pour content*/>
        @yield('content')

    </main>

  <!-- FOOTER -->
    <footer class="footer-10 bg-dark" style="margin-top: 300px">
      <div class="container" style="padding-top: 50px">
        <div class="row">
          <div class="col-md-7">
            <div class="row">
              <div class="col-md-4 mb-md-0 mb-4">
                <h2 class="footer-heading">Catégories</h2>
                <ul class="list-unstyled">
                  <li>
                    <a href="categories/film.html" class="d-block">Film</a>
                  </li>
                  <li>
                    <a href="categories/serie-tv.html" class="d-block"
                      >Série-TV</a
                    >
                  </li>
                  <li>
                    <a href="categories/musique.html" class="d-block"
                      >Musique</a
                    >
                  </li>
                  <li>
                    <a href="categories/jeux-video.html" class="d-block"
                      >Jeux-vidéo</a
                    >
                  </li>
                  <li>
                    <a href="categories/sport.html" class="d-block">Sport</a>
                  </li>
                </ul>
              </div>
              <div class="col-md-4 mb-md-0 mb-4">
                <h2 class="footer-heading">Social</h2>
                <ul class="list-unstyled">
                  <li>
                    <a
                      href="https://www.facebook.com"
                      class="d-block"
                      target="_blank"
                      >Facebook</a
                    >
                  </li>
                  <li>
                    <a
                      href="https://www.instagram.com"
                      class="d-block"
                      target="_blank"
                      >Instagram</a
                    >
                  </li>
                  <li>
                    <a
                      href="https://www.twitter.com"
                      class="d-block"
                      target="_blank"
                      >Twitter</a
                    >
                  </li>
                  <li>
                    <a
                      href="https://www.linkedin.com"
                      class="d-block"
                      target="_blank"
                      >LinkedIn</a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-md-5 mb-md-0 mb-4">
            <h2 class="footer-heading">Subscribe</h2>
            <form action="#" class="subscribe-form">
              <div class="form-group d-flex">
                <input
                  type="text"
                  class="form-control rounded-left"
                  placeholder="Enter email address"
                />
                <button type="submit" class="form-control submit rounded-right">
                  Subscribe
                </button>
              </div>
              <span class="subheading"
                >Get digital marketing updates in your mailbox</span
              >
            </form>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript-->
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>

    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/holder.min.js') }}"></script>
    <script src="{{ asset('js/carousel.js') }}"></script>
  </body>
</html>