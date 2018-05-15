<?php
session_start();
include("dbinfo.php");
include("redirect.php");
?>
<!DOCTYPE html>
<html>
<head>
 <?php include('design_css.php');
  ?>
  
    <!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|-->
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
		<link rel="stylesheet" type="text/css" href="http://localhost/popup/popup-window.css" />
<script type="text/javascript" src="http://localhost/popup/jquery/jquery.js"></script>
<script type="text/javascript" src="http://localhost/popup/popup-window.js"></script>
<script>

function tabE(obj,e){ 
   var e=(typeof event!='undefined')?window.event:e;// IE : Moz 
   if(e.keyCode==13){ 
     var ele = document.forms[0].elements; 
     for(var i=0;i<ele.length;i++){ 
       var q=(i==ele.length-1)?0:i+1;// if last element : if any other 
       if(obj==ele[i]){ele[q].focus();break} 
     } 
  return false; 
   } 
  } 
  
</script>
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

<body class="hold-transition skin-blue sidebar-mini">
<!-- Anchor start -->
<!--<a href="#" onClick="popup_window_show('#popup_window_id_B2562FB5F3577D989E47A6B8FB6A60D4', { pos : 'window-center', parent : this, x : 0, y : 0, width : 'auto' }); return false;">Open popup window</a>-->
<!-- Anchor end -->

<!-- Popup Window start -->

<!-- Popup Window end -->
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

     <div><?php include("top.php"); ?></div>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
     <div><?php include("left.php"); ?></div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Supplier Outstanding Report
        <small></small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			<?php
			
			?>
           
            <form class="form-horizontal" method="post" action="daily_stock_report_process.php">
            <div class="box-body">
                  
             <div class="form-group">
                  <label for="catcode" class="col-sm-3 control-label">Supplier Name</label>
                  <div class="col-sm-4">
                    <select class="form-control " name="branch_id"   style="width: 100%;" onChange="getuser(this.value)" onkeypress="return tabE(this,event)">
				  	<option>--Select the Supplier Name--</option>
				  <?php
				  $sql="select DISTINCT  supplier from p_purchase";
				  $result=mysql_query($sql);
				  while ($row = mysql_fetch_array($result)) {
				  
				  ?>
				 
				  <option value="<?php echo $row['supplier']; ?>"><?php echo $row['supplier']; ?></option>
				  <?php
				  }
				  
				  ?>
				  </select>
                  </div>
                </div> 
                  
              </div>
              <!-- /.box-body -->
              
                <button class="btn btn-default"> <a href="stock_report.php">Cancel</a></button>
                <button type="submit" onClick="popup_window_show('#popup_window_id_B2562FB5F3577D989E47A6B8FB6A60D4', { pos : 'window-center', parent : this, x : 0, y : 0, width : 'auto' })" class="btn btn-info pull-right">Save Changes</button>
				
				

              
              <!-- /.box-footer -->
            </form>
		
          </div>
        </div>
      </div>
	   <form action="daily_stock_export.php?from=<?php echo $_REQUEST['from']; ?>&to=<?php echo $_REQUEST['to']; ?>"  method="post" name="export_excel">
 
			<div class="control-group">
				<div class="controls">
					<button type="submit" id="export" name="export" class="btn btn-primary button-loading" data-loading-text="Loading...">EXPORT Stock Details</button>
				</div>
			</div>
		</form> 
	       <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            
            <div class="box">
            <div class="box-header">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
			<div class="scroll">
				<div class="box-body" style="overflow:auto"
            <div class="box-body">
		
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
				<th>Sl No</th>
				<th>Invoice No</th>
				<th>Invoice Date</th>
                  <th>Invoice Amount</th>
				   <th>Recvive Date</th>
				    <th>Recvive Amount</th>
					 <th>Balance Amount</th>
					 <th>days</th>
				    
					 
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
                  </tbody>
               
              </table>
			  </div>
            </div>
            <!-- /.box-body -->
          </div>
            
          
        </div>
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
 <?php include('footer.php');   ?>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<?php include('script.php');
?><!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>