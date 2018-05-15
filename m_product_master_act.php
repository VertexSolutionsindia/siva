<?php
session_start();
include("dbinfo.php");
include("redirect.php");

 $pm="insert into m_product_master set barcode='".$_POST['barcode']."',c_name='".$_POST['c_name']."',item_name='".$_POST['item_name']."',tax='".$_POST['tax']."'
,hsn_code='".$_POST['hsn_code']."',unit='".$_POST['unit']."',mrp='".$_POST['mrp']."',user='".$_SESSION['user']."',branch='".$_SESSION['branch']."',status='Activate'";   
$Epm=mysql_query($pm);

header("location:m_item_master_view.php");
?>