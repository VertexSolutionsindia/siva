<?php
session_start();
$date=date('d/m/Y');
include("dbinfo.php");
include("redirect.php");

?>


<!DOCTYPE html>
<html>
<head>
  <?php include("design_css.php");
?>
  
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
	
	.disp{  height: 580px; width:1200px; overflow-y: scroll; }
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
         document.getElementById('tot_amt').value = qty;
}


function get_total(){ 
    
     var qty = 0;
	 var pr = 0;
	 var fpr = 0;
    var inputs = document.getElementById('qty').value;
	var inputs1 = document.getElementById('mrp').value;
	var inputs2 = document.getElementById('discount').value;
	     pr=inputs1/100*inputs2;
		 fpr=inputs1-pr;
	     qty=inputs*fpr;
		 

         document.getElementById('total').value = qty;
		 document.getElementById('prate').value = fpr;
}


function get_item(){ 
    var qty = 0;
    var inputs = document.getElementById('barcode').value;


$.ajax({
      type:'post',
        url:'get.php',// put your real file name 
        data:{inputs},
        success:function(msg){
              // your message will come here.  
        document.getElementById("item").value=msg;
   
       }
 });

}

function get_mrp(){ 
    var qty = 0;
    var inputs = document.getElementById('barcode').value;


$.ajax({
      type:'post',
        url:'get1.php',// put your real file name 
        data:{inputs},
        success:function(msg){
              // your message will come here.  
        document.getElementById("mrp").value=msg;
   
       }
 });

}

function get_item1(){ 
    var qty = 0;
    var inputs = document.getElementById('item').value;


$.ajax({
      type:'post',
        url:'get2.php',// put your real file name 
        data:{inputs},
        success:function(msg){
              // your message will come here.  
        document.getElementById("barcode").value=msg;
   
       }
 });

}

function get_mrp1(){ 
    var qty = 0;
    var inputs = document.getElementById('item').value;


$.ajax({
      type:'post',
        url:'get3.php',// put your real file name 
        data:{inputs},
        success:function(msg){
              // your message will come here.  
        document.getElementById("mrp").value=msg;
   
       }
 });

}
</script>

