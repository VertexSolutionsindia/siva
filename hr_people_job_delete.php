<?php
include("dbinfo.php");
include("redirect.php");


$ct="update hr_people_job set status='Inactive' where id='".$_REQUEST['id']."'";
$Ect=mysql_query($ct);
header("Location: hr_people_job_view.php");
?>