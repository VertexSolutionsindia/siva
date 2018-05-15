<?php
include("dbinfo.php");
session_start();

 $g="select * from m_staff where company='".$_POST['company']."' and user_name='".$_POST['user_name']."' and password='".$_POST['password']."' and branch_id='".$_POST['branch_id']."'"; 
$Eg=mysql_query($g);
$Fg=mysql_fetch_array($Eg);
$n=mysql_num_rows($Eg);  

if($n>=1)
{
 $_SESSION['user']=$_POST['user_name'];
 $_SESSION['branch']=$_POST['branch_id'];
 $_SESSION['company']=$_POST['company'];
 
header("location:home.php");
}
else
{

header("location:index.php?m=1");
}
?>