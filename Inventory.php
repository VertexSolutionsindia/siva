<?php 
session_start();
include("dbinfo.php");
?>

<!DOCTYPE html>
<html>
<head>
 <?php include("design_css.php");
?>  
 <?php
include("dbinfo.php");
$ss="select * from  a_inventory";
$Ess=mysql_query($ss);
$Fss=mysql_fetch_array($Ess);
$ns=mysql_num_rows($Ess);
$ns1=$ns+0001;
$dc="E".$ns1;

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
	$("#lot_no").keyup(function(){
		$.ajax({
		type: "POST",
		url: "readCountry.php",
		data:'keyword='+$(this).val(),
		beforeSend: function(){
			$("#lot_no").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
		},
		success: function(data){
			$("#suggesstion-box").show();
			$("#suggesstion-box").html(data);
			$("#lot_no").css("background","#FFF");
		}
		});
	});
});

function selectCountry(val) {
$("#lot_no").val(val);
$("#suggesstion-box").hide();
}
</script>
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
	var inputs2 = document.getElementsByName('amount[]');
	var inputs3 = document.getElementsByName('total_value[]');
	
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
    var inputs = document.getElementsByName('total_value[]');
for ( var index = 0; index < inputs.length; index++) {
   if (parseInt(inputs[index].value)){
       qty += parseInt(inputs[index].value);
	   
   }
  
}
         document.getElementById('tot').value = qty;
}

</script>
<style>

.table, th
{

padding:5px;
text-align:center;

border-color:#000000;
}
.table, td
{
background-color:#FDFEFE;
color:#2C3E50;
}

</style>
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
       STOCK
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
              <h3 class="box-title">Available STOCK</h3>
            
			
            </div>
            <!-- /.box-header --> 
            <!-- form start -->
			
			
				<?php
			if(isset($_REQUEST['id'])!="")
			{
			$ct1="select * from t_production_barcode_entry_details where id='".$_REQUEST['id']."'";
				$Ect1=mysql_query($ct1);
				$Fct1=mysql_fetch_array($Ect1);
			
			?>
            <form class="form-horizontal" method="post" action="production_receipt_edit.php?id=<?php echo $Fct1['id']; ?>">
              <div class="">
        <!-- left column -->
        <div class="col-md-10">
          <div class="box box-info">
            <div class="box-header with-border">
             </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="form-horizontal">
              <div class="box-body">
                  
               
                 <div class="form-group">
                  <label for="phone" class="col-sm-3 control-label">Lot No</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="lot_no" id="lot_no" value="<?php echo $Fct1['lot_no']; ?>" onKeyPress="return tabE(this,event)" placeholder="Lot No">
                  </div>
                </div>  
				<div class="form-group">
                  <label for="phone" class="col-sm-3 control-label">Document Date</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="doc_date" id="doc_date" value="<?php echo $Fct1['doc_date']; ?>" onKeyPress="return tabE(this,event)" placeholder="Document Date">
                  </div>
                </div>  
				<div class="form-group">
                  <label for="phone" class="col-sm-3 control-label">Item Head</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="item_head" id="item_head" value="<?php echo $Fct1['item_head']; ?>" onKeyPress="return tabE(this,event)" placeholder="Item Head">
                  </div>
                </div>  
				
				<div class="form-group">
                  <label for="phone" class="col-sm-3 control-label">Item Name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="item_name" id="item_name" value="<?php echo $Fct1['item_name']; ?>" onKeyPress="return tabE(this,event)" placeholder="Item Name">
                  </div>
                </div>  
				<div class="form-group">
                  <label for="phone" class="col-sm-3 control-label">Color</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="color" id="color" value="<?php echo $Fct1['color']; ?>" onKeyPress="return tabE(this,event)" placeholder="Color">
                  </div>
                </div>  
				<div class="form-group">
                  <label for="phone" class="col-sm-3 control-label">Size</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="size" id="size" value="<?php echo $Fct1['size']; ?>" onKeyPress="return tabE(this,event)" placeholder="Size">
                  </div>
                </div>  
				<div class="form-group">
                  <label for="phone" class="col-sm-3 control-label">Quantity</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="qty" id="qty" value="<?php echo $Fct1['qty']; ?>" onKeyPress="return tabE(this,event)" placeholder="Quantity">
                  </div>
                </div>  
				<div class="form-group">
                  <label for="phone" class="col-sm-3 control-label">Barcode</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="barcode" id="barcode" value="<?php echo $Fct1['barcode']; ?>" onKeyPress="return tabE(this,event)" placeholder="Barcode">
                  </div>
                </div>  
              </div>
              <!-- /.box-body -->
              
              <!-- /.box-footer -->
            </div>
          </div>
        </div>
		
		
	    <div class="col-md-12">
		<div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Save Changes</button>
              </div>
			  </div>
			  </div>
			  </form>
			
			
 
			
			</div></div>
	<!-- /Profile Image -->
    
 <?php
		}	
			?>
       </div>
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            
            <div class="box">
			 <div class="box-body">
            <div class="box-header">
            
            </div>
			 
            <!-- /.box-header -->
            <div class="box-body" style="overflow:auto">
			
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
				
                  <th style="width:10%">Barcode</th>
				   <th style="width:50%">Item Name</th>
				   <th style="width:25%">Qty</th>
                  <th style="width:10%">MRP</th>
				    <th style="width:10%">Discount</th>
                  <th style="width:10%">Purchase Rate</th>
				    <th style="width:10%">Total</th>
                 
                 
				  
                  <th style="width:10%">Edit / Delete</th>
                </tr>
                </thead>
                          <tbody>
				<?php
					$ct="select * from a_inventory where branch='".$_SESSION['branch']."'";
				$Ect=mysql_query($ct);
				while($Fct=mysql_fetch_array($Ect))
				{
				
				?>
                <tr>
               
                  <td><?php echo $Fct['barcode']; ?></td>
				  <td><?php echo $Fct['item_name']; ?></td>
				   <td><?php echo $Fct['qty']; ?></td>
				  <td><?php echo $Fct['mrp']; ?></td>
				  <td><?php echo $Fct['discount']; ?></td>
                  <td><?php echo $Fct['prate']; ?></td>
				  <td><?php echo $Fct['qty']*$Fct['mrp']; ?></td>
                  
				 
				   
				  
                  
                 
                 
                  <td>
                    <a href="production_receipt_view.php?id=<?php echo $Fct1['id']; ?>" class="btn-box-tool"><i class="fa fa-edit custom-icon1"></i></a>
                      <a href="production_receipt_delete.php?id=<?php echo $Fct1['id']; ?>" onClick="popup_window_show('#popup_window_id_33ED1F5BB26C0F584EEC6292161E14FB', { pos : 'window-center', parent : this, x : 0, y : 0, width : 'auto' });;" class="btn-box-tool"><i class="fa fa-close custom-icon1"></i></a>
                  </td>
                </tr>
				<?php
				}
				
				?>
                  </tbody>
           
              </table>
            </div>
            <!-- /.box-body -->
          </div>
            
         
        </div>
      </div>

    </section>
    <!-- /.content -->

  <!-- /.content-wrapper -->
</div>
</div>
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