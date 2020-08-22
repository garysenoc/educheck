<?php
include("includes/connect.php");
?>
<?php
if(isset($_POST['add_students'])){
  $imgFile = $_FILES['img']['name'];
  $tmp_dir = $_FILES['img']['tmp_name'];
  $imgSize = $_FILES['img']['size'];

  if(empty($imgFile))
  {
    $err = "Please Select Image File";
    $teacher_img='user.png';
  }

  else
  {
    $upload_dir = 'images/'; //upload diredctory image
    $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get img extension\
    $valid_extensions = array('jpeg','jpg','png','gif',);// valid extension
    $stud_img = rand(1000,1000000).".". $imgExt; // rename uploading imgae 
    $err = $stud_img;

    if(in_array($imgExt,$valid_extensions))
    {

      if ($imgSize<5000000)
      { // 5MB

        move_uploaded_file($tmp_dir,$upload_dir.$stud_img);
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


$stud_school_id='12434';
$stud_firstname = $_POST['stud_firstname'];
$stud_lastname = $_POST['stud_lastname'];
$stud_school_id_number = $_POST['stud_school_id_number'];
$stud_address = $_POST['stud_address'];
$stud_year_level = $_POST['stud_year_level'];
$stud_course = $_POST['stud_course'];
$stud_block = $_POST['stud_block'];
$stud_email = $_POST['stud_email'];
$stud_contact = $_POST['stud_contact'];
$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
$stud_password =  substr(str_shuffle($permitted_chars), 0, 8);
$stud_password =md5($stud_password);
$qry = $cn -> query("INSERT INTO tbl_students (stud_id, stud_school_id, stud_firstname, stud_lastname, stud_username, stud_password, stud_school_id_number, stud_address, stud_year_level, stud_course, stud_block, stud_img, stud_email, stud_contact, stud_status, stud_account_date) values (null, '$stud_school_id', '$stud_firstname', '$stud_lastname', '$stud_school_id_number', '$stud_password', '$stud_school_id_number', '$stud_address', '$stud_year_level', '$stud_course', '$stud_block', '$stud_img', '$stud_email', '$stud_contact',
 '1',now())") or die (mysqli_error());

    }
  ?>

   <?php
$output = '';
if(isset($_POST["import"]))
{
 $extension = end(explode(".", $_FILES["excel"]["name"])); // For getting Extension of selected file
 $allowed_extension = array("xls", "xlsx", "csv"); //allowed extension
 if(in_array($extension, $allowed_extension)) //check selected file extension is present in allowed extension array
 {
  $file = $_FILES["excel"]["tmp_name"]; // getting temporary source of excel file
  include("PHPExcel/IOFactory.php"); // Add PHPExcel Library in this code
  $objPHPExcel = PHPExcel_IOFactory::load($file); // create object of PHPExcel library by using load() method and in load method define path of selected file

  $output .= "<label class='text-success'>Data Inserted</label><br /><table class='table table-bordered'>";
  foreach ($objPHPExcel->getWorksheetIterator() as $worksheet)
  {
   $highestRow = $worksheet->getHighestRow();
   for($row=2; $row<=$highestRow; $row++)
   {

   $stud_school_id = $_POST['stud_school_id'];
   $stud_firstname = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
   $stud_lastname = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
   $stud_school_id_number = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
   $stud_address = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
   $stud_year_level =$worksheet->getCellByColumnAndRow(4, $row)->getValue();
   $stud_course = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
   $stud_block = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
   $stud_img = 'user.png';
   $stud_email = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
   $stud_contact = $worksheet->getCellByColumnAndRow(8, $row)->getValue();
   $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
   $stud_password =  substr(str_shuffle($permitted_chars), 0, 8);
   $stud_password =md5($stud_password);

$qry = $cn -> query("INSERT INTO tbl_students (stud_id, stud_school_id, stud_firstname, stud_lastname, stud_username, stud_password, stud_school_id_number, stud_address, stud_year_level, stud_course, stud_block, stud_img, stud_email, stud_contact, stud_status, stud_account_date) values (null, '$stud_school_id', '$stud_firstname', '$stud_lastname', '$stud_school_id_number', '$stud_password', '$stud_school_id_number', '$stud_address', '$stud_year_level', '$stud_course', '$stud_block', '$stud_img', '$stud_email', '$stud_contact',
 '1',now())") or die (mysqli_error());


   }
  } 


 }
 else
 {
  $output = '<label class="text-danger">Invalid File</label>'; //if non excel file then
 }
}

include "school_admin_header.php";
?>


<div class="container"> 
    <div class="card-dashboard card-create-school px-5 py-4" style="position:relative">
       <h6 class="pb-5 pt-3">CREATE STUDENT ACCOUNT</h6>
       <form method="post" enctype="multipart/form-data">
     <input hidden="" placeholder="School NAME" value="34234" name="stud_school_id">
       <input name="excel" type="file" id="file-field" accept=""   style="display: none;">
                        <label for="file-field" class="file-label"  style="position: absolute;right: 10px;top:10px;color: rgb(7, 140, 145);font-size: 0.8em;word-spacing: 1px;width:120px"> Attach Excel file <i class="fa fa-paperclip"></i>
                        </label>
                        <input type="submit" name="import" class="btn btn-info" value="Import" />
                    </form>
       <form action="" method="post" enctype="multipart/form-data">
        <input hidden="" placeholder="School NAME" value="3485" name="teacher_school_id">
           <div class="row">
            <div class="col-sm-12 col-lg-6 left-side-form pr-lg-5">
                <div class="d-flex justify-content-center justify-content-lg-end">
                    <label for="firstname">Firstname:</label>
                    <input type="text" name="stud_firstname" id="firstname">
                </div>
                <div class="d-flex justify-content-center justify-content-lg-end">
                    <label for="surname">Surname:</label>
                    <input type="text" name="stud_lastname" id="surname">
                </div>
                <div class="d-flex justify-content-center justify-content-lg-end">
                    <label for="id_no">Student ID no:</label>
                    <input type="text" name="stud_school_id_number" id="id_no">
                </div>
                <div class="d-flex justify-content-center justify-content-lg-end">
                    <label for="address">Address:</label>
                    <input type="text" name="stud_address" id="address">
                </div>
                <div class="d-flex justify-content-center justify-content-lg-end">
                    <label for="year_level">Year Level:</label>
                    <select name="stud_year_level" id="">
                        <option value="">Grade 1</option>
                        <option value="">Grade 2</option>
                        <option value="">Grade 3</option>
                        <option value="">Grade 4</option>
                        <option value="">Grade 5</option>
                        <option value="">Grade 6</option>
                        <option value="">Grade 7</option>
                        <option value="">Grade 8</option>
                        <option value="">Grade 9</option>
                        <option value="">Grade 10</option>
                        <option value="">Grade 11</option>
                        <option value="">Grade 12</option>
                    </select>
                </div>
                <div class="d-flex justify-content-center justify-content-lg-end">
                    <label for="course">Course:</label>
                    <select name="stud_course" id="">
                        <option value="">BS in Business Administration</option>
                        <option value="">BS in Accountancy</option>
                        <option value="">BS in Aeronautical Engineering</option>
                        <option value="">BS in Civil Engineering/option>
                        <option value="">BS in Electrical Engineering</option>
                        <option value="">BS in Mechanical Engineering</option>
                        <option value="">BS in Mining Engineering</option>
                        <option value="">BS in Petroleum Engineering/option>
                        <option value="">BS in Biology</option>
                        <option value="">BS in Environmental Science    </option>
                        <option value="">BS in Marine Biology</option>
                        <option value="">BS in Agriculture</option>
                        <option value="">BS in Fisheries</option>
                        <option value="">BS in Forestry</option>
                        <option value="">BS in Nursing</option>
                        <option value="">AB in Broadcasting</option>
                        <option value="">AB in Journalism</option>
                        <option value="">BS in Computer Science</option>
                        <option value="">BS in Information Technology</option>
                        <option value="">BS in Hospitality Management</option>
                        <option value="">BS in Tourism</option>
                        <option value="">BS in Architecture</option>
                        <option value="">BSBA in Public Administration</option>
                        <option value="">AB in Philippine Studies</option>
                        <option value="">AB in Political Science</option>
                    </select>
                </div>

                <div class="d-flex justify-content-center justify-content-lg-end">
                    <label for="block">Block:</label>
                    <select name="stud_block" id="">
                        <option value="">1b1</option>
                        <option value="">1b2</option>
                        <option value="">1b3</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6 right-side-form pr-lg-5">
                <div class="d-flex justify-content-center justify-content-lg-end">
                    <label for="photo">Photo:</label>
                    <img src="" alt="">
                    <button class=" px-2 py-1" style="color:white !important;border: 1px solid rgb(7, 140, 145);color: rgb(126, 126, 126);padding-bottom: none !important; border-radius: 1em;">Browse</button>
                    <input class="" type="text" name="img" id="photo" style="width: 1px; border:none">
                </div>
                <div class="d-flex justify-content-center justify-content-lg-end">
                    <label for="email">Email:</label>
                    <input type="text" name="stud_email" id="email">
                </div>
                <div class="d-flex justify-content-center justify-content-lg-end">
                    <label for="_contact">Contact No:</label>
                    <input type="text" name="stud_contact" id="contact">
                </div>
            </div>
           </div>
            
       
       <div class="d-flex justify-content-end">
        <a href="">Cancel</a>
        <button type="submit" name="add_students">Submit</button>
    </div>
        </form>
      
    </div>
</div>



<div class="modal fade" id="school_added" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document"1>
      <div class="landing-modal modal-content">
        <div class="modal-body d-flex justify-content-center py-5">
            <img src="assets/images/excel.png" width="80" alt="">
        </div>
        <h5 class="text-center" style="color: rgb(112, 112, 112)">Student_List.xsxl</h5>
        <h4  class="text-center" style="color: rgb(112, 112, 112)">Are you sure to Import File?</h4>
        <p  class="text-center px-5" style="color: rgb(112, 112, 112)" >Once file Imported, the List will automatically saved to students List</p>
        <div class="px-5 pt-4 pb-3 d-flex justify-content-end">
           <a class="px-3 py-2 mr-2" href="" data-dismiss="modal" style="border-radius: 1em;text-decoration: none;color:rgb(7, 140, 145); border: 1px solid rgb(7, 140, 145)">Cancel</a>
           <a class="px-3 py-2"href="" style="border-radius: 1em; text-decoration: none;background-color:rgb(7, 140, 145); color: white">Import</a>
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

