<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>


    <!DOCTYPE html>
    <html ng-app="numberValidationApp">

    <head>
        <title>Question Paper Generator</title>
        <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
        <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
        <script src="angular.min.js"></script>
        <script src="app.js"></script>
        <style>
             .error {
            color: red;
        }
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

            /* Basic form styling */
form {
  width: 500px;
  margin: 0 auto;
  font-family: Arial, sans-serif;
}

label {
  margin-top: 8px;
  /* display: block; */
  padding: 5px;
}

input[type="number"],
select {
  /* width: calc(100% - 20px); */
  width: 250px;
  padding: 8px;
  margin-bottom: 10px;
  border: 2px solid blue;
  border-radius: 15px;
}
select{
    margin-top: 50px;
}
input[type="submit"] {
  padding: 10px 15px;
  background-color: #007bff;
  color: #fff;
  border: 2px solid black;
  cursor: pointer;
  margin-top: 0px;
margin-bottom: 100px;
margin-left: 80px;
border-radius: 15px;
}

/* input[type="submit"]:hover {
  background-color: #0056b3;
} */
.btn :hover {
  background-color: #0056b3;
}
        </style>
    </head>

    <body ng-controller="NumberValidationController">
        <h1 align="center">Question Paper Generator</h1>

        <!-- <a href="logout.php">Logout</a> -->
        <!-- navigation bar -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary" class="navbar fixed-top bg-body-tertiary" data-bs-theme="dark">
            <div class="container-fluid">
                <!-- display username on Navigation Bar -->
                <!-- <a class="navbar-brand" href="#"><?php echo $_SESSION['name']; ?></a> -->
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
                        <li class="nav-item ">
                            <a class="nav-link" href="genQP.php" role="button"  >
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







        <!-- <form action="paper.php" method="POST" id="f1">
            <label><b>Select course </b></label><select name="course" id="course">
                <option value="CN">CN</option>
                <option value="WT">WT</option>
            </select><br><label ><b>Enter number of bits for:</b></label><br>
            <label >Question no. 1 & 2 : </label><input type="text" name="numSubquestions1" id="q1">
            <span id="errorText1" style="color: red; display: none;">Please enter a number between 1 and 3 for Q.1 & 2</span>
            <label >Question no. 3 & 4 : </label><input type="text" name="numSubquestions2" id="q2">
            <span id="errorText2" style="color: red; display: none;">Please enter a number between 1 and 3 for Q.3 & 4.</span>
            <label >Question no. 5 & 6 : </label><input type="text" name="numSubquestions3" id="q3">
            <span id="errorText3" style="color: red; display: none;">Please enter a number between 1 and 3 for Q.5 & 6.</span>
            <label >Question no. 7 & 8 : </label><input type="text" name="numSubquestions4" id="q4">
            <span id="errorText4" style="color: red; display: none;">Please enter a number between 1 and 3 for Q.7 & 8.</span>
            <label >Question no. 9 & 10 : </label><input type="text" name="numSubquestions5" id="q5">
            <span id="errorText5" style="color: red; display: none;">Please enter a number between 1 and 3 for Q.9 & 10.</span>
            <label >Question no. 11 & 12 : </label><input type="text" name="numSubquestions6" id="q6">
            <span id="errorText6" style="color: red; display: none;">Please enter a number between 1 and 3 for Q.11 & 12.</span>


            <br>
            <input type="submit" value="Generate" onclick="myFun()">
        </form> -->
        
        <form name="numberForm" novalidate action="paper.php" method="POST" id="f1">
        <label><b>Select course </b></label><select name="course" id="course">
                <option value="CN">CN</option>
                <option value="WT">WT</option>
            </select><br><label ><b>Enter number of bits for:</b></label><br>
        <div ng-repeat="i in [1, 2, 3, 4, 5, 6]">
            <label for="number{{$index + 1}}">Question no. {{$index + 1}} & {{$index + 2}}:</label>
            <input type="number" name="numSubquestions{{$index + 1}}" ng-model="numbers[$index]" ng-change="validateNumber($index)" required>
            <span class="error" ng-show="showError[$index]"><br>Questions should be between 1 and 3</span>
            <br><br>
        </div>
        <button type="submit" ng-disabled="numberForm.$invalid">Generate</button>
    </form>

        <!-- <script>
            function myFun() {
                var invalidInput=false;
                let a = document.getElementById("q1").value
                let b = document.getElementById("q2").value
                let c = document.getElementById("q3").value
                let d = document.getElementById("q4").value
                let e = document.getElementById("q5").value
                let f = document.getElementById("q6").value

                let a1 = document.getElementById("errorText1")
                let a2 = document.getElementById("errorText2")
                let a3 = document.getElementById("errorText3")
                let a4 = document.getElementById("errorText4")
                let a5 = document.getElementById("errorText5")
                let a6 = document.getElementById("errorText6")
                let form = document.getElementById("f1")

                if (!/^[1-3]$/.test(a)) {
                    errorText1.style.display = 'block';
                    invalidInput = true;
                }
                if (!/^[1-3]$/.test(b)) {
                    errorText2.style.display = 'block';
                    invalidInput = true;
                }
                 if (!/^[1-3]$/.test(c)) {
                    errorText3.style.display = 'block';
                    invalidInput = true;
                }
                 if (!/^[1-3]$/.test(d)) {
                    errorText4.style.display = 'block';
                    invalidInput = true;
                }
                 if (!/^[1-3]$/.test(e)) {
                    errorText5.style.display = 'block';
                    invalidInput = true;
                }
                 if (!/^[1-3]$/.test(f)) {
                    errorText6.style.display = 'block';
                    invalidInput = true;
                }
                // 
                // if (invalidInput = false){
                //     form.action='paper.php';
                // }
                var $iv=invalidInput;
                <?php
                if ($iv = true){
                    header("Location: genQP.php");
                    exit();
                }
                ?>
            } -->

            //  
            // var invalidInput = false;
            //         function validateNumber(input) {
            //             var errorText = document.getElementById('errorText');
            //             var inputs = document.getElementsByClassName('numberInput');
            //             var invalidInput = false;

            //             for (var i = 0; i < inputs.length; i++) {
            //                 var value = inputs[i].value.trim();
            //                 if (!/^[1-3]$/.test(value)) {
            //                     invalidInput = true;
            //                     break;
            //                 }
            //             }

            //             if (invalidInput) {
            //                 errorText.style.display = 'block';
            //             } else {
            //                 errorText.style.display = 'none';
            //             }
            //         }
            //         function fun1() {
            //             if () {
            //                 alert("Please enter a number between 1 and 3");
            //         }
            //     }
        </script>
    </body>

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
    </html>
<?php
} else {
    header("Location: index.php");
    exit();
}
?>