<?php
session_start();
include("dbinfo.php");
error_reporting(0);

if($_POST['iname']!="")
{



 $ch="select * from s_door_temp where ino='".$_POST['ino']."'"; 
$Ech=mysql_query($ch);
$Fch=mysql_fetch_array($Ech);
$n=mysql_num_rows($Ech);  


 $pr="insert into s_door_temp set ino='".$_POST['ino']."',cname='".$_POST['cname']."',cmobile='".$_POST['cmobile']."',sdate='".$_POST['sdate']."',iname='".$_POST['iname']."',mrp='".$_POST['mrp']."',quantity='".$_POST['quantity']."',discount='".$_POST['discount']."',total='".$_POST['total']."',user='".$_SESSION['user']."'
,branch='".$_SESSION['branch']."'"; 
$Epr=mysql_query($pr);



$dsno=$_POST['ino'];

header("location:sale_door.php?dsno=$dsno");
}

else
{
	$itm="select * from s_door_temp"; 
$Eitm=mysql_query($itm);
$Fitm=mysql_fetch_array($Eitm);
	
	
 $ch="select * from s_door_temp where ino='".$Fitm['ino']."'"; 
$Ech=mysql_query($ch);
$Fch=mysql_fetch_array($Ech);
$n=mysql_num_rows($Ech);	


 $ch1="select * from s_door_purchase where ino='".$Fitm['ino']."'";
$Ech1=mysql_query($ch1);
$Fch1=mysql_fetch_array($Ech1);
$n1=mysql_num_rows($Ech1);
$total1=0;
if($n1==0)
{

 $ch2="select * from s_door_temp where ino='".trim($Fitm['ino'])."'";
$Ech2=mysql_query($ch2);
 $nr=mysql_num_rows($Ech2);
//$Fch3=mysql_fetch_array($Ech2);
while($Fch2=mysql_fetch_array($Ech2))
{
 $pr1="insert into s_door_purchase set ino='".$Fch2['ino']."',cname='".$Fch2['cname']."',cmobile='".$Fch2['cmobile']."',sdate='".$Fch2['sdate']."',iname='".$Fch2['iname']."',mrp='".$Fch2['mrp']."',quantity='".$Fch2['quantity']."',discount='".$Fch2['discount']."',total='".$Fch2['total']."',user='".$_SESSION['user']."',branch='".$_SESSION['branch']."',status='Active'"; 
$Epr1=mysql_query($pr1);

$ss1="update a_inventory set qty= qty - '".$Fch2['quantity']."' where item_name='".$Fch2['iname']."' and status='Active' and branch='".$_SESSION['branch']."'"; 
$Ess1=mysql_query($ss1);

$total1=$total1+$Fch2['total'];

}
}

$ch3="select * from s_door_temp where ino='".trim($Fitm['ino'])."'";
$Ech3=mysql_query($ch3);
$Fch3=mysql_fetch_array($Ech3);

$pr="insert into s_door_invoice set invoice_no='".$Fch3['ino']."',sdate='".$Fch3['sdate']."',customer_name='".$Fch3['cname']."',mobile_no='".$Fch3['cmobile']."',net_amount='$total1',status='Active',user='".$_SESSION['user']."',branch='".$_SESSION['branch']."'";
$Epr=mysql_query($pr);

$upno="update generate set dsno=dsno+1 where id ='1'";
$Eupno=mysql_query($upno);

$pd="delete from s_door_temp where ino='".$Fitm['ino']."'";
$Epd=mysql_query($pd); 

header("location:sale_door.php");
}
?>