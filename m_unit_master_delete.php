<?php
include("dbinfo.php");
include("redirect.php");

$ct="update m_unit_master set status='Inactive' where id='".$_REQUEST['id']."'";
$Ect=mysql_query($ct);
header("Location: m_unit_master_view.php");
?>