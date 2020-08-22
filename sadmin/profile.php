<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduCheck</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/edu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <div class="card-dashboard card-profile px-5 py-4" style="position:relative">
        <div class="d-flex align-items-center">
            <img src="assets/images/profile.jpg" width="100" class="rounded-circle" alt="">
            <div class="ml-3">
                <h4 class="pb-0 mb-0">Nestor Kenneth Aniar</h4>
                <p class="py-0 my-0">Palawan State University</p>
                <p class="py-0 my-0">BSCS-1B1</p>
            </div>
        </div>
        <div class="row pl-5">
            <div class="col-md-6 col-lg-3 py-5">
                <input type="text" value="Nestor Kenneth Aniar" disabled>
                <label for="" style="color:rgb(112, 112, 112)">Email</label>
            </div>
            <div class="col-md-6 col-lg-3 position-relative py-5">
                <input type="text" value="Bgy, Tiniguiban PPC" disabled>
                <label for="" style="color:rgb(112, 112, 112)">School Address</label>
            </div>
            <div class="col-md-6 col-lg-3 position-relative py-5">
                <input type="text" value="09393467194" disabled>
                <label for="" style="color:rgb(112, 112, 112)">Mobile Number</label>
            </div>
            <div class="col-md-6 col-lg-3 position-relative py-5">
                <input type="text" value="PTSA_08589GHU" disabled>
                <label for="" style="color:rgb(112, 112, 112)">School ID</label>
            </div>
          <p style="position:absolute; bottom:-5px;right:20px">Teacher ID: 20180934</p>
        </div>
    </div>
</div>

    

<script src="../assets/bootstrap/js/jquery.min.js"></script>
<script src="../assets/bootstrap/js/popper.min.js"></script>
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>    
<script src="../assets/js/script.js"></script>
</body> 
</html>