<?php
session_start();
include("dbinfo.php");

$sp="select * from s_door_temp where po_no='".$_REQUEST['so']."'";
$Esp=mysql_query($sp);
$Fsp=mysql_fetch_array($Esp);

$sp1="select * from s_door_temp where item='".$Fsp['item_name']."'";
$Esp1=mysql_query($sp1);
$Fsp1=mysql_fetch_array($Esp1);


$ss1="update a_inventory set qty= qty - '".$Fch2['quantity']."' where item_name='".$Fch2['iname']."' and status='Active' and branch='".$_SESSION['branch']."'"; 
$Ess1=mysql_query($ss1);

$sp2="update t_stock_temp set qty=qty + '".$Fsp['qty']."' where item='".$Fsp['item_name']."'";
$Esp2=mysql_query($sp2);
$Fsp2=mysql_fetch_array($Esp2);

header("location:sales_door.php");
?>