<?php
function page($pageName){
    require_once "$pageName".".php";
}
function head(){
    echo '
    <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Free Template </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .card img{ width: 60%; display: block; margin: auto;}
    </style>
    </head>
  <body>
    <!-- top nav -->
    <div class="container py-2">
        <div class="row">
            <div class="col-xxl-6 col-6">
                Hay! Join 15 Day Training Program 
            </div>
            <div class="col-xxl-6 col-6 text-end">
                <a href="#contact" class="text-decoration-none">Contact Us</a>
            </div>
        </div>
    </div>
    <!-- top nav -->
    <!-- header -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary py-3">
        <div class="container">
          <a class="navbar-brand" href="./" style="text-shadow: 2px 2px 2px gold; font-weight: 600;">🐱‍💻 Tech Unit Book</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav ">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="page.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="page.php">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="page.php">Pricing</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown link
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    <!-- header -->';
}

// banner
function banner(){
    echo '
        <div class="container-fluid mt-1">
        <div class="row" style="height: 60vh;">
            <div class="col-md-6 bg-dark">1</div>
            <div class="col-md-6 bg-dark-subtle">2</div>
        </div>
        </div>
    ';
}
// end banner


?>