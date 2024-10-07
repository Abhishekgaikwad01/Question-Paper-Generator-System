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

        h1,h4 {
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
        input[type="text"]{
           
            width: 100px;
        }
        input[type="submit"]{
          align-items: center;
           width: 150px;
       }
        
        #unitNo{
            margin-left: 150px;
        }
        #statement{
            width: 800px;
        }
    </style>
</head>

<body>
    <h1>Question Paper Generator</h1><br>

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
                    <li class="nav-item ">
                        <a class="nav-link " href="genQP.php" >
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
    <?php
    include "db_conn.php"; // Include your database connection file

    // Query to retrieve data from the "CN" table
    $sql = "SELECT * FROM CN";
    $result = mysqli_query($conn, $sql);
?>

<h1 id="heading"><b><u>Question Bank </u></b></h1>
<table>
    <thead>
        <tr>
            <th>Q.No.</th>
            <th>unit_no</th>
            <th>Statement</th>
            <th>Marks</th>
            <th>CO</th>
            <th>BTL</th>
           
        </tr>
    </thead>
    <tbody>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["sr_no"] . "</td>";
                echo "<td>" . $row["unit_no"] . "</td>";
                echo "<td>" . $row["statement"] . "</td>";
                echo "<td>" . $row["marks"] . "</td>";
                echo "<td>" . $row["CO"] . "</td>";
                echo "<td>" . $row["BTL"] . "</td>";

                // Update button with form and input fields to edit data
              
             

                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No records found</td></tr>";
        }
        ?>
    </tbody>
</table>

   
       
    <hr>
    <!-- <div class="container text-center">
        <div class="row">
            <div class="col">unitNo</div>
            <div class="col">statement</div>
            <div class="col">marks</div>
            <div class="col">CO</div>
            <div class="col">BTL</div>

        </div> -->
        <h4>Enter details to Add More Question </h4>
        <form action="insertQuestion.php" method="POST">
       
        <input type="text" name="unitNo" id="unitNo"  placeholder="Unit No:" >
       
        <input type="text" name="statement" id="statement"  placeholder="Statement">
        
        
        <input type="text" name="marks" id="marks"  placeholder="Marks">
        
        
        <input type="text" name="CO" id="CO"  placeholder="CO">
        
        
        <input type="text" name="BTL" id="BTL"  placeholder="BTL">
        <input type="hidden" name="course" value="<?php $course ?>">
        
        <br>
        <input type="submit" value="Add Question">
    </form>
    <br><hr>
    
    <!-- <form action="insertQuestion.php" method="POST">
        <label for="unitNo">Unit No:</label>
        <input type="text" name="unitNo" id="unitNo" required>
        <br><br>
        <label for="statement">Statement:</label>
        <input type="text" name="statement" id="statement" required>
        <br><br>
        <label for="marks">Marks:</label>
        <input type="text" name="marks" id="marks" required>
        <br><br>
        <label for="CO">CO:</label>
        <input type="text" name="CO" id="CO" required>
        <br><br>
        <label for="BTL">BTL:</label>
        <input type="text" name="BTL" id="BTL" required>
        <br><br>
        
        <input type="submit" value="Add Question">
    </form> -->
   

    <!-- footer of webpage -->
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <p class="col-md-4 mb-0 text-body-secondary">© 2023 Company, Inc</p>

        <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <svg class="bi me-2" width="40" height="32">
                <use xlink:href="#bootstrap"></use>
            </svg>
        </a>

        <ul class="nav col-md-4 justify-content-end">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
            <li class="nav-item"><a href="about.html" class="nav-link px-2 text-body-secondary">About</a></li>
        </ul>
    </footer>
    
<script>
    

</script>

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
    <!-- <script>
        
            location.reload(); // Reloads the current page
       exit();
    </script> -->
</body>

</html>