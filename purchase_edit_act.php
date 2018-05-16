<?php
session_start();
include("dbinfo.php");

error_reporting(0);

 $bc="select * from p_purchase_temp where barcode='".$_POST['barcode']."'";
$Ebc=mysql_query($bc);
 $nbc=mysql_num_rows($Ebc);

if($nbc<1)
{
if($_POST['item']!="")
{

 $ch="select * from p_purchase_temp where p_invoice='".$_POST['p_invoice']."'"; 
$Ech=mysql_query($ch);
$Fch=mysql_fetch_array($Ech);
$n=mysql_num_rows($Ech);  

 $pr="insert into p_purchase_temp set p_invoice='".$_POST['p_invoice']."',pdate='".$_POST['date']."',exp_date='".$_POST['edate']."',barcode='".$_POST['barcode']."',item_name='".strtoupper($_POST['item'])."',qty='".$_POST['qty']."',mrp='".$_POST['mrp1']."',drate='".$_POST['prate']."',discount='".$_POST['discount']."',prate='".$_POST['mrp']."',total='".$_POST['total']."',user='".$_SESSION['user']."',branch='".$_SESSION['branch']."',supplier_name='".$_POST['supplier']."',free='".strtoupper($_POST['free'])."',units='".$_POST['units']."'";  
$Epr=mysql_query($pr); 

$pno=$_POST['p_invoice'];



header("location:purchase_edit.php?p_invoice=$pno");
}
else
{
	
	
  $ch="select * from p_purchase_temp where p_invoice='".$_POST['p_invoice']."'"; 
$Ech=mysql_query($ch);
$Fch=mysql_fetch_array($Ech);
 $n=mysql_num_rows($Ech);	


 $ch1="select * from p_purchase where p_invoice='".$_POST['p_invoice']."'"; 
$Ech1=mysql_query($ch1);
$Fch1=mysql_fetch_array($Ech1);
 $n1=mysql_num_rows($Ech1); 



 $ch2="select * from p_purchase_temp where p_invoice='".$_POST['p_invoice']."'"; 
$Ech2=mysql_query($ch2);
while($Fch2=mysql_fetch_array($Ech2))
{
  $pr1="insert into p_purchase set p_invoice='".$Fch2['p_invoice']."',pdate='".$Fch2['pdate']."',edate='".$Fch2['exp_date']."',barcode='".$Fch2['barcode']."',item_name='".strtoupper($Fch2['item_name'])."',qty='".$Fch2['qty']."',mrp='".$Fch2['mrp']."',discount='".$Fch2['discount']."',prate='".$Fch2['prate']."',total='".$Fch2['total']."',user='".$_SESSION['user']."',branch='".$_SESSION['branch']."',supplier='".$_POST['supplier']."',free='".$Fch2['free']."',status='Active',units='".$Fch2['units']."'"; 
$Epr1=mysql_query($pr1);

$stm="select * from a_inventory where barcode='".$Fch2['barcode']."' and branch='".$_SESSION['branch']."'"; 
$sitm=mysql_query($stm);
$Ditm=mysql_fetch_array($sitm);

if($Ditm['barcode']!=$Fch2['barcode'])
{

$in="insert into a_inventory set barcode='".$Fch2['barcode']."',item_name='".strtoupper($Fch2['item_name'])."',qty='".$Fch2['qty']."',mrp='".$Fch2['mrp']."',discount='".$Fch2['discount']."',prate='".$Fch2['prate']."',total='".$Fch2['total']."',user='".$_SESSION['user']."',branch='".$_SESSION['branch']."',status='Active'";
$Ein=mysql_query($in);
}
else
{
$ss1="update a_inventory set qty= qty + '".$Fch2['qty']."' where barcode='".$Fch2['barcode']."' and status='Active' and branch='".$_SESSION['branch']."'"; 
$Ess1=mysql_query($ss1);
}
}


$upno="update generate set pno=pno+1 where id ='1'";
$Eupno=mysql_query($upno);

$pd="delete from p_purchase_temp where p_invoice='".$_POST['p_invoice']."'";
$Epd=mysql_query($pd);


header("location:purchase_details_view.php");
}
}
else
{
header("location:purchase_details_view.php");
}
?>