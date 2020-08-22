
<?php 

include "includes/connect.php";

// ========================================
//    VERIFYING IF LOGGED IN SUCCESSFULLY

    ?>  

    <?php

//=========================================


?>

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
        <li><a href="" class="active cool-link ">School feeds</a></li>
        <li><a href="" class="cool-link">Grades</a></li>
        <li><a href="" class="cool-link">Messages</a></li>
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
    <a href="#">School feeds</a>
    <a href="#">Grades</a>
    <a href="#">Messages</a>
    <a href="#">Reminders</a>
    <a href="#">Account</a>
    <a href="#">Logout</a>
  </div>   

<div class="container post-page">
    <div class="row">
        <div class="col-lg-4 mb-5">
            <div class="card" style="border-color: rgb(7, 140, 145); border-radius: 1.5em;">
                <div class="card-body">
                 <h6 style="font-weight: 600;color:rgb(112, 112, 112)" class="text-center">ONLINE</h6>

                 <form action="" class="d-flex flex-column">
                     <input type="text" placeholder="Search" style="padding: 0.2em 2em;outline:none;border:1px solid rgb(112, 112, 112);">
                     <span style="position: absolute; left: 25px;top:53px;"><i class="fas fa-search"></i></span>
                 </form>
                </div>
                <!-- users -->
                <div class="px-4 pb-4 d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <span style="position: relative;">
                            <img src="assets/images/profile.jpg" width="50" class="rounded-circle mr-3" alt="">
                            <i class="fas fa-circle" style="color:  rgb(42, 194, 78);position: absolute; left:35px;bottom:0"></i>
                        </span>
                        <h6>Nestor Kenneth Aniar</h6>
                    </div>
                    <div>
                        <div class="btn-group dropright">
                            <a data-toggle="dropdown">
                                <i style="font-size: 1.4em;color:rgb(166, 166, 166)" class="fas fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="px-4 pb-4 d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <img src="assets/images/profile.jpg" width="50" class="rounded-circle mr-3" alt="">
                        <h6>Nestor Kenneth Aniar</h6>
                    </div>
                    <div>
                        <div class="btn-group dropright">
                            <a data-toggle="dropdown">
                                <i style="font-size: 1.4em;color:rgb(166, 166, 166)" class="fas fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- users -->
                
            </div>
        </div>
        <div class="col-lg-7">
            

            <div class="card mb-5" style="border-color: rgb(7, 140, 145); border-radius: 1.5em;position: relative;">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                            <img src="assets/images/profile.jpg" width="40" class="rounded-circle mr-2" alt="">
                            <div class="d-flex flex-column">
                                <h6 style="font-size: 0.8em;line-height: 0.5;">Nestor Kenneth Aniar</h6>
                                <span style="font-size: 0.7em;line-height: 0.5;">Tue 12:02 pm</span>
                            </div>
                        </div>
                    </div>
                    <div class="px-5 pt-3 pb-5">
                        <input style="outline:none;border:none; border-bottom: 2px solid rgb(7, 140, 145);width: 100%;" type="text" placeholder="Submission of Application for.....">
                    </div>
                    <div class="d-flex justify-content-center pb-5">
                        <img src="assets/images/login_wallpaper.png" alt="" style="max-width: 500px; width: 80vw;">
                    </div>
                    <div>
                        <button id="comment-btn" style="position: absolute;left:18vw;border:1px solid rgb(7, 140, 145);outline:none;border-radius:1em;padding:0.3em 1em;color:rgb(7, 140, 145)">Comment </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
});


</script>



<?php

// END OF VERIFYING SESSION
}
?>

