<?php
include "includes/connect.php";
// }
// ========================================
//    VERIFYING IF LOGGED IN SUCCESSFULLY
session_start();
    if(isset($_SESSION['edu_admin_logged'])){
    ?>  

    <?php

//=========================================
//adding school
if(isset($_POST['add_school'])){
  $imgFile = $_FILES['user_image']['name'];
  $tmp_dir = $_FILES['user_image']['tmp_name'];
  $imgSize = $_FILES['user_image']['size'];

  if(empty($imgFile))
  {
    $err = "Please Select Image File";
    $school_logo='user.png';
  }

  else
  {
    $upload_dir = 'images/'; //upload diredctory image
    $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get img extension\
    $valid_extensions = array('jpeg','jpg','png','gif',);// valid extension
    $school_logo = rand(1000,1000000).".". $imgExt; // rename uploading imgae 
    $err = $school_logo;

    if(in_array($imgExt,$valid_extensions))
    {

      if ($imgSize<5000000)
      { // 5MB

        move_uploaded_file($tmp_dir,$upload_dir.$school_logo);
      }
         
   else
       { 
        $err = "Sorry, your file is too large";
       }

    }

   else
     {
        $err = "Sorry, only jpg,jpeg,png, and GIF are allowed";
      }
   
   }
                
    $school_name=  mysqli_real_escape_string($cn,$_POST['school_name']);
    $school_address= mysqli_real_escape_string($cn,$_POST['school_address']);
    $school_level=  mysqli_real_escape_string($cn,$_POST['school_level']);
    $sadmin_firstname= mysqli_real_escape_string($cn,$_POST['sadmin_firstname']);
    $sadmin_lastname= mysqli_real_escape_string($cn,$_POST['sadmin_lastname']);
    $sadmin_id_number= mysqli_real_escape_string($cn,$_POST['sadmin_id_number']);
    $school_email=  mysqli_real_escape_string($cn,$_POST['school_email']);
    $school_contact= mysqli_real_escape_string($cn,$_POST['school_contact']);
    $subscription_type= mysqli_real_escape_string($cn,$_POST['subscription_type']);
$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
$sadmin_password_generated =  substr(str_shuffle($permitted_chars), 0, 8 );
$password_encrpted = md5($sadmin_password_generated);
$qry = $cn -> query("INSERT INTO tbl_schools(school_id,school_name,school_address,school_level,sadmin_firstname,sadmin_lastname,sadmin_id_number,sadmin_username,sadmin_password,sadmin_email,sadmin_contact,school_logo,subscription_status,sadmin_img,account_date,edu_admin_id) values (null,
    '$school_name',
    '$school_address',
    '$school_level',
    '$sadmin_firstname',
    '$sadmin_lastname',
    '$sadmin_id_number',
    '$sadmin_id_number',
    '$password_encrpted',
    '$school_email',
    '$school_contact',
    '$school_logo',
    '$subscription_type',
    '',
    now(),
    '1')") or die (mysqli_error());



if($qry){
    ?>
    <a href="" hidden="" id="submit_school" >success</a>
    <a href="" hidden="" id="sound_success" >success</a>
    
    <input hidden='' name="b" class="sadmin_id_number"   value='<?= $sadmin_id_number ?>'>    
    <input hidden='' name="c" class="generated_password" value='<?= $sadmin_password_generated ?>'>
    <input hidden='' name="a" class="school_name"       value='<?= $school_name ?>'>
    
    <?php
}

    }




//adding admin
if(isset($_POST['submit_admin'])){

  $imgFile = $_FILES['admin_image']['name'];
  $tmp_dir = $_FILES['admin_image']['tmp_name'];
  $imgSize = $_FILES['admin_image']['size'];

  if(empty($imgFile))
  {
    $err = "Please Select Image File";
    $admin_image='user.png';
  }

  else
  {
    $upload_dir = 'images/'; //upload diredctory image
    $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get img extension\
    $valid_extensions = array('jpeg','jpg','png','gif',);// valid extension
    $admin_image = rand(1000,1000000).".". $imgExt; // rename uploading imgae 
    $err = $admin_image;

    if(in_array($imgExt,$valid_extensions))
    {

      if ($imgSize<5000000)
      { // 5MB

        move_uploaded_file($tmp_dir,$upload_dir.$admin_image);
      }
         
   else
       { 
        $err = "Sorry, your file is too large";
       }

    }

   else
     {
        $err = "Sorry, only jpg,jpeg,png, and GIF are allowed";
      }
   
   }
    $lastname=mysqli_real_escape_string($cn,$_POST['lastname']);
    $firstname=mysqli_real_escape_string($cn,$_POST['firstname']);
    $username=mysqli_real_escape_string($cn,$_POST['desired_username']);
    $password=mysqli_real_escape_string($cn,$_POST['desired_password']);
    $contact=mysqli_real_escape_string($cn,$_POST['contact']);
    $email=mysqli_real_escape_string($cn,$_POST['email']);
    $role=mysqli_real_escape_string($cn,$_POST['role']);

$password_encrpted = md5($password);
$qry = $cn -> query("INSERT INTO tbl_admin VALUES(null,
    '$lastname',
    '$firstname',
    '$username',
    '$password_encrpted',
    '$role',
    'active',
    '$admin_image',
    '$contact',
    '$email',
    now(),
    '1' )") or die (mysqli_error());



    }

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
        <img src="assets/images/educhecklogo.png" width="60" alt="">
        <li><a href="create_school_account.php" class="cool-link ">Dashboard</a></li>
        <li><a href="partners.php" class="cool-link">Partners</a></li>
        <li><a href="" class="active cool-link">Create School Account</a></li>
        <li><a href="" data-toggle="modal" data-target="#create_edu_admin" class="cool-link">Create Educheck admin</a></li>
        <li><a href="members.php" class="cool-link">Members</a></li>
        <li><a href="edu_messages.php" class="cool-link">Request</a></li>
        <li><a href="edu_feedback.php" class="cool-link">Feedback</a></li>
    </ul>
    <ul class="d-flex align-items-center py-3 pr-3">
        <li><a href="" class="pr-0"><i class="far fa-bell"></i><span class="badge badge-light">9</span></a></li>
        <li><a href="" id="profile">Marcelito Cosicol</a></li>
        <li><a href="" id="profile_image" class="pl-0"><img src="assets/images/<?= $_SESSION['edu_admin_img']; ?>" class="rounded-circle" width="40" alt=""></a></li>
    </ul>
</nav>    

<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a   href="create_school_account.php">Dashboard</a>
        <a href="partners.php">Partners</a>
        <a class="active" href="create_school_account.php">Create School Account</a>
        <a href="members.php">Members</a>
        <a href="#">Request</a>
        <a href="#">Feedback</a>
  </div>    

<div class="container"> 
    <div class="card-dashboard card-create-school px-5 py-4">
       <h6 class="pb-4">CREATE SCHOfffefeddeefOL ACCOUNT</h6>
       <form action="create_school_account.php" method="post" enctype="multipart/form-data">
           <div class="row">
            <div class="col-sm-12 col-lg-6 left-side-form pr-lg-5">
                <div class="d-flex justify-content-center justify-content-lg-end">
                    <label for="school_name">School Name:</label>
                    <input type="text" name="school_name" id="school_name">
                </div>
                <div class="d-flex justify-content-center justify-content-lg-end">
                    <label for="school_address">School Address:</label>
                    <input type="text" name="school_address" id="school_address">
                </div>
                <div class="d-flex justify-content-center justify-content-lg-end">
                    <label for="school_level">School Level:</label>
                    <select name="school_level" id="school_level">
                        <option value=""></option>
                        <option value="Primary">Primary</option>
                        <option value="Secondary">Secondary</option>
                        <option value="Tertiary">Tertiary</option>
                        <option value="College">College</option>
                    </select>
                </div>
                <div class="d-flex justify-content-center justify-content-lg-end">
                    <label for="school_principal">Admin Info___________________________</label>
                </div>
                <div class="d-flex justify-content-center justify-content-lg-end">
                    <label for="school_principal">Firstname:</label>
                    <input type="text" name="sadmin_firstname" id="school_principal">
                    
                </div>
                <div class="d-flex justify-content-center justify-content-lg-end">
                    <label for="school_principal">Lastname:</label>
                    <input type="text" name="sadmin_lastname" id="school_principal">
                </div>
                <div class="d-flex justify-content-center justify-content-lg-end">
                    <label for="school_principal">ID Number.:</label>
                    <input type="text" name="sadmin_id_number" id="school_principal">
                </div>
            </div>
            <div class="col-sm-12 col-lg-6 right-side-form pr-lg-5">
                <div class="d-flex justify-content-center justify-content-lg-center" style="position: relative;">
                    <label for="photo">Logo:</label>
                    <img id="user_image" src="" alt="" style="height: 80px; border: solid 1px grey; border-radius: 50%; width: 80px !important;">
                    <input name="user_image" type="file" id="file-field" accept="image/*"  onchange="previewImage(event)" style="display: none;">
                        <label for="file-field" class="file-label"  style="color:white !important;border: 1px solid rgb(7, 140, 145);position: absolute;top: 50px;right:55px;color: rgb(126, 126, 126);padding-bottom: none !important; padding: 3px 10px !important; border-radius: 1em; background-color: teal;"> Browse
                        </label>
                                            <script type="text/javascript">
                                                console.log('hsdasda');
                                                function previewImage(event){
                                                    console.log('h');
                                                    var reader= new FileReader();
                                                    var imageField= document.getElementById("user_image");
                                                    reader.onload= function(){
                                                        if(reader.readyState ==2){
                                                            imageField.src= reader.result;
                                                        }
                                                    }
                                                    reader.readAsDataURL(event.target.files[0]);
                                                }
                                                
                                            </script>
                    
                    <input class="" type="text" name="photo" id="photo" style="width: 1px; border:none">
                </div>
                <div class="d-flex justify-content-center justify-content-lg-end">
                    <label for="school_email">School Email:</label>
                    <input type="text" name="school_email" id="school_email">
                </div>
                <div class="d-flex justify-content-center justify-content-lg-end">
                    <label for="school_contact">School Contact No:</label>
                    <input type="text" name="school_contact" id="school_contact">
                </div>
                <div class="d-flex justify-content-center justify-content-lg-end">
                    <label for="school_contact">Subscription Type:</label>
                    <input type="text" name="subscription_type" id="subscription_status">
                </div>
            </div>
           </div>
            <div class="d-flex justify-content-end">
        <button type="submit" name="add_school"  class="btn">Submit</button>
        </div>
            
       </form>
      
      
    </div>
</div>


<!-- SCHOOL ADDED SUCCESSFULLY MODAL -->
<div class="modal fade" id="school_added_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document"1>
      <div class="landing-modal modal-content">
        <div class="modal-body d-flex justify-content-center py-5" style="margin-bottom: -15px;">
            <p class="text-center"><i class="fa fa-check-circle" aria-hidden="true" style="font-size: 3em; color: rgb(7, 140, 145)"></i></p>
        </div>
        <h5 class="text-center" name='a' id="the_school_name" style="color: rgb(112, 112, 112);line-height: 1;"></h5>
        <p  class="text-center" style="color: rgb(112, 112, 112);line-height: 0.5;">Was successfully added as</p>
        <p  class="text-center" style="color: rgb(112, 112, 112);line-height: 0.3;">Educheck partner school</p>
        <div class="px-5 pt-4">
            <p style="line-height: 0.1; color: rgb(112, 112, 112)">Account Username:</p>
            <p class="text-center" name='b' id="generated_username" style="border: 1px solid rgb(112, 112, 112);color: rgb(112, 112, 112)"></p>
            <p style="line-height: 0.1;color: rgb(112, 112, 112)">Generated Password:</p>
            <p class="text-center" name='c' id="the_generated_password" style="border: 1px solid rgb(112, 112, 112);color: rgb(112, 112, 112)"></p>

            <a class="btn" href=""  style="color: #85C1E9;"><i class="fa fa-envelope"></i> Send to gmail</a>
            <a type="submit" name="" class="btn" href="partners.php" style="margin-left: 50% !important;">Ok</a>
        </div>
      </div>
    </div>
  </div>
 

 <!-- CREAT EDUCHECK ADMIN MODAL -->
    <div class="modal fade" id="create_edu_admin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="landing-modal modal-content">
            <a href="" data-dismiss="modal" style="margin-top:10px; color: #CCCCCC; text-align: right; margin-right: 12px;" >X</a>
            <div class="modal-body d-flex justify-content-center py-5">
                <img src="assets/images/educhecklogo.png"  width="100" alt="">
            </div>
            <h1 class="text-center py-5">Create EduCheck Administrator</h1>
            <form action="create_school_account.php" method="post" enctype="multipart/form-data"  class="d-flex flex-column align-items-center login-form">
                    <img id="admin_image" src="" alt="" style="height: 80px; border: solid 1px grey; border-radius: 50%; width: 80px !important;">
                    <input name="admin_image" type="file" id="admin-field" accept="image/*"  onchange="previewImage(event)" style="display: none;">
                        <label for="admin-field" class="file-label"  style="color:grey !important;position: padding-bottom: none !important; padding: 3px 10px !important; border-radius: 1em; background-color: transparent;"> Browse Profile Pic
                        </label>
                                            <script type="text/javascript">
                                                function previewImage(event){
                                                    var reader= new FileReader();
                                                    var imageField= document.getElementById("admin_image");
                                                    reader.onload= function(){
                                                        if(reader.readyState ==2){
                                                            imageField.src= reader.result;
                                                        }
                                                    }
                                                    reader.readAsDataURL(event.target.files[0]);
                                                }
                                                
                                            </script>




                <div class="pt-1">
                    <input type="text" name="lastname" placeholder="Lastname">
                    <input type="text" name="firstname" placeholder="Firstname">
                </div>
                <div class="pt-1">
                    <input type="text" name="desired_username" placeholder="Your desired_username">
                    <input type="password" name="desired_password" placeholder="desired_password">
                </div>
                <div class="pt-1">
                    <input type="text" name="contact" placeholder="Contact">
                    <input type="text" name="email" placeholder="Email">
                </div>
                <div class="d-flex justify-content-center justify-content-lg-end" style="margin-top: 7px !important;">
                    <label for="school_level" style="margin-top: 5px !important; content: grey !important">Role:</label>
                    <select name="role" id="role" style="border: none !important;">
                        <option value=""></option>
                        <option value="Admin">Admin</option>
                        <option value="Encoder">Encoder</option>
                    </select>
                </div>

                <div class="py-5">
                    <input id="submit_admin"  type="submit" name="submit_admin" value="Submit">
                </div>
            </form>
          </div>
        </div>
      </div>

    

<script src="../assets/bootstrap/js/jquery.min.js"></script>
<script src="../assets/bootstrap/js/popper.min.js"></script>
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>    
<script type="text/javascript" src="../assets/js/script.js"></script>
</body> 
</html>

<!-- END OF SESSION VERIFYING -->
<?php

    }else{
        header('Location:index.php');
    }
?>




