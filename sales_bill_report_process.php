<?php
session_start();
include("dbinfo.php");


$_POST['from'];
$_POST['to'];
$_POST['customer_name'];


header("location:sales_bill_report.php?from=".$_POST['from']."&to=".$_POST['to']."&customer_name=".$_POST['customer_name']."");
?>