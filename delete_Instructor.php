<?php
    include "connection.php";
    if(isset($_GET["InsId"])){
        $InsId = $_GET["InsId"];
        $sql = "DELETE FROM `instructor_details` WHERE InsId=$InsId";
        $con->query($sql);
    }
    header("location: view_Instructors.php")
?>
    