<script>
function showHint(str) {
    if (str.length == 0) { 
        document.getElementById("item").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("item").value = this.responseText;
            }
        };
        xmlhttp.open("GET", "gethint.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>
<script>
		function getrate(val) {
			$.ajax({
	type: "POST",
	url: "get_old_rate.php",
	data:'country_id='+val,
	success: function(data){
		$("#rate_list").html(data);
		}
		});
		
		
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
         Purchase
        <small></small>
      </h1>
    </section>
   <?php
   
   if(isset($_REQUEST['pno']))
   {
   $sn="select * from p_purchase_temp";
   $Esn=mysql_query($sn);
   $Fsn=mysql_fetch_array($Esn);
   $pno=$_REQUEST['pno'];
   }
   else
   {
   $pn="select * from generate ";
   $Epn=mysql_query($pn);
   $Fpn=mysql_fetch_array($Epn); 
   $pno= $Fpn['pno']; 
   }	   
   ?>
   
    <!-- Main content -->
    <section class="content container-fluid">
        <form role="form" method="post" action="purchase_act.php">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Create Purchase</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
              <div class="box-body">
                  
                <div class="form-group col-sm-4">
                  <label for="Branch">Purchase Invoice No</label>
                  <input type="text" class="form-control" name="p_invoice" id="p_invoice" value="<?php echo $pno; ?>" placeholder="Purchase Id" onKeyPress="return tabE(this,event)" required="true">
                </div>
				<div class="form-group col-sm-4">
                  <label for="Branch">Supplier Name</label>
					<select class="form-control" name="supplier" id="supplier" onKeyPress="return tabE(this,event)"  placeholder="Supplier" required="true"  >
						
						<?php 
						if(!isset($_REQUEST['pno']))
						{
						//echo "gdfgdfgdf";
						?>
						<option value="">Select Supplier</option>
						
						<?php }
						
						echo $ss1="select * from p_purchase_temp where p_invoice='$pno'";
						$Ess1=mysql_query($ss1);
						$Fss1=mysql_fetch_array($Ess1);
						
						$ss2="select * from m_supplier_master where id='".$Fss1['supplier_name']."'";
						$Ess2=mysql_query($ss2);
						$Fss2=mysql_fetch_array($Ess2);
						
						if($Fss2['supplier_name'])
						{
						?>
						<option value="<?php echo $Fss2['supplier_name']; ?>" select="true"><?php echo $Fss2['supplier_name']; ?></option>
						<?php
						}
						$dep1="select * from m_supplier_master where status='Active'";
						$dep=mysql_query($dep1);
						while($result=mysql_fetch_array($dep))
						{
						?>
						<option value="<?php echo $result['id'];?>"><?php echo $result['supplier_name'];?></option>
						<?php
						}
						?>
					</select>
				  </div>
				 <div class="form-group col-sm-4">
                  <label for="date">Date</label>
                  
                  <div class="input-group date">
                  <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="date" value="<?php echo date("Y-m-d") ?>" class="form-control pull-right" id="datepicker" value="<?php echo $date; ?>" onKeyPress="return tabE(this,event)">
                </div>
                </div>
                </div>
				
				<div class="form-group col-sm-4">
                  <label for="duedate">Expiry Date</label>
                  
                  <div class="input-group date">
                  <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" name="edate" class="form-control pull-right" id="edate" onKeyPress="return tabE1(this,event)" autofocus>
                </div>
                </div>
                <div class="form-group col-sm-4">
                  <label for="ponumber">Barcode</label>
  <input type="text" class="form-control" name="barcode" id="barcode"   placeholder="Barcode" onKeyUp="get_item(); get_mrp()" onKeyPress="return tabE(this,event)"  
  onChange="getrate(this.value)">
                </div>
                <div class="form-group col-sm-4">
                  <label for="ponumber">Item Name</label>
                  <input type="text" class="form-control" name="item" id="item" onKeyUp="get_item1();get_mrp1();"  placeholder="ItemName"  onKeyPress="return tabE(this,event)" style="text-transform:uppercase" >
                </div>

                <div class="form-group col-sm-4">
                  <label for="ponumber">Quantity</label>
                  <input type="text" class="form-control" name="qty" id="qty"  placeholder="Quantity" onKeyUp="get_total()" onKeyPress="return tabE(this,event)" >
                </div>
                <div class="form-group col-sm-4">
                  <label for="refnumber">MRP</label>
                  <input type="text" class="form-control" name="mrp" id="mrp"  placeholder="MRP" onKeyUp="get_total()" onKeyPress="return tabE(this,event)" >
                </div>
				 <div class="form-group col-sm-4">
                  <label for="refnumber">Discount%</label>
                  <input type="text" class="form-control" name="discount" id="discount"  placeholder="Discount" onKeyUp="get_total()" onKeyPress="return tabE(this,event)">
                </div>
             
             <div class="form-group col-sm-2">
                  <label for="refnumber">Purchase Rate</label>
                  <input type="text" class="form-control" name="prate" id="prate"  placeholder="Purchase Rate" onKeyPress="return tabE(this,event)">
                </div>
				<div class="form-group col-sm-2">
                  <label for="refnumber">Old Purchase Rate</label>
                  <select class="form-control" name="prate" id="rate_list"  onKeyPress="return tabE(this,event)"></select>
                </div>
				
				<div class="form-group col-sm-4">
                  <label for="refnumber">Total</label>
                  <input type="text" class="form-control" name="total" id="total"  placeholder="Total" onKeyPress="return tabE(this,event)">
                </div>
				
				<div class="form-group col-sm-4">
                  <label for="refnumber">Free</label>
                  <input type="text" class="form-control" name="free" id="free"  placeholder="Free" onKeyPress="return tabE(this,event)" style="text-transform:uppercase">
                </div>
				
                  <div class="form-group col-sm-12">
                  <label for="remarks">&nbsp;</label>
                  <input type="submit" class="form-control" name="submit" placeholder="Submit" onKeyPress="return tabE(this,event)">
                </div>   
                  
              </div>
              <!-- /.box-body -->
    

            
          </div>
		  
          <!-- /.box -->


        </div>
	
<div class="col-md-12">
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Purchase Details</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-bordered padding-4 ">
                <tr>
                  <th>S.No</th>
				  <th>Item Name  </th>
                  <th>Brand Name </th>
				  <th>Qty</th>
				  <th>MRP</th>
				  <th>Discount</th>
				  <th>Purchase Rate</th>
				  <th>Free</th>
				  <th>Total</th>
                  <th width="15%">Edit / Delete</th>
                </tr>
				<?php
				$i=0;
				$tmp="select * from p_purchase_temp ";
				$Etmp=mysql_query($tmp);
				while($Ftmp=mysql_fetch_array($Etmp))
				{
				$i++;
				
				$sc="select * from m_item_master where item_name='".trim($Ftmp['item_name'])."'";
				$Esc=mysql_query($sc);
				$FEsc=mysql_fetch_array($Esc);
				
				
				
				?>
                <tr>
                  <td style="width: 30px"><?php echo $i; ?></td>
				  <td><?php echo $FEsc['c_name']; ?></td>
                  <td><?php echo $Ftmp['item_name']; ?></td>
                  <td><?php echo $Ftmp['qty']; ?></td>
                  <td><?php echo $Ftmp['mrp']; ?></td>
				  <td><?php echo $Ftmp['discount']; ?></td>
                  <td><?php echo $FEsc['p_rate']; ?></td>
				   <td><?php echo $Ftmp['free']; ?></td>
                  <td><?php echo ($FEsc['p_rate']*$Ftmp['qty']); ?></td>
				  <td><a href="purchase_delete.php?id=<?php echo $Ftmp['id']; ?>" onClick="popup_window_show('#popup_window_id_33ED1F5BB26C0F584EEC6292161E14FB', { pos : 'window-center', parent : this, x : 0, y : 0, width : 'auto' });;" class="btn-box-tool"><i class="fa fa-close custom-icon1"></i></a></td>
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
				
               <input type="submit" class="form-control" name="submit" value="Complete" onKeyPress="return tabE(this,event)">
                </div>    
                </div>
    </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
   <?php include("footer.php");
?>

</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
 <?php include("script.php");
?>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>