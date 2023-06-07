<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST['UpdateStudentDetails'])) {
            $SId = $_POST["SId"];
            $studentId = $_POST["studentId"];
            $grade = $_POST["grade"];
        }
    }
    include "connection.php";

    $sql = "UPDATE `student_details` SET `studentId` = '$studentId', `grade` = '$grade' WHERE `SId` = '$SId'";

    if ($con->query($sql) === TRUE) {
        echo "Record updated successfully";
      } else {
        echo "Error updating record: " . $con->error;
      }

    header("location: view_students.php");
?>