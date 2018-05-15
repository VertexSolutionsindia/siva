<?php
session_start();
include("dbinfo.php");
include("redirect.php");

$pm="insert into m_department set d_id='".$_POST['d_id']."',d_name='".strtoupper($_POST['d_name'])."',d_description='".strtoupper($_POST['d_description'])."',user='".$_SESSION['user']."',branch='".$_SESSION['branch']."',status='Active'";  
$Epm=mysql_query($pm);

header("location:m_department_master_view.php");
?>