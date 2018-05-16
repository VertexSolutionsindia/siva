<?php
session_start();
include("dbinfo.php");

$sp="select * from t_sales_invoice_details where po_no='".$_REQUEST['so']."'";
$Esp=mysql_query($sp);
while($Fsp=mysql_fetch_array($Esp))
{

$sp1="select * from t_stock_temp where item='".$Fsp['item_name']."'";
$Esp1=mysql_query($sp1);
$Fsp1=mysql_fetch_array($Esp1);

$sp2="update t_stock_temp set qty=qty + '".$Fsp['qty']."' where item='".$Fsp['item_name']."'";
$Esp2=mysql_query($sp2);
$Fsp2=mysql_fetch_array($Esp2);

}

$sp3="delete from t_sales where so_no='".$_REQUEST['so']."'";
$Esp3=mysql_query($sp3);

$sp4="delete from t_sales_details where so_no='".$_REQUEST['so']."'";
$Esp4=mysql_query($sp4);

$sp5="delete from t_sales_delivery where doc_no='".$_REQUEST['so']."'";
$Esp5=mysql_query($sp5);

$sp6="delete from t_sales_delivery_details where po_no='".$_REQUEST['so']."'";
$Esp6=mysql_query($sp6);

$sp7="delete from t_sales_invoice where order_no='".$_REQUEST['so']."'";
$Esp7=mysql_query($sp7);

$sp8="delete from t_sales_invoice_details where po_no='".$_REQUEST['so']."'";
$Esp8=mysql_query($sp8);


header("location:sales_door_delete.php");
?>