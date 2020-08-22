<?php

session_start();
    if(!isset($_SESSION['edu_admin_logged'])){
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
      <?php

      $curPageName= basename($_SERVER["PHP_SELF"]);

      if($curPageName== "dashboard.php"){
        $dashboard= 'active';
      }
      if($curPageName== "partners.php"){
        $partners= 'active';
      }
      if($curPageName== "create_school_account.php"){
        $create_school_account= 'active';
      }
      if($curPageName== "members.php"){
        $members= 'active';
      }
      if($curPageName== "request.php"){
        $request= 'active';
      }
      if($curPageName== "edu_feedback.php"){
        $edu_feedback= 'active';
      }


      ?>      
    <span class="d-lg-none px-3 pt-1" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
    <ul class="d-none d-lg-block d-lg-flex align-items-center py-3">
        <img src="../assets/images/educhecklogo.png" width="60" alt="">
        <li><a href="dashboard.php" class="<?=$dashboard?> cool-link ">Dashboard</a></li>
        <li><a href="partners.php" class="<?=$partners?> cool-link">Partners</a></li>
        <li><a href="create_school_account.php" class="<?=$create_school_account?> cool-link">Create School Account</a></li>
        <li><a href="" data-toggle="modal" data-target="#create_edu_admin" class=" cool-link">Create Educheck admin</a></li>
        <li><a href="members.php" class="<?=$members?> cool-link">Members</a></li>
        <li><a href="request.php" class="<?=$request?> cool-link">Request</a></li>
        <li><a href="request.php" class="<?=$edu_feedback?> cool-link">Feedback</a></li>
    </ul>
    <ul class="d-flex align-items-center py-3 pr-3">
        <li><a href="" class="pr-0"><i class="far fa-bell"></i><span class="badge badge-light" style="color: red; font-weight: 600; font-size: 12px; background-color: white; border-radius: 50%;">9</span></a></li>
        <li><a href="" id="profile">Marcelito Cosicol</a></li>
        <li>
             <button data-toggle="dropdown" style="border: none;outline: none; background-color: white;">
                <img src="../assets/images/profile.jpg" class="rounded-circle" width="40" alt="">
              </button>
              <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Account Profile</a>
                  <a class="dropdown-item" href="../logout.php">Logout</a>
              </div>
            </div>
        </li>
    </ul>
</nav>    

<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a class="<?=$dashboard?>" href="dashboard.php">Dashboard</a>
        <a class="<?=$partners?>" href="partners.php">Partners</a>
        <a class="<?=$create_school_account?>" href="create_school_account.php">Create School Account</a>
        <a class="<?=$members?>" href="members.php">Members</a>
        <a class="<?=$request?>" href="request.php">Request</a>
        <a  class="<?=$request?>" href="request.php">Feedback</a>
  </div>    

