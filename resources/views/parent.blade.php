<!DOCTYPE html>
<html lang="en">
  <head>
        <style>
          .jumbotron {
                padding-top: 5rem;
                background-color: #e2edff;
                }

                #projects {
                background-color: #e2edff;
                }

                section {
                padding-top: 5rem;
                }
        </style>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />

    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- My CSS-->
    <link rel="stylesheet" href="style.css" />

    <title>Portofolio Dhamar - @yield('title')</title>
  </head>
  <body id="home">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm fixed-top">

      <div class="container">
        <a class="navbar-brand" href="/home">Dhamar Adhi Susyatama Putra</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link @if(Request::is('me/home', '/')) active @endif" href="/me/home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link @if(Request::is('me/about')) active @endif" href="/me/about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link @if(Request::is('me/project')) active @endif" href="/me/project">Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link @if(Request::is('me/contact')) active @endif"  href="/me/contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    @yield('dhamar')

    <!-- Footer -->
    <footer class="bg-primary text-white text-center pb-5">
      <p>Created With by ❤ <a href="https://www.instagram.com/dhamarasp/" class="text-white fw-bold">Dhamar Adhi Susyatama Putra</a></p>
    </footer>
  <!-- Akhir Footer -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
