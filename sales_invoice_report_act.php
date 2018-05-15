<?php
session_start();
include("dbinfo.php");

error_reporting(0);



 $s="select * from t_sales_invoice where inv_no='".$_POST['inv_no']."' and company='".$_SESSION['company']."'";
$Es=mysql_query($s);
 $n=mysql_num_rows($Es); 

 $sales="select * from t_sales_invoice_details where inv_no='".$_POST['inv_no']."'and company='".$_SESSION['company']."'";
 $sales1=mysql_query($sales);
 $re=mysql_fetch_array($sales1);
 
if($re['inv_no']==$_POST['inv_no'])
{
  
header("location:sales_receipt_report.php?inv=".$_POST['inv_no']."");
}

?>