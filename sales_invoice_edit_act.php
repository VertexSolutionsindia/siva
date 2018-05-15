<?php
session_start();
include("dbinfo.php");


$id=$_REQUEST['id'];


$sp="select * from invoice_product_details WHERE id='$id'";
$Esp=mysql_query($sp);
$FEsp=mysql_fetch_array($Esp);

$Ect="update a_inventory set qty= qty + '".$FEsp['qty']."' where barcode='".$_POST['barcode']."' and status='Activate' and branch='".$_SESSION['branch']."'"; 
$Ess1=mysql_query($Ect);


$ct="update invoice_product_details set invoice_no='".$_POST['p_invoice']."',barcode='".$_POST['barcode']."',item_name='".$_POST['item_name']."',qty='".$_POST['qty']."',mrp='".$_POST['mrp']."',discount='".$_POST['discount']."',total='".$_POST['total']."',user='".$_SESSION['user']."',branch='".$_SESSION['branch']."' WHERE id='$id'"; 
$Ect=mysql_query($ct);

 $Ect="update a_inventory set qty= qty - '".$_POST['qty']."' where barcode='".$_POST['barcode']."' and status='Activate' and branch='".$_SESSION['branch']."'"; 
$Ess1=mysql_query($Ect); 

header("Location: sales_invoice_bill_no.php");
?>