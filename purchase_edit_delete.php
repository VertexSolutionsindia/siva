<?php
include("dbinfo.php");

$pd="delete from p_purchase where id='".$_REQUEST['id']."'";
$Epd=mysql_query($pd);

header("location:purchase_details_view.php");
?>