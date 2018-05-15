<?php
session_start();
include("dbinfo.php");
include("redirect.php");

$target_dir = "uploadimage/";
$target_file = $target_dir . basename($_FILES["logo"]["name"]);
move_uploaded_file($_FILES["logo"]["tmp_name"], $target_file);

 $pm="select * from m_company_creation where company_id='".$_POST['company_id']."'"; 
$Epm=mysql_query($pm);
$Fpm=mysql_fetch_array($Epm);


$n = mysql_num_rows($Epm); 
if($n<1)
{
 $pm="insert into m_company_creation set company_id='".$_POST['company_id']."',company_name='".strtoupper($_POST['company_name'])."',address='".strtoupper($_POST['address'])."'
,gstin='".strtoupper($_POST['gstin'])."',contact_person='".strtoupper($_POST['contact_person'])."',mobile='".$_POST['mobile']."',al_number='".$_POST['al_number']."',email='".strtoupper($_POST['email'])."',website='".strtoupper($_POST['website'])."',logo='".$_FILES["logo"]["name"]."',user='".$_SESSION['user']."',branch='".$_SESSION['branch']."',status='Active'";  
$Epm=mysql_query($pm);

header("location:m_company_creation_master_view.php?m=1");
}
else
{
header("location:m_company_creation_master_view.php?m=2");
}

?>