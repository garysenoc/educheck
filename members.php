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
            <li><a href="" class=" cool-link ">Dashboard</a></li>
            <li><a href="partners.php" class=" cool-link">Partners</a></li>
            <li><a href="create_school_account.php" class="cool-link">Create School Account</a></li>
            <li><a href="members.php" class="active cool-link">Members</a></li>
            <li><a href="" class="cool-link">Message</a></li>
            <li><a href="" class="cool-link">Feedback</a></li>
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
    


      <h6 style="margin-bottom: -20px;">EduCheck Partner Schools</h6>
    <table style="width:100%" >
        <tr>
          <th><small>Total: 4</small></th>
          <th>School</th>
          <th class="hidden">Contact</th> 
          <th class="hidden">Email</th>
          <th>Subscription</th>
          <th></th>
          <th></th>
        </tr>
        <tr>
          <td >
            <img src= "images/psulogo.png"   class="rounded-circle mr-3" width="50" alt=""> 
          </td>
          <td>PSU LAB HIGH</td>
          <td class="hidden">09125326347</td>
          <td class="hidden">psulabhigh@gmail.com</td>
          <td>9 Months Left</td>
          <td class="message-button">
            <a href="#">Message</a>
          </td>
          <td>
                        <div class="ml-3 btn-group dropright">
              <button data-toggle="dropdown" style="border: none; outline: none;background-color: white">
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
          <td class="hidden">09125326347</td>
          <td class="hidden">sanjoseschool@gmail.com</td>
          <td>11 Months Left</td>
          <td class="message-button">
            <a href="#">Message</a>
          </td>
          <td>
            <div class="ml-3 btn-group dropright">
              <button data-toggle="dropdown" style="border: none; outline: none;background-color: white">
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