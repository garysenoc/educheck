<?php
//HEADER
    include "school_admin_header.php";
?> 

<div class="container">
    
    <h4 style="margin-bottom: -35px;">Report Cards</h4>

    <div style="margin-bottom: -4em; margin-top:5em; position:relative">
        <span style="position:absolute;bottom:4px; left:0.8em;color:rgb(112, 112, 112)"><i class="fas fa-search"></i></span>
        <input type="text" placeholder="Search" style="outline:none;color:rgb(112, 112, 112)" class="px-5">

        <select style="font-size: 0.8em;outline:none;border:none; width: 120px;color:rgb(112, 112, 112);">
          <option value="">All Departments</option>
          <option value="">Block 1-BSCS</option>
          <option value="">Block 2-BSCS</option>
          <option value="">Block 2-BSHM</option>
          <option value="">Block 2-BSIT</option>
      </select>
    </div>

    <table class="tables" style="width:100%">
        <tr>
          <th class="hidden">  
          </th>
          <th>Name</th>
          <th>Status</th> 
          <th>Attached File</th>
          <th class="hidden">Action</th>
          <th>Total: 3</th>
        </tr>
        <tr>
          <td class="hidden"><img src="../images/pic1.jpg" height="50"  class="rounded-circle mr-3" width="50" alt=""> </td>
          <td>Angela Tan</td>
          <td>Submitted</td>
          <td style="color:rgb(79, 138, 219)">Excel_File.xlsx</td>
          <td class="message-button hidden">
               <a href="#"> <span class="message-text">Message</span></a>
               <a href="#" style="background:white;border:1px solid rgb(7, 140, 145);color:rgb(7, 140, 145)"><span class="message-icon"><i class="far fa-comment-dots"></i></span> <span class="message-text">Remind</span></a>
            </td>
          <td class="hidden">
            <span class="d-flex align-items-center" style="color: rgb(7, 140, 145);"><i style="font-size: 2em;" class="fas fa-paper-plane"></i><span style="font-size:0.8em;margin-left:1em">Send to Student</span></span>
          </td>
          <td class="hide-dot ">
            <div class="ml-3 btn-group dropright">
              <button style="border:none;ouline:none;background-color:white" class="d-inline-block d-lg-none" data-toggle="dropdown">
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
          <td class="hidden"><img src="../images/pic7.jpg" height="50"  class="rounded-circle mr-3" width="50" alt=""> </td>
          <td>Argel Delasco</td>
          <td>Submitted</td>
          <td style="color:rgb(79, 138, 219)">Excel_File.xlsx</td>
          <td class="message-button hidden">
               <a href="#"> <span class="message-text">Message</span></a>
               <a href="#" style="background:white;border:1px solid rgb(7, 140, 145);color:rgb(7, 140, 145)"><span class="message-icon"><i class="far fa-comment-dots"></i></span> <span class="message-text">Remind</span></a>
            </td>
          <td class="hidden">
            <span class="d-flex align-items-center" style="color: rgb(7, 140, 145);"><i style="font-size: 2em;" class="fas fa-paper-plane"></i><span style="font-size:0.8em;margin-left:1em">Send to Student</span></span>
          </td>
          <td class="hide-dot ">
            <div class="ml-3 btn-group dropright">
              <button style="border:none;ouline:none;background-color:white" class="d-inline-block d-lg-none" data-toggle="dropdown">
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
          <td class="hidden"><img src="../images/pic5.jpg" height="50"  class="rounded-circle mr-3" width="50" alt=""> </td>
          <td>Mark Angelo</td>
          <td>Submitted</td>
          <td style="color:rgb(79, 138, 219)">Excel_File.xlsx</td>
          <td class="message-button hidden">
               <a href="#"> <span class="message-text">Message</span></a>
               <a href="#" style="background:white;border:1px solid rgb(7, 140, 145);color:rgb(7, 140, 145)"><span class="message-icon"><i class="far fa-comment-dots"></i></span> <span class="message-text">Remind</span></a>
            </td>
          <td class="hidden">
            <span class="d-flex align-items-center" style="color: rgb(7, 140, 145);"><i style="font-size: 2em;" class="fas fa-paper-plane"></i><span style="font-size:0.8em;margin-left:1em">Send to Student</span></span>
          </td>
          <td class="hide-dot ">
            <div class="ml-3 btn-group dropright">
              <button style="border:none;ouline:none;background-color:white" class="d-inline-block d-lg-none" data-toggle="dropdown">
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