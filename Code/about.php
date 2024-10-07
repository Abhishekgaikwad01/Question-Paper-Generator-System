<!-- 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) { -->


     <!DOCTYPE html>
     <html>

     <head>
          <title>Question Paper Generator</title>
          <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
          <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
     </head>

     <body>
          <h1 align="center">Question Paper Generator</h1>
          
          <!-- <a href="logout.php">Logout</a> -->
          <!-- navigation bar -->
          <nav class="navbar navbar-expand-lg bg-body-tertiary" class="navbar fixed-top bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
          <!-- display username on Navigation Bar -->
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="course.php">Courses</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="genQP.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Generate Question Paper
                        </a>
                       
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About us</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                    <!-- <button class="btn btn-outline-light" type="logout"><a href="logout.php">Logout</a></button> -->

                </form>
               
            </div>
        </div>
    </nav>


  <!-- Team 1 - Bootstrap Brain Component -->
  <section class="bg-light py-3 py-md-5 py-xl-8">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
          <h2 class="mb-4 display-5 text-center">Developers</h2>
          <!-- <p class="text-secondary mb-5 text-center lead fs-4">We are a group of innovative, experienced, and proficient teams. You will love to collaborate with us.</p> -->
          <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
        </div>
      </div>
    </div>

    <div class="container overflow-hidden">
      <div class="row gy-4 gy-lg-0 gx-xxl-5">
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card border-0 border-bottom border-primary shadow-sm overflow-hidden">
            <div class="card-body p-0">
              <figure class="m-0 p-0">
                <img class="img-fluid" loading="lazy" src="#faculty/Prof. Kiran .S. Katke.jpg" alt="">
                <figcaption class="m-0 p-4">
                  <h4 class="mb-1">Abhishek Gaikwad</h4>
                  <!-- <p class="text-secondary mb-0">Product Manager</p> -->
                </figcaption>
              </figure>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card border-0 border-bottom border-primary shadow-sm overflow-hidden">
            <div class="card-body p-0">
              <figure class="m-0 p-0">
                <img class="img-fluid" loading="lazy" src="#faculty/Prof. J. N. Kale.jpg" alt="">
                <figcaption class="m-0 p-4">
                  <h4 class="mb-1">Chaitanya Gore</h4>
                  <!-- <p class="text-secondary mb-0">Art Director</p> -->
                </figcaption>
              </figure>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card border-0 border-bottom border-primary shadow-sm overflow-hidden">
            <div class="card-body p-0">
              <figure class="m-0 p-0">
                <img class="img-fluid" loading="lazy" src="#faculty/Dr. P. N. Kalavadekar.jpg" alt="">
                <figcaption class="m-0 p-4">
                  <h4 class="mb-1">Shreya Gore</h4>
                  <!-- <p class="text-secondary mb-0">Investment Planner</p> -->
                </figcaption>
              </figure>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card border-0 border-bottom border-primary shadow-sm overflow-hidden">
            <div class="card-body p-0">
              <figure class="m-0 p-0">
                <img class="img-fluid" loading="lazy" src="#faculty/Dr. D.B.Kshirsagar.jpg" alt="">
                <figcaption class="m-0 p-4">
                  <h4 class="mb-1">Saburi Game</h4>
                  <!-- <p class="text-secondary mb-0">Financial Analyst</p> -->
                </figcaption>
              </figure>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer style="background-color: #999;">
<br>
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Sanjivani College of Engineering</h3>
            <p>
              Kopergaon <br>
              New York, NY 535022<br>
             Ahemadnager <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <!-- <h4>Our Services</h4> -->
            <!-- <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul> -->
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>TY (A)</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        
        Designed by <a href="#">Abhishek Gaikwad</a>
      </div>
    </div>
  </footer><!-- End Footer --><!-- End Footer -->
     </body>

     </html>
    