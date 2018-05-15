<?php
include("dbinfo.php");
include("redirect.php");

$ct="update m_category set status='Inactive' where id='".$_REQUEST['id']."'";
$Ect=mysql_query($ct);
header("Location: m_category_view.php");
?>