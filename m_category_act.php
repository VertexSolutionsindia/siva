<?php
session_start();
include("dbinfo.php");
include("redirect.php");

$pm="select * from m_category where c_id='".$_POST['c_id']."'"; 
$Epm=mysql_query($pm);
$Fpm=mysql_fetch_array($Epm);


$n = mysql_num_rows($Epm); 
if($n<1)
{
$pm="insert into m_category set c_id='".$_POST['c_id']."',c_name='".strtoupper($_POST['c_name'])."',c_description='".strtoupper($_POST['c_description'])."',user='".$_SESSION['user']."',branch='".$_SESSION['branch']."',status='Active'";  
$Epm=mysql_query($pm);

header("location:m_category_view.php?m=1");
}
else
{
header("location:m_category_view.php?m=2");
}

?>