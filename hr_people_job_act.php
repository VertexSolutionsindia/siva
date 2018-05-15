<?php
session_start();
include("dbinfo.php");
include("redirect.php");


 $pm="select * from hr_people_job where p_id='".$_POST['p_id']."'"; 
$Epm=mysql_query($pm);
$Fpm=mysql_fetch_array($Epm);


$n = mysql_num_rows($Epm); 
if($n<1)
{
  $pm="insert into hr_people_job set p_id='".$_POST['p_id']."',name='".strtoupper($_POST['name'])."',age='".$_POST['age']."',dob='".$_POST['dob']."'
,dep='".strtoupper($_POST['dep'])."',address='".strtoupper($_POST['address'])."',m_no='".$_POST['m_no']."',al_no='".$_POST['al_no']."',exp='".strtoupper($_POST['exp'])."'
,per_company='".strtoupper($_POST['per_company'])."',date_req='".$_POST['date_req']."',user='".$_SESSION['user']."',branch='".$_SESSION['branch']."'
,status='Active'";  
$Epm=mysql_query($pm); 

header("location:hr_people_job_view.php?m=1");
}
else
{
header("location:hr_people_job_view.php?m=2");
}

?>