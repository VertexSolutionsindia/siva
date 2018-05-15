<?php
include("dbinfo.php");

$d="delete from temp_sales_details where id='".$_REQUEST['id']."'";
$Ed=mysql_query($d);


header("location:sales_order.php");
?>