<?php
session_start();
include("dbinfo.php");
include("redirect.php");

$target_dir = "uploadimage/";
$target_file = $target_dir . basename($_FILES["logo"]["name"]);
move_uploaded_file($_FILES["logo"]["tmp_name"], $target_file);

$id=$_REQUEST['id'];
$ct="update m_company_creation set company_id='".$_POST['company_id']."',company_name='".strtoupper($_POST['company_name'])."',address='".strtoupper($_POST['address'])."'
,gstin='".strtoupper($_POST['gstin'])."',contact_person='".strtoupper($_POST['contact_person'])."',mobile='".$_POST['mobile']."',al_number='".$_POST['al_number']."',email='".strtoupper($_POST['email'])."',website='".strtoupper($_POST['website'])."',logo='".$_FILES["logo"]["name"]."',user='".$_SESSION['user']."',branch='".$_SESSION['branch']."',status='Active' WHERE id='$id'";
$Ect=mysql_query($ct);
header("Location: m_company_creation_master_view.php");
?>