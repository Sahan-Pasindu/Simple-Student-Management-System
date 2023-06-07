<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style.css">
    
    <title>Instructors List</title> 
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
                        <a style="background-color: #00bbff;" href="view_Instructors.php">
                            <i class='bx bx-bell icon'><img style="width: 50%;" src="icons/instructor.png"></i>
                            <span class="text nav-text">Instructor List</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="Add_student.php">
                            <i class='bx bx-pie-chart-alt icon'><img style="width: 50%;" src="icons/addstudent.png"></i>
                            <span class="text nav-text">Add Students</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="Add_Instructor.php">
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
        <div class="text">Instructors List</div>
        <div style="padding: 2%; padding-top: 0px;">
        <table id="customers">
            <tr>
              <th>ID</th>
              <th>Username</th>
              <th>Password</th>
              <th>Subject</th>
              <th colspan="2">Action</th>
            </tr>
            <?php
                include "connection.php";
                $sql = "select * from instructor_details";
                $result = $con->query($sql);

                if(!$result){
                    die("Invalid query: ". $con->error);
                }
                while($row=$result->fetch_assoc()){
                    $pass = $row['password'];
                    $modifiedPass = str_repeat('*', strlen($pass));
                    echo "
                    <tr>
                        <td>$row[InsId]</td>
                        <td>$row[instructorId]</td>
                        <td>$modifiedPass</td>
                        <td>$row[subject]</td>
                        <td>
                            <a href='update_Instructor.php?InsId=$row[InsId]'><button>Update</button></a>
                        </td>
                        <td>
                            <a href='delete_Instructor.php?InsId=$row[InsId]'><button>Delete</button></a>
                        </td>
                        
                    </tr>";
                }
            ?>
          </table>
        </div>
        <div>
        </div>
    </section>
    </div>
    <script src="script.js"></script>

</body>
</html>