<?php
include("dbinfo.php");
include("redirect.php");
session_start();

error_reporting(0);

$date=date('d/m/Y');
$s="select * from invoice where invoice_no='".$_REQUEST['invoice_no']."'";
$Es=mysql_query($s);
$Fs=mysql_fetch_array($Es);
$n=mysql_num_rows($Es);
$ino=$n;

 $pr="select * from m_company_creation"; 
$Epr=mysql_query($pr);
$Fpr=mysql_fetch_array($Epr);

?>
 <?php
date_default_timezone_set("Asia/Calcutta");
$d=strtotime("10:30pm April 15 2014");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sales Bill</title>
<style>
<style type="text/css" media="print">
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
@media print { 
table, table tr, table td { 
border-top: #000 solid 1px; 
border-bottom: #000 solid 1px; 
border-left: #000 solid 1px; 
border-right: #000 solid 1px; 
}
.tds
{
border-top: #000 solid 1px; 
border-bottom: #000 solid 1px; 
border-left: #000 solid 1px; 
border-right: #000 solid 1px; 
}
}








.style2 {font-family: Arial, Helvetica, sans-serif}
.tds {border-top: #000 solid 1px; 
border-bottom: #000 solid 1px; 
border-left: #000 solid 1px; 
border-right: #000 solid 1px; 
}
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
<script>
function getIndianCurrency(float $number)
{
    $decimal = round($number - ($no = floor($number)), 2) * 100;
    $hundred = null;
    $digits_length = strlen($no);
    $i = 0;
    $str = array();
    $words = array(0 => '', 1 => 'one', 2 => 'two',
        3 => 'three', 4 => 'four', 5 => 'five', 6 => 'six',
        7 => 'seven', 8 => 'eight', 9 => 'nine',
        10 => 'ten', 11 => 'eleven', 12 => 'twelve',
        13 => 'thirteen', 14 => 'fourteen', 15 => 'fifteen',
        16 => 'sixteen', 17 => 'seventeen', 18 => 'eighteen',
        19 => 'nineteen', 20 => 'twenty', 30 => 'thirty',
        40 => 'forty', 50 => 'fifty', 60 => 'sixty',
        70 => 'seventy', 80 => 'eighty', 90 => 'ninety');
    $digits = array('', 'hundred','thousand','lakh', 'crore');
    while( $i < $digits_length ) {
        $divider = ($i == 2) ? 10 : 100;
        $number = floor($no % $divider);
        $no = floor($no / $divider);
        $i += $divider == 10 ? 1 : 2;
        if ($number) {
            $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
            $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
            $str [] = ($number < 21) ? $words[$number].' '. $digits[$counter]. $plural.' '.$hundred:$words[floor($number / 10) * 10].' '.$words[$number % 10]. ' '.$digits[$counter].$plural.' '.$hundred;
        } else $str[] = null;
    }
    $Rupees = implode('', array_reverse($str));
    $paise = ($decimal) ? "." . ($words[$decimal / 10] . " " . $words[$decimal % 10]) . ' Paise' : '';
    return ($Rupees ? $Rupees . 'Rupees ' : '') . $paise .;
}
</script>
</head>

<body oncontextmenu="return false;">

<div id="print-content">
<table align="center" width="450" border="1"   cellpadding="3"  cellspacing="0">
<thead>
<tr>
<th  align="center" colspan="10" ><h3><b><?php echo $_SESSION['company']; ?> </b></h3></th>
</tr>
</thead>
<tbody>
<tr>
<td  align="center" colspan="10" ><b>SIVA DEPARTMENTAL STORE</br> 198, Nehru St, Peranaidu Layout,</br> Ram Nagar, Coimbatore,</br> Tamil Nadu 641009 </b></td>
</tr>
<TR>
<TD colspan="3" align="left"><span><b><span><b>Customer Name:</b></span> <?PHP echo $Fs['customer_name']; ?></br>Phone No:</b> <?PHP echo $Fs['mobile_no']; ?> </span></TD>
<TD colspan="4" align="left"><b>State Code:</b> 32 </br> <b>GSTIN:</b> <?PHP echo $Fpr['gstin']; ?> </TD>
</TR >
<TR>
<TD colspan="3" align="left"><span><b>Date:</b></span> <?PHP echo  $new_date = date('d-m-Y l', strtotime($Fs['date'])); ?> </br></TD>
<TD colspan="4" align="left"><b>Bill No:</b> <?PHP echo $Fs['invoice_no']; ?></TD>

