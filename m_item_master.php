<?php
session_start();
include("dbinfo.php");
include("redirect.php");
?>

<!DOCTYPE html>
<html>
<head>
  <?php include("design_css.php");?>
  
  <?php
include("dbinfo.php");
$ss="select * from m_item_master order by id desc";
$Ess=mysql_query($ss);
$Fss=mysql_fetch_array($Ess);
$ns=mysql_num_rows($Ess);
$ns1=$Fss['id']+1;


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
  function tabE1(obj,e){ 
   var e=(typeof event!='undefined')?window.event:e;// IE : Moz 
   if(e.keyCode==13){ 
     var ele = document.forms[0].elements; 
     for(var i=0;i<ele.length;i++){ 
       var q=(i==ele.length-1)?0:i+4;// if last element : if any other 
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
function alertCheckedMRP(){ 
    var rate = 0;
	var rate1 = 0;
	var ex = 0;
    var inputs1 = document.getElementsByName('mrp_per_pcs[]');
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
    var inputs = document.getElementsByName('total[]');
for ( var index = 0; index < inputs.length; index++) {
   if (parseInt(inputs[index].value)){
       qty += parseInt(inputs[index].value);
	   
   }
  
}
         document.getElementById('net_amount').value = qty;
}

</script>

</head>

<body class="hold-transition skin-blue sidebar-mini">
<!-- Anchor start -->
<!-- <a href="#" onClick="popup_window_show('#popup_window_id_B2562FB5F3577D989E47A6B8FB6A60D4', { pos : 'window-center', parent : this, x : 0, y : 0, width : 'auto' }); return false;">Open popup window</a> -->
<!-- Anchor end -->

<!-- Popup Window start -->

<!-- Popup Window end -->
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
        Item Master
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
              <h3 class="box-title">Create Item</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			
            <form class="form-horizontal" method="post" action="m_item_master_act.php">
              <div class="box-body">
                  
                <div class="form-group">
                  <label for="depcode" class="col-sm-3 control-label">Barcode</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="barcode" id="barcode" value="<?php echo $ns1; ?>"  onKeyPress="return tabE(this,event)"  placeholder="Barcode">
                  </div>
                </div>
                <div class="form-group">
                      <label for="department" class="col-sm-3 control-label">Category</label>
                      <div class="col-sm-4">
                        <select class="form-control" name="c_name" id="c_name" onKeyPress="return tabE(this,event)"  placeholder="Department" required>
						<option value="">Select Category</option>
						<?php
						$dep1="select c_name from m_category order by c_name";
						$dep=mysql_query($dep1);
						while($result=mysql_fetch_array($dep))
						{
						?>
						<option value="<?php echo $result['c_name'];?>"><?php echo $result['c_name'];?></option>
						<?php
						}
						?>
						</select>
                      </div>
					  <a href="m_category.php">Add New Category</a>
                    </div> 
					<div class="form-group">
                      <label for="depname" class="col-sm-3 control-label">Item Name Tamil</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="item_name_1" id="item_name_1" onKeyPress="return tabE(this,event)"  placeholder="Item Name" style="text-transform:uppercase">
                      </div>
                    </div>  
					 <div class="form-group">
                      <label for="depname" class="col-sm-3 control-label">Item Name English</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="item_name" id="item_name" onKeyPress="return tabE(this,event)"  placeholder="Item Name" style="text-transform:uppercase" required>
                      </div>
                    </div>
					 <div class="form-group">
                      <label for="depname" class="col-sm-3 control-label">Tax</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="tax" id="tax" onKeyPress="return tabE(this,event)"  placeholder="Tax" >
                      </div>
                    </div>
					 <div class="form-group">
                      <label for="depname" class="col-sm-3 control-label">HSN Code</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="hsn_code" id="hsn_code" onKeyPress="return tabE(this,event)"  placeholder="HSN Code">
                      </div>
                    </div>
					 <div class="form-group">
                      <label for="department" class="col-sm-3 control-label">Unit</label>
                      <div class="col-sm-4">
                        <select class="form-control" name="unit" id="unit" onKeyPress="return tabE(this,event)"  placeholder="Department" >
						<option>Select Unit</option>
						<?php
						$dep1="select u_name from m_unit_master";
						$dep=mysql_query($dep1);
						while($result=mysql_fetch_array($dep))
						{
						?>
						<option value="<?php echo $result['u_name'];?>"><?php echo $result['u_name'];?></option>
						<?php
						}
						?>
						</select>
                      </div>
					  <a href="m_unit_master.php">Add New Unit</a>
                    </div>               
                   <div class="form-group">
                      <label for="depname" class="col-sm-3 control-label">MRP</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="mrp" id="mrp" onKeyPress="return tabE(this,event)"  placeholder="MRP" required>
                      </div>
                    </div>
					 <div class="form-group">
                      <label for="depname" class="col-sm-3 control-label">Purchase Rate</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="p_rate" id="p_rate" onKeyPress="return tabE(this,event)"  placeholder="MRP" required>
                      </div>
                    </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default " onClick="javascript:history.go(-1);">Cancel</button>
                <button onClick="popup_window_show('#popup_window_id_B2562FB5F3577D989E47A6B8FB6A60D4', { pos : 'window-center', parent : this, x : 0, y : 0, width : 'auto' });;" type="submit" class="btn btn-info pull-right">Save Changes</button>
              </div>
              <!-- /.box-footer -->
            </form>
			
          </div>
        </div>
      </div>
      <div class="hidden">
        <!-- left column -->
        <div class="col-md-12">
            
            <div class="box">
            <div class="box-header">
              <h3 class="box-title">Available Item</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Item Id</th>
                  <th>category </th>
				  <th>Item Name</th>
				  <th>Unit</th>
                  <th width="15%">Edit / Delete</th>
                </tr>
                </thead>
                <tbody>
				<?php
				$ct="select * from t_department";
				$Ect=mysql_query($ct);
				while($Fct=mysql_fetch_array($Ect))
				{
				?>
                <tr>
                  <td><?php echo $Fct['dep_code']; ?></td>
                  <td><?php echo $Fct['dep_name']; ?></td>
                  <td>
                      <a href="dep_master.php?id=<?php echo $Fct['id']; ?>" class="btn-box-tool"><i class="fa fa-edit custom-icon1"></i></a>
                      <a href="dep_delete.php?id=<?php echo $Fct['id']; ?>" onClick="popup_window_show('#popup_window_id_33ED1F5BB26C0F584EEC6292161E14FB', { pos : 'window-center', parent : this, x : 0, y : 0, width : 'auto' });;" class="btn-box-tool"><i class="fa fa-close custom-icon1"></i></a>
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
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <?php include("footer.php");?>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
 
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<?php include("script.php");?>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>