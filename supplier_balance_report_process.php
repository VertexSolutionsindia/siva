<?php
session_start();
include("dbinfo.php");


$_POST['from'];
$_POST['to'];


header("location:daily_stock_report.php?from=".$_POST['from']."&to=".$_POST['to']."");
?>