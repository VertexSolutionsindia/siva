<?php
session_start();
include("dbinfo.php");
include("redirect.php");

$target_dir = "uploadimage/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

$pm="select * from m_staff where s_id='".$_POST['s_id']."'"; 
$Epm=mysql_query($pm);
$Fpm=mysql_fetch_array($Epm);


$n = mysql_num_rows($Epm); 
if($n<1)
{
 $pm="insert into m_staff set s_id='".$_POST['s_id']."',s_name='".strtoupper($_POST['s_name'])."',dob='".$_POST['dob']."',age='".$_POST['age']."',department='".strtoupper($_POST['department'])."',address='".strtoupper($_POST['address'])."',mobile='".$_POST['mobile']."',al_mobile='".$_POST['al_mobile']."',doj='".$_POST['doj']."',salary='".strtoupper($_POST['salary'])."',work_time='".$_POST['work_time']."',blood_grp='".strtoupper($_POST['blood_grp'])."',md='".$_POST['md']."',pg='".$_POST['pg']."',p_mobile='".$_POST['p_mobile']."',p_al_mobile='".$_POST['p_al_mobile']."',orignal_id='".$_POST['orignal_id']."',aadhar_no='".strtoupper($_POST['aadhar_no'])."',image='".$_FILES["image"]["name"]."',cp='".$_POST['cp']."',company='".strtoupper($_POST['company'])."',role='".strtoupper($_POST['role'])."',branch_id='".$_POST['branch_id']."',user_name='".strtoupper($_POST['user_name'])."',password='".strtoupper($_POST['password'])."',user='".$_SESSION['user']."',branch='".$_SESSION['branch']."',status='Active'"; 
$Epm=mysql_query($pm);

header("location:m_staff_master_view.php?m=1");
}
else
{
header("location:m_staff_master_view.php?m=2");
}

?>