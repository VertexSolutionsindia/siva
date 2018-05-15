<?php
session_start();
include("dbinfo.php");
include("redirect.php");

$id=$_REQUEST['id'];
$ct="update m_role set role_id='".$_POST['role_id']."',role_name='".strtoupper($_POST['role_name'])."',r_description='".strtoupper($_POST['r_description'])."',user='".$_SESSION['user']."',branch='".$_SESSION['branch']."',status='Active' WHERE id='$id'";
$Ect=mysql_query($ct);
header("Location: m_role_master_view.php");
?>