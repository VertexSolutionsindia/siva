<!DOCTYPE html>
<html>

<head>
    <!--[if gte mso 9]>
    <xml>
        <x:ExcelWorkbook>
            <x:ExcelWorksheets>
                <x:ExcelWorksheet>
                    <x:Name>Sheet 1</x:Name>
                    <x:WorksheetOptions>
                        <x:Print>
                            <x:ValidPrinterInfo/>
                        </x:Print>
                    </x:WorksheetOptions>
                </x:ExcelWorksheet>
            </x:ExcelWorksheets>
        </x:ExcelWorkbook>
    </xml>
    <![endif]--></head>


<?php
session_start();
include("dbinfo.php");
$date=date('d/m/Y');
if(isset($_POST['export']))
{
header('Content-type: application/excel');
$filename = 'Stock_Report.xls';
header('Content-Disposition: attachment; filename='.$filename);

?>
<body>
  <table  class="table table-bordered table-striped">
                <thead>
			
		
				 
 <tr>
					
				<td>&nbsp;</td>
				<td><h6>SALES BILL REPORT (<?php echo $date;?>)</h6></td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				
			
                <tr>
				<td><b>SL.NO</b></td>
				
                  <td><strong>Bill No</strong></td>
				  <td><strong>Date</strong></td>
				  <td><strong>Customer Name </strong></td>
				  <td><strong>Item Name </strong></td>
				  <td><strong>Net amount </strong></td>
                </tr>
                </thead>
                <tbody>
				
   <?php
				if(isset($_REQUEST['from']))
				{
				$i=0;
				  $ct="select * from invoice where sdate between '".$_REQUEST['from']."' and '".$_REQUEST['to']."' and customer_name='".$_REQUEST['customer_name']."' and 
				 branch='".$_SESSION['branch']."'";
				$Ect=mysql_query($ct);
				while($Fct=mysql_fetch_array($Ect))
				{
				   $ct1="select * from invoice_product_details where  invoice_no='".$Fct['invoice_no']."'"; 
				 $Ect1=mysql_query($ct1);
				 while($Fct1=mysql_fetch_array($Ect1)) 
				 {
				 $i++;
				?>
                <tr>
				 <td><?php echo $i; ?></td>
				 <td><?php echo $Fct['invoice_no']; ?></td>
				  <td><?php echo $new_date = date('d-m-Y', strtotime($Fct['sdate'])); ?></td>
                 <td><?php echo $Fct['customer_name']; ?></td>
				 <td><?php echo $Fct1['item_name']; ?></td>
				 <td><?php echo $Fct['net_amount'];?></td>
				   
                 
                </tr>
				<?php
				}
				}
				}
				?>
				
                  </tbody>
               
              </table>
</body>


<?php
 
}

?>
</html>