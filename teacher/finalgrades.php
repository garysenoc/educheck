<?php
include '../includes/connect.php';


?>
<?php
 $i=0;
$output = '';
if (isset($_POST["import"])) {
  // $excelSize = $_FILES['excel']['size'];


  


  $file_name_array = explode('.',$_FILES['excel']['name']);// For getting Extension of selected file
  $extension=strtolower(end($file_name_array));// For getting Extension of selected file
   // $extension=strtolower(end(explode('.',$_FILES['excel']['name'])));
  $allowed_extension = array("xls", "xlsx", "csv"); //allowed extension

  if (in_array($extension, $allowed_extension)) //check selected file extension is present in allowed extension array
  { 
    
    
    $file = $_FILES["excel"]["tmp_name"]; // getting temporary source of excel file
    include("../PHPExcel/IOFactory.php"); // Add PHPExcel Library in this code
    $objPHPExcel = PHPExcel_IOFactory::load($file); // create object of PHPExcel library by using load() method and in load method define path of selected file
    // $worksheet = $objPHPExcel->getActiveSheet(3);
    
      $upload_dir = 'img/'; //upload diredctory image
      $file_name = $_FILES['excel']['name'];//
      $temp_name= rand(1000,1000000).".". $extension; // rename uploading imgae 
      $qry = $cn->query("INSERT INTO tbl_excel (id_excel, file_name, temp_name) values (Null,'$file_name', '$temp_name')");

    $output .= "<label class='text-success'>Data Inserted</label><br /><table class='table table-bordered'>";
   
       move_uploaded_file($file,$upload_dir.$temp_name);
    foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {
      $highestRow = $worksheet->getHighestRow();
      for ( $row = 10; $row <= $highestRow; $row++) {
        $name = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
        $sb1 = $worksheet->getCellByColumnAndRow(5, $row)->getCalculatedValue();
        $sb2 = $worksheet->getCellByColumnAndRow(6, $row)->getCalculatedValue();
        $sb3 = $worksheet->getCellByColumnAndRow(7, $row)->getCalculatedValue();
        $sb4 = $worksheet->getCellByColumnAndRow(8, $row)->getCalculatedValue();
        $sb5 = $worksheet->getCellByColumnAndRow(9, $row)->getCalculatedValue();
        $sb6 = $worksheet->getCellByColumnAndRow(10, $row)->getCalculatedValue();
        $sb7 = $worksheet->getCellByColumnAndRow(11, $row)->getCalculatedValue();
        $sb8 = $worksheet->getCellByColumnAndRow(12, $row)->getValue();
        $sb9 = $worksheet->getCellByColumnAndRow(13, $row)->getCalculatedValue();
        $sb10 = $worksheet->getCellByColumnAndRow(14, $row)->getCalculatedValue();
        $sb11 = $worksheet->getCellByColumnAndRow(15, $row)->getCalculatedValue();
       $sb12 = $worksheet->getCellByColumnAndRow(16, $row)->getCalculatedValue();
       $sb13 = $worksheet->getCellByColumnAndRow(17, $row)->getCalculatedValue();
       $ave = $worksheet->getCellByColumnAndRow(17, $row)->getCalculatedValue();
// $code = $sheet->getCell('A'.$y)->getValue();
// if(strstr($code,'=')==true)
// {
//     $code = $sheet->getCell('A'.$y)->getOldCalculatedValue();
// }
// $objPHPExcel4->setActiveSheetIndex(0)
//              ->setCellValue('A'.$l, $code);
      
      
          $qry = $cn->query("INSERT INTO tbl_card (id_card, name, sb1, sb2, sb3, sb4, sb5, sb6, sb7, sb8, sb9, sb10, sb11, sb12, sb13,ave) values (Null,'$name', '$sb1', '$sb2', '$sb3', '$sb4', '$sb5', '$sb6', '$sb7', '$sb8', '$sb9', '$sb10', '$sb11', '$sb12', '$sb13', '$ave')");
       
      
         
        
       
      }
      
    }
    $output .= '</table>';
  } else {
    $output = '<label class="text-danger">Invalid File</label>'; //if non excel file then
  }
}
    include "teacher_header.php";
?>

<div class="container">
    <div class="row" style="border-radius: 2em;border:1px solid rgb(130, 130, 130); padding: 1em 2em; margin: 0.5em 0.5em;">
        <div class="col-md-6 col-lg-3">
            <label for="" style="font-size:0.8em;color:rgb(114, 111, 111)">To:</label>
            <select name="" id="" style="font-size:0.8em;border:none;outline:none;color:rgb(114, 111, 111)">
                <option value="">Admin</option>
            </select>
        </div>
        <div class="col-md-6 col-lg-4">
            <label for="" style="font-size:0.8em;color: rgb(114, 111, 111)">Subject:</label>
            <input type="text" value="final grades" style="border:none; border-bottom: 1px solid rgb(7, 140, 145);width: max-width: 50px;;">
        </div>
           <div class="col-md-6 col-lg-2">
            <form method="post" enctype="multipart/form-data">
            <input hidden="" placeholder="School NAME" value="34234" name="stud_school_id">
       <input name="excel" type="file" id="file-field" accept=""   style="display: none;">
                        <label for="file-field" class="file-label"  style="position: absolute;right: 10px;top:10px;color: rgb(7, 140, 145);font-size: 0.8em;word-spacing: 1px;width:120px"> Attach Excel file <i class="fa fa-paperclip"></i>
                        </label>
                       
                   
        </div>
      
        <div class="col-md-6 col-lg-3">
            <span  class="d-flex align-items-center" style="color: rgb(7, 140, 145);">
              <button style="border-style: none;background-color: white" type="submit" name="import" value="Import"><i style="font-size: 1em;" class="fas fa-paper-plane"></i></button><span style="font-size:0.8em;margin-left:0.5em;color: rgb(114, 111, 111);">Send to Student</span></span>
        </div>
 </form>

    </div>


    <div style="margin-bottom: -4em; margin-top:5em; position:relative">
        
        <input type="text" placeholder="Search" style="outline:none;color:rgb(112, 112, 112)" class="px-5">

        <select style="font-size: 0.8em;outline:none;border:none; width: 100px;color:rgb(112, 112, 112);">
          <option value="">All Block</option>
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
          <th>Subject</th>
          <th>Date</th> 
          <th>File Name</th>
          <th>Total: 3</th>
        </tr>
        <tr>
          <td class="hidden"><img src="assets/images/profile.jpg"  class="rounded-circle mr-3" width="50" alt=""> </td>
          <td>ES036B</td>
          <td>March 14 , 2020</td>
          <td style="color:rgb(79, 138, 219)">Excel_File.xsxl</td>
          <td class="message-button hidden">
               <a href="#"> <span class="message-text">Message</span></a>
              
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