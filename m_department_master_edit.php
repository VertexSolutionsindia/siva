<?php
session_start();
include("dbinfo.php");
include("redirect.php");

$id=$_REQUEST['id'];
$ct="update m_department set d_id='".$_POST['d_id']."',d_name='".strtoupper($_POST['d_name'])."',d_description='".strtoupper($_POST['d_description'])."',user='".$_SESSION['user']."',branch='".$_SESSION['branch']."',status='Active' WHERE id='$id'";
$Ect=mysql_query($ct);
header("Location: m_department_master_view.php");
?>