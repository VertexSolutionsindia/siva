<?php
session_start();
include("dbinfo.php");

 if($_POST['ws_iname']!="")
{

echo $ch="select * from ws_invoice_temp where ws_ino='".$_POST['ws_ino']."'"; 
$Ech=mysql_query($ch);
$Fch=mysql_fetch_array($Ech);
$n=mysql_num_rows($Ech);  


echo $pr="insert into ws_invoice_temp set ws_ino='".$_POST['ws_ino']."',ws_cname='".strtoupper($_POST['ws_cname'])."',ws_cmobile='".$_POST['ws_cmobile']."'
 ,ws_sdate='".$_POST['ws_sdate']."',ws_iname='".strtoupper($_POST['ws_iname'])."',ws_mrp='".$_POST['ws_mrp']."',ws_qty='".$_POST['ws_qty']."'
 ,ws_discount='".$_POST['ws_discount']."',ws_total='".$_POST['ws_total']."',user='".$_SESSION['user']."',branch='".$_SESSION['branch']."'"; 
$Epr=mysql_query($pr);



$wsno=$_POST['ws_ino'];

header("location:whole_sales_invoice.php?wsno=$wsno");
}

else
{
	$itm="select * from ws_invoice_temp"; 
$Eitm=mysql_query($itm);
$Fitm=mysql_fetch_array($Eitm);
	
	
 $ch="select * from ws_invoice_temp where ws_ino='".$Fitm['ws_ino']."'"; 
$Ech=mysql_query($ch);
$Fch=mysql_fetch_array($Ech);
$n=mysql_num_rows($Ech);	


 $ch1="select * from ws_invoice where ws_invoice='".$Fitm['ws_ino']."'";
$Ech1=mysql_query($ch1);
$Fch1=mysql_fetch_array($Ech1);
$n1=mysql_num_rows($Ech1);
$total1=0;
if(($n1<1)&&($n>0))
{




echo $ch2="select * from ws_invoice_temp where ws_ino='".trim($Fitm['ws_ino'])."'";
$Ech2=mysql_query($ch2);
echo $nr=mysql_num_rows($Ech2);
$Fch3=mysql_fetch_array($Ech2);
while($Fch2=mysql_fetch_array($Ech2))
{
 echo $pr1="insert into ws_purchase set ws_invoice='".$Fch2['ws_invoice']."',ws_cname='".$Fch2['ws_cname']."',ws_mobile='".$Fch2['ws_mobile']."'
 ,ws_sdate='".$Fch2['ws_sdate']."',ws_iname='".$Fch2['ws_iname']."',ws_mrp='".$Fch2['ws_mrp']."',ws_qty='".$Fch2['ws_qty']."',ws_discount='".$Fch2['ws_discount']."'
 ,ws_total='".$Fch2['ws_total']."',user='".$_SESSION['user']."',branch='".$_SESSION['branch']."',status='Active'"; 
$Epr1=mysql_query($pr1);

 $ss1="update a_inventory set qty= qty - '".$Fch2['ws_qty']."' where item_name='".$Fch2['ws_iname']."' and status='Active' and branch='".$_SESSION['branch']."'"; 
$Ess1=mysql_query($ss1);

$total1=$total1+$Fch2['ws_total'];




$pr="insert into ws_invoice set ws_invoice='".$Fch3['ws_invoice']."',ws_sdate='".$Fch3['ws_sdate']."',ws_cname='".strtoupper($Fch3['ws_cname'])."',ws_mobile='".$Fch3['ws_mobile']."',ws_net='$total1',status='Active',user='".$_SESSION['user']."',branch='".$_SESSION['branch']."'";
$Epr=mysql_query($pr); 
}
}

exit;

 $upno="update generate set wsno=wsno+1 where id ='1'";
$Eupno=mysql_query($upno);

 $pd="delete from ws_invoice_temp where ino='".$Fitm['ws_ino']."'";
$Epd=mysql_query($pd); 


header("location:whole_sales_invoice.php");
}
?>