<?php
session_start();
include("dbinfo.php");
include("redirect.php");


$_POST['from'];
$_POST['to'];
$_POST['supplier'];


header("location:purchase_bill_report.php?from=".$_POST['from']."&to=".$_POST['to']."&supplier=".$_POST['supplier']."");
?>