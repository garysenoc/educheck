<?php
include "includes/connect.php";
// }


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
    <ul class="d-flex align-items-center py-3">
        <li><a href="" class="cool-link ">Dashboard</a></li>
        <li><a href="" class="active cool-link">Partners</a></li>
        <li><a href="" class="cool-link">Create School Account</a></li>
        <li><a href="" class="cool-link">Members</a></li>
        <li><a href="" class="cool-link">Messsage</a></li>
        <li><a href="" class="cool-link">Feedback</a></li>
    </ul>
    <ul class="d-flex align-items-center py-3 pr-3">
        <li><a href="" class="pr-0"><i class="fas fa-bell"></i><span class="badge badge-light">9</span></a></li>
        <li class="d-flex flex-column" style="position:relative"><a href="" id="profile">Marcelito Cosicol <span style="position: absolute; right: 50px; top: 25px">Admin</span></a></li>
        <li><a href="" id="profile_image" class="pl-0"><img src="assets/images/profile.jpg" class="rounded-circle" width="40" alt=""></a></li>
    </ul>
</nav>    

<div class="px-5"> 
    <div class="card-dashboard card-create-school px-5 py-4">
       <h6 class="pb-4">EduCheck Partner Schools</h6>
       <div class="container">
    



    <table style="width:100%">
        <tr>
          <th></th>
          <th>School</th>
          <th>Contact</th> 
          <th>Email</th>
          <th>Subscription Status</th>
          <th>Total: 4</th>
        </tr>
        <tr>
          <td >
            <img src= "images/psulogo.png"   class="rounded-circle mr-3" width="50" alt=""> 
          </td>
          <td>PSU LAB HIGH</td>
          <td>09125326347</td>
          <td>psulabhigh@gmail.com</td>
          <td>9 Months Left</td>
          <td class="message-button">
            <a href="#">Message</a>
            <div class="ml-3 btn-group dropright">
              <button data-toggle="dropdown">
                  <i style="font-size: 1.4em;color:rgb(166, 166, 166)" class="fas fa-ellipsis-v"></i>
              </button>
              <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
          </td>
        </tr>

        <tr>
          <td >
            <img src= "images/sanjose.jpeg"   class="rounded-circle mr-3" width="50" alt=""> 
          </td>
          <td>San Jose National High School</td>
          <td>09125326347</td>
          <td>sanjoseschool@gmail.com</td>
          <td>11 Months Left</td>
          <td class="message-button">
            <a href="#">Message</a>
            <div class="ml-3 btn-group dropright">
              <button data-toggle="dropdown">
                  <i style="font-size: 1.4em;color:rgb(166, 166, 166)" class="fas fa-ellipsis-v"></i>
              </button>
              <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
          </td>
        </tr>
      
        
    </table>
</div>
            
       </form>
      
      
    </div>
</div>



<div class="modal fade" id="school_added" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document"1>
      <div class="landing-modal modal-content">
        <div class="modal-body d-flex justify-content-center py-5">
            <p class="text-center"><i class="fa fa-check-circle" aria-hidden="true" style="font-size: 3em; color: rgb(7, 140, 145)"></i></p>
        </div>
        <h5 class="text-center" style="color: rgb(112, 112, 112);line-height: 1;">Palawan State University</h5>
        <p  class="text-center" style="color: rgb(112, 112, 112);line-height: 0.5;">Was successfully added as</p>
        <p  class="text-center" style="color: rgb(112, 112, 112);line-height: 0.3;">Educheck partner school</p>
        <div class="px-5 pt-4">
            <p style="line-height: 0.1; color: rgb(112, 112, 112)">Generated Username:</p>
            <p class="text-center" style="border: 1px solid rgb(112, 112, 112);color: rgb(112, 112, 112)">daasdas</p>
            <p style="line-height: 0.1;color: rgb(112, 112, 112)">Generated Password:</p>
            <p class="text-center" style="border: 1px solid rgb(112, 112, 112);color: rgb(112, 112, 112)">daasdas</p>
        </div>
      </div>
    </div>
  </div>
 

    

<script src="assets/bootstrap/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/popper.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>    
</body> 
</html>