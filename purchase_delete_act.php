<?php
session_start();
include("dbinfo.php");

 $sp="select * from p_purchase where p_invoice='".$_REQUEST['p_invoice']."' and branch='".$_SESSION['branch']."'"; 
$Esp=mysql_query($sp);
while($Fsp=mysql_fetch_array($Esp))
{
 $sp1="select * from a_inventory where barcode='".$Fsp['barcode']."' and branch='".$_SESSION['branch']."'"; 
$Esp1=mysql_query($sp1);
$Fsp1=mysql_fetch_array($Esp1);

 $sp2="update a_inventory set qty=qty - '".$Fsp1['qty']."' where barcode='".$Fsp1['barcode']."' and branch='".$_SESSION['branch']."'"; 
$Esp2=mysql_query($sp2);
$Fsp2=mysql_fetch_array($Esp2);

 $sp1="update  p_purchase set status='Inactive' where p_invoice='".$_REQUEST['p_invoice']."' and branch='".$_SESSION['branch']."'"; 
$Esp1=mysql_query($sp1); 
} 

header("location:purchase_order_delete.php");
?>