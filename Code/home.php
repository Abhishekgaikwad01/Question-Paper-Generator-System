<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
  $log = 1;
  // echo("logged in");
} else {
  $log = 0;
  // echo("not logged in!!!");
  //  header("Location: index.php");
  //  exit();
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Question Paper Generator</title>
  <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
  <link href="css/style.css" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
    }

   
    body{
      background-color: beige;
      font-family: Georgia, 'Times New Roman', Times, serif;
    }
    /* Styling for the container holding the divs */
    .container1 {
      width: 100%;
      /* max-width: 800px; Adjust this as needed */
      margin: 10px;
      /* Centers the container */
      display: flex;
      /* Use flexbox for layout */
     height:100%;
    }

    /* Styling for each individual box/div */
    .box1 {
  width: 100%; /* Each div takes up 50% of the container */
  height: 550px; /* Set the height as needed */
  /* border: 1px solid #000; */
  /* Other styling properties can be added as needed */
  background-image:linear-gradient(rgba(0, 0, 0, 0.60),rgba(0,0,0,0.25)), url('question-paper-generator.png'); /* Background image */
  background-size: cover; /* Adjusts the background image size */
  background-position: center; /* Centers the background image */
}
.box2{
  border: 2px solid black;
  margin-top: 100px;
  margin-left: 70%;
  width:11%; /* Each div takes up 50% of the container */
  height: 170px; /* Set the height as needed */
  /* border: 1px solid #000; */
  /* Other styling properties can be added as needed */
  background-image: url('faculty/image1.svg'); /* Background image */
  background-size: cover; /* Adjusts the background image size */
  background-position: center; /* Centers the background image */
}
.box3{
  margin-top: 100px;
  margin-left: 20%;
  width:60%; /* Each div takes up 50% of the container */
  height: 270px; /* Set the height as needed */
  /* border: 1px solid #000; */
  /* Other styling properties can be added as needed */
  background-image: url('faculty//image2.jpeg'); /* Background image */
  background-size: cover; /* Adjusts the background image size */
  background-position: center; /* Centers the background image */
}

.textbox {
  width: 100%; /* Each div takes up 50% of the container */
  height: 480px; /* Set the height as needed */
  /* border: 1px solid #000;   */
  font-size: 8;
 
}


    /* Styling for the button */
    .styled-button {
      padding: 10px 20px;
      background-color: lightblue;
      color: white;
      border: 1px solid black;
      border-radius: 15px;
      cursor: pointer;
    }
    .styled-button a{
      text-decoration: none;
      color: black;
    }
    .styled-button a :hover{
      background-color: blue;
    }
    .textbox {
      position: relative;
    }

   
    .div2 {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}
.services .icon-box {
    padding: 30px;
    position: relative;
    overflow: hidden;
    margin: 0 0 40px 0;
    background: #fff;
    box-shadow: 0 10px 29px 0 rgba(68, 88, 144, 0.1);
    transition: all 0.3s ease-in-out;
    border-radius: 15px;
    text-align: center;
    border-bottom: 3px solid #fff;
}
.section-title {
    text-align: center;
    padding-bottom: 30px;
}
section {
    padding: 60px 0;
    overflow: hidden;
}
input[type="submit"]{
    background: #eb5d1e;
    border: 0;
    padding: 10px 24px;
    color: #fff;
    transition: 0.4s;
    border-radius: 4px;
}
.m1{
  margin: 10px;
}
#imag11{
  margin-left: 200px;
}
.btn1{
padding: 0px;
margin: 0px;
}
.a11{
  padding: 0px;
  margin: 0px;
}
.img-responsive{
  width: 100%;
}
.div2 h4{
  font-size: 50px;
  font-family:Georgia, 'Times New Roman', Times, serif;
  color: yellow;
  text-shadow: 4px 3px black;
}
.div2 h2{
  font-size: 40px;
  font-family:Georgia, 'Times New Roman', Times, serif;
 text-shadow: 4px 4px darkblue;
}

.div2 p{
  font-size:30px ;
  font-family:Georgia, 'Times New Roman', Times, serif;
  color:white;
  text-shadow: 4px 4px darkblue;
  
}
.nav-item{
  height: 50px;
  padding: 3px;
  
  
}
.nav-item a{
  
  float: left;
  margin-left: 85px;
  font-size: 17px;
}
.img .img-fluid{
  box-shadow: 5px 6px 7px  black;
}
.border {
  border: 3px solid black;
  border-radius: 10px ;
  box-shadow: 5px 7px 6px black;
}


  </style>
   
</head>

<body>


 
  <nav class="navbar navbar-expand-lg bg-body-tertiary" class="navbar fixed-top bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <?php
            // if ($log == 1) {
            //   echo ("<a class='nav-link active' href='#'>" . $_SESSION['name'] . "</a>");
            // }
            ?>
          </li>
         
          <li class="nav-item">
          <?php
          if ($log == 1) {
            echo ("<a class='nav-link active' href='logout.php'>Logout</a>");
          } else {
            echo ("<a class='nav-link active' href='login.php'>Login</a>");
          } ?>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="course.php">Courses</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link active" href="genQP.php">Generate Question Paper </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="about.php">About us</a>
          </li>
        </ul>
        <form class="" >
          <input class="m1" type="search" placeholder="Search" aria-label="Search">
          <button class="m1" type="submit">Search</button>
           <!-- <button class="btn btn-outline-light" type="logout"><a href="logout.php">Logout</a></button> -->
          
        </form>
        <?php
            if ($log == 1) {
              echo ("<a class='nav-link active' href='#'>" . $_SESSION['name'] . "</a>");
            }
            ?>
      </div>
    </div>
  </nav> 

  <div class="container1">
    <div class="box1">
    <div class="textbox">
      <div class="div2" >
        <font  style="color:white; ">
        <h4>Question Paper Generator</h4><br>
        <h2>Welcome</h2>
        <p>Generate Question Paper on single Click, Very Simple!! </p>
        <button class="styled-button" ><a href="genQP.php">Try Now</a></button>
        </font>
      </div>
    </div>
      <!-- <img src="question-paper-generator.png" alt="this is image" class="img-fluid" id="img1"> -->
    </div>
    
  </div>
  <!-- <div class="box2">

