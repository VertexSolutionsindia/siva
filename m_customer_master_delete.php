<?php
include("dbinfo.php");
include("redirect.php");


$ct="update m_customer_master set status='Inactive' where id='".$_REQUEST['id']."'";
$Ect=mysql_query($ct);
header("Location: m_customer_master_view.php");
?>