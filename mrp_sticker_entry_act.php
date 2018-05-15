m<?php
session_start();
include("dbinfo.php");
$bcs="select * from t_mrp_sticker";
$bcs1=mysql_query($bcs);
$bcsr=mysql_fetch_array($bcs1);

if($bcsr['inv_no']==$_POST['sticker'])
{
?>

  <script type="text/javascript">
       alert("Hello! You Have Already Taken MRP Sticker for this Invoice!!");
	  window.location.href='mrp_sticker_no.php';
    </script>
	
<?php

}

else
{



  $inv="select * from t_sales_invoice_details where inv_no='".$_POST['sticker']."'";
$inv_details=mysql_query($inv);
while($inv_result=mysql_fetch_array($inv_details)) 
{


if($_POST['sticker']!="")
{

   

 $pm="REPLACE INTO t_mrp_sticker set mrp='".$inv_result['mrp']."',mrp_per_pcs='".$inv_result['mrp_per_pcs']."',rate_per_box='".$inv_result['rate_per_box']."',po_no='".$inv_result['po_no']."',inv_no='".$_POST['sticker']."',item_name='".$inv_result['item_name']."',size='".$inv_result['size']."',qty='".$inv_result['qty']."',pcs_qty='".$inv_result['pcs_qty']."',rate='".$inv_result['rate']."',amt='".$inv_result['amt']."',mrp_per_pcs_sticker='".$inv_result['mrp_per_pcs_sticker']."',mrp_sticker='".$inv_result['mrp_sticker']."',date='".$inv_result['date']."',company='".$_SESSION['company']."'"; 
 
$Epm=mysql_query($pm);

header("location:mrp_sticker_no.php");

}

 
}

}


?>