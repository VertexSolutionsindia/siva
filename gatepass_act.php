<?php
include("dbinfo.php");
if($_POST['date']!="")
{
$pr="insert into t_gatepass set branch='".$_POST['branch']."',doc_no='".$_POST['doc_no']."',date='".$_POST['date']."',party='".$_POST['party']."',remarks='".$_POST['remarks']."',vehicle='".$_POST['vehicle']."'";
$Epr=mysql_query($pr);
}
$issue=$_POST['item']; 
$issue1=$_POST['qty'];
$issue2=$_POST['uom'];



$p="select * from t_purchase";
$Ep=mysql_query($p);
$Fp=mysql_fetch_array($Ep);
$n=mysql_num_rows($Ep);
$pn=$n+1;

for($i=0;$i<=50;$i++)
{
if($issue[$i]!="")
{

$ss1="insert into t_gatepass_details set doc_no='".$_POST['doc_no']."',item='".$issue[$i]."',qty='".$issue1[$i]."',uom='".$issue2[$i]."'"; 
$Ess1=mysql_query($ss1);
}
}

header("location:print_gatepass.php?dc=".$_POST['doc_no']."");
?>