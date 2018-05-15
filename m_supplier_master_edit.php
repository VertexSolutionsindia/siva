<?php
session_start();
include("dbinfo.php");
include("redirect.php");

$id=$_REQUEST['id'];
$ct="update m_supplier_master set supplier_id='".$_POST['supplier_id']."',supplier_name='".$_POST['supplier_name']."',address='".$_POST['address']."',email='".$_POST['email']."',gstin='".$_POST['gstin']."',c_person='".$_POST['c_person']."',c_no='".$_POST['c_no']."',al_no='".$_POST['al_no']."',pan_no='".$_POST['pan_no']."',discount='".$_POST['discount']."',holder_1='".$_POST['holder_1']."',bank_1='".$_POST['bank_1']."',ac_no_1='".$_POST['ac_no_1']."',branch_1='".$_POST['branch_1']."',ifsc_1='".$_POST['ifsc_1']."',holder_2='".$_POST['holder_2']."',bank_2='".$_POST['bank_2']."',ac_no_2='".$_POST['ac_no_2']."',branch_2='".$_POST['branch_2']."',ifsc_2='".$_POST['ifsc_2']."',holder_3='".$_POST['holder_3']."',bank_3='".$_POST['bank_3']."',ac_no_3='".$_POST['ac_no_3']."',branch_3='".$_POST['branch_3']."',ifsc_3='".$_POST['ifsc_3']."',user='".$_SESSION['user']."',branch='".$_SESSION['branch']."',status='Active' WHERE id='$id'";
$Ect=mysql_query($ct);
header("Location: m_supplier_master_view.php");
?>