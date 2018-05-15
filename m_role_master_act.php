<?php
session_start();
include("dbinfo.php");
include("redirect.php");

$pm="insert into m_role set role_id='".$_POST['role_id']."',role_name='".strtoupper($_POST['role_name'])."',r_description='".strtoupper($_POST['r_description'])."',user='".$_SESSION['user']."',branch='".$_SESSION['branch']."',status='Active'";  
$Epm=mysql_query($pm);

header("location:m_role_master_view.php");
?>