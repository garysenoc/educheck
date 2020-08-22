<?php
include "../includes/connect.php";
?>
<?php include "../edu/edu_header.php"; ?>


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

        <?php

        $result= $cn->query("SELECT * FROM tbl_schools ORDER BY school_name ASC");
        while ($row= mysqli_fetch_array($result) ){
          $school_id= $row['school_id'];
          $school_logo= $row['school_logo'];
          $school_name= $row['school_name'];
          $sadmin_contact= $row['sadmin_contact'];
          $sadmin_email= $row['sadmin_email'];
          $subscription_status= $row['subscription_status'];
      ?>
      <tr>
          <td >
            <img src= "images/<?=$school_logo?>"   class="rounded-circle mr-3" width="50" alt=""> 
          </td>
          <td><?=$school_name?></td>
          <td class="hidden"><?=$sadmin_contact?></td>
          <td class="hidden"><?=$sadmin_email?></td>
          <td><?=$subscription_status?></td>
          <td class="message-button">
            <a href="#">Message</a>
          </td>
          <td>
                        <div class="ml-3 btn-group dropright">
              <button data-toggle="dropdown" style="border: none; outline: none;background-color: white">
                  <i style="font-size: 1.4em;color:rgb(166, 166, 166)" class="fas fa-ellipsis-v"></i>
              </button>
              <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">More Info</a>
                  <a class="dropdown-item" href="#">Edit</a>
                  <a class="dropdown-item" href="#">Activate</a>
                  <a class="dropdown-item" href="#">Deactivate</a>
                  <a class="dropdown-item" href="#">Remove From List</a>
              </div>
            </div>
          </td>
        </tr>

      <?php    

        }


        ?>

        
      
        
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