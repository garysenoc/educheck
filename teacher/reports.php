<?php
//HEADER
include("../includes/connect.php");
    include "teacher_header.php";
?>  
<?php
$inputFileType = 'Excel5'; 

?>
<?php
 $i=0;
$output = '';
if (isset($_POST["import"])) {
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
     $upload_dir = '/excelfiles/'; //upload diredctory image
      $file_name = $_FILES['excel']['name'];//
      $temp_name= rand(1000,1000000).".". $extension; // rename uploading imgae 
      $qry = $cn->query("INSERT INTO tbl_excel (id_excel, file_name, temp_name,exel_from,exel_to) values (Null,'$file_name', '$temp_name','Marcelito','Admin')");
    foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {
      $highestRow = $worksheet->getHighestRow();
      for ( $row = 10; $row <= $highestRow; $row++) {


        $quarter = $worksheet->getCellByColumnAndRow(0, 7)->getValue();
        $gradsec = $worksheet->getCellByColumnAndRow(10, 7)->getValue();
        $teacher = $worksheet->getCellByColumnAndRow(18, 7)->getValue();
        $subject = $worksheet->getCellByColumnAndRow(32, 7)->getValue();


        $learnersname = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
        $w1 = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
        $w2 = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
        $w3 = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
        $w4 = $worksheet->getCellByColumnAndRow(8, $row)->getValue();
        $w5 = $worksheet->getCellByColumnAndRow(9, $row)->getValue();
        $w6 = $worksheet->getCellByColumnAndRow(10, $row)->getValue();
        $w7 = $worksheet->getCellByColumnAndRow(11, $row)->getValue();
        $w8 = $worksheet->getCellByColumnAndRow(12, $row)->getValue();
        $w9 = $worksheet->getCellByColumnAndRow(13, $row)->getValue();
        $w10 = $worksheet->getCellByColumnAndRow(14, $row)->getValue();

        $wtotal = $worksheet->getCellByColumnAndRow(15, $row)->getCalculatedValue();
        $wps = $worksheet->getCellByColumnAndRow(16, $row)->getCalculatedValue();
        $wws = $worksheet->getCellByColumnAndRow(17, $row)->getCalculatedValue();

        $p1 = $worksheet->getCellByColumnAndRow(18, $row)->getValue();
        $p2 = $worksheet->getCellByColumnAndRow(19, $row)->getValue();
        $p3 = $worksheet->getCellByColumnAndRow(20, $row)->getValue();
        $p4 = $worksheet->getCellByColumnAndRow(21, $row)->getValue();
        $p5 = $worksheet->getCellByColumnAndRow(22, $row)->getValue();
        $p6 = $worksheet->getCellByColumnAndRow(23, $row)->getValue();
        $p7 = $worksheet->getCellByColumnAndRow(24, $row)->getValue();
        $p8 = $worksheet->getCellByColumnAndRow(25, $row)->getValue();
        $p9 = $worksheet->getCellByColumnAndRow(26, $row)->getValue();
        $p10 = $worksheet->getCellByColumnAndRow(27, $row)->getValue();

        $ptotal = $worksheet->getCellByColumnAndRow(28, $row)->getCalculatedValue();
        $pps = $worksheet->getCellByColumnAndRow(29, $row)->getCalculatedValue();
        $pws = $worksheet->getCellByColumnAndRow(30, $row)->getCalculatedValue();

        $q1 = $worksheet->getCellByColumnAndRow(31, $row)->getCalculatedValue();
        $qps = $worksheet->getCellByColumnAndRow(32, $row)->getCalculatedValue();
        $qws = $worksheet->getCellByColumnAndRow(33, $row)->getCalculatedValue();

        $ig = $worksheet->getCellByColumnAndRow(34, $row)->getCalculatedValue();
        $qg = $worksheet->getCellByColumnAndRow(35, $row)->getOldCalculatedValue();
 
// $code = $sheet->getCell('A'.$y)->getValue();
// if(strstr($code,'=')==true)
// {
//     $code = $sheet->getCell('A'.$y)->getOldCalculatedValue();
// }
// $objPHPExcel4->setActiveSheetIndex(0)
//              ->setCellValue('A'.$l, $code);
        if ($row==10) {
         $type='head';
        }
        else{
           $type='body';
        }
        if ($learnersname!='') {
       
           $qry = $cn->query("INSERT INTO tbl_deped (grade_id, student_name, w1, w2, w3, w4, w5, w6, w7, w8, w9, w10, w_total, w_ps, w_ws, qa1, qps, qws, pt1, pt2, pt3, pt4, pt5, pt6, pt7, pt8, pt9, pt10, pt_total, pt_ps, pt_ws, initial_grade, quarterly_grade, quarter, teacher_name, grade_section, date, type,subject,exel_name,exel_temp) values (Null,'$learnersname','$w1','$w2','$w3','$w4','$w5','$w6','$w7','$w8','$w9','$w10','$wtotal','$wps','$wws','$q1','$qps','$qws','$p1','$p2','$p3','$p4','$p5','$p6','$p7','$p8','$p9','$p10','$ptotal','$pps','$pws','$ig','$qg','$quarter','$teacher','$gradsec',now(),'$type','$subject','$file_name','$temp_name')");
        }
       
      }
      
    }
    $output .= '</table>';
  } else {
    $output = '<label class="text-danger">Invalid File</label>'; //if non excel file then
  }
}
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
            <input type="text" style="border:none; border-bottom: 1px solid rgb(7, 140, 145);width: max-width: 50px;;">
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