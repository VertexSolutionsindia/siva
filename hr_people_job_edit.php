<?php
session_start();
include("dbinfo.php");
include("redirect.php");



$id=$_REQUEST['id'];
$ct="update hr_people_job set p_id='".$_POST['p_id']."',name='".strtoupper($_POST['name'])."',age='".$_POST['age']."',dob='".$_POST['dob']."'
,dep='".strtoupper($_POST['dep'])."',address='".strtoupper($_POST['address'])."',m_no='".$_POST['m_no']."',al_no='".$_POST['al_no']."',exp='".strtoupper($_POST['exp'])."'
,per_company='".strtoupper($_POST['per_company'])."',date_req='".$_POST['date_req']."',user='".$_SESSION['user']."',branch='".$_SESSION['branch']."'
,status='Active' WHERE id='$id'";
$Ect=mysql_query($ct);
header("Location: hr_people_job_view.php");
?>