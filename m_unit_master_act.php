<?php
session_start();
include("dbinfo.php");
include("redirect.php");

$pm="select * from m_unit_master where u_id='".$_POST['u_id']."'"; 
$Epm=mysql_query($pm);
$Fpm=mysql_fetch_array($Epm);


$n = mysql_num_rows($Epm); 
if($n<1)
{
$pm="insert into m_unit_master set u_id='".$_POST['u_id']."',u_name='".strtoupper($_POST['u_name'])."',us_name='".strtoupper($_POST['us_name'])."',u_description='".strtoupper($_POST['u_description'])."',user='".$_SESSION['user']."',branch='".$_SESSION['branch']."',status='Active'";  
$Epm=mysql_query($pm);

header("location:m_unit_master_view.php?m=1");
}
else
{
header("location:m_unit_master_view.php?m=2");
}

?>