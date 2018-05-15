<?php
session_start();
include("dbinfo.php");
include("redirect.php");

$id=$_REQUEST['id'];
$ct="update m_unit_master set u_id='".$_POST['u_id']."',u_name='".strtoupper($_POST['u_name'])."',us_name='".strtoupper($_POST['us_name'])."',u_description='".strtoupper($_POST['u_description'])."',user='".$_SESSION['user']."',branch='".$_SESSION['branch']."',status='Active' WHERE id='$id'";
$Ect=mysql_query($ct);
header("Location:m_unit_master_view.php");
?>