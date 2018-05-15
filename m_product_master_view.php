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
$ss="select * from m_product_master";
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
<style>

.table, th
{

padding:5px;
text-align:center;

border-color:#000000;
}
.table, td
{
background-color:#3c8dbc;
color:#FFFFFF;
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
              <h3 class="box-title">Available Item</h3>
            
			<h4><div align="right" style=" border::groove; color:#00BFFF"> <a href="m_item_master.php"><button>Add New Item</button></a> </div></h4>
            </div>
            <!-- /.box-header --> 
            <!-- form start -->
			
			
				<?php
			if(isset($_REQUEST['id'])!="")
			{
			$ct1="select * from m_product_master where id='".$_REQUEST['id']."'";
				$Ect1=mysql_query($ct1);
				$Fct1=mysql_fetch_array($Ect1);
			?>
             <form class="form-horizontal" method="post" action="m_item_master_edit.php?id=<?php echo $Fct1['id']; ?>">
              <div class="box-body">
                  
               <div class="form-group">
                  <label for="depcode" class="col-sm-3 control-label">Barcode</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="barcode" id="barcode"  value="<?php echo $Fct1['barcode']; ?>"  onKeyPress="return tabE(this,event)"  placeholder="Barcode" required>
                  </div>
                </div>
                <div class="form-group">
                      <label for="department" class="col-sm-3 control-label">Category</label>
                      <div class="col-sm-4">
                        <select class="form-control" name="c_name" id="c_name"  placeholder="Department" >
						<option>Select Department</option>
						<?php
						$dep1="select c_name from m_category";
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
					  <a href="department_master.php">Add New Department</a>
                    </div>                
                  <div class="form-group">
                      <label for="subcatname" class="col-sm-3 control-label">Item Name </label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="item_name" id="item_name"  value="<?php echo $Fct1['item_name']; ?>" onKeyPress="return tabE(this,event)" placeholder="Subcategory Name" required>
                      </div>
                    </div>  
					<div class="form-group">
                      <label for="subcatname" class="col-sm-3 control-label">Tax </label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="tax" id="tax"  value="<?php echo $Fct1['tax']; ?>" onKeyPress="return tabE(this,event)" placeholder="Subcategory Name" required>
                      </div>
                    </div>  
					<div class="form-group">
                      <label for="subcatname" class="col-sm-3 control-label">Hsn Code </label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="hsn_code" id="hsn_code"  value="<?php echo $Fct1['hsn_code']; ?>" onKeyPress="return tabE(this,event)" placeholder="Subcategory Name" required>
                      </div>
                    </div>  
					 <div class="form-group">
                      <label for="department" class="col-sm-3 control-label">Unit</label>
                      <div class="col-sm-4">
                        <select class="form-control" name="u_name" id="u_name"  placeholder="Department" >
						<option>Select Department</option>
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
					  <a href="department_master.php">Add New Department</a>
                    </div>  
					
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default ">Cancel</button>
                <button type="submit" onClick="popup_window_show('#popup_window_id_B2562FB5F3577D989E47A6B8FB6A60D4', { pos : 'window-center', parent : this, x : 0, y : 0, width : 'auto' });;" class="btn btn-info pull-right">Save Changes</button>
				
              </div>
              <!-- /.box-footer -->
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
                  <th>Barcode</th>
                  <th>Category Name</th>
				    <th>Item Name</th>
					   <th>Unit</th>
					 <th>User</th>
					  <th>Branch</th>
					   <th>Status</th>
                  <th>Edit / Delete</th>
                </tr>
                </thead>
                          <tbody>
				<?php
				$ct="select * from m_product_master where status='Activate' and branch='".$_SESSION['branch']."'";
				$Ect=mysql_query($ct);
				while($Fct=mysql_fetch_array($Ect))
				{
				?>
                <tr>
                  <td><?php echo $Fct['barcode']; ?></td>
				  <td><?php echo $Fct['c_name']; ?></td>
                  <td><?php echo $Fct['item_name']; ?></td>
				    <td><?php echo $Fct['unit']; ?></td>
				  <td><?php echo $Fct['user']; ?></td>
				  <td><?php echo $Fct['branch']; ?></td>
				  <td><?php echo $Fct['status']; ?></td>
                 
				  
                 
                 
                  <td>
                      <a href="m_item_master_view.php?id=<?php echo $Fct['id']; ?>" class="btn-box-tool"><i class="fa fa-edit custom-icon1"></i></a>
                      <a href="m_item_master_delete.php?id=<?php echo $Fct['id']; ?>" onClick="popup_window_show('#popup_window_id_33ED1F5BB26C0F584EEC6292161E14FB', { pos : 'window-center', parent : this, x : 0, y : 0, width : 'auto' });;" class="btn-box-tool"><i class="fa fa-close custom-icon1"></i></a>
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
 <?php include("footer.php");?>

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