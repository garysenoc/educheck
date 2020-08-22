<?php
//HEADER
    include "school_admin_header.php";
?> 

<div class="container">

    <h2 class="text-center" style="color: rgb(126, 126, 126)">Assesment Form</h2>


    <table class="tables" style="width:100%">
        <tr>
          <th class="hidden"></th>
          <th>Teacher</th>
          <th>Course</th> 
          <th>Total: 4</th>
        </tr>
        <tr>
          <td class="hidden"><img src="assets/images/profile.jpg"  class="rounded-circle mr-3" width="50" alt=""> </td>
          <td>John Doe</td>
          <td>ES036B Environmental Science (E2/E3-C1)</td>
          <td class="message-button">
            <a href="#"><span class="message-icon">Message</span> <span class="message-text">Message</span></a>
          </td>
        </tr>

        <tr>
            <td class="hidden"><img src="assets/images/profile.jpg"  class="rounded-circle mr-3" width="50" alt=""> </td>
            <td>John Doe</td>
            <td>ES036B Environmental Science (E2/E3-C1)</td>
            <td class="message-button">
              <i class="fas fa-check-circle" style="font-size: 2em;color: rgb(7, 140, 145);"></i>
            </td>
          </tr>
      
        
    </table>
    <div class="row">
        <input type="submit" class="my-3 ml-auto" style="background-color: rgb(7, 140, 145);color:white; border:none; outline: none; padding: 0.5em 1em; border-radius: 1.5em;">
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