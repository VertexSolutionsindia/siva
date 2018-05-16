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
  	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
      <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="typeahead.js"></script>
	<style>
	.typeahead { border: 2px solid #FFF;border-radius: 4px;padding: 8px 12px;max-width: 300px;min-width: 290px;background: rgba(66, 52, 52, 0.5);color: #FFF;}
	.tt-menu { width:300px; }
	ul.typeahead{margin:0px;padding:10px 0px;}
	ul.typeahead.dropdown-menu li a {padding: 10px !important;	border-bottom:#CCC 1px solid;color:#FFF;}
	ul.typeahead.dropdown-menu li:last-child a { border-bottom:0px !important; }
	.bgcolor {max-width: 550px;min-width: 290px;max-height:340px;background:url("world-contries.jpg") no-repeat center center;padding: 100px 10px 130px;border-radius:4px;text-align:center;margin:10px;}
	.demo-label {font-size:1.5em;color: #686868;font-weight: 500;color:#FFF;}
	.dropdown-menu>.active>a, .dropdown-menu>.active>a:focus, .dropdown-menu>.active>a:hover {
		text-decoration: none;
		background-color: #1f3f41;
		outline: 0;
	}
	</style>	
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
    var inputs = document.getElementById('quantity').value;
	var inputs1 = document.getElementById('mrp').value;
	var inputs2 = document.getElementById('discount').value;
	     pr=inputs1/100*inputs2;
		 fpr=inputs1-pr;
	     qty=inputs*fpr;
		 

         document.getElementById('total').value = qty;
		 document.getElementById('mrp').value = fpr;
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


function get_item_name(){ 
    var qty = 0;
    var inputs = document.getElementById('txtsearchname').value;


$.ajax({
      type:'post',
        url:'get_name.php',// put your real file name 
        data:{inputs},
        success:function(msg){
              // your message will come here.  
        document.getElementById("mrp").value=msg;
        document.getElementById("qty").value=1;
       }
 });

}

function getFocus() { 
document.getElementById("qty").select();          
  document.getElementById("qty").focus();
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
		
<style type="text/css">
	
	/* START CSS NEEDED ONLY IN DEMO */
	html{
		height:100%;
	}
	/*body{
		/*background-color:#E2EBED;*/
		font-family: Trebuchet MS, Lucida Sans Unicode, Arial, sans-serif;	
		width:100%;
		height:100%;		
		margin:0px;
		text-align:center;
	}
	*/
	
	#mainContainer{
		width:auto;
		margin:0 auto;
		text-align:left;
		height:100%;
		background-color:#FFF;
		border-left:3px double #000;
		border-right:3px double #000;
	}
	#formContent{
		padding:5px;
	}
	/* END CSS ONLY NEEDED IN DEMO */
	
	
	/* Big box with list of options */
	#ajax_listOfOptions{
		position:absolute;	/* Never change this one */
		width:295px;	/* Width of box */
		height:250px;	/* Height of box */
		overflow:auto;	/* Scrolling features */
		border:1px solid #FFA07A;	/* Dark green border */
		background-color:#FFF;	/* White background color */
		text-align:left;
		font-size:0.9em;
		z-index:100;
	}
	#ajax_listOfOptions div{	/* General rule for both .optionDiv and .optionDivSelected */
		margin:1px;		
		padding:1px;
		cursor:pointer;
		font-size:1.5em;
	}
	#ajax_listOfOptions .optionDiv{	/* Div for each item in list */
		
	}
	#ajax_listOfOptions .optionDivSelected{ /* Selected item in the list */
		background-color:#FFA07A;
		color:#FFF;
	}
	#ajax_listOfOptions_iframe{
		background-color:#F00;
		position:absolute;
		z-index:5;
	}
	
	form{
		display:inline;
	}
	
	</style>
	<script type="text/javascript" src="js/ajax.js"></script>
	<script type="text/javascript" src="js/ajax-dynamic-list.js">
	/************************************************************************************************************
	(C) www.dhtmlgoodies.com, April 2006
	
	This is a script from www.dhtmlgoodies.com. You will find this and a lot of other scripts at our website.	
	
	Terms of use:
	You are free to use this script as long as the copyright message is kept intact. However, you may not
	redistribute, sell or repost it without our permission.
	
	Thank you!
	
	www.dhtmlgoodies.com
	Alf Magne Kalleland
	
	************************************************************************************************************/	
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
         Door Delivery
        <small></small>
      </h1>
    </section>
    <?php
   if(isset($_REQUEST['dsno']))
   {
   $sn="select * from s_door_temp";
   $Esn=mysql_query($sn);
   $Fsn=mysql_fetch_array($Esn);
   $dsno=$Fsn['ino'];
   }
   else
   {
   $pn="select * from generate ";
   $Epn=mysql_query($pn);
   $Fpn=mysql_fetch_array($Epn); 
   $dsno= $Fpn['dsno']; 
   }	   
   ?>
   <?php
   $sn="select * from s_door_temp";
   $Esn=mysql_query($sn);
   $Fsn=mysql_fetch_array($Esn);
   ?>
    <!-- Main content -->
    <section class="content container-fluid">
        <form role="form" method="post" action="sale_door_act.php">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Create Door Delivery</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
              <div class="box-body">
                  
                <div class="form-group col-sm-3">
                  <label for="Branch"> Invoice No</label>
                  <input type="text" class="form-control" name="ino" id="ino" value="<?php echo $dsno; ?>" placeholder="Purchase Id" onKeyPress="return tabE(this,event)"  required="true">
                </div>
				<div class="form-group col-sm-3">
                  <label for="Branch">Date</label>
                  <input type="date" class="form-control" name="sdate" id="sdate" value="<?php echo $Fsn['sdate']; ?>"  placeholder="Purchase Date" onKeyPress="return tabE(this,event)">
                </div>
				<div class="form-group col-sm-3">
                  <label for="Branch">Customer Name</label>
					<input type="text" class="form-control" name="cname" id="cname" value="<?php echo $Fsn['cname']; ?>" onChange="getrate(this.value)" nKeyPress="return tabE(this,event)" required="true">
				  </div>
				  				<div class="form-group col-sm-3">
                  <label for="Branch">Customer Mobile</label>
					<input type="text" class="form-control" name="cmobile" id="cmobile" value="<?php echo $Fsn['cmobile']; ?>"   placeholder="Customer Mobile "  onKeyPress="return tabE(this,event)"  onChange="getrate(this.value)">
				  </div>
				
                                 
                <div class="form-group col-sm-4">
                  <label for="ponumber">Item Name</label>
				 <input name="iname" type="text" id="txtsearchname" class="form-control" onKeyUp="ajax_showOptions(this,'getCountriesByLetters',event);get_item_name()" onBlur="getFocus();" value="" onKeyPress="return tabE(this,event)"  autocomplete="off" />
				  </div>
				<div class="form-group col-sm-2">
                  <label for="refnumber">MRP</label>
                  <input type="text" class="form-control" name="mrp" id="mrp"  placeholder="MRP" onChange="" onKeyPress="return tabE(this,event)" readonly="true" >
                </div>
                <div class="form-group col-sm-2">
                  <label for="ponumber">Quantity</label>
                  <input type="text" class="form-control" name="quantity" id="quantity"  placeholder="Quantity" onKeyUp="get_total()" onKeyPress="return tabE(this,event)" >
                </div>
                
				 <div class="form-group col-sm-2">
                  <label for="refnumber">Discount%</label>
                  <input type="text" class="form-control" name="discount" id="discount"  placeholder="Discount" onKeyUp="get_total()" onKeyPress="return tabE(this,event)">
                </div>
				<div class="form-group col-sm-2">
                  <label for="refnumber">Total</label>
                  <input type="text" class="form-control" name="total" id="total"  placeholder="Total" readonly="true" onKeyPress="return tabE(this,event)">
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
              <h3 class="box-title">Item Details</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-bordered padding-4 ">
                <tr>
                  <th>S.No</th>
                  <th>Item Name </th>
				  <th>Qty</th>
				  <th>MRP</th>
				  <th>Discount</th>
				  <th>Total</th>
                  <th width="15%">Edit / Delete</th>
                </tr>
				<?php
				$i=0;
				$tmp="select * from s_door_temp ";
				$Etmp=mysql_query($tmp);
				while($Ftmp=mysql_fetch_array($Etmp))
				{
				$i++;
				?>
                <tr>
                  <td style="width: 30px"><?php echo $i; ?></td>
                  <td><?php echo $Ftmp['iname']; ?></td>
                  <td><?php echo $Ftmp['quantity']; ?></td>
                  <td><?php echo $Ftmp['mrp']; ?></td>
				  <td><?php echo $Ftmp['discount']; ?></td>
                  <td><?php echo $Ftmp['total']; ?></td>
				  <td><a href="sales_door_delete_single_act.php?id=<?php echo $Ftmp['id']; ?>" onClick="popup_window_show('#popup_window_id_33ED1F5BB26C0F584EEC6292161E14FB', { pos : 'window-center', parent : this, x : 0, y : 0, width : 'auto' });;" class="btn-box-tool"><i class="fa fa-close custom-icon1"></i></a></td>
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
				
                <a href="sale_door_act.php" onClick="return confirm('Are you sure you want to save?');" class="btn btn-info pull-right" >Complete</a>
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

<script>
    $(document).ready(function () {
        $('#txtCountry').typeahead({
            source: function (query, result) {
                $.ajax({
                    url: "server.php",
					data: 'query=' + query,            
                    dataType: "json",
                    type: "POST",
                    success: function (data) {
						result($.map(data, function (item) {
							return item;
                        }));
                    }
                });
            }
        });
    });
</script>

</html>
