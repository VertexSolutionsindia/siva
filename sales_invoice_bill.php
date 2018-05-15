<?php
session_start();
include("dbinfo.php");
include("redirect.php");
?>
<!DOCTYPE html>
<html>
<head>
  <?php include("design_css.php");
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
<style>
    .padding-4 th,
    .padding-4 td{
        padding: 4px !important;
    }    
	
	.disp{ display:block;  height: 580px; width:1200px; overflow-y: scroll; }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script>
$(function(){
    $('#category[]').on('change', function(){
        var val = $(this).val();
        var sub = $('#item_name[]');
        if(val == '--All--') {
            $('#item_name[]').find('option').show();
        }
        else {
            sub.find('option').not(':first').hide();
            $('option', sub).filter(function(){
                if($(this).attr('data-group') == val){
                    $(this).show();
                }
            });
        }
        sub.val(0);
    });
});

</script>
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

function alertChecked1(){ 
    var rate = 0;
	var rate1 = 0;
	var ex = 0;
    var inputs1 = document.getElementsByName('qty[]');
	var inputs2 = document.getElementsByName('rate[]');
	var inputs3 = document.getElementsByName('amount[]');
	
for ( var index2 = 0; index2 < inputs1.length; index2++) {
   if (inputs1[index2].value){
       rate = inputs1[index2].value;
	   rate1 = inputs2[index2].value;
	   ex = rate * rate1;
	   inputs3[index2].value=ex;
   }
      
}
    
    
}

function alertChecked2(){ 
    var qty = 0;
    var inputs = document.getElementsByName('amount[]');
for ( var index = 0; index < inputs.length; index++) {
   if (parseInt(inputs[index].value)){
       qty += parseInt(inputs[index].value);
	   
   }
  
}
         document.getElementById('tot').value = qty;
}

function balanceqty1(){ 
    var rate = 0;
	var rate1 = 0;
	var ex = 0;
    var inputs1 = document.getElementsByName('qty[]');
	var inputs2 = document.getElementsByName('stock_qty[]');
	var inputs3 = document.getElementsByName('so_bal_qty[]');
	
for ( var index2 = 0; index2 < inputs1.length; index2++) {
   if (inputs1[index2].value){
       rate = inputs1[index2].value;
	   rate1 = inputs2[index2].value;
	   ex = rate1 - rate;
	   inputs3[index2].value=ex;
   }
      
}
    
    
}



</script>
    </head>

<body class="hold-transition skin-blue sidebar-mini">
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
        Sales Delivery
        <small></small>
      </h1>
    </section>
<?php
 $p="select * from invoice where branch='".$_SESSION['branch']."'";
$Ep=mysql_query($p);
$FEp=mysql_fetch_array($Ep);

 $p1="select * from invoice where invoice_no='".$_POST['po_no']."' and branch='".$_SESSION['branch']."'"; 
$Ep1=mysql_query($p1);
$FEp1=mysql_fetch_array($Ep1)
?>
    <!-- Main content -->
    <section class="content container-fluid">
        <form role="form" method="post" action="sales_invoice_bill_act.php">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Sales Delivery</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
              <div class="box-body">
                  
                <div class="form-group col-sm-4">
                  <label for="Branch">Invoice No</label>
                  <input type="text" class="form-control" name="invoice_no" readonly="true" placeholder="Branch" value="<?php echo $FEp1['invoice_no']; ?>" onKeyPress="return tabE(this,event)">
                </div>
                <div class="form-group col-sm-4">
                  <label for="ponumber">Date</label>
                  <input type="Date" class="form-control" name="date"  placeholder="Process" value="<?php echo $FEp1['date']; ?>" onKeyPress="return tabE(this,event)">
                </div>
                <div class="form-group col-sm-4">
                  <label for="ponumber">Name</label>
                  <input type="text" class="form-control" name="customer_name" value="<?php echo $FEp1['customer_name']; ?>" placeholder="Reference No" onKeyPress="return tabE(this,event)">
                </div>
                

                <div class="form-group col-sm-4">
                  <label for="party">Mobile No</label>
                  <div>
                  <input type="text" class="form-control" name="mobile_no" value="<?php echo $FEp1['mobile_no']; ?>" placeholder="Doc No" onKeyPress="return tabE(this,event)">
                </div>
                </div>
                   
                  
                  
              </div>
              <!-- /.box-body -->
    

            
          </div>
		  
          <!-- /.box -->


        </div>
		


