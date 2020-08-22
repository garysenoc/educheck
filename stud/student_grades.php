'<!DOCTYPE html>
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


  <div class="row">
    <div class="d-inline-block col-lg-6" style="">
        <h6 style="font-weight: bold;border-bottom: 1px solid rgb(7, 140, 145);color:rgb(112, 112, 112)">MATH QUIZ#1</h6>
        <p style="font-size: 0.8em;color:rgb(112, 112, 112)">Activity Name</p>
    </div>
    <div class="d-inline-block col-lg-6 pt-4 d-flex flex-column align-items-end" style="padding: 0 3em;">
      <div class="d-flex justify-content-end">
        <span class="mr-2" style="color: rgb(126, 127, 128)">Excellent</span>
        <div class="progress" style="width: 50vw;max-width: 300px;"">
          <div class="progress-bar progress-bar-success progress-bar-striped active" style="width:100%;background-color: rgb(16, 211, 188) !important;color:white" role="progressbar"
          aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
          100
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-end">
        <span class="mr-2" style="color: rgb(126, 127, 128)">Very Good</span>
        <div class="progress" style="width: 50vw;max-width: 300px;"">
          <div class="progress-bar progress-bar-success progress-bar-striped active" style="width:75%;background-color: rgb(87, 227, 44) !important;color:white" role="progressbar"
          aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
            75
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-end">
        <span class="mr-2" style="color: rgb(126, 127, 128)">Good</span>
        <div class="progress" style="width: 50vw;max-width: 300px;"">
          <div class="progress-bar progress-bar-success progress-bar-striped active" style="width:50%;background-color: rgb(247, 233, 66) !important;color:white" role="progressbar"
          aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
           50
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-end">
        <span class="mr-2" style="color: rgb(126, 127, 128)">Poor</span>
        <div class="progress" style="width: 50vw;max-width: 300px;">
          <div class="progress-bar progress-bar-success progress-bar-striped active" style="width:30%;background-color: rgb(247, 156, 66) !important;color:white" role="progressbar"
          aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
          30
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-end">
        <span class="mr-2" style="color: rgb(126, 127, 128)">Very Poor</span>
        <div class="progress" style="width: 50vw;max-width: 300px;">
          <div class="progress-bar progress-bar-danger progress-bar-striped active" style="width:30%;background-color: rgb(247, 66, 66) !important;color:white" role="progressbar"
          aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
          30
          </div>
        </div>
      </div>
      
    </div>
</div>



<div style="margin-bottom: -4em; margin-top:5em; position:relative">
      
           
            <input type="text" placeholder="Search" style="outline:none;color:rgb(112, 112, 112)" class="pl-3">  
            <select class="ml-4" style="font-size: 0.8em;outline:none;border:none; width: 100px;color:rgb(112, 112, 112);">
                <option value="">All Block</option>
                <option value="">Block 1-BSCS</option>
                <option value="">Block 2-BSCS</option>
                <option value="">Block 2-BSHM</option>
                <option value="">Block 2-BSIT</option>
            </select>
       </div>

        

      <form action="" class="d-flex mt-1">
        
        <div>
            <label class="checkbox-container">
            <input type="checkbox">
            <span class="checkmark"></span>
            </label>
        </div>
        <div>
            <label class="checkbox-container" style="">
            <input type="checkbox">
            <span class="checkmark" style="background-color: rgb(16, 211, 188);"></span>
            </label>
        </div>
        <div>
            <label class="checkbox-container">
            <input type="checkbox">
            <span class="checkmark" style="background-color: rgb(87, 227, 44);"></span>
            </label>
        </div>
        <div>
            <label class="checkbox-container">
            <input type="checkbox">
            <span class="checkmark" style="background-color: rgb(247, 233, 66);"></span>
            </label>
        </div>
        <div>
            <label class="checkbox-container">
            <input type="checkbox">
            <span class="checkmark" style="background-color: rgb(247, 156, 66);"></span>
            </label>
        </div>
        <div>
            <label class="checkbox-container">
            <input type="checkbox">
            <span class="checkmark" style="background-color: rgb(247, 66, 66);"></span>
            </label>
        </div>
    </form>


    


    <table class="tables" style="width:100%">
        <tr>
          <th class="hidden">
            
        </th>
          <th>Name</th>
          <th>Activity#1</th> 
          <th>Activity#2</th>
          <th>Quiz#1</th>
              <th>Quiz#2</th>
          <th>Overall Status</th>
          <th><a href="" style="color: rgb(7, 140, 145); text-decoration:none"><i class="fas fa-paper-plane mr-2"></i><span style="font-size: 0.8em;">Send to All</span></a></th>
        </tr>
        <tr>
          <td class="hidden"><img src="assets/images/profile.jpg"  class="rounded-circle mr-3" width="50" alt=""> </td>
          <td>John Doe</td>
          <td>30</td>
          <td>31</td>
          <td>31</td>
          <td>11</td>
          <td style="color: rgb(87, 227, 44)">Very Good!</td>
          <td class="message-button">
            <a href="#"><span class="message-icon"><i class="far fa-comment-dots"></i></span> <span class="message-text">Send</span></a>
          </td>
        </tr>

        <tr>
            <td class="hidden"><img src="assets/images/profile.jpg"  class="rounded-circle mr-3" width="50" alt=""> </td>
            <td>John Doe</td>
            <td>30</td>
            <td>31</td>
            <td>31</td>
            <td>11</td>
            <td style="color: rgb(247, 233, 66)">Good</td>
            <td class="message-button">
              <a href="#" style="background-color: rgb(243, 243, 243);color: rgb(206, 206, 206);"><span class="message-icon"><i class="far fa-comment-dots"></i></span> <span class="message-text">Send</span></a>
            </td>
          </tr>
      
        
    </table>
</div>


    

<script src="../assets/bootstrap/js/jquery.min.js"></script>
<script src="../assets/bootstrap/js/popper.min.js"></script>
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>    
<script src="../assets/js/script.js"></script>
</body> 
</html>

<script>
    $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>