<?php
    include "../../backend/connection.php";
    if(isset($_GET["SId"])){
        $SId = $_GET["SId"];
        $sql = "DELETE FROM student_details WHERE SId=$SId";
        $con->query($sql);
    }
    header("location: ../index.php")
?>
    