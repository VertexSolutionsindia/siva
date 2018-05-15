<?php
session_start();
include("dbinfo.php");
include("redirect.php");
$ss="select * from  invoice";
$Ess=mysql_query($ss);
$Fss=mysql_fetch_array($Ess);
$ns=mysql_num_rows($Ess);
$ns1=$ns+0001;
$dc="0".$ns1;

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sales Invoice</title>
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
   if(e.keyCode==9){ 
     var ele = document.forms[0].elements; 
     for(var i=0;i<ele.length;i++){ 
       var q=(i==ele.length-1)?0:i+1;
	  
	   // if last element : if any other 
       if(obj==ele[i]){ele[q].focus();break} 
     } 
  return false; 
   } 
  
  } 
  function tabE1(obj,e){ 
   var e=(typeof event!='undefined')?window.event:e;// IE : Moz 
   if(e.keyCode==13){ 
     var ele = document.forms[0].elements; 
     for(var i=0;i<ele.length;i++){ 
       var q=(i==ele.length-1)?0:i+1;
	  
	   // if last element : if any other 
       if(obj==ele[i]){ele[q].focus();break} 
     } 
  return false; 
   } 
  
  } 
  
  

function alertChecked1(){ 
    var rate = 0;
	var rate1 = 0;
	var ex = 0;
    var inputs1 = document.getElementsByName('mrp[]');
	var inputs2 = document.getElementsByName('qty[]');
	var inputs3 = document.getElementsByName('total[]');
	
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
    var inputs = document.getElementsByName('total[]');
for ( var index = 0; index < inputs.length; index++) {
   if (parseInt(inputs[index].value)){
       qty += parseInt(inputs[index].value);
	   
   }
  
}
         document.getElementById('net_amount').value = qty;
}

</script>
<script>

function alertChecked12(){ 
    var qty = 0;
    var inputs = document.getElementsByName('total[]');
for ( var index = 0; index < inputs.length; index++) {
   if (parseInt(inputs[index].value)){
       qty += parseInt(inputs[index].value);
	   
   }
  
}
         document.getElementById('net_amount').value = qty;
}
</script>
<script>




function getTotal($i)
{
var price = document.getElementById('priceper'+$i+'').value;
var per_pack = document.getElementById('per_pack'+$i+'').value;
var quantity = document.getElementById('quantity'+$i+'').value;

document.getElementById('subtotal'+$i+'').value = (per_pack*quantity);

}





function getQuantity($i)
{
document.getElementById('quantity'+$i+'').value = '1';
}


function getFocus($i) { 
document.getElementById("priceper"+$i+"").select();          
  document.getElementById("priceper"+$i+"").focus();
}

function getFocus1($i) { 
          
  document.getElementById("description"+$i+"").focus();
}

function get_mrp($i){ 
    var qty = 0;
    var inputs = document.getElementById('description'+$i+'');
	qty = parseInt(inputs.value);


$.ajax({
      type:'post',
        url:'getsmrp.php',// put your real file name 
        data:{qty},
        success:function(msg){
              document.getElementById('per_pack'+$i+'').value =msg;
				
       }
 });
  
}

function get_item($i){ 
    var qty = 0;
    var inputs = document.getElementById('description'+$i+'');
	qty = parseInt(inputs.value);


$.ajax({
      type:'post',
        url:'getsitem.php',// put your real file name 
        data:{qty},
        success:function(msg){
             
			  document.getElementById('priceper'+$i+'').value =msg;
				
      
	  
    }
 });
  
}

function get_free($i){ 
    var qty = 0;
    var inputs = document.getElementById('priceper'+$i+'');
	qty = inputs.value;


$.ajax({
      type:'post',
        url:'getsfree.php',// put your real file name 
        data:{qty},
        success:function(msg){
             
			  document.getElementById('free'+$i+'').value =msg;
				
      
	  
    }
 });
  
}

function validateForm() {
    var x = document.forms["salei"]["mobile_no"].value;
    if (x == "") {
            return false;
    }
}


function checkForm(form)
  {
    
    if(!form.terms.checked) {
      alert("Please indicate that you accept the Terms and Conditions");
      form.terms.focus();
      return false;
    }
    return true;
  }

    function textone($i)
    {    
     document.getElementById('quantity'+$i+'').focus();
    }
    
 function sumCost() {
       		
			var tot=0;
        for(var j=1; j<5;j++){
				
			arr = document.getElementById('subtotal'+j);
            if(parseInt(arr.value))
                tot += parseInt(arr.value);
        }
        document.getElementById('cmobile_no').value = tot;

    }  

function getTotalEmpty($i)
{
var price = document.getElementById('priceper'+$i+'').value;
var per_pack = document.getElementById('per_pack'+$i+'').value;
var quantity = document.getElementById('quantity'+$i+'').value;
var desc=document.getElementById('description'+$i+'').value;

	document.getElementById('description'+$i+'').value='';
	document.getElementById('priceper'+$i+'').value = 0;
	document.getElementById('per_pack'+$i+'').value = 0;
	document.getElementById('quantity'+$i+'').value = 0;
	
	document.getElementById('subtotal'+$i+'').value = 0;
    
	document.getElementById('description'+$i+'').readOnly = true;
	document.getElementById('priceper'+$i+'').readOnly = true;
	document.getElementById('per_pack'+$i+'').readOnly = true;
	document.getElementById('quantity'+$i+'').readOnly = true;
	document.getElementById('subtotal'+$i+'').readOnly = true;
	
	
	document.getElementById('description'+$i+'').style.display='none';
	document.getElementById('priceper'+$i+'').style.display='none';
	document.getElementById('per_pack'+$i+'').style.display='none';
	document.getElementById('quantity'+$i+'').style.display='none';
	document.getElementById('subtotal'+$i+'').style.display='none';
	
	document.getElementById('myDIV'+$i+'').style.display='none';
}	


