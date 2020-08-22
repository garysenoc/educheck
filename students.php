<?php
//HEADER
    include "school_admin_header.php";
?> 

<div class="container">
    



    <table class="tables" style="width:100%">
        <tr>
          <th class="hidden"></th>
          <th>Name</th>
          <th class="hidden">Contact</th> 
          <th class="hidden">Email</th>
          <th>Student ID</th>
          <th>Total: 4</th>
        </tr>
        <tr>
          <td class="hidden"><img src="assets/images/profile.jpg"  class="rounded-circle mr-3" width="50" alt=""> </td>
          <td>John Doe</td>
          <td class="hidden">09125326347</td>
          <td class="hidden">artart@Gmail.com</td>
          <td>PSUT2019-435-1203</td>
          <td class="message-button">
            <a href="#"><span class="message-icon"><i class="far fa-comment-dots"></i></span> <span class="message-text">Message</span></a>
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