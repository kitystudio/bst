<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/main.css">
    <style>
      .carousel-item img {
        height: 30vh;
        object-fit: cover;
        filter: opacity(0.5);
      }
    </style>
    <title>MyBootstrap Test</title>
  </head>
  <body>
    <div class="thecontent">
      
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container justify-content-between">
          <a class="navbar-brand" href="#">MyBootstrapTest</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-0 ms-auto mb-2 mb-lg-0">
              <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Products</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Support</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Inquiry</a></li>
            </ul>
          </div>
        </div>
      </nav>
      
      <div id="carouselExampleIndicators" class="carousel slide carousel-dark" data-bs-ride="carousel">
        <ol class="carousel-indicators">
          <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
          <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
          <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item">
            <img src="https://lh3.googleusercontent.com/pw/ACtC-3dlhwl04yFXscAQ8y0YUqBCeoctyskUqT1r06m3pj6q4PZUdNk2U0p-mRBerH0wkXzxUAsmD7klLXfkgGG2Mm7sYtkXTnNCKLCl5b56wmeqDr1r5HkoRGK3l-VMKx5Pj1jbWUWP5aL-jSr9-FtWOWvw=h480" class="d-block w-100" alt="...">
            <div class="carousel-caption">
              <h2 class="display-6 text-primary">Lorem, ipsum dolor</h2>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, rem?</p>
            </div>
          </div>
          <div class="carousel-item active">
            <img src="https://lh3.googleusercontent.com/pw/ACtC-3dGgUUqCCIdg_gKSzIJ3xUS7M8z74hvyqBM-bFvXTgtHaWAYs9dkBE3G_eFePiFxhsziZT7821kDQ6P_wXJ2N9C8XhRDbpmVRrLErRLnicI_hoz-fdjWUUGu2PHpG6lRwdUQIbW8WVUuuLlCZpllbnH=h480" class="d-block w-100" alt="...">
            <div class="carousel-caption">
              <h2 class="display-6 text-primary">Lorem, ipsum dolor</h2>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur elit. Soluta, rem?</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://lh3.googleusercontent.com/pw/ACtC-3e1BlnnSJk6sFNjJsmHEyU2d9MrN3sxaZtg6WeQyJEnGqOzcXxFb8praxBBdHRRKK-a6pdwEtCe7zfcUWeFI9hqobLnxiGT3xxrxp3CYWzDsMjN1aVKHqvbMtcbJm-ItdLZ6SSeyP2uzNDrqFb6cbp0=h480" class="d-block w-100" alt="...">
            <div class="carousel-caption">
              <h2 class="display-6 text-primary">Lorem, ipsum dolor</h2>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, rem?</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </a>
      </div>
      
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>