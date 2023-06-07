<?php
    session_start();
?>
<?php
    include "connection.php";
    $instructorId="";
    $password="";
    $subject="";

    $errormsg="";
    $suss ="";

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $instructorId= $_POST["instructorId"];
        $password= $_POST["password"];
        $subject= $_POST["subject"];

        do{
            if(empty($instructorId)||empty($password)||empty($subject)){
                $errormsg="all need";
                break;
            }
            $sql = "INSERT INTO `instructor_details`(`instructorId`, `password`, `subject`) VALUES ('$instructorId','$password','$subject')";
            $result = $con->query($sql);

            if(!$result){
                $errormsg = "Invalid Query";
                break;
            }

            $studentId="";
            $password="";
            $subject="";

            $suss="added correctly";
            header("location: view_Instructors.php");

        }while(false);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style.css">
    
    <title>Add Instructors</title> 
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="logo.png" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">Administrator </span>
                    <span class="profession">Admin Panel</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'><img style="width: 90%;" src="icons/menu.png"></i>
        </header>

        <div class="menu-bar">
            <div class="menu">


                <ul class="menu-links">
                    <li  class="nav-link">
                        <a  href="view_students.php">
                            <i  class='bx bx-menu icon' ><img style="width: 50%;" src="icons/profile.png"></i>
                            <span  class="text nav-text">Student List</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a  href="view_Instructors.php">
                            <i class='bx bx-bell icon'><img style="width: 50%;" src="icons/instructor.png"></i>
                            <span class="text nav-text">Instructor List</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a   href="Add_student.php">
                            <i class='bx bx-pie-chart-alt icon'><img style="width: 50%;" src="icons/addstudent.png"></i>
                            <span class="text nav-text">Add Students</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a style="background-color: #00bbff;" href="Add_Instructor.html">
                            <i class='bx bx-heart icon' ><img style="width: 50%;" src="icons/addinstructor.png"></i>
                            <span class="text nav-text">Add Instructor</span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="logout.php">
                        <i class='bx bx-log-out icon' ><img style="width: 50%;" src="icons/logout.png"></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>        
            </div>
        </div>

    </nav>

    <section class="home">
        <div class="text">Add Instructors</div>
        <div style="padding: 2%; padding-bottom: 0%;">
            <form action="" method="post">
                <label for="fname">Enter instructor Id</label>
                <input type="text" id="instructorId" name="instructorId" placeholder="" value="<?php echo $instructorId ?>">
            
                <label for="lname">Enter Password</label>
                <input type="text" id="password" name="password" placeholder="" value="<?php echo $password ?>">

                <label for="sub">Select Instructor Subject</label>
                <select name="subject" id="subject">
                    <option value="none" selected disabled hidden> </option>
                    <option value="Mathematics">Mathematics</option>
                    <option value="Science">Science</option>
                    <option value="English">English</option>
                </select>
              
                <input type="submit" value="Save the Instructor">
              </form>
        </div>
        <div style="padding: 2%; padding-top: 0px;">
        </div>
        <div>
            
        </div>

    </section>
    </div>

    <script src="script.js"></script>

</body>
</html>