<?php
include("dbinfo.php");

$d="delete from temp_stock_temp where id='".$_REQUEST['id']."'";
$Ed=mysql_query($d);


header("location:production_receipt.php");
?>