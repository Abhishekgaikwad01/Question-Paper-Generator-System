
    <!DOCTYPE html>
    <html>

    <head>
        <title>Question Paper Generator</title>
        <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
        <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
        <style>
            #heading {
                background: lightcyan;
                color: brown;
                padding-bottom: 10px;
            }

            h1 {
                text-align: center;
                padding: 0px;
            }

            table {
                width: 80%;
                margin: 20px auto;
                border-collapse: collapse;
            }

            th,
            td {
                border: 1px solid #ccc;
                padding: 8px;
                text-align: left;
            }

            th {
                background-color: #f2f2f2;
            }

            tr:nth-child(even) {
                background-color: #f2f2f2;
            }
            select {
  /* width: calc(100% - 20px); */
  width: 250px;
  padding: 8px;
  margin-bottom: 10px;
  border: 2px solid blue;
  border-radius: 15px;
}
        </style>
    </head>

    <body>
        <h1>Question Paper Generator</h1>

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
                            <a class="nav-link" href="#">Courses</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="genQP.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Generate Question Paper
                            </a>
                           
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About us</a>
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


        <h1 id="heading"><b><u>Available Courses</u></b></h1>
        <div class="container text-center">
        <div class="row">
          <div class="col">sr  No.</div>
          <div class="col">Courses</div>
          <div class="col"> No of Quetion</div>
          
          
          
        </div>
        <hr>
                <?php
               
                include "db_conn.php";

                // Query to retrieve data from the "Course" table
                $sql = "SELECT * FROM Course";
                // $result = $conn->query($sql);
                $result = mysqli_query($conn, $sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='row'>";
                        echo "<div class='col'>" . $row["sr_no"] . "</div>";
                        echo "<div class='col'>" . $row["courses"] . "</div>";
                        echo "<div class='col'>" . $row["no_of_questions"] . "</div>";
                        // echo "<div class='col'><a href='" . $row["courses"] . ".php'> EDIT</a></div>";
                        // echo "<div class='col'><a href='CN.php'> EDIT</a></div>";
                        echo "</div>";      
                    }
                } else {
                    echo "<tr><td colspan='3'>No records found</td></tr>";
                }

                // Close the database connection
                // $conn->close();
                ?>
            <br><br>
            <form action="CN.php" method="POST" >
            <label><b>Select course </b></label><select name="course" >
                <option value="CN">CN</option>
                <option value="WT">WT</option>
            </select><br>
            <input type="submit" value="View Question Bank">
</form>
<!-- <input type='button' value='<a href='CN.php'>CN</a>' > -->

<br><br><br><hr><hr>
       
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
  </footer><!-- End Footer -->

    </body>

    </html>

