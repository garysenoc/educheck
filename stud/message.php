<?php
session_start();
include "../includes/connect.php";

include "../stud/stud_header.php";
?>
    
<div class="container-fluid post-page">
    <div class="row">
        <div class="col-lg-3">
            <div class="card" style="overflow-y: auto;border:none; border-right: 1px solid rgb(187, 187, 187);height: 80vh;">
                <div class="card-body">
                 <h6 style="font-weight: 600;color:rgb(112, 112, 112)" class="text-center">ONLINE</h6>

                 <form action="" class="d-flex flex-column pb-4">
                     <input type="text" placeholder="Search" style="padding: 0.2em 2em;outline:none;border:1px solid rgb(112, 112, 112);">
                     <span style="position: absolute; left: 25px;top:53px;"><i class="fas fa-search"></i></span>
                 </form>
                
                <!-- users -->
                <div class="px-3 pb-4 d-flex align-items-center justify-content-between" style=" padding: 5px; max-height: 70px; background-color: #F6FAFB;">
                    <div class="d-flex align-items-center">
                        <img src="../images/pic1.jpg" width="30" class="rounded-circle mr-3" alt="">
                        <span style="width: 5px; background-color: #5CDF63; border-radius: 50%; margin-left: -25px; margin-bottom: -20px; margin-right: 5px; padding: 5px;"></span>
                        <h6 style="font-size: 0.8em;">Angela Tan</h6>
                    </div>
                    <div>
                        <div class="btn-group dropright">
                            <a data-toggle="dropdown">
                                <i style="font-size: 1em;color:rgb(166, 166, 166)" class="fas fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="px-3 pb-4 d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <img src="../images/net.jpg" width="30" class="rounded-circle mr-3" alt="">
                        <span style="width: 5px; background-color: #5CDF63; border-radius: 50%; margin-left: -25px; margin-bottom: -20px; margin-right: 5px; padding: 5px;"></span>
                        <h6 style="font-size: 0.8em;">Nestor Kenneth</h6>
                    </div>
                    <div>
                        <div class="btn-group dropright">
                            <a data-toggle="dropdown">
                                <i style="font-size: 1em;color:rgb(166, 166, 166)" class="fas fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    
                </div>

                <div class="px-3 pb-4 d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <img src="../images/pic5.jpg" height="30" width="30" class="rounded-circle mr-3" alt="">
                        <span style="width: 5px; background-color: #5CDF63; border-radius: 50%; margin-left: -25px; margin-bottom: -20px; margin-right: 5px; padding: 5px;"></span>
                        <h6 style="font-size: 0.8em; ">Alfred Bentor</h6>
                    </div>
                    <div>
                        <div class="btn-group dropright">
                            <a data-toggle="dropdown">
                                <i style="font-size: 1em;color:rgb(166, 166, 166)" class="fas fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-3 pb-4 d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <img src="../images/pic4.jpg" height="30" width="30" class="rounded-circle mr-3" alt="">
                        <span style="width: 5px; background-color: #5CDF63; border-radius: 50%; margin-left: -25px; margin-bottom: -20px; margin-right: 5px; padding: 5px;"></span>
                        <h6 style="font-size: 0.8em; ">Kayce Berter</h6>
                    </div>
                    <div>
                        <div class="btn-group dropright">
                            <a data-toggle="dropdown">
                                <i style="font-size: 1em;color:rgb(166, 166, 166)" class="fas fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-3 pb-4 d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <img src="../images/pic7.jpg" height="30" width="30" class="rounded-circle mr-3" alt="">
                        <span style="width: 5px; background-color: #5CDF63; border-radius: 50%; margin-left: -25px; margin-bottom: -20px; margin-right: 5px; padding: 5px;"></span>
                        <h6 style="font-size: 0.8em; ">Dodong Charing Jr.</h6>
                    </div>
                    <div>
                        <div class="btn-group dropright">
                            <a data-toggle="dropdown">
                                <i style="font-size: 1em;color:rgb(166, 166, 166)" class="fas fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>

                
                <!-- users -->
                
            </div>
        </div>
        <div class="col-lg-7" style="height: 80vh;">
            <div class="card" style="border:none">
                <div class="card-body">
                    <div style="display: inline-block;" class="d-flex justify-content-center pb-5">
                        <div class="d-flex align-items-center" style=" padding: 0.5em 2em;border-radius: 1em;background-color: rgb(7, 140, 145);">
                            <img src="../images/pic1.jpg" width="30" class="rounded-circle mr-2" alt="">
                            <h6 class="text-white">Angela Tan</h6>
                        </div>
                    </div>

                    <!-- Actual Messages Here -->
                    <!-- Reciever -->
                    <div class="d-flex align-items-center pb-5">
                        <div>
                            <img src="../images/pic1.jpg" class="rounded-circle" width="50" alt="">
                            <p style="position: absolute; margin-top: 10px !important; font-size: 0.8em;color: rgb(126, 126, 126);">Angela Tan</p>
                        </div>
                        <div style="position: relative;">
                            <p style="position: absolute;font-size: 0.6em; top:-15px;right:10px">10:45 pm</p>
                            <p class="mx-2 mb-0 px-3 py-2" style="color: rgb(112, 112, 112);border: 1px solid rgb(7, 140, 145);border-radius: 1em;">Hi sir Jason, this is my report card for 4th quarter. 
                            </p>
                             
                        </div>
                        <div class="btn-group dropright">
                            <a data-toggle="dropdown">
                                <i style="font-size: 1em;color:rgb(166, 166, 166)" class="fas fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12 mb-5" style="background-color: #F6FAFB; width: 50%; border-radius: 5px;">
                        <div class="row"  style="padding: 4px;">
                            <img src="../assets/images/excel.png" style="display: block;width: 65px; border-radius: 4px;"  alt="">
                                <label style="text-decoration: underline; display: inline; font-size: 14px; margin-top: 15px;">Angela Tan's Report Card.xlsx</label>
                        </div>
                                
                            </div>
                    <!-- Reciever -->
                    <!-- Sender -->
                    <div class="d-flex align-items-center justify-content-end pb-5">
                        <div style="position: relative;">
                            <p style="position: absolute;font-size: 0.6em; top:-15px;right:80px">10:45 pm</p>
                            <p class="mx-2 mb-0 px-3 py-2" style="color: white;background-color:  rgb(7, 140, 145);border-radius: 1em;">Thank you! I'll check it. </p>
                            <p style="position: absolute; font-size: 0.8em;color: rgb(126, 126, 126);right: 20px">You</p>
                        </div>
                        <div class="btn-group dropright">
                            <a data-toggle="dropdown">
                                <i style="font-size: 1em;color:rgb(166, 166, 166)" class="fas fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <!-- Sender -->
                    
                </div>
            </div>
        </div>
</div>
   
<div style="background-color: white;" class="footer">
    <div class="d-flex justify-content-between ">
        <span id="message" class="d-inline-block" style="color:rgb(7, 140, 145); font-size: 2em; "></span>
        <div class="pb-2" style="padding-right: 15em; position: relative;">
            <label id="new_btn" for="" style="
            display: inline-block;
            padding: 6px 12px;
            cursor: pointer;
            color: rgb(142, 142, 142);
            font-size: 1.5em;
            position: absolute;
            bottom: -3px
            ">
                <i class="fa fa-paperclip"></i>
                <input id="old_btn" type="file" style="display: none; z-index: 2;">
            </label>    
            <input placeholder="Enter Message Here" type="text" class="py-2 px-5" style="border: 1px solid rgb(126, 126, 126);width: 70vw;border-radius: 1em;outline: none;">
            <span style="position: absolute;bottom: 13px;right:255px;color: rgb(7, 140, 145); font-size: 1.4em;"><i class="fas fa-paper-plane"></i></span>
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