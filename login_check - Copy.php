<?php

include 'includes/connect.php';

if(isset($_POST['login'])){

    $username= mysqli_real_escape_string($cn,$_POST['username']);
    $password= mysqli_real_escape_string($cn,$_POST['password']);

    $password_hashed= md5($password);

    $result= $cn->query("SELECT * FROM tbl_admin WHERE username='$username' AND password='$password_hashed' ");
    $count1= mysqli_num_rows($result);
    if($count1 >0){
        session_start();

        $row= $result->Fetch_array();

        $_SESSION['edu_admin_id']=$row['id'];
        $_SESSION['edu_admin_firstname']=$row['firstname'];
        $_SESSION['edu_admin_lastname']=$row['lastname'];
        $_SESSION['edu_admin_fullname']= $row['firstname']." ".$row['lastname'];
        $_SESSION['edu_admin_role']=$row['role'];
        $_SESSION['edu_admin_status']=$row['status'];
        $_SESSION['edu_admin_img']=$row['img'];
        $_SESSION['edu_admin_contact']=$row['contact'];
        $_SESSION['edu_admin_email']=$row['email'];

        $_SESSION['edu_admin_logged']="true";

        header("Location:edu/dashboard.php");
    }else{
        $result2= $cn->query(" SELECT * FROM tbl_schools WHERE sadmin_username='$username' AND  sadmin_password='$password_hashed' ");
        $count2= mysqli_num_rows($result2);
        if($count2 >0){
            session_start();

            $row2= $result2->Fetch_array();

            $_SESSION['school_id']=$row2['school_id'];
            $_SESSION['school_name']=$row2['school_name'];
            $_SESSION['school_address']=$row2['school_address'];
            $_SESSION['school_level']=$row2['school_level'];
            $_SESSION['school_admin_firstname']=$row2['sadmin_firstname'];
            $_SESSION['school_admin_lastname']=$row2['sadmin_lastname'];
            $_SESSION['school_admin_fullname']=$row2['sadmin_firstname']." ".$row2['sadmin_lastname'];
            $_SESSION['school_admin_email']=$row2['sadmin_email'];
            $_SESSION['school_admin_contact']=$row2['sadmin_contact'];
            $_SESSION['school_logo']=$row2['school_logo'];
            $_SESSION['subscription_status']=$row2['subscription_status'];
            $_SESSION['school_admin_img']=$row2['sadmin_img'];

            $_SESSION['school_admin_logged']='true';

            header("Location:sadmin/school_landing.php");
        }else{
            $result3= $cn->query(" SELECT * FROM tbl_students WHERE stud_username='$username' AND  stud_password='$password_hashed' ");
            $count3= mysqli_num_rows($result3);
            if($count3 >0){
                session_start();
                $row3= $result3->Fetch_array();

                $_SESSION['student_id']=$row3['stud_id'];
                $_SESSION['student_school_id']=$row3['stud_school_id'];
                $_SESSION['student_firstname']=$row3['stud_firstname'];
                $_SESSION['student_lastname']=$row3['stud_lastname'];
                $_SESSION['student_fullname']=$row3['stud_firstname']." ".$row['stud_lastname'];
                $_SESSION['student_id_number']=$row3['stud_school_id_number'];
                $_SESSION['student_address']=$row3['stud_address'];
                $_SESSION['student_year_level']=$row3['stud_year_level'];
                $_SESSION['student_course']=$row3['stud_course'];
                $_SESSION['student_block']=$row3['stud_block'];
                $_SESSION['student_img']=$row3['stud_img'];
                $_SESSION['student_email']=$row3['stud_email'];
                $_SESSION['student_contact']=$row3['stud_contact'];
                $_SESSION['student_status']=$row3['stud_status'];

                $_SESSION['student_logged']='true';
                header("Location: stud/student_home.php");
            }else{  
                $result4= $cn->query(" SELECT * FROM tbl_teachers WHERE teacher_username='$username' AND  teacher_password='$password_hashed' ");
                $count4= mysqli_num_rows($result3);
                if($count4 >0){
                    session_start();
                    $row4= $result4->Fetch_array();

                $_SESSION['teacher_id']=$row4['teacher_id'];
                $_SESSION['teacher_school_id']=$row4['teacher_school_id'];
                $_SESSION['teacher_firstname']=$row4['teacher_firstname'];
                $_SESSION['teacher_lastname']=$row4['teacher_lastname'];
                $_SESSION['teacher_fullname']=$row4['teacher_firstname']." ".$row['lastname_lastname'];
                $_SESSION['teacher_id_number']=$row4['teacher_id_number'];
                $_SESSION['teacher_address']=$row4['teacher_address'];
                $_SESSION['teacher_department']=$row4['teacher_department'];
                $_SESSION['teacher_img']=$row4['teacher_img'];
                $_SESSION['teacher_email']=$row4['teacher_email'];
                $_SESSION['teacher_contact']=$row4['teacher_contact'];
                $_SESSION['teacher_status']=$row4['teacher_status'];
                $_SESSION['student_contact']=$row4['student_contact'];

                $_SESSION['teacher_logged']='true';
                header("Location: teacher/school_feeds.php");
                }else{
                    header("Location: index.php");
                }  
            }
        }
    }

        

            


            
}


?>