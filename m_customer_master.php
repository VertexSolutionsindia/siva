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
$ss="select * from m_customer_master";
$Ess=mysql_query($ss);
$Fss=mysql_fetch_array($Ess);
$ns=mysql_num_rows($Ess);
$ns1=$ns+0001;
$dc="TD".$ns1;

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
        Customer Master
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
              <h3 class="box-title">Create Customer</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			
            <form class="form-horizontal" method="post" action="m_customer_master_act.php">
              <div class="box-body">
                  
                <div class="hidden">
                  <label for="depcode" class="col-sm-3 control-label"> Id</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="customer_id" id="customer_id" value="<?php echo $dc; ?>" onKeyPress="return tabE(this,event)"  placeholder="Department Code" required readonly="true" >
                  </div>
                </div>
                <div class="form-group">
                      <label for="depname" class="col-sm-3 control-label"> Name</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="customer_name" id="customer_name"  placeholder="Customer Name" onKeyPress="return tabE(this,event)" style="text-transform:uppercase" required>
                      </div>
                    </div>  
					 <div class="form-group">
                      <label for="depname" class="col-sm-3 control-label"> Type of Customer</label>
                      <div class="col-sm-2">
                        <select class="form-control" name="customer_type" id="customer_type"  placeholder="Customer Name" style="text-transform:uppercase" onKeyPress="return tabE(this,event)">
						<option value="Retail">Retail</option>
						<option value="Wholesale">Wholesale</option></select>
                      </div>
                    </div>   
					 <div class="form-group">
                      <label for="depname" class="col-sm-3 control-label">Address</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="address" id="address"  placeholder="Address" style="text-transform:uppercase" onKeyPress="return tabE(this,event)">
                      </div>
                    </div>
					 <div class="form-group">
                      <label for="depname" class="col-sm-3 control-label">Contact Number</label>
                      <div class="col-sm-6">
                 <input type="text" class="form-control" name="contact_no" id="contact_no" value="+91"  placeholder="Contact Number" onKeyPress="return tabE(this,event)"  required>
                      </div>
                    </div>               
                    <div class="form-group">
                      <label for="depname" class="col-sm-3 control-label">Alternative Number</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="al_no" id="al_no" value="+91"  placeholder="Alternative Number" onKeyPress="return tabE(this,event)">
                      </div>
                    </div>  
					<div class="form-group">
                      <label for="depname" class="col-sm-3 control-label"> Date Of Birth</label>
                      <div class="col-sm-6">
                        <input type="date" class="form-control" name="d_o_b" id="d_o_b"  placeholder="Alternative Number" onKeyPress="return tabE(this,event)">
                      </div>
                    </div>  
					<div class="form-group">
                      <label for="depname" class="col-sm-3 control-label"> Marriage Date</label>
                      <div class="col-sm-6">
                        <input type="date" class="form-control" name="m_d" id="m_d"  placeholder="Alternative Number" onKeyPress="return tabE(this,event)">
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
              <h3 class="box-title">Available Customer</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Customer Id</th>
                  <th>Customer Name </th>
				  <th>Address</th>
				  <th>Conatct No</th>
				  <th>alternative No</th>
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
  <div class="control-sidebar-bg"></div>
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