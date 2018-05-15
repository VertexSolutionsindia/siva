<?php
session_start();
include("dbinfo.php");
include("redirect.php");
  $s="select * from invoice where invoice_no='".$_POST['invoice_no']."' and branch='".$_SESSION['branch']."'";
$Es=mysql_query($s);
 $n=mysql_num_rows($Es); 


 $pr="update  invoice set invoice_no='".$_POST['invoice_no']."',date='".$_POST['date']."',customer_name='".$_POST['customer_name']."',mobile_no='".$_POST['mobile_no']."' 
where branch='".$_SESSION['branch']."'";
$Epr=mysql_query($pr); 






 


header("location:sales_invoice_bill_no.php");

?>