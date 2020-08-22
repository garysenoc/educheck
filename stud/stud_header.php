<?php

if(!isset($_SESSION['student_logged'])){
  header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduCheck</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/edu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
</head>
<body>

<nav class="d-flex justify-content-between ">
      
    <span class="d-lg-none px-3 pt-1" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
    <ul class="d-none d-lg-block d-lg-flex align-items-center py-3">
        <li><a href="student_home.php" class="active cool-link ">School feeds</a></li>
        <li><a href="grades.php" class="cool-link">Grades</a></li>
        <li><a href="message.php" class="cool-link">Messages</a></li>
        <!-- <li><a href="Reminder.php" class="cool-link">Reminders</a></li> -->
    </ul>
       <ul class="d-flex align-items-center py-3 pr-3">
            <li><a href="" class="pr-0"><i class="fas fa-bell"></i><span class="badge badge-light" style="color: red;">9</span></a></li>
            <li><a href="" id="profile"><?= $_SESSION['school_admin_fullname']?></a></li>
            <li>
              <button data-toggle="dropdown" style="border: none;outline: none; background-color: white;">
                <img src="../images/<?= $_SESSION['school_admin_img']?>" class="rounded-circle" width="40" alt="">
              </button>
              <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Account Profile</a>
                  <a class="dropdown-item" href="../logout.php">Logout</a>
              </div>
            </li>



              
        </ul>
</nav>    

<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="#">School feeds</a>
    <a href="#">Grades</a>
    <a href="#">Messages</a>
    <a href="#">Reminders</a>
    <a href="#">Account</a>
    <a href="#">Logout</a>
  </div>   
