 <?php
 session_start();
include("dbinfo.php");
include("redirect.php");

 $pr="insert into invoice set invoice_no='".$_POST['invoice_no']."',sdate='".$_POST['date']."',customer_name='".$_POST['customer_name']."',mobile_no='".$_POST['mobile_no']."',net_amount='".$_POST['cmobile_no']."',status='Active',user='".$_SESSION['user']."',branch='".$_SESSION['branch']."'";
$Epr=mysql_query($pr);


$p="select * from invoice";
$Ep=mysql_query($p);
$Fp=mysql_fetch_array($Ep);
$n=mysql_num_rows($Ep);
$pn=$n+1;

for($i=1;$i<=150;$i++)
{
	
	
if($_POST['description'.$i]!="")
{
 $item_name=$_POST['priceper'.$i];
$barcode=$_POST['description'.$i];
$mrp=$_POST['per_pack'.$i];
$discount=$_POST['description'.$i];
$qty=$_POST['quantity'.$i];
$total=$_POST['subtotal'.$i];


 $ss1="insert into invoice_product_details set sdate='".$_POST['date']."',invoice_no='".$_POST['invoice_no']."',item_name='$item_name',barcode='$barcode'
,mrp='$mrp',discount='$discount',qty='$qty',total='$total',status='Active',user='".$_SESSION['user']."',branch='".$_SESSION['branch']."'";  
$Ess1=mysql_query($ss1); 
 
 
 $ss1="update a_inventory set qty= qty - '$qty' where barcode='$barcode' and branch='".$_SESSION['branch']."'";
$Ess1=mysql_query($ss1);

}
}

$upno="update generate set sno=sno+1 where id ='1'";
$Eupno=mysql_query($upno);

header("location:sales_receipt.php?invoice_no=".$_POST['invoice_no']."");
?>