<?php
session_start();
include("dbinfo.php");
include("redirect.php");

$pm="insert into m_item_master set barcode='".$_POST['barcode']."',c_name='".$_POST['c_name']."',item_name_1='".strtoupper($_POST['item_name_1'])."',item_name='".strtoupper($_POST['item_name'])."',tax='".$_POST['tax']."',hsn_code='".$_POST['hsn_code']."',unit='".$_POST['unit']."',mrp='".$_POST['mrp']."',p_rate='".$_POST['p_rate']."',user='".$_SESSION['user']."',branch='".$_SESSION['branch']."',status='Active'";   
$Epm=mysql_query($pm);

header("location:m_item_master_view.php");
?>