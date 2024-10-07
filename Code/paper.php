<!DOCTYPE html>
<html lang="en">

<head>
  <title>Webpage Design</title>
  <link rel="stylesheet" href="wt.css">
  <link href="bootstrap.min.css" rel="stylesheet" type="text/css">
  <style>
    .or {
      text-align: center;
    }

    th,
    h3 {
      text-align: center;
    }
  </style>

</head>

<body><?php
$course = ($_POST['course']); ?>
  <header width="50%">
    <center>
      <h1> Sajivani College Of Engineering Kopargaon</h1>
      <h3>(An Autonomous Engineering College)</h3>
      <h2>T.Y.B.Tech (2021 pattern, Semester-V)</h2>
      <h2> End-Semester Examination</h2>
    </center>
    <hr>
    <br>
    <table border="0" cellspacing="0" cellpadding="0" width="90%">
      <tr>
        <td> Course Name: <?php $course ?></td>
        <td>PRN NO: <input type="box"></td>
      </tr>
      <tr>
        <td> Course Code:CO302</td>
        <td>Total marks: 60</td>

      </tr>
      <tr>
        <td> Department:Computer Engineering</td>
        <td>Time:2.5Hour</td>

      </tr>
    </table>
    <br>
    <div class="instruction">
      <i>
        <p> Instruction to the students:<br>
          (1) Total number of quetions are 12.<br>
          (2) Attempt Q1 or Q2,Q3 or Q4, Q5 or Q6, Q7 or Q8, Q9 or Q10, Q11 or Q12.<br>
          (3) All carries 10 marks.<br>
          (4) Use of electronic pocket calculator is allowed.<br>
          (5) Assume suitable data,if necessary.<br>
          (6) Neat sketches must be drawn wherever necessary.<br>
        </p>
      </i>
    </div>


  </header>
  <div class="container">

    <div class="table-responsive">
      <table class="table table-bordered">
        <thead>

          <tr>
            <th>Q.No.</th>
            <th></th>
            <th>Statement</th>
            <th>Marks</th>
            <th>CO</th>
            <th>BTL</th>

          </tr>
        </thead>
        <tbody>
          <?php
         
          $numSubquestions1 = intval($_POST['numSubquestions1']);
          $numSubquestions2 = intval($_POST['numSubquestions2']);
          $numSubquestions3 = intval($_POST['numSubquestions3']);
          $numSubquestions4 = intval($_POST['numSubquestions4']);
          $numSubquestions5 = intval($_POST['numSubquestions5']);
          $numSubquestions6 = intval($_POST['numSubquestions6']);
          $course = ($_POST['course']);

          

            include "db_conn.php";

            function myFun($numSubquestions, $c, $n, $Cours,$unit)
            {
              $m = "a";
              
              if ($numSubquestions == 1) {
                $query = "SELECT * FROM $Cours WHERE  unit_no = $unit AND marks = 10 LIMIT 2";
              }
              if ($numSubquestions == 2) {
                $query = "SELECT * FROM $Cours WHERE  unit_no = $unit AND marks = 5 LIMIT 4 ";
              }
              if ($numSubquestions == 3) {
$query = "SELECT * FROM $Cours WHERE unit_no = $unit AND (marks = 4 OR marks = 6) LIMIT 6";              }

              $result = $c->query($query);
              if ($result->num_rows > 0) {
                $totalRows = $result->num_rows;
                $halfRows = ceil($totalRows / 2); // Calculate half the number of rows
                $qq = $n;
                $rowCount = 0; // Initialize row counter
                while ($row = $result->fetch_assoc()) {

                  if ($rowCount == $halfRows) {
                    $n = $qq + 1;
                    $m="a";
                  }
                  echo "<tr>";
                  echo "<td>" . $n . "</td>";
                  echo "<td>" . $m++ . ")</td>";
                  echo "<td>" . $row["statement"] . "</td>";

                  echo "<td>" . $row["marks"] . "</td>";
                  echo "<td>" . $row["CO"] . "</td>";
                  echo "<td>" . $row["BTL"] . "</td>";
                  echo "</tr>";

                  $rowCount++;
                  if ($rowCount == $halfRows) {
                    // echo "<tr><td colspan='6'>OR</td></tr>"; // Display "OR" after half the rows
                    echo "<tr><td colspan='6' class='or'>OR</td></tr>";
                    $n++;
                  }
                  $n = NULL;
                }
                echo "<tr><td colspan='6' class='or'>  <br></td></tr>";
              } else {
                echo "<tr><td colspan='6'>No records found</td></tr>";
              }
            }
          
          $c = $conn;

          myFun($numSubquestions1, $c, 1, $course,1);
          myFun($numSubquestions2, $c, 3, $course,2);
          myFun($numSubquestions3, $c, 5, $course,3);
          myFun($numSubquestions4, $c, 7, $course,4);
          myFun($numSubquestions5, $c, 9, $course,5);
          myFun($numSubquestions6, $c, 11, $course,6);


          //   $n=3;
          //   $m="a";
          //   $query = "SELECT * FROM CN WHERE  unit_no = 2 LIMIT $numSubquestions2";
          //   // $result = $conn->query($sql);
          //   $result = $conn->query($query);
          //   if ($result->num_rows > 0) {
          //     while ($row = $result->fetch_assoc()) {
          //       echo "<tr>";
          //       echo "<td>" . $n . "</td>";
          //       echo "<td>" . $m++ . ")</td>";
          //       echo "<td>" . $row["statement"] . "</td>";
          //       echo "<td>" . $row["marks"] . "</td>";
          //       echo "<td>" . $row["CO"] . "</td>";
          //       echo "<td>" . $row["BTL"] . "</td>";
          //       echo "</tr>";
          //       $n=NULL;
          //     }
          //   } else {
          //     echo "<tr><td colspan='3'>No records found</td></tr>";
          //   } echo "<tr><td colspan='5' class='or'>OR</td></tr>";
          //   $numSubquestions2 = intval($_POST['numSubquestions2']);
          //   $n=4;
          //   $m="a";
          //   $query = "SELECT * FROM CN WHERE  unit_no = 2 LIMIT $numSubquestions2";
          //   // $result = $conn->query($sql);
          //   $result = $conn->query($query);
          //   if ($result->num_rows > 0) {
          //     while ($row = $result->fetch_assoc()) {
          //       echo "<tr>";
          //       echo "<td>" . $n . "</td>";
          //       echo "<td>" . $m++ . ")</td>";
          //       echo "<td>" . $row["statement"] . "</td>";
          //       echo "<td>" . $row["marks"] . "</td>";
          //       echo "<td>" . $row["CO"] . "</td>";
          //       echo "<td>" . $row["BTL"] . "</td>";
          //       echo "</tr>";
          //       $n=NULL;
          //     }
          //   } else {
          //     echo "<tr><td colspan='3'>No records found</td></tr>";
          //   } echo "<tr><td colspan='5' class='or'><br></td></tr>";
          //   $numSubquestions3 = intval($_POST['numSubquestions3']);

          ?>
        </tbody>
      </table>
    </div>
  </div>

  <h3>...All The Best...</h3>

</body>

</html>