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
      
        <span class="d-lg-none px-3 pt-1" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
        <ul class="d-none d-lg-block d-lg-flex align-items-center py-3">
            <li><a href="" class="active cool-link ">Dashboard</a></li>
            <li><a href="" class="cool-link">Profile</a></li>
            <li><a href="" class="cool-link">Grades</a></li>
            <li><a href="" class="cool-link">Messages</a></li>
            <li><a href="" class="cool-link">Preferences</a></li>
            <li><a href="" class="cool-link">Reminders</a></li>
        </ul>
        <ul class="d-flex align-items-center py-3 pr-3">
            <li><a href="" class="pr-0"><i class="fas fa-bell"></i><span class="badge badge-light">9</span></a></li>
            <li><a href="" id="profile">Marcelito Cosicol</a></li>
            <li><a href="" id="profile_image" class="pl-0"><img src="assets/images/profile.jpg" class="rounded-circle" width="40" alt=""></a></li>
        </ul>
    </nav>    
    
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#">Dashboard</a>
        <a href="#">Profile</a>
        <a href="#">Grades</a>
        <a href="#">Messages</a>
        <a href="#">Preferences</a>
        <a href="#">Reminders</a>
      </div>    


<div class="container">
    <h4 class="py-4" style="text-align: center;border-bottom: 1px solid rgb(7, 140, 145); color: rgb(7, 140, 145);">Courses</h4>
    <p class="py-3" style="border-bottom: 1px solid rgb(150, 150, 150);color: rgb(112, 112, 112);">ES036B Environmental Science (E2/E3-C1)</p>
    <p class="py-3" style="border-bottom: 1px solid rgb(150, 150, 150);color: rgb(112, 112, 112)">ES036B Computer Science (E2/E3-C1)</p>
    <p class="py-3" style="border-bottom: 1px solid rgb(150, 150, 150);color: rgb(112, 112, 112)">ES036B Programming (E2/E3-C1)</p>
</div>     

    

<script src="assets/bootstrap/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/popper.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>    
<script src="assets/js/script.js"></script>
</body> 
</html>

<script>
    $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>