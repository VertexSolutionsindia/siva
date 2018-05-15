<?php
session_start();
include("dbinfo.php");
include("redirect.php");


echo $pm="select * from m_branch_creation where branch_id='".$_POST['branch_id']."'"; 
$Epm=mysql_query($pm);
$Fpm=mysql_fetch_array($Epm);


$n = mysql_num_rows($Epm); 
if($n<1)
{
 $pm="insert into m_branch_creation set branch_id='".$_POST['branch_id']."',company_name='".strtoupper($_POST['company_name'])."',branch_address='".strtoupper($_POST['branch_address'])."',description='".strtoupper($_POST['description'])."',gstin='".strtoupper($_POST['gstin'])."',c_person='".$_POST['c_person']."',mobile='".$_POST['mobile']."',l_number='".$_POST['l_number']."',email='".strtoupper($_POST['email'])."',user='".$_SESSION['user']."',branch='".$_SESSION['branch']."',status='Active'";  
$Epm=mysql_query($pm); 

header("location:m_branch_creation_master_view.php?m=1");
}
else
{
header("location:m_branch_creation_master_view.php?m=2");
}

?>