</div> -->


  <!-- <section id="hero" class="d-flex align-items-center"> -->

  <!-- <div class="container">
  <div class="row gy-4">
    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
      <h1>Quality is our Business!!</h1>
      <h2>Generate question Paper on one Click!! Making things Simple!! </h2>
      <div>
        <a href="#about" class="btn-get-started scrollto">Generate Question Paper</a>
      </div>
    </div>
    <div class="col-lg-6 order-1 order-lg-2 hero-img">
      <img src="/Ninestars/question-paper-generator.png" class="img-fluid animated" alt="">
    </div>
  </div>
</div> -->


  <!-- This is Login model -->
  <!-- <div id="modal-overlay" onclick="closeModal()">
  <div id="modal">
    
    <form id="loginform" action="login.php" method="post">
     	<h2 id="formh2">LOGIN</h2>
     	
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button class="signupbutton" type="submit">Login</button>
          <a href="signup.php" class="ca">Create an account</a>
     </form>
    <span id="close-btn" onclick="closeModal()">Close</span>
  </div>
</div> -->
  <!-- This is END of Login model -->
 
    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg"  >
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2><br>
          <p>Check out the great services we offer</p>
        </div>
          <div class="border">
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
    <div class="col d-flex align-items-start">
      <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
        <svg class="bi" width="1em" height="1em">
          <use xlink:href="#toggles2"></use>
        </svg>
      </div>
      <div>
        <h3 class="fs-2 text-body-emphasis">Generate Question Paper</h3>
        <p>Generate Question Paper on single click with availabe question bank in database.</p>
        <a href="genQP.php" class="btn btn-primary">
          Generate
        </a>
      </div>
    </div>
    <div class="col d-flex align-items-start">
      <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
        <svg class="bi" width="1em" height="1em">
          <use xlink:href="#cpu-fill"></use>
        </svg>
      </div>
      <div>
        <h3 class="fs-2 text-body-emphasis">Courses</h3>
        <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
        <a href="course.php" class="btn btn-primary">
          View
        </a>
      </div>
    </div>
    <div class="col d-flex align-items-start">
      <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
        <svg class="bi" width="1em" height="1em">
          <use xlink:href="#tools"></use>
        </svg>
      </div>
      <div>
        <h3 class="fs-2 text-body-emphasis">Question Bank</h3>
        <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
        <a href="course.php" class="btn btn-primary">
          view
        </a>
      </div>
    </div>
  </div>
          </div>
  <!-- <div class="box3"> -->

<!-- </div>
        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Generate Question Paper </a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Question Bank</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">All Courses Available</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Edit And Add Questions</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum</p>
            </div>
          </div>

        </div>

      </div> -->
    </section>
    <br>
    <!-- End Services Section -->
    <img src="faculty/image2.jpeg" alt="This is Image" class="img-responsive" >
  <!-- Team 1 - Bootstrap Brain Component -->
  <div class="img">
  <section class="bg-light py-3 py-md-5 py-xl-8"  >
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
          <h2 class="mb-4 display-5 text-center">Our Guides And Mentors</h2>
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
                <img class="img-fluid" loading="lazy" src="faculty/Prof. Kiran .S. Katke.jpg" alt="Flora Nyra">
                <figcaption class="m-0 p-4">
                  <h4 class="mb-1">Prof. Kiran S. Katke</h4>
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
                <img class="img-fluid" loading="lazy" src="faculty/Prof. J. N. Kale.jpg" alt="Evander Mac">
                <figcaption class="m-0 p-4">
                  <h4 class="mb-1">Prof. J. N. Kale</h4>
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
                <img class="img-fluid" loading="lazy" src="faculty/Dr. P. N. Kalavadekar.jpg" alt="Taytum Elia">
                <figcaption class="m-0 p-4">
                  <h4 class="mb-1">Dr. P. N. Kalavadekar</h4>
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
                <img class="img-fluid" loading="lazy" src="faculty/Dr. D.B.Kshirsagar.jpg" alt="Wylder Elio">
                <figcaption class="m-0 p-4">
                  <h4 class="mb-1">Dr. D.B.Kshirsagar</h4>
                  <!-- <p class="text-secondary mb-0">Financial Analyst</p> -->
                </figcaption>
              </figure>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>

  
    <!-- ======= Contact Us Section ======= -->
    <br>
    <section id="contact" class="contact" >
      <div class="container" data-aos="fade-up" >

        <div class="section-title" >
          <!-- <h2>Contact Us</h2> -->
          <p>Contact us the get started</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <form action="#" method="post" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="form-group col-md-6 mt-3 mt-md-0">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
      
    </section><!-- End Contact Us Section --> 
    <br>
<footer style="background-color: #c0c0c0;">
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
              <li><i class="bx bx-chevron-right"></i> <a href="#home.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about.php">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="genQP.php">Services</a></li>
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
            <p>This is Question Paper Generator Software </p>
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
        
        Designed by <a href="https://www.linkedin.com/in/abhishek-gaikwad-b0b35a233?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app">Abhishek Gaikwad</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


</body>

</html>