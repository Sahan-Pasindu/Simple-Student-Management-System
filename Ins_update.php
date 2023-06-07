<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST['UpdateInsDetails'])) {
            $InsId = $_POST["InsId"];
            $instructorId = $_POST["instructorId"];
            $subject = $_POST["subject"];
        }
    }
    include "connection.php";

    $sql = "UPDATE instructor_details SET instructorId = '$instructorId', subject = '$subject' WHERE InsId = '$InsId'";

    if ($con->query($sql) === TRUE) {
        echo "Record updated successfully";
      } else {
        echo "Error updating record: " . $con->error;
      }

    header("location: view_Instructors.php");
?>