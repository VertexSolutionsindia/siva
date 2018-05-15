<?php
session_start();
include("dbinfo.php");
include("redirect.php");
?>
<!DOCTYPE html>
<html>
<head>
 <?php 
  include("design_css.php")
  ?>
  
  <?php
include("dbinfo.php");
$ss="select * from invoice";
$Ess=mysql_query($ss);
$Fss=mysql_fetch_array($Ess);
$ns=mysql_num_rows($Ess);
$ns1=$ns+0001;
$dc="TC".$ns1;

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
    Sales Bill Report
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
           
            <form class="form-horizontal" method="post" action="sales_bill_report_process.php">
            <div class="box-body">
                  
             
				<div class="form-group col-sm-4" style="padding-left:60px">
                  <label for="date">From</label>
                  
                  <div class="input-group date">
                  <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" name="from" class="form-control pull-right" onKeyPress="return tabE(this,event)">
                </div>
                </div>
               <div class="form-group col-sm-4" style="padding-left:60px">
                  <label for="duedate">To</label>
                  
                  <div class="input-group date">
                  <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" name="to" class="form-control pull-right"  onKeyPress="return tabE(this,event)">
                </div>
                </div>  
                  
            
			  
			  
			    <div class="form-group col-sm-4" style="padding-left:60px">
                  <label for="item">Customer Name</label>
                  <div>
                 <select class="form-control select2" name="customer_name"  style="width: 100%;" onkeypress="return tabE(this,event)">
				  <option>--select customer Name---</option>
				  <?php
				  $sql="select DISTINCT cname from s_door_purchase where branch='".$_SESSION['branch']."'";
				  $result=mysql_query($sql);
				  while ($row = mysql_fetch_array($result)) {
				  
				  ?>
				  <option value="<?php echo $row['cname']; ?>"><?php echo $row['cname']; ?></option>
				  <?php
				  }
				  
				  ?>
				  </select>
				 
                </div>
                </div></div>
              <!-- /.box-body -->
              
                <button class="btn btn-default"> <a href="stock_report.php">Cancel</a></button>
                <button type="submit" onClick="popup_window_show('#popup_window_id_B2562FB5F3577D989E47A6B8FB6A60D4', { pos : 'window-center', parent : this, x : 0, y : 0, width : 'auto' })" class="btn btn-info pull-right">Save Changes</button>
				
				

              
              <!-- /.box-footer -->
            </form>
		
          </div>
        </div>
      </div>
	   <form action="sales_bill_report_export.php?from=<?php echo $_REQUEST['from']; ?>&to=<?php echo $_REQUEST['to']; ?>&customer_name=<?php echo $_REQUEST['customer_name'];?>"  method="post" name="export_excel">
 
			<div class="control-group">
				<div class="controls">
					<button type="submit" id="export" name="export" class="btn btn-primary button-loading" data-loading-text="Loading...">EXPORT Sales Bill</button>
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
				<div class="box-body" style="overflow:auto">
            <div class="box-body">
		
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
				<th width="15">Sl No</th>
				<th width="45">Bill No</th>
				 <th width="30">Date</th>
				<th width="100">Customer Name</th>
				   <th width="120">Item name</th>
				    <th width="30">Net Amount</th>
					 
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
   <?php
  include("footer.php");
  ?>

  <!-- Control Sidebar -->
 
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->

<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- bootstrap datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- select2 -->
<script src="bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
    
    //Date picker
    $('#datepicker').datepicker({
      format:'dd/mm/yyyy'
	  
    })
    $('#datepicker1').datepicker({
      format:'dd/mm/yyyy'
	 
    })
  })
</script>
<script>
  $(function() {
    $('#example1').DataTable({
	 'searching'   : true,
	
	})
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>