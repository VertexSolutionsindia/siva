<?php
session_start();
include("dbinfo.php");
include("redirect.php");

$id=$_REQUEST['id'];
$ct="update m_category set c_id='".$_POST['c_id']."',c_name='".strtoupper($_POST['c_name'])."',c_description='".strtoupper($_POST['c_description'])."',user='".$_SESSION['user']."',branch='".$_SESSION['branch']."',status='Active' WHERE id='$id'";
$Ect=mysql_query($ct);
header("Location: m_category_view.php");
?>