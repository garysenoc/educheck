<?php
//HEADER
    include "school_admin_header.php";
?>

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
            <div class="card" style="border-color: rgb(7, 140, 145); border-radius: 1.5em;">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                            <img src="assets/images/profile.jpg" width="40" class="rounded-circle mr-2" alt="">
                            <h6 style="font-size: 0.8em;">Nestor Kenneth Aniar</h6>
                        </div>
                        <select name="" id="" style="font-size:0.8em;border:none; width: 120px;outline: none;">
                            <option value="">To All </option>
                            <option value="">To All Teachers</option>
                            <option value="">To All Students</option>
                        </select>
                    </div>
                    <div class="px-5 pt-3 pb-5">
                        <input style="outline:none;border:none; border-bottom: 2px solid rgb(7, 140, 145);width: 100%;" type="text" placeholder="Submission of Application for.....">
                    </div>
                    <div>
                        <form action="">
                            <div class="d-flex justify-content-end align-items-start post-form">
                                <label id="new_btn" for="" style="
                                display: inline-block;
                                padding: 6px 12px;
                                cursor: pointer;
                                color: rgb(142, 142, 142);
                                font-size: 1.5em;
                                ">
                                    <i class="fa fa-paperclip"></i>
                                    <input id="old_btn" type="file" style="display: none; z-index: 2;">
                                </label>
                            
                                <a href="" class="mr-2">Cancel</a>
                                <input type="submit" value="POST" >
                            </div>
                        </form>
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