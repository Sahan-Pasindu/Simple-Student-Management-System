<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST['UpdateStudentDetails'])) {
            $SId = $_POST["SId"];
            $studentId = $_POST["studentId"];
            $password = $_POST["password"];
            $grade = $_POST["grade"];

            echo $SId;
            echo $studentId;
            echo $password;
            echo $grade;
        }
    }
    include "connection.php";
    $sql = "UPDATE student_details SET studentId = $studentId, password = $password, grade = $grade WHERE SId = $SId";

    if ($con->query($sql) === TRUE) {
        echo "Record updated successfully";
    }
    else {
        echo "Error updating record: " . $con->error;
      }
    // header("location: view_students.php");
?>