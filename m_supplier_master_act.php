<?php
session_start();
include("dbinfo.php");
include("redirect.php");

$pm="select * from m_supplier_master where supplier_id='".$_POST['supplier_id']."'"; 
$Epm=mysql_query($pm);
$Fpm=mysql_fetch_array($Epm);

$n = mysql_num_rows($Epm); 
if($n<1)
{
$gm="insert into m_supplier_master set supplier_id='".$_POST['supplier_id']."',supplier_name='".strtoupper($_POST['supplier_name'])."',address='".strtoupper($_POST['address'])."',email='".strtoupper($_POST['email'])."',gstin='".strtoupper($_POST['gstin'])."',c_person='".strtoupper($_POST['c_person'])."',c_no='".$_POST['c_no']."',al_no='".$_POST['al_no']."',pan_no='".strtoupper($_POST['pan_no'])."',discount='".strtoupper($_POST['discount'])."',holder_1='".strtoupper($_POST['holder_1'])."',bank_1='".strtoupper($_POST['bank_1'])."',ac_no_1='".strtoupper($_POST['ac_no_1'])."',branch_1='".strtoupper($_POST['branch_1'])."',ifsc_1='".strtoupper($_POST['ifsc_1'])."',holder_2='".strtoupper($_POST['holder_2'])."',bank_2='".strtoupper($_POST['bank_2'])."',ac_no_2='".strtoupper($_POST['ac_no_2'])."',branch_2='".strtoupper($_POST['branch_2'])."',ifsc_2='".strtoupper($_POST['ifsc_2'])."',holder_3='".strtoupper($_POST['holder_3'])."',bank_3='".strtoupper($_POST['bank_3'])."',ac_no_3='".strtoupper($_POST['ac_no_3'])."',branch_3='".strtoupper($_POST['branch_3'])."',ifsc_3='".strtoupper($_POST['ifsc_3'])."',user='".$_SESSION['user']."',branch='".$_SESSION['branch']."',status='Active'"; 
$Egm=mysql_query($gm);

header("location:m_supplier_master_view.php");
}
else
{
header("location:m_supplier_master_view.php?m=1");
}

?>