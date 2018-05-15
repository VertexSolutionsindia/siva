<?php
include("dbinfo.php");
include("redirect.php");

$ct="update m_product_master set status='Deactive' where id='".$_REQUEST['id']."'";
$Ect=mysql_query($ct);
header("Location: m_item_master_view.php");
?>