<?php
session_start();
include("dbinfo.php");
include("redirect.php");

$target_dir = "uploadimage/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

$id=$_REQUEST['id'];
$ct="update m_staff set s_id='".$_POST['s_id']."',s_name='".strtoupper($_POST['s_name'])."',dob='".$_POST['dob']."',age='".$_POST['age']."'
,department='".strtoupper($_POST['department'])."',address='".strtoupper($_POST['address'])."',mobile='".$_POST['mobile']."',al_mobile='".$_POST['al_mobile']."',
doj='".$_POST['doj']."',salary='".strtoupper($_POST['salary'])."',work_time='".strtoupper($_POST['work_time'])."',blood_grp='".strtoupper($_POST['blood_grp'])."'
,md='".strtoupper($_POST['md'])."',pg='".strtoupper($_POST['pg'])."',p_mobile='".$_POST['p_mobile']."',p_al_mobile='".$_POST['p_al_mobile']."',
orignal_id='".$_POST['orignal_id']."',aadhar_no='".strtoupper($_POST['aadhar_no'])."',image='".$_FILES["image"]["name"]."',cp='".$_POST['cp']."',
company='".strtoupper($_POST['company'])."',role='".strtoupper($_POST['role'])."',branch_id='".$_POST['branch_id']."',user_name='".strtoupper($_POST['user_name'])."',
password='".strtoupper($_POST['password'])."',user='".$_SESSION['user']."',branch='".$_SESSION['branch']."',status='Active',status='Active' WHERE id='$id'";
$Ect=mysql_query($ct);
header("Location: m_staff_master_view.php");
?>