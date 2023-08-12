<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Menu</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasDarkNavbar"
          aria-controls="offcanvasDarkNavbar"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="offcanvas offcanvas-end text-bg-dark"
          tabindex="-1"
          id="offcanvasDarkNavbar"
          aria-labelledby="offcanvasDarkNavbarLabel"
        >
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
            <button
              type="button"
              class="btn-close btn-close-white"
              data-bs-dismiss="offcanvas"
              aria-label="Close"
            ></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <?php
                if(isset($_SESSION['user'])){
              //  header('location:writeareview.html');
                // continue;
                  }
      
                  else{
                    ?>
                    <a class="nav-link" href="sign_in.php">Sign in</a>
                   
      
                <?php
              }
      
      
                ?>
                
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  price Range
                </a>
                <ul class="dropdown-menu dropdown-menu-dark">
                  <li><a class="dropdown-item" href="phone.html">mobile</a></li>
                  <li><a class="dropdown-item" href="#">Laptop</a></li>

                  <li>
                    <a class="dropdown-item" href="Accessories.html">Accessories</a>
                  </li>
                </ul>
              </li>
              <li><a class="dropdown-item" href="#">About US!</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <br /><br />
    <br />
    <div>
      <table>
        <tr>
          <td><img src="./All_Image/Logo.png" /></td>
          <td>
            <ul class="nav justify-content-end">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="compare1.php">Comparision</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="sign_up.php">Sign Up</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="review.php">Review</a>
              </li>
            </ul>
          </td>
        </tr>
      </table>
    </div>
    <div class="scroll-left">
      <p>
        This is a website where you can get the idea of your desire stuff with
        the best price and we can compare the
        <strong>best range's product</strong> for you.
      </p>
    </div>
    <center>

    </head>

    <body>

      <br>

      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./All_Image/1.webp" class="d-block" alt="img1">
          </div>
          <div class="carousel-item">
            <img src="./All_Image/slide2.jpg" class="d-block" alt="img2">
          </div>
          <div class="carousel-item">
            <img src="./All_Image/slide3.jpg" class="d-block" alt="img3">
          </div>
          <div class="carousel-item">
            <img src="./All_Image/slide4.webp" class="d-block" alt="img4">
          </div>
          <div class="carousel-item">
            <img src="./All_Image/slide5.jpg" class="d-block" alt="img5">
          </div>
          <div class="carousel-item">
            <img src="./All_Image/slide6.jpg" class="d-block" alt="img6">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </center>
    <h1>Collection</h1>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
