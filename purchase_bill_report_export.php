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
$filename = 'purchase_Report.xls';
header('Content-Disposition: attachment; filename='.$filename);

?>
<body>
  <table  class="table table-bordered table-striped">
                <thead>
			
		
				 
 <tr>
					
				<td>&nbsp;</td>
				<td><h6>PARTY WISE BILL REPORT (<?php echo $date;?>)</h6></td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td width="1">&nbsp;</td>
				<td width="1">&nbsp;</td>
				<td width="1">&nbsp;</td>
				<td width="1">&nbsp;</td>
				<td width="1">&nbsp;</td>
				<td width="1">&nbsp;</td>
				<td width="1">&nbsp;</td>
				<td width="1">&nbsp;</td>
				<td width="1">&nbsp;</td>
				<td width="1">&nbsp;</td>
				<td width="1">&nbsp;</td>
				
			
                <tr>
				<th width="47">Sl No</th>
				<th width="120">Invoice No</th>
				 <th width="33">Date</th>
				<th width="59">Supplier Name </th>
				   <th width="161">Item name</th>
				    <th width="52">Net Amount</th>
                </tr>
                </thead>
                <tbody>
				
   	<?php
			
				$i=0;
				 $ct="select * from p_purchase where pdate between '".$_REQUEST['from']."' and '".$_REQUEST['to']."' and supplier='".$_REQUEST['supplier']."'";
				$Ect=mysql_query($ct);
				while($Fct=mysql_fetch_array($Ect))
				{
				 $i++;
				
				?>
								
                <tr>
					
				<td><?php echo $i; ?></td>
				 <td><?php echo $Fct['p_invoice']; ?></td>
				  <td><?php echo $Fct['pdate']; ?></td>
                 <td><?php echo $Fct['supplier']; ?></td>
				 <td><?php echo $Fct['item_name']; ?></td>
				 <td><?php echo $Fct['total'];?></td>
				   
				
				
				
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
				
				</tr>
                 
               
				
		
				 <?php
				
				
				}
				?>
				
                  </tbody>
               
              </table>
</body>


<?php
 
}

?>
</html>