<div class="col-md-12">
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Sales Product Details</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table id="example1" class="table table-bordered table-striped">
			   <thead>
                <tr>
                  <th >Barcode</th>
                  <th >Item Name</th>
                  <th >Mrp</th>
                 
				  <th>Qty</th>
				  <th >Total</th>
				  <th >Action</th>
                
                </tr>
				 </thead>
				<tbody>
				<?php
				$p3="select * from invoice_product_details where branch='".$_SESSION['branch']."'";
                 $Ep3=mysql_query($p3);
                 $FEp3=mysql_fetch_array($Ep3);
				$net=0;
				$nett=0;
				$p4="select * from invoice_product_details where invoice_no='".$_POST['po_no']."' and branch='".$_SESSION['branch']."'";
				$Ep4=mysql_query($p4);
				while($FEp4=mysql_fetch_array($Ep4))
				{
				
			
				?>
                <tr>
                  
                <td ><?php echo $FEp4['barcode']; ?></td>
                 
					<td ><?php echo $FEp4['item_name']; ?></td>
                  <td ><?php echo $FEp4['mrp']; ?></td>
                  
                  <td ><?php echo $FEp4['qty']; ?></td>
				  <td ><?php echo $FEp4['total']; ?></td>
				  <td>
                    <a href="sales_order_edit.php?id=<?php echo $FEp4['invoice_no']; ?>&pid=<?php echo $FEp4['id']; ?>" class="btn-box-tool"><i class="fa fa-edit custom-icon1"></i></a>
                      <a href="#.php?id=<?php echo $Fs['id']; ?>" onClick="popup_window_show('#popup_window_id_33ED1F5BB26C0F584EEC6292161E14FB', { pos : 'window-center', parent : this, x : 0, y : 0, width : 'auto' });;" class="btn-box-tool"><i class="fa fa-close custom-icon1"></i></a>
                  </td>
				 </tr>
                </tbody>
              </table>
            </div>
		
<?php
				  }
				  ?>
		
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <!-- /.box -->
        </div>
		 
		 <div class="box-footer">
				
               
                </div> 
                   
                </div>
    </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      <a href="mailto:support@vertexsolutions.co.in">support@vertexsolutions.co.in</a>
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2017 <a href="http://www.vertexsolution.co.in/">Vertex Solutions</a>.</strong> All rights reserved.
  </footer>

</div>
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
	format: 'dd/mm/yyyy',
      autoclose: true
	  
    })
    $('#datepicker1').datepicker({
	format: 'dd/mm/yyyy',
      autoclose: true,
	 
    })
  })
</script>
<script>

var x = document.getElementById("myAudio"); 
var y = document.getElementById("myAudio1"); 
var inputs = document.getElementsByName('so_bal_qty[]');
var inputs1 = document.getElementsByName('stock_qty[]');
function playAudio()
{ 
for ( var index = 0; index < inputs.length; index++) {
 if (parseInt(inputs[index].value)>parseInt(inputs1[index].value)){
    y.play(); 
	}
	else if (parseInt(inputs[index].value)<parseInt(inputs1[index].value))
	{
	x.play();
	}
} 
}


function pauseAudio() { 
    x.pause(); 
} 

function alertChecked2(){ 
    var qty = 0;
    var inputs = document.getElementsByName('amount[]');
for ( var index = 0; index < inputs.length; index++) {
   if (parseInt(inputs[index].value)){
       qty += parseInt(inputs[index].value);
	   
   }
  
}
         document.getElementById('tot').value = qty;
}
</script>
<script>
  $(function() {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
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