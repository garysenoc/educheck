<?php
include("../includes/connect.php");
?>
<?php
if(isset($_POST['add_teacher'])){
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
    $teacher_img = rand(1000,1000000).".". $imgExt; // rename uploading imgae 
    $err = $teacher_img;

    if(in_array($imgExt,$valid_extensions))
    {

      if ($imgSize<5000000)
      { // 5MB

        move_uploaded_file($tmp_dir,$upload_dir.$teacher_img);
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
                
$teacher_school_id = mysqli_real_escape_string($cn,$_POST['teacher_school_id']) ;
$teacher_firstname=mysqli_real_escape_string($cn,$_POST['teacher_firstname']);
$teacher_lastname =mysqli_real_escape_string($cn,$_POST['teacher_lastname']) ;
$teacher_department =mysqli_real_escape_string($cn,$_POST['teacher_department']);
$teacher_email= mysqli_real_escape_string($cn,$_POST['teacher_email']);
$teacher_contact= mysqli_real_escape_string($cn,$_POST['teacher_contact']);
$teacher_id_number= mysqli_real_escape_string($cn,$_POST['teacher_id_number']);
$teacher_address= mysqli_real_escape_string($cn,$_POST['teacher_address']);
$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
$teacher_password =  substr(str_shuffle($permitted_chars), 0, 8);
$teacher_password_encrpted =  md5($teacher_password );
$qry = $cn -> query("INSERT INTO tbl_teachers (teacher_id, teacher_school_id, teacher_firstname, teacher_lastname, teacher_username, teacher_password, teacher_id_number, teacher_address, teacher_department, teacher_img, teacher_email, teacher_contact, teacher_status, teacher_account_date) values (null,'$teacher_school_id', '$teacher_firstname','$teacher_lastname', '$teacher_id_number', '$teacher_password_encrpted', '$teacher_id_number', '$teacher_address', '$teacher_department', '$teacher_img', '$teacher_email', '$teacher_contact', '1', now())") or die (mysqli_error());

  if($qry){
    ?>
    <a href="" hidden="" id="submit_teacher" >success</a>
    
    <input hidden='' name="b" class="the_teacher_name"   value='<?= $teacher_firstname .' '. $teacher_lastname ?>'>    
    <input hidden='' name="c" class="teacher_username" value='<?= $teacher_id_number ?>'>
    <input hidden='' name="a" class="teacher_generated_password"  value='<?= $teacher_password ?>'>
    
    <?php
  }

    }

?>

<?php
$output = '';
if(isset($_POST["import"]))
{
   $file_name_array = explode('.',$_FILES['excel']['name']);// For getting Extension of selected file
  $extension=strtolower(end($file_name_array));// For getting Extension of selected file
 $allowed_extension = array("xls", "xlsx", "csv"); //allowed extension
 if(in_array($extension, $allowed_extension)) //check selected file extension is present in allowed extension array
 {
  $file = $_FILES["excel"]["tmp_name"]; // getting temporary source of excel file
  include("../PHPExcel/IOFactory.php"); // Add PHPExcel Library in this code
  $objPHPExcel = PHPExcel_IOFactory::load($file); // create object of PHPExcel library by using load() method and in load method define path of selected file

  $output .= "<label class='text-success'>Data Inserted</label><br /><table class='table table-bordered'>";
  foreach ($objPHPExcel->getWorksheetIterator() as $worksheet)
  {
   $highestRow = $worksheet->getHighestRow();
   for($row=2; $row<=$highestRow; $row++)
   {
   $teacher_school_id = $_POST['teacher_school_id'];
   $teacher_firstname =$worksheet->getCellByColumnAndRow(0, $row)->getValue();
   $teacher_lastname = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
   $teacher_id_number = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
   $teacher_address = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
   $teacher_department =$worksheet->getCellByColumnAndRow(4, $row)->getValue();
   $teacher_email = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
   $teacher_contact = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
   $teacher_img = 'user.png';
   $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
   $teacher_password =  substr(str_shuffle($permitted_chars), 0, 8);
   $teacher_password =  md5($teacher_password );
   if ($teacher_firstname!='') {
    $qry = $cn -> query("INSERT INTO tbl_teachers (teacher_id, teacher_school_id, teacher_firstname, teacher_lastname, teacher_username, teacher_password, teacher_id_number, teacher_address, teacher_department, teacher_img, teacher_email, teacher_contact, teacher_status, teacher_account_date) values (null,'$teacher_school_id', '$teacher_firstname','$teacher_lastname', '$teacher_id_number', '$teacher_password', '$teacher_id_number', '$teacher_address', '$teacher_department', '$teacher_img', '$teacher_email', '$teacher_contact', '1', now())") or die (mysqli_error());
   }
    

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
    <div class="card-dashboard card-create-school px-5 py-4" style="position: relative">
       <h6 class="pb-5 pt-3">CREATE TEACHER ACCOUNT</h6>
     
<form method="post" enctype="multipart/form-data">
     <input hidden="" placeholder="School NAME" value="34234" name="teacher_school_id">
       <input  name="excel" class="excel_file_path" type="file" id="file-field" accept=""   style="display: none;">
                        <label for="file-field" id="clicked_excel"  class="file-label"  style="position: absolute;right: 10px;top:10px;color: rgb(7, 140, 145);font-size: 0.8em;word-spacing: 1px;width:120px"> Attach Excel file <i class="fa fa-paperclip"></i>
                        </label>

<!-- MODAL EXCEL SAVE -->
<div class="modal fade" id="excel_send" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document"1>
      <div class="landing-modal modal-content">
        <div class="modal-body d-flex justify-content-center py-5">
            <img src="assets/images/excel.png" width="80" alt="">
        </div>
        <h3  class="text-center" style="color: rgb(112, 112, 112)">Are you sure to Import File?</h3>
        <p  class="text-center px-5" style="color: rgb(112, 112, 112)" >Once file Imported, the List will automatically saved to Teachers List and automatically send their account username and generated password on their gmail account and sms.</p>
        <div class="px-5 pt-4 pb-3 d-flex justify-content-end">
           <a class="px-3 py-2 mr-2" href="" data-dismiss="modal" style="border-radius: 1em;text-decoration: none;color:rgb(7, 140, 145); border: 1px solid rgb(7, 140, 145)">Cancel</a>
           <input type="submit" name="import" id="click_sound" class="px-3 py-2" href="" style="border-radius: 1em; text-decoration: none;background-color:rgb(7, 140, 145); color: white" value="Import"> 
        </div>
      </div>
    </div>
  </div>


</form>
       <form  method="post" enctype="multipart/form-data">
           <div class="row">
            <div class="col-sm-12 col-lg-6 left-side-form pr-lg-5">
                <div class="d-flex justify-content-center justify-content-lg-end">
                    <input hidden="" placeholder="School NAME" value="34234" name="teacher_school_id">
                    <label for="firstname">Firstname:</label>
                    <input type="text" name="teacher_firstname" id="firstname">
                </div>
                <div class="d-flex justify-content-center justify-content-lg-end">
                    <label for="surname">Surname:</label>
                    <input type="text" name="teacher_lastname" id="surname">
                </div>
                <div class="d-flex justify-content-center justify-content-lg-end">
                    <label for="id_no">Teacher ID no:</label>
                    <input type="text" name="teacher_id_number" id="id_no">
                </div>
                <div class="d-flex justify-content-center justify-content-lg-end">
                    <label for="address">Address:</label>
                    <input type="text" name="teacher_address" id="address">
                </div>
                <div class="d-flex justify-content-center justify-content-lg-end">
                    <label for="department">Department:</label>
                    <input type="text" name="teacher_department" id="department">
                </div>
            </div>
            <div class="col-sm-12 col-lg-6 right-side-form pr-lg-5">
                <div class="d-flex justify-content-center justify-content-lg-end">
                    <label for="photo">Photo:</label>
                  <img id="img4" src="../images/user.png" alt="" style="height: 80px; border: solid 1px grey; border-radius: 50%; width: 80px !important;">
                    <input name="img" type="file" id="file-field" accept="image/*"  onchange="previewImage3(event)" style="display: none;">
                        <label for="file-field" class="file-label"  style="color:white !important;border: 1px solid rgb(7, 140, 145);position: absolute;top: 50px;right:55px; color: rgb(126, 126, 126);padding-bottom: none !important; font-size: 13px; padding: 3px 10px !important; border-radius: 1em; margin-top: 10px !important; background-color: teal;"> Browse
                        </label>
                                            <script type="text/javascript">
                                                function previewImage3(event){
                                                    var reader= new FileReader();
                                                    var imageField= document.getElementById("img4");
                                                    reader.onload= function(){
                                                        if(reader.readyState ==2){
                                                            imageField.src= reader.result;
                                                        }
                                                    }
                                                    reader.readAsDataURL(event.target.files[0]);
                                                }
                                                
                                            </script>
                
                </div>
                <div class="d-flex justify-content-center justify-content-lg-end">
                    <label for="email">Email:</label>
                    <input type="text" name="teacher_email" id="email">
                </div>
                <div class="d-flex justify-content-center justify-content-lg-end">
                    <label for="_contact">Contact No:</label>
                    <input type="text" name="teacher_contact" id="contact">
                </div>
            </div>
           </div>



       
       <div class="d-flex justify-content-end">
        <a href="">Cancel</a>
        <button type="submit" name="add_teacher" data-toggle="modal" data-target="#school_added">Submit</button>
    </form>
    </div>
      
    </div>
</div>


<!-- TEACHER ADDED SUCCESSFULLY MODAL -->
<div class="modal fade" id="teacher_added_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document"1>
      <div class="landing-modal modal-content">
        <div class="modal-body d-flex justify-content-center py-5" style="margin-bottom: -15px;">
            <p class="text-center"><i class="fa fa-check-circle" aria-hidden="true" style="font-size: 3em; color: rgb(7, 140, 145)"></i>
            </p>
        </div>
        <h5 class="text-center" name='a' id="the_teacher_name" style="color: rgb(112, 112, 112);line-height: 1;"></h5>
        <p  class="text-center" style="color: rgb(112, 112, 112);line-height: 0.5;">was successfully added to teachers list.</p>
        <div class="px-5 pt-4">
            <p style="line-height: 0.1; color: rgb(112, 112, 112)">Account Username:</p>
            <p class="text-center" name='b' id="teacher_username" style="border: 1px solid rgb(112, 112, 112);color: rgb(112, 112, 112)"></p>
            <p style="line-height: 0.1;color: rgb(112, 112, 112)">Generated Password:</p>
            <p class="text-center" name='c' id="teacher_generated_password" style="border: 1px solid rgb(112, 112, 112);color: rgb(112, 112, 112)"></p>

            <a class="btn" href=""  style="color: #85C1E9;"><i class="fa fa-envelope"></i> Send to Gmail & Sms</a>
            
            <a type="submit" name="" class="btn" href="teachers.php" style="margin-left: 20% !important;" ><small>Go to teachers list</small></a>
            <a type="submit" name="" style="background-color: #F6FAFB !important; color: grey; padding: 3px 15px; border-radius: 4px !important; margin-bottom: 10px !important;" class="btn" href="create_teacher_account.php" >Ok</a>
        </div>
      </div>
    </div>
  </div>
 

    

<script src="../assets/bootstrap/js/jquery.min.js"></script>
<script src="../assets/bootstrap/js/popper.min.js"></script>
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>    
<script src="../assets/js/script.js"></script>
</body> 
</html>