<TR align="center">
<TD width="149"><b>Item name</b></TD>
<TD width="56"><b>Unit</b></TD>
<TD width="47"><b>Rate</b></TD>
<TD width="48"><strong>Qty</strong></TD>
<td width="48"><B>Weight</B></td>
<td width="52"><B>Amount</B></td>
</TR>

<TR>
<td align="LEFT" colspan="12"></td>
</TR>
<?php

$qt=0;
$dt=0;
$trs=0;
$gt1="select * from  invoice_product_details where invoice_no='".$_REQUEST['invoice_no']."'";
$counter = 0;
$Egt1=mysql_query($gt1);
while($Fs1=mysql_fetch_array($Egt1))
{

 $it="select * from m_item_master where barcode='".$Fs1['barcode']."'"; 
$Eit=mysql_query($it);
$Fit=mysql_fetch_array($Eit);

$ct="select * from m_item_master where status='Activate' and branch='".$_SESSION['branch']."'";
$Ect=mysql_query($ct);
$Fct=mysql_fetch_array($Ect);

$ss=$Fit['tax']+100;
$ss1=$Fs1['total']/$ss;
$ss2=$ss1*$Fit['tax'];
$number1=$ss2/2;

?>


<TR>
<TD  ><?PHP echo $Fs1['item_name']; ?></br><?PHP echo $Fct['item_name_1']; ?></br><?PHP echo $Fit['tax']; ?></TD>
<TD  ><?PHP echo $Fit['unit']; ?></TD>
<TD ><?PHP echo $Fs1['mrp']; ?></TD>
<TD  ><?PHP echo $Fs1['qty'];?></TD>
<TD align="center"><?PHP echo $Fs1['total']; ?>.00</TD>
<TD align="center"><?PHP echo $Fs1['total']; ?></TD>
</TR>
</tbody>


<?php

$qt=$qt+$Fs1['qty'];
$qt1=$qt1+$Fs1['total'];


?>



<?php
}
?>

<TR>

<TD><span>Total</span></TD>

<TD>&nbsp;</TD>
<TD>&nbsp;</TD>
<TD height="12"  class="tds"><?PHP echo $qt ?></TD>
<TD align="center"><?PHP echo $qt1 ?>.00</TD>
<TD align="center"><?PHP echo $qt1 ?></TD>
</TR>
<TR>
<td align="LEFT" colspan="12"></td>
</TR>
<?php
$qt2=$qt2+round($qt1, 2);
?>

<tr>
<TD></TD>
<TD>&nbsp;</TD>
<TD>&nbsp;</TD>
<TD height="12" align="right">&nbsp;</TD>
<TD align="center">Total Rs. </TD>
<TD align="center"><?PHP echo round($qt1, 2) ?></TD>
</tr>
<?php
$qt=0;
$dt=0;
$trs=0;
$gt1="select * from  invoice_product_details where invoice_no='".$_REQUEST['invoice_no']."'";
$counter = 0;
$Egt1=mysql_query($gt1);
while($Fs1=mysql_fetch_array($Egt1))
{

$it="select * from m_item_master where barcode='".$Fs1['barcode']."'";
$Eit=mysql_query($it);
$Fit=mysql_fetch_array($Eit);
$ss=$Fit['tax']+100;
$ss1=$Fs1['total']/$ss;
$ss2=$ss1*$Fit['tax'];
$number1=$ss2/2;

?>
<?php 

$tr=$Fs1['total']/($Fit['tax']+100);
$tr1=$tr*100;
$number=$tr1;
 ?>
 <?php 
 $Fit1=$Fit1+$number1
?>


<?php
$Ft=Ft+ $tr1;
$Ft1=$Ft1+$Fit1;
$t=$t+$Ft;
$number=$t;
}
?>
<?php 

?><TR>
<td align="LEFT" colspan="12"></td>
</TR>
<tr>

<th align="left" colspan="2" ><b>User Name :</b> <?php echo $_SESSION['user']; ?> </th>
<th align="left" colspan="4" >Date : <?php  $currentDateTime = date('Y-m-d H:i:s');
    echo $currentDateTime;   ?> </th>
</tr>
<tr>
<th align="center" colspan="6" >THANKING YOU VISIT AGIAN </th>
</tr>
</table>
</div>
<h4 align="center"><input type="button" name="print" value="print" onClick="printDiv('print-content')" />&nbsp;&nbsp;&nbsp;<a href="sales_invoice.php" class="button style2">cancel</a></h4>
</body>
</html>
