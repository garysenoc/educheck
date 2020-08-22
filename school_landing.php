<?php 

include "includes/connect.php";

// ========================================
//    VERIFYING IF LOGGED IN SUCCESSFULLY
session_start();
    if(isset($_SESSION['school_admin_logged'])){
    ?>  

    <?php

//=========================================

//HEADER
    include "school_admin_header.php";
?>

 

<div class="container">
<div class="d-flex align-items-center logo-name mb-3">
    <img src="assets/images/logo.png" width="80" alt="">
    <div>
        <h5>PALAWAN STATE UNIVERSITY</h5>
        <H6>BGY. TINIGUIBAN P.P.C PALAWAN</H6>
    </div>
</div>


    <div class="row">
        <div class="col-md-12 col-lg-6 mb-5">
            <img src="assets/images/psu.png" style="display: block;max-width: 100%"  alt="">
        </div>
        <div class="col-md-12 col-lg-6 px-5">
            <div class="pb-5 px-5">
                <h6 class="text-center" style="font-weight:bold;color:rgb(112, 112, 112)">VISION</h6>
                <p style="color:rgb(126, 126, 126);text-align:justify">“A premier State University in the Southeast 
                    Asia that provides excellent and relevant Higher
                     Education for Sustainable Development.”
                </p>
            </div>
            <div class="px-5">
                <h6 class="text-center" style="font-weight:bold;color:rgb(112, 112, 112)">MISSION</h6>
                <p style="color:rgb(126, 126, 126);text-align:justify">“The Palawan State University is committed to 
                    upgrade the quality of life of the people by providing
                     higher education opportunities through excellent 
                    instruction, research, extension, production services 
                    and transnational collaboration and innovations.”</p>
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
})
</script>


<?php

// END OF VERIFYING SESSION
}else{
    
    header("Location:index.php");
}
?>


