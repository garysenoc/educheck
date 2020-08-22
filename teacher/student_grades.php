<?php
//HEADER
    include "teacher_header.php";
?>
<div class="container">


  <div class="row">
    <div class="d-inline-block col-lg-6" style="">
        <h6 style="font-weight: bold;border-bottom: 1px solid rgb(7, 140, 145);color:rgb(112, 112, 112)">MATH QUIZ#1</h6>
        <p style="font-size: 0.8em;color:rgb(112, 112, 112)">Activity Name</p>
    </div>
    <div class="d-inline-block col-lg-6 pt-4 d-flex flex-column align-items-end" style="padding: 0 3em;">
      <div class="d-flex justify-content-end">
        <span class="mr-2" style="color: rgb(126, 127, 128)">Excellent</span>
        <div class="progress" style="width: 50vw;max-width: 300px;"">
          <div class="progress-bar progress-bar-success progress-bar-striped active" style="width:100%;background-color: rgb(16, 211, 188) !important;color:white" role="progressbar"
          aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
          100
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-end">
        <span class="mr-2" style="color: rgb(126, 127, 128)">Very Good</span>
        <div class="progress" style="width: 50vw;max-width: 300px;"">
          <div class="progress-bar progress-bar-success progress-bar-striped active" style="width:75%;background-color: rgb(87, 227, 44) !important;color:white" role="progressbar"
          aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
            75
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-end">
        <span class="mr-2" style="color: rgb(126, 127, 128)">Good</span>
        <div class="progress" style="width: 50vw;max-width: 300px;"">
          <div class="progress-bar progress-bar-success progress-bar-striped active" style="width:50%;background-color: rgb(247, 233, 66) !important;color:white" role="progressbar"
          aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
           50
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-end">
        <span class="mr-2" style="color: rgb(126, 127, 128)">Poor</span>
        <div class="progress" style="width: 50vw;max-width: 300px;">
          <div class="progress-bar progress-bar-success progress-bar-striped active" style="width:30%;background-color: rgb(247, 156, 66) !important;color:white" role="progressbar"
          aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
          30
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-end">
        <span class="mr-2" style="color: rgb(126, 127, 128)">Very Poor</span>
        <div class="progress" style="width: 50vw;max-width: 300px;">
          <div class="progress-bar progress-bar-danger progress-bar-striped active" style="width:30%;background-color: rgb(247, 66, 66) !important;color:white" role="progressbar"
          aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
          30
          </div>
        </div>
      </div>
      
    </div>
</div>



