<?php
session_start();
include("dbinfo.php");


$id=$_REQUEST['id'];

 $sp1="select * from a_inventory";
$Esp1=mysql_query($sp1);
$FEsp1=mysql_fetch_array($Esp1);

$sp="select * from p_purchase WHERE id='$id'";
$Esp=mysql_query($sp);
$FEsp=mysql_fetch_array($Esp);

 $FEsp1="update a_inventory set qty= qty - '".$FEsp['qty']."' where barcode='".$_POST['barcode']."' and status='Active' and branch='".$_SESSION['branch']."'"; 
$Ess1=mysql_query($FEsp1);

$FEsp="update p_purchase set qty= qty - '".$FEsp['qty']."' where id='$id'"; 
$Ess1=mysql_query($FEsp);

 


 $ct="update p_purchase set p_invoice='".$_POST['p_invoice']."',pdate='".$_POST['pdate']."',barcode='".$_POST['barcode']."',item_name='".$_POST['item_name']."',qty='".$_POST['qty']."',mrp='".$_POST['mrp']."',discount='".$_POST['discount']."',prate='".$_POST['prate']."',total='".$_POST['total']."',user='".$_SESSION['user']."',branch='".$_SESSION['branch']."' ,supplier='".$_POST['supplier']."',status='Active'  WHERE id='$id'"; 
$Ect=mysql_query($ct);

 $Ect="update a_inventory set qty= qty + '".$_POST['qty']."' where barcode='".$_POST['barcode']."' and status='Active' and branch='".$_SESSION['branch']."'"; 
$Ess1=mysql_query($Ect); 

header("Location: purchase_invoice_no.php");
?>