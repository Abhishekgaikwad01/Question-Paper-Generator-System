<?php
    include "db_conn.php";
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    if (isset($_POST['unitNo']) && isset($_POST['statement'])) {
        // if (isset($_POST['statement']) && isset($_POST['marks'])) {
        // Get data from the form

        $unitNo = $_POST['unitNo'];
        $statement = $_POST['statement'];
        $marks = $_POST['marks'];
        $CO = $_POST['CO'];
        $BTL = $_POST['BTL'];

        // Insert data into the CN table
        $sql = "INSERT INTO CN (unit_no, statement, marks, CO, BTL) VALUES ('$unitNo', '$statement', '$marks', '$CO', '$BTL')";

        if ($conn->query($sql) == true) {?>
            <script>prompt("Question Added Successfully!!")</script> <?php
            header("Location: CN.php");
            exit();
            echo "Question added successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    $_POST['unitNo']=NULL;
    
    
    ?>