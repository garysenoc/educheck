<?php

include 'includes/connect.php';
if(isset($_POST['submit_request'])){

    $school_name= mysqli_real_escape_string($cn,$_POST['school_name']);
    $school_address= mysqli_real_escape_string($cn,$_POST['school_address']);
    $firstname= mysqli_real_escape_string($cn,$_POST['requester_firstname']);
    $lastname= mysqli_real_escape_string($cn,$_POST['requester_lastname']);
    $fullname= $firstname." ".$lastname;
    $occupation= mysqli_real_escape_string($cn,$_POST['requester_occupation']);
    $email= mysqli_real_escape_string($cn,$_POST['requester_email']);
    $contact= mysqli_real_escape_string($cn,$_POST['requester_contact']);


    $result= $cn->query("INSERT INTO tbl_partnership_requests VALUES(null,'$firstname', '$lastname', '$occupation', '$email', '$contact','$school_name','$school_address','pending',now() )");

    if($result){
        ?>
    <a href="" hidden="" id="submitted_request" >submitted request</a>
    
    <input hidden='' name="a" class="requester_fullname"   value='<?= $fullname ?>'>    
    <input hidden='' name="c" class="requested_school" value='<?= $school_name ?>'>
    <input hidden='' name="a" class="requester_email"  value='<?= $email ?>'>

        <?php
    }
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
    <!-- <style type="text/css">
        .modal-dialog{
    position: relative;
    display: table; /* This is important */ 
    overflow-y: auto;    
    overflow-x: auto;
    width: auto;
    min-width: 300px;   
}
    </style> -->
</head>
<body background="assets/images/login_wallpaper.png" style="background-size: cover;">

    <nav class="d-flex justify-content-between nav-landing align-content-center">
        <img src="assets/images/educhecklogo.png" width="100" alt="">
        <div class="d-flex align-items-center justify-content-center">
            <a class="mr-2" href="" data-toggle="modal" data-target="#login">Login</a>
            <a href="" data-toggle="modal" data-target="#register">Register</a>
        </div>
    </nav>  


<div class="container">
    <section class="landing row">
        <aside class="col-lg-4 pb-5">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <h1 class="pb-5">Available on</h1>
                <div>
                    <p class="pb-3"><img src="assets/images/andoid.png" alt="" class="pr-2"> ANDROID</p>
                    <p><img src="assets/images/ios.png" style="width: 75px;" alt="" class="pr-2"> IOS</p>
                </div>
            </div>
        </aside>
        <aside class="col-lg-8" style="height: 100vh;">
            <div class="card-landing" >
                <h1 class="text-center" >About Online Grading</h1>
                <p >Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti impedit delectus dolorem, alias consequatur maxime commodi nostrum itaque quo consectetur expedita non. Eligendi tempora id, at ut iste dignissimos ratione alias blanditiis, aut consectetur, doloremque deleniti impedit officiis in repellat recusandae. Aliquam error molestiae incidunt exercitationem iusto reprehenderit. Vel, in!</p>
                <div class="d-flex justify-content-end">
                    <a href="" class="">LEARN MORE<i class="fas fa-sign-in-alt pl-2"></i></a>
                </div>
            </div>
        </aside>
    </section>
</div>

<div class="footer">
    <p style="text-align: left;margin-left: 2em; font-size: 14px;">Copyright &#169; 2020 All rights reserved | This Application is made by Teamder </p>
</div>




  
<div class="container">

<!-- LOGIN MODAL   -->  
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="landing-modal modal-content" style="width: 80% !important; height: 80% !important; margin-left: 10% !important;">
            <a href="" data-dismiss="modal" style="margin-top:10px; color: #CCCCCC; text-align: right; margin-right: 12px;" >X</a>
            <div class="modal-body d-flex justify-content-center py-2">
                <img src="assets/images/educhecklogo.png"  width="100" alt="">
            </div>
            <h1 class="text-center py-5">LOGIN</h1>
            <form action="login_check.php" method="post" class="d-flex flex-column align-items-center login-form">
                <div class="pb-5">
                    <input type="text" name="username" placeholder="USERNAME">
                </div>
                <div class="pt-1">
                    <input  type="password" name="password" placeholder="PASSWORD">
                </div>
                <a href="" style="margin-top: 13px !important;  margin-right: -30% !important; font-size: 12px;" class="pb-2">Forgot Password?</a>
                <div class="py-5">
                    <input type="submit" name="login" value="Login">
                </div>
            </form>
          </div>
        </div>
      </div>
</div>

<!--    REGISTER MODAL   -->  
    <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="landing-modal modal-content">
            <a href="" data-dismiss="modal" style="margin-top:10px; color: #CCCCCC; text-align: right; margin-right: 12px;" >X</a>
            <div class="modal-body d-flex justify-content-center py-3">
                <img src="assets/images/educhecklogo.png"  width="100" alt="">
            </div>
            <h1 class="text-center py-5">Request Partnership</h1>
            <form action="index.php" method="post"  class="d-flex flex-column align-items-center login-form">
                <div class="pt-1">
                    <input id="sname" type="text" name="school_name" placeholder="School Name">
                    <input id="saddress" type="text" name="school_address" placeholder="School Address">
                </div>
                <div class="pt-1">
                    <input id="sfn" type="text" name="requester_firstname" placeholder="Your Firstname">
                    <input id="sln" type="text" name="requester_lastname" placeholder="Your Lastname">
                </div>
                <div class="pt-1">
                    <input id="swork" type="text" name="requester_occupation" placeholder="Your Occupation">
                </div>
                <div class="pt-1">
                    <input id="semail" type="text" name="requester_email" placeholder="Email Address">
                    <input id="scontact" type="text" name="requester_contact" placeholder="Contact Number">
                </div>
                <span style="margin-top:10px;"><input  id="agree_to_terms" type="checkbox"> 
                <a href="" id="agree_to_terms" data-toggle="modal" data-target="#terms" class="pb-2" > Agree to Terms and Regulations</a></span>
                <div class="py-5">
                    <input id="submit_request"  type="submit" name="submit_request" value="Submit Request" style="background-color: #D4D4D4 !important;" disabled="">
                </div>
            </form>
          </div>
        </div>
      </div>
</div>
  
<!--  REQUEST SENT ALREADY -->
<div class="modal fade" id="sent_request" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document"1>
      <div class="landing-modal modal-content" style="width: 80% !important; padding: 7px !important; margin-left: 10% !important;">
        <div class="modal-body d-flex justify-content-center py-5" style="margin-bottom: -15px;">
            <p class="text-center"><i class="fa fa-check-circle" aria-hidden="true" style="font-size: 4em; color: rgb(7, 140, 145)"></i></p>
        </div>
        <p  class="text-center" style="color: rgb(112, 112, 112);line-height: 2;">Hi <span style="font-weight: 600 !important;" id="requester_name"></span>! Thank you for requesting your school <span style="font-weight: 600 !important;" id="requested_school"></span> to be one of EduCheck partner schools. We'll send an update on your email account <span style="font-weight: 600 !important;" id="requester_email"></span> once verified.</p>
        <div class="px-5 pt-4">

            <button type="submit" name="" class="close" data-dismiss="modal"  style="margin-bottom: 8px !important;border-radius: 25px !important; padding: 3px 20px; background-color: teal !important; color: white;"><small>Ok</small></button>
        </div>
      </div>
    </div>
  </div>

<!--    TERMS AND REGULATIONS MODAL   -->  
    <div class="modal fade" id="terms" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true"  >
        <div class="modal-dialog modal-dialog-centered" role="document" style="width: 500px !important">
          <div class="landing-modal modal-content" style="padding: 0.5em 2em">
            <div class="modal-body d-flex justify-content-center py-5" >
                <img src="assets/images/educhecklogo.png"  width="100" alt="">
            </div>
            <h1 class="text-center py-1">Privacy,Terms of Use and Regulations</h1>
            <p>
                Last updated [month day, year]

AGREEMENT TO TERMS

These Terms and Conditions constitute a legally binding agreement made between you, whether personally or on behalf of an entity (“you”) and [business entity name] (“we,” “us” or “our”), concerning your access to and use of the [website name.com] website as well as any other media form, media channel, mobile website or mobile application related, linked, or otherwise connected thereto (collectively, the “Site”).
<br>
You agree that by accessing the Site, you have read, understood, and agree to be bound by all of these Terms and Conditions. If you do not agree with all of these Terms and Conditions, then you are expressly prohibited from using the Site and you must discontinue use immediately.
<br>
Supplemental terms and conditions or documents that may be posted on the Site from time to time are hereby expressly incorporated herein by reference. We reserve the right, in our sole discretion, to make changes or modifications to these Terms and Conditions at any time and for any reason.
<br>
We will alert you about any changes by updating the “Last updated” date of these Terms and Conditions, and you waive any right to receive specific notice of each such change.
<br>
Accordingly, those persons who choose to access the Site from other locations do so on their own initiative and are solely responsible for compliance with local laws, if and to the extent local laws are applicable.

These terms and conditions were generated by Termly’s Terms and Conditions Generator.
<br>

DIGITAL MILLENNIUM COPYRIGHT ACT (DMCA) NOTICE AND POLICY

Notifications

We respect the intellectual property rights of others. If you believe that any material available on or through the Site infringes upon any copyright you own or control, please immediately notify our Designated Copyright Agent using the contact information provided below (a “Notification”).

<br><br>
<button type="submit" name="" class="close" data-dismiss="modal" style="font-size: 15px;"><small>Done Reading</small></button>
            </p>
          </div>
        </div>
      </div>
</div>
    

<script src="assets/bootstrap/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/popper.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>   
<script type="text/javascript" src="assets/js/script.js"></script> 
</body> 
</html>