<div style="margin-bottom: -4em; margin-top:5em; position:relative">
      
           
            <input type="text" placeholder="Search" style="outline:none;color:rgb(112, 112, 112)" class="pl-3">  
            <select class="ml-4" style="font-size: 0.8em;outline:none;border:none; width: 100px;color:rgb(112, 112, 112);">
                <option value="">All Block</option>
                <option value="">Block 1-BSCS</option>
                <option value="">Block 2-BSCS</option>
                <option value="">Block 2-BSHM</option>
                <option value="">Block 2-BSIT</option>
            </select>
       </div>

        

      <form action="" class="d-flex mt-1">
        
        <div>
            <label class="checkbox-container">
            <input type="checkbox">
            <span class="checkmark"></span>
            </label>
        </div>
        <div>
            <label class="checkbox-container" style="">
            <input type="checkbox">
            <span class="checkmark" style="background-color: rgb(16, 211, 188);"></span>
            </label>
        </div>
        <div>
            <label class="checkbox-container">
            <input type="checkbox">
            <span class="checkmark" style="background-color: rgb(87, 227, 44);"></span>
            </label>
        </div>
        <div>
            <label class="checkbox-container">
            <input type="checkbox">
            <span class="checkmark" style="background-color: rgb(247, 233, 66);"></span>
            </label>
        </div>
        <div>
            <label class="checkbox-container">
            <input type="checkbox">
            <span class="checkmark" style="background-color: rgb(247, 156, 66);"></span>
            </label>
        </div>
        <div>
            <label class="checkbox-container">
            <input type="checkbox">
            <span class="checkmark" style="background-color: rgb(247, 66, 66);"></span>
            </label>
        </div>
    </form>


    


    <table class="tables" style="width:100%">
        <tr>
          <th class="hidden">
            
        </th>
          <th>Name</th>
          <th>Activity#1</th> 
          <th>Activity#2</th>
          <th>Quiz#1</th>
              <th>Quiz#2</th>
          <th>Overall Status</th>
          <th><a href="" style="color: rgb(7, 140, 145); text-decoration:none"><i class="fas fa-paper-plane mr-2"></i><span style="font-size: 0.8em;">Send to All</span></a></th>
        </tr>
        <tr>
          <td class="hidden"><img src="assets/images/profile.jpg"  class="rounded-circle mr-3" width="50" alt=""> </td>
          <td>John Doe</td>
          <td>30</td>
          <td>31</td>
          <td>31</td>
          <td>11</td>
          <td style="color: rgb(87, 227, 44)">Very Good!</td>
          <td class="message-button">
            <a href="#"><span class="message-icon"><i class="far fa-comment-dots"></i></span> <span class="message-text">Send</span></a>
          </td>
        </tr>

        <tr>
            <td class="hidden"><img src="assets/images/profile.jpg"  class="rounded-circle mr-3" width="50" alt=""> </td>
            <td>Redemple Marcelo</td>
            <td>23</td>
            <td>23</td>
            <td>19</td>
            <td>18</td>
            <td style="color: rgb(247, 233, 66)">Good</td>
            <td class="message-button">
              <a href="#" style="background-color: rgb(243, 243, 243);color: rgb(206, 206, 206);"><span class="message-icon"><i class="far fa-comment-dots"></i></span> <span class="message-text">Send</span></a>
            </td>
          </tr>
       <tr>
            <td class="hidden"><img src="assets/images/profile.jpg"  class="rounded-circle mr-3" width="50" alt=""> </td>
            <td>Kenneth Annir</td>
            <td>23</td>
            <td>23</td>
            <td>11</td>
            <td>23</td>
            <td style="color: rgb(247, 156, 66)">Poor</td>
            <td class="message-button">
              <a href="#" style="background-color: rgb(243, 243, 243);color: rgb(206, 206, 206);"><span class="message-icon"><i class="far fa-comment-dots"></i></span> <span class="message-text">Send</span></a>
            </td>
          </tr>

           <tr>
            <td class="hidden"><img src="assets/images/profile.jpg"  class="rounded-circle mr-3" width="50" alt=""> </td>
            <td>Garry lyod Senoc</td>
            <td>8</td>
            <td>10</td>
            <td>5</td>
            <td>3</td>
            <td style="color: rgb(16, 211, 188)">Excellent</td>
            <td class="message-button">
              <a href="#" ><span class="message-icon"><i class="far fa-comment-dots"></i></span> <span class="message-text">Send</span></a>
            </td>
          </tr>


           <tr>
            <td class="hidden"><img src="assets/images/profile.jpg"  class="rounded-circle mr-3" width="50" alt=""> </td>
            <td>Marcelito Cosicol</td>
            <td>21</td>
            <td>32</td>
            <td>26</td>
            <td>15</td>
            <td style="color: rgb(247, 233, 66)">Good</td>
            <td class="message-button">
              <a href="#" style="background-color: rgb(243, 243, 243);color: rgb(206, 206, 206);"><span class="message-icon"><i class="far fa-comment-dots"></i></span> <span class="message-text">Send</span></a>
            </td>
          </tr>


           <tr>
            <td class="hidden"><img src="assets/images/profile.jpg"  class="rounded-circle mr-3" width="50" alt=""> </td>
            <td>Jhon paul Bautista</td>
            <td>29</td>
            <td>28</td>
            <td>18</td>
            <td>17</td>
            <td style="color: rgb(247, 66, 66)">Verypoor</td>
            <td class="message-button">
              <a href="#" style="background-color: rgb(243, 243, 243);color: rgb(206, 206, 206);"><span class="message-icon"><i class="far fa-comment-dots"></i></span> <span class="message-text">Send</span></a>
            </td>
          </tr>

           <tr>
            <td class="hidden"><img src="assets/images/profile.jpg"  class="rounded-circle mr-3" width="50" alt=""> </td>
            <td>Kyle Evio</td>
            <td>28</td>
            <td>25</td>
            <td>26</td>
            <td>10</td>
            <td style="color: rgb(247, 233, 66)">Good</td>
            <td class="message-button">
              <a href="#" ><span class="message-icon"><i class="far fa-comment-dots"></i></span> <span class="message-text">Send</span></a>
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