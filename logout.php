<?php
session_start();

$_SESSION['edu_admin_logged']=null;
$_SESSION['school_admin_logged']=null;
$_SESSION['student_logged']=null;
$_SESSION['teacher_logged']=null;
header("Location: index.php");
?>