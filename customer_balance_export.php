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
    <![endif]-->
</head>


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
<?php
if($_SESSION['company']=="PINKLIPS")
{
?>
<body>
  <table  class="table table-bordered table-striped">
                <thead>
			
		
				  <tr>
					
				<td>&nbsp;</td>
				<td><h6><?php echo $_SESSION['company']?></h6></td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				
				</tr>
 <tr>
					
				<td>&nbsp;</td>
				<td><h6>STOCK REPORT (<?php echo $date;?>)</h6></td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				
                <tr>
				<td><b>SL.NO</b></td>
				
                  <td><b>Date</b></td>
				  <td><b>Lot No</b></td>
				  <td><b>Item</b></td>
				  <td><b>Qty</b></td>
                </tr>
                </thead>
                <tbody>
				
  <?php
				if(isset($_REQUEST['from']))
				{
				$i=0;
			 $ct="select * from t_stock_temp where lot_no between '".$_REQUEST['from']."' and '".$_REQUEST['to']."'";
				$Ect=mysql_query($ct);
				while($Fct=mysql_fetch_array($Ect))
				{
				 $i++;
				?>
				
				
                <tr>
			
				 <td><?php echo $i; ?></td>
				 <td><?php echo $Fct['lot_no']; ?></td>
                 <td><?php echo $Fct['doc_no']; ?></td>
				 <td><?php echo $Fct['item']; ?></td>
				 <td><?php echo $Fct['qty']; ?></td>
				   
                 
            
				
				
				</tr>
                 
               
				
		
				 <?php
				
				}
				}
				?>
				 <?php
				
				}
			
				?>
				 <?php
				
				}
				
				?>
                  </tbody>
              </table>



</html>