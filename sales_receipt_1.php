<?php
include("dbinfo.php");
$date=date('d/m/Y');
$s="select * from t_sales_invoice where inv_no='".$_REQUEST['inv']."'";
$Es=mysql_query($s);
$Fs=mysql_fetch_array($Es);
$n=mysql_num_rows($Es);
$ino=$n;

$pr="select * from t_party where name='".$Fs['party']."'";
$Epr=mysql_query($pr);
$Fpr=mysql_fetch_array($Epr);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style>
<style type="text/css">
<!--
a.button {
    -webkit-appearance: button;
    -moz-appearance: button;
    appearance: button;
	padding-top:3px;
	padding-bottom:2px;
    padding-right:10px;
    padding-left:10px;
    text-decoration: none;
    color: initial;
}
.style2 {font-family: Arial, Helvetica, sans-serif}
</style>
<script>
function printDiv(divName) {

 var printContents = document.getElementById(divName).innerHTML;
 w=window.open();
 w.document.write(printContents);
 w.print();
 w.close();
}
</script>
</head>

<body>
<div id="print-content">
<table width="1200">
<tr>
<td height="139" colspan="5" style="padding-left:50px" ><H4><?php echo $Fs['party']; ?>,<?php echo $Fpr['address_1']; ?>,</br><?php echo $Fpr['address_2'];?>,</br><?php echo $Fpr['city'];?></td>
<td style="padding-left:80px"  colspan="2" ><H4><?php echo $n; ?></H4></td>
</tr>

<tr>
<td style="padding-left:100px" colspan="5" ><H4>GSTIN : <?php echo $Fpr['gstin'];  ?> &nbsp;&nbsp;STATE CODE : 33</H4></td>
<td style="padding-left:250px"  colspan="2" ><H4><?php echo $Fs['date']; ?></H4></td>
</tr>
<tr>
<td style="padding-left:100px" colspan="3" ><H4><?php echo $Fs['agent']; ?></H4></td>
<td style="padding-left:100px"  colspan="2" ><H4><?php echo $Fs['order_no']; ?></H4></td>
<td style="padding-left:250px"  colspan="2" ><H4><?php echo $Fs['inv_no']; ?></H4></td>
</tr>
<tr>
<td style="padding-left:100px" colspan="3" ><H4><?php echo $Fs['transport']; ?></H4></td>
<td style="padding-left:100px"  colspan="2" ><H4><?php echo $Fs['order_no']; ?></H4></td>
<td style="padding-left:250px"  colspan="2" ><H4><?php echo $Fs['date']; ?></H4></td>
</tr>
<tr>
<td style="padding-left:100px" colspan="3" ><H4><?php echo $Fs['doc_thru'];  ?></H4></td>
<td style="padding-left:100px" colspan="2" ><H4><?php echo $Fs['lr_no'];  ?></H4></td>
<td style="padding-left:280px"  colspan="2" ><H4><?php echo $Fs['date']; ?></H4></td>
</tr>
<tr>
<td width="86" height="66">&nbsp;</td>
<td width="343">&nbsp;</td>
<td width="176">&nbsp;</td>
<td width="203">&nbsp;</td>
<td width="155">&nbsp;</td>
<td width="101">&nbsp;</td>
<td width="104">&nbsp;</td>
</tr>
<tr>
<td colspan="7"><strong>COTTON KNITTED HOSIERY GOODS. HSN CODE : 61082100 CGST @ 2.5% SGST @ 2.5%</strong></td>
</tr>
<?php
$i=0;
$t=0;
$t1=0;

$pc=0;
$pc1=0;
$gt1="select * from t_sales_invoice_details where inv_no='".$_REQUEST['inv']."'";
$Egt1=mysql_query($gt1);
while($Fs1=mysql_fetch_array($Egt1))
{
$pc=0;
$pc1=0;
$q1=0;
$q2=0;
$q3=0;
$q4=0;
$q5=0;
$q6=0;
$q7=0;
$q8=0;
$q9=0;
$q10=0;
$q11=0;
$q12=0;
$q13=0;
$q14=0;

$i++;
?>
<tr>
<td align="left"><?php echo $i; ?></td>
<td style="padding-left:70px"><?php echo $Fs1['item_name']; ?></td>
<?php
$it="select * from t_item where itemname='".$Fs1['item_name']."'";
$Eit=mysql_query($it);
$Fit=mysql_fetch_array($Eit);
$itt="select * from t_rate where name='".$Fs1['item_name']."'";
$Eitt=mysql_query($itt);
$Fitt=mysql_fetch_array($Eitt);
?>

<?php
$s=$Fs1['qty']*$Fitt['packing']
?>
<td align="right"><?php  ?></td>
<td style="padding-left:250px"><?php echo $Fit['size']; ?></td>
<td style="padding-left:100px"><?php echo $Fs1['rate']; ?></td>
<td style="padding-left:180px"><?php echo $s; ?></td>
<td style="padding-left:180px"><?php echo $Fs1['amt']; ?></td>
</tr>


<?php
$t=$t+$Fs1['qty']*$Fit['pcs_per_box'];
$t1=$t1+$Fs1['amt'];
}
?>
<tr>
<td colspan="5">Total : </td>

<td align="right"><h4> <?php echo $t; ?></h4></td>
<td align="right"><h4><?php echo $t1; ?></h4></td>
</tr>

<tr>
<td colspan="5">Less TRADE DISCOUNTS : </td>

<td align="right"><?php echo $Fs['dis_per']; ?></td>
<td align="right"><?php echo $Fs['dis_amt']; ?></td>
</tr>

<tr>
<td style="padding-left:900px" colspan="5">Total : </td>

<td><h4>&nbsp;</h4></td>
<td align="right"><h4><?php
$ft=$t1-$Fs['dis_amt'];
 echo $ft; ?></h4></td>
</tr>


<tr>
<td style="padding-left:900px" colspan="5">CGST : </td>

<td><h4>&nbsp;</h4></td>
<td align="right"><h4>

<?php

 echo $cgst=$Fs['cgst']; ?></h4></td>
</tr>

<tr>
<td style="padding-left:900px" colspan="5">SGST : </td>

<td><h4>&nbsp;</h4></td>
<td align="right"><h4><?php
 echo $sgst=$Fs['sgst'];
 ?></h4></td>
</tr>
<tr>
<td style="padding-left:900px" colspan="5">IGST : </td>

<td><h4>&nbsp;</h4></td>
<td align="right"><h4>


<?php
 echo $igst=$Fs['igst'];
  ?></h4></td>
</tr>

<tr>
<td colspan="5">Net Amount</td>

<td><h4>&nbsp;</h4></td>
<td align="right"><h4>
   <?php
$tot=$ft+$cgst+$sgst+$igst;
 echo $tot; ?>
</h4></td>
</tr>

<tr>
<td colspan="7">GSTIN NUMBER : 33AQMPS3189C1ZN STATE CODE : 33</td>
</tr>
</table>
</div>
<h4 align="center"><input type="button" name="print" value="print" onClick="printDiv('print-content')" />&nbsp;&nbsp;&nbsp;<a href="sales_order.php" class="button style2">cancel</a></h4>
</body>
</html>
