<?php
include("dbinfo.php");
$p="select * from t_purchase";
$Ep=mysql_query($p);
$Fp=mysql_fetch_array($Ep);
$n=mysql_num_rows($Ep);
$n1=$n+1;
$pn="PO".$n1;
?>

<?php
session_start();
include("dbinfo.php");

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>TICSON | Textile Management System</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="bower_components/select2/dist/css/select2.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/proCustom.css">    
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="dist/css/skins/skin-blue.css">
  
  <?php
include("dbinfo.php");
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
	
	.disp{ display:block;  height: 180px; width:1200px; overflow-y: scroll; }
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

</script>
    </head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">
	 <?php include("top.php"); ?>
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
        Direct Addition
        <small></small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        <form role="form" method="post" action="purchase_act.php">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Create Direct Addition</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
              <div class="box-body">
                  
                <div class="form-group col-sm-5">
                  <label for="Branch">Branch</label>
                  <input type="text" class="form-control" name="branch" placeholder="Branch" onKeyPress="return tabE(this,event)">
                </div>
                <div class="form-group col-sm-5">
                  <label for="ponumber">Process</label>
                  <input type="text" class="form-control" name="process" value="<?php  ?>" placeholder="Process" onKeyPress="return tabE(this,event)">
                </div>
				<div class="form-group col-sm-5">
                  <label for="Branch">Doc No</label>
                  <input type="text" class="form-control" name="doc_no" placeholder="Doc No" onKeyPress="return tabE(this,event)">
                </div>
                <div class="form-group col-sm-5">
                  <label for="ponumber">Godown</label>
                 <select class="form-control " name="godown" id="godown" style="width: 100%;" onkeypress="return tabE(this,event)">
				  
				  <?php
				  $sql="select * from t_godown";
				  $result=mysql_query($sql);
				  while ($row = mysql_fetch_array($result)) {
				  
				  ?>
				  <option value="<?php echo $row['godown_name']; ?>"><?php echo $row['godown_name']; ?></option>
				  <?php
				  }
				  
				  ?>
				  </select>
                </div>
				<div class="form-group col-sm-5">
                  <label for="duedate">Doc Date</label>
                  
                  <div class="input-group date">
                  <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="doc_date" class="form-control pull-right" id="datepicker1" onKeyPress="return tabE(this,event)">
                </div>
                </div>
                <div class="form-group col-sm-5">
                  <label for="ponumber">Ref No</label>
                  <input type="text" class="form-control" name="ref_no" value="<?php  ?>" placeholder="Ref No" onKeyPress="return tabE(this,event)">
                </div>
                  
                  
                  
              </div>
              <!-- /.box-body -->
    

            
          </div>
		  
          <!-- /.box -->


        </div>
	
<div class="col-md-12">
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Direct Addition Details</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-bordered padding-4 disp">
                <tr>
                  <th style="width: 60px">SN</th>
                  <th style="width: 160px">Lot No</th>
                  <th style="width: 160px">Item Head</th>
                  <th style="width: 160px">QTY</th>
                  <th style="width: 160px">Rate</th>
                  <th style="width: 160px">Amount</th>
                  <th>Remarks</th>
                </tr>
				<?php
				for($i=1;$i<=50;$i++)
				{
				?>
                <tr>
                  <td style="width: 30px"><?php echo $i; ?></td>
                  <td><select name="category[]"  class="form-control" onkeypress="return tabE(this,event)">
    <option value=''>--All--</option>
    <option value='Mens'>Mens</option>
    <option value='Womens'>Womens</option>
    <option value='KIDS'>KIDS</option>
<select></td>
                </td>
                 <td><select name="item_name[]"  class="form-control" onkeypress="return tabE(this,event)">
    <option data-group='all' value=''>--Select--</option>
    <option data-group='Womens' value='Innerwear'>Innerwear</option>
    
<select></td>
                  <td style="width: 80px"><input name="qty[]" type="text" onKeyUp="alertChecked1()" onkeypress="return tabE(this,event)" class="form-control"></td>
                  <td style="width: 80px"><input name="rate[]" type="text" onKeyUp="alertChecked1()" onkeypress="return tabE(this,event)" class="form-control"></td>
                  <td style="width: 80px"><input name="amount[]"   onKeyUp="alertChecked2()" onkeypress="return tabE(this,event)" type="text" class="form-control"></td>
                  <td style="width: 180px"><input name="remarks[]" type="text" onkeypress="return tabE(this,event)" class="form-control"></td>
                </tr>
				<?php
				}
				?>
                
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <!-- /.box -->
        </div>
                <div class="box-footer">
                <div style="width:400px;"><label style="float:left;margin-right:10px;">NET AMOUNT</label><input type="text" name="tot" id="tot" class="form-control" style="width:155px; float:left; margin-top:-5px;"></div>
                <button type="submit" class="btn btn-info pull-right">Save Changes</button>
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
      autoclose: true
    })
    $('#datepicker1').datepicker({
      autoclose: true
    })
  })
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