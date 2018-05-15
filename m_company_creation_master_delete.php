<?php
include("dbinfo.php");
include("redirect.php");


$ct="update m_company_creation set status='Inactive' where id='".$_REQUEST['id']."'";
$Ect=mysql_query($ct);
header("Location: m_company_creation_master_view.php");
?>