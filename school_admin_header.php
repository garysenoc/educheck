<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduCheck</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/edu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
</head>
<body>

<nav class="d-flex justify-content-between ">
      <?php

      $curPageName= basename($_SERVER["PHP_SELF"]);

      if($curPageName== "school_landing.php"){
        $home= 'active';
      }
      if($curPageName== "post.php"){
        $post= 'active';
      }
      if($curPageName== "teachers.php"){
        $teachers= 'active';
      }
      if($curPageName== "students.php"){
        $students= 'active';
      }
      if($curPageName== "create_teacher_account.php"){
        $c_teachers= 'active';
      }
      if($curPageName== "create_student_account.php"){
        $c_students= 'active';
      }
      if($curPageName== "message.php"){
        $message= 'active';
      }
      if($curPageName== "report_cards.php"){
        $report_cards= 'active';
      }
      if($curPageName== "evaluation_form.php"){
        $evaluation_form= 'active';
      }


      ?>
        <span class="d-lg-none px-3 pt-1" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
        <ul class="d-none d-lg-block d-lg-flex align-items-center py-3">
            <li><a href="school_landing.php" class="<?=$home?> cool-link ">Home</a></li>
            <li><a href="post.php" class="<?=$post?> cool-link">Post</a></li>
            <li><a href="teachers.php" class="<?=$teachers?> cool-link">Teachers</a></li>
            <li><a href="students.php" class="<?=$students?> cool-link">Students</a></li>
            <li><a href="create_teacher_account.php" class="<?=$c_teachers?> cool-link">Create Teacher's Acc.</a></li>
            <li><a href="create_student_account.php" class="<?=$c_students?> cool-link">Create Student's Acc.</a></li>
            <li><a href="message.php" class="<?=$message?> cool-link">Message</a></li>
            <li><a href="report_cards.php" class="<?=$report_cards?> cool-link">Report Cards</a></li>
            <li><a href="evaluation_form.php" class="<?=$evaluation_form?> cool-link">Teacher Evaluation</a></li>
        </ul>
        <ul class="d-flex align-items-center py-3 pr-3">
            <li><a href="" class="pr-0"><i class="fas fa-bell"></i><span class="badge badge-light">9</span></a></li>
            <li><a href="" id="profile">Marcelito Cosicol</a></li>
            <li><a href="" id="profile_image" class="pl-0"><img src="assets/images/profile.jpg" class="rounded-circle" width="40" alt=""></a></li>
        </ul>
</nav>  
    
<div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="school_landing.php" class="<?=$home?>">Home</a>
        <a href="post.php" class="<?=$post?>">Post</a>
        <a href="teachers.php" class="<?=$teachers?>">Teachers</a>
        <a href="students.php" class="<?=$students?>">Students</a>
        <a href="teachers.php" class="<?=$c_teachers?>">Teachers</a>
        <a href="students.php" class="<?=$c_students?>">Students</a>
        <a href="message.php" class="<?=$message?>">Message</a>
        <a href="report_cards.php" class="<?=$report_cards?>">Report Cards</a>
        <li><a href="evaluation_form.php" class="evaluation_form cool-link">Teacher Evaluation</a></li>
</div> 