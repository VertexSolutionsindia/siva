<?php
include("dbinfo.php");
include("redirect.php");

$ct="update m_role set status='Inactive' where id='".$_REQUEST['id']."'";
$Ect=mysql_query($ct);
header("Location: m_role_master_view.php");
?>