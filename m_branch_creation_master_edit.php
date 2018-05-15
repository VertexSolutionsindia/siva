<?php
session_start();
include("dbinfo.php");
include("redirect.php");

$id=$_REQUEST['id'];
$ct="update m_branch_creation set branch_id='".$_POST['branch_id']."',company_name='".strtoupper($_POST['company_name'])."',branch_address='".strtoupper($_POST['branch_address'])."',description='".strtoupper($_POST['description'])."',gstin='".strtoupper($_POST['gstin'])."',c_person='".$_POST['c_person']."',mobile='".$_POST['mobile']."',l_number='".$_POST['l_number']."',email='".strtoupper($_POST['email'])."',user='".$_SESSION['user']."',branch='".$_SESSION['branch']."',status='Active' WHERE id='$id'";
$Ect=mysql_query($ct);
header("Location: m_branch_creation_master_view.php");
?>