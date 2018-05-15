<?php
session_start();
include("dbinfo.php");
include("redirect.php");

$id=$_REQUEST['id'];
$ct="update m_customer_master set customer_id='".$_POST['customer_id']."',customer_name='".strtoupper($_POST['customer_name'])."'
,customer_type='".strtoupper($_POST['customer_type'])."',address='".strtoupper($_POST['address'])."',contact_no='".$_POST['contact_no']."',al_no='".$_POST['al_no']."'
,d_o_b='".$_POST['d_o_b']."',m_d='".$_POST['m_d']."',user='".$_SESSION['user']."',branch='".$_SESSION['branch']."',status='Active' WHERE id='$id'";
$Ect=mysql_query($ct);
header("Location: m_customer_master_view.php");
?>