function goToFirst($i) {
    var e = event || evt; // for trans-browser compatibility
    var charCode = e.which || e.keyCode;

    alert(charCode);
    if (charCode == 9 ) {
        document.getElementById('quantity').focus();
        document.getElementById('quantity').select();
    }

    return false;
};
	
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
        Sales Invoice
        <small></small>
      </h1>
    </section>
	 <?php
   $pn="select * from generate ";
   $Epn=mysql_query($pn);
   $Fpn=mysql_fetch_array($Epn); 
   $sno= $Fpn['sno']; 
    
   ?>

    <!-- Main content -->
    <section class="content container-fluid">
       <form id="salei" name="salei" type="text" method = "post" onSubmit="return validateForm()" action="sales_invoice_act.php">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          		  
          <!-- /.box -->


        </div>
	
<div class="col-md-12">
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Sales Products details</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-bordered padding-4 disp">
                <tr>
                  
				  <th style="width: 150px">Barcode</th>
                  <th style="width: 350px">Item Name</th>
				  <th style="width: 350px">Free</th>
				   <th style="width: 100px">MRP</th>
                 <th style="width: 160px">Quantity</th>
				 <th style="width: 160px">Amount</th>
                   <th style="width: 10px">Action</th>
                  
				  
				  
               </tr>
				<?php
				for($i=1;$i<=150;$i++)
				{
				?>
				
					
                <tr>
                 
                 <td><input type="text" name="<?php echo "description".$i; ?>" id="<?php echo "description".$i; ?>" size="10" maxlength="70" value="" onKeyUp="get_mrp(<?php echo $i; ?>);get_item(<?php echo $i; ?>);get_free(<?php echo $i; ?>);getQuantity(<?php echo $i; ?>);getTotal(<?php echo $i; ?>);sumCost();" onBlur="getFocus(<?php echo $i; ?>);" class="form-control"  /></td>
<td><input type="text" name="<?php echo "priceper".$i; ?>" id="<?php echo "priceper".$i; ?>" size="65"  class="form-control" onFocus="get_mrp(<?php echo $i; ?>);get_item(<?php echo $i; ?>);get_free(<?php echo $i; ?>);getQuantity(<?php echo $i; ?>);getTotal(<?php echo $i; ?>);sumCost();"  /></td>				 
<td><input type="text" name="<?php echo "free".$i; ?>" id="<?php echo "free".$i; ?>" size="10" maxlength="9" class="form-control" /></td>
<td><input type="text" name="<?php echo "per_pack".$i; ?>" id="<?php echo "per_pack".$i; ?>" size="10" maxlength="9" class="form-control" /></td>
<td><input type="text" name="<?php echo "quantity".$i; ?>" id="<?php echo "quantity".$i; ?>" size="10" maxlength="9" onChange="getTotal(<?php echo $i; ?>);sumCost();"  class="form-control" /></td>
<td><input type="text" name="<?php echo "subtotal".$i; ?>" id="<?php echo "subtotal".$i; ?>" size="15" maxlength="9" onChange="" class="form-control" readOnly="true" /></td>
				<td  size="5" style="align:centre" ><div id="<?php echo "myDIV".$i; ?>"><a href="#" onClick="return getTotalEmpty(<?php echo $i; ?>);" >Del</a></div></td>

				
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
                
				
				<div class="form-group col-sm-4">
                  <label for="ponumber">Invoice No</label>
                  <input type="text" class="form-control" name="invoice_no"  placeholder="invoice_no" value="<?php echo $sno; ?>" onKeyPress="return tabE1(this,event)" readonly="true">
                </div>
              

              
               
                <div class="form-group col-sm-4">
                  <label for="duedate">Date</label>
                  
                  <div class="input-group date">
                  <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" name="date" class="form-control pull-right" id="date" onKeyPress="return tabE1(this,event)" autofocus>
                </div>
                </div>
                  
                <div class="form-group col-sm-4">
                  <label for="party">Customer Name</label>
                  <div>
                  <input type="text" class="form-control" name="customer_name"  placeholder="Customer Name" onKeyPress="return tabE1(this,event)">
                </div>
                </div>
                <div class="form-group col-sm-4">
                  <label for="tax">Mobile No</label>
                  <div><input type="text" class="form-control" name="mobile_no" id="mobile_no"  placeholder="Mobile No" onKeyPress="return tabE1(this,event)">
                </div>
                </div>
				
				 <div class="form-group col-sm-4">
                  <label for="tax">Net AMount</label>
                  <div><input type="text" class="form-control" name="cmobile_no" id="cmobile_no"  placeholder="Mobile No" readOnly="true" onKeyPress="return tabE1(this,event)">
                </div>
                </div>

				
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
	format: 'dd/mm/yyyy',
      autoclose: true
	  
    })
    $('#datepicker1').datepicker({
	format: 'dd/mm/yyyy',
      autoclose: true
	  
    })
  })
  
  
  
  
  
</script>
<script>
  $(function() {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })
</script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>