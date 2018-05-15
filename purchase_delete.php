<?php
include("dbinfo.php");

$pd="delete from p_purchase_temp where id='".$_REQUEST['id']."'";
$Epd=mysql_query($pd);

header("location:purchase.php");
?>