<?php
session_start();
include("dbinfo.php");

 $sp="select * from invoice_product_details where invoice_no='".$_REQUEST['invoice_no']."' and branch='".$_SESSION['branch']."'"; 
$Esp=mysql_query($sp);
while($Fsp=mysql_fetch_array($Esp))

{
 $sp1="select * from a_inventory where barcode='".$Fsp['barcode']."' and branch='".$_SESSION['branch']."'"; 
$Esp1=mysql_query($sp1);
$Fsp1=mysql_fetch_array($Esp1);

 $sp2="update a_inventory set qty=qty + '".$Fsp['qty']."' where barcode='".$Fsp['barcode']."' and branch='".$_SESSION['branch']."'"; 
$Esp2=mysql_query($sp2);
$Fsp2=mysql_fetch_array($Esp2); 

}

 $sp3="update invoice set status='Inactive' where invoice_no='".$_REQUEST['invoice_no']."' and branch='".$_SESSION['branch']."'"; 
$Esp3=mysql_query($sp3);

 $sp4="update invoice_product_details set status='Inactive' where invoice_no='".$_REQUEST['invoice_no']."' and branch='".$_SESSION['branch']."'"; 
$Esp4=mysql_query($sp4);




header("location:sales_invoice_bill_delete.php");
?>