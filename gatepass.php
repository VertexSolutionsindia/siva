<?php
include("dbinfo.php");
$gt="select * from t_gatepass";
$Egt=mysql_query($gt);
$ng=mysql_num_rows($Egt);
$ng1=$ng+1000;
$docno="TS".$ng1;
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
$ss="select * from t_department";
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
  <style>
  .disp{ display:block;  height: 180px; width:780px; overflow-y: scroll; }
  </style>
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
<script>
function printDiv(divName) {

 var printContents = document.getElementById(divName).innerHTML;
 w=window.open();
 w.document.write(printContents);
 w.print();
 w.close();
}

</script>
</head>

<body class="hold-transition skin-blue sidebar-mini">
<!-- Anchor start -->
<!--<a href="#" onClick="popup_window_show('#popup_window_id_B2562FB5F3577D989E47A6B8FB6A60D4', { pos : 'window-center', parent : this, x : 0, y : 0, width : 'auto' }); return false;">Open popup window</a>-->
<!-- Anchor end -->

<!-- Popup Window start -->
<div id="popup_window_id_B2562FB5F3577D989E47A6B8FB6A60D4" class="popup_window_css"><table class="popup_window_css" style="display:none"><tr><td class="popup_window_css"><div class="popup_window_css_head"><img src="http://localhost/popup/images/close.gif" alt="" width="9" height="9" />TICSON</div><div class="popup_window_css_body">Department created successfully</div><div class="popup_window_css_foot"><a href="http://www.php-development.ru/javascripts/popup-window.php" title="Powered by PHPDevel Popup Window | PHPDevel web scripts collection"><img src="http://localhost/popup/images/about.gif" alt="" width="6" height="6" /></a></div></td></tr></table></div>
<!-- Popup Window end -->

<!-- Anchor start -->
<!--<a href="#" onClick="popup_window_show('#popup_window_id_33ED1F5BB26C0F584EEC6292161E14FB', { pos : 'window-center', parent : this, x : 0, y : 0, width : 'auto' }); return false;">Open popup window</a>-->
<!-- Anchor end -->

<!-- Popup Window start -->
<div id="popup_window_id_33ED1F5BB26C0F584EEC6292161E14FB" class="popup_window_css"><table class="popup_window_css" style="display:none"><tr><td class="popup_window_css"><div class="popup_window_css_head"><img src="http://localhost/popup/images/close.gif" alt="" width="9" height="9" />TICSON</div><div class="popup_window_css_body">Department deleted successfully</div><div class="popup_window_css_foot"><a href="http://www.php-development.ru/javascripts/popup-window.php" title="Powered by PHPDevel Popup Window | PHPDevel web scripts collection"><img src="http://localhost/popup/images/about.gif" alt="" width="6" height="6" /></a></div></td></tr></table></div>
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
        Gatepass
        <small></small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
	<form name="form1" method="post" action="gatepass_act.php"> 
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			
           
              <div class="box-body">
                  
               <div class="form-group col-sm-4">
                  <label for="Branch">Branch</label>
                  <input type="text" class="form-control" name="branch" value="<?php echo $_SESSION['company']; ?>" placeholder="Document No" onKeyPress="return tabE(this,event)">
                </div>
                <div class="form-group col-sm-4">
                  <label for="ponumber">Doc No</label>
                  <input type="text" class="form-control" name="doc_no" value="<?php echo $docno; ?>" placeholder="Document No" onKeyPress="return tabE(this,event)">
                </div>
                <div class="form-group col-sm-4">
                  <label for="date">Date</label>
                  
                  <div class="input-group date">
                  <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="date" class="form-control pull-right" id="datepicker" onKeyPress="return tabE(this,event)">
                </div>
                </div>

                <div class="form-group col-sm-4">
                  <label for="party">Party</label>
                  <div>
                  <select class="form-control " name="party" style="width: 100%;" onkeypress="return tabE(this,event)">
				  
				  <?php
				  $sql="select name from t_party";
				  $result=mysql_query($sql);
				  while ($row = mysql_fetch_array($result)) {
				  
				  ?>
				  <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
				  <?php
				  }
				  
				  ?>
				  </select>
                </div>
                </div>
                <div class="form-group col-sm-4">
                  <label for="refnumber">Remarks</label>
                  <input type="text" class="form-control" name="remarks" placeholder="Remarks" onKeyPress="return tabE(this,event)">
                </div>
                <div class="form-group col-sm-4">
                  <label for="refnumber">Vehicle</label>
                  <input type="text" class="form-control" name="vehicle" placeholder="Vehicle No" onKeyPress="return tabE(this,event)">
                </div>
                  
                                     
                  
              </div>
              <!-- /.box-body -->
              
              <!-- /.box-footer -->
           
			
          </div>
        </div>
      </div>
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            
            <div class="box">
            <div class="box-header">
              <h3 class="box-title">Gatepass Details</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			<div id="print-content">
			
              <table class="table table-bordered table-striped disp">
                <thead>
                <tr>
                  <th style="width:50px">S.No</th>
                  <th style="width:250px">Item</th>
				  <th>Qty</th>
				  <th style="width:250px">UOM</th>
                  
                </tr>
                </thead>
                <tbody>
				<?php
				for($i=1;$i<=50;$i++)
				{
				?>
                <tr>
				  <td><?php echo $i; ?></td>
                  <td> <select name="item[]" class="form-control" onkeypress="return tabE(this,event)" >
				   <option value="">Select</option>
				      <?php 
					  $ii="select * from t_item";
					  $Ei=mysql_query($ii);
					  while($Fi=mysql_fetch_array($Ei))
					  { 
					  ?>
					  <option value="<?php echo $Fi['itemname']; ?>"><?php echo $Fi['itemname']; ?></option>
					  <?php
					  }
					  ?>
				      </select>
				  </td>
                  <td><input type="text" name="qty[]" class="form-control" onKeyPress="return tabE(this,event)" /></td>
				  <td> <select name="uom[]" class="form-control" style="width:250px" onkeypress="return tabE(this,event)">
				     <option value="">Select</option>
					 <?php 
					  $u="select * from t_uom";
					  $Eu=mysql_query($u);
					  while($Fu=mysql_fetch_array($Eu))
					  { 
					  ?>
					  <option value="<?php echo $Fu['uom_unit_name']; ?>"><?php echo $Fu['uom_unit_name']; ?></option>
					  <?php
					  }
					  ?>
				      </select></td>
                  
                </tr>
				<?php
				}
				?>
                  </tbody>
               
              </table>
			  
			  </div>
            </div>
            <!-- /.box-body -->
          </div>
           <div class="box-footer">
                <button type="submit" class="btn btn-default ">Cancel</button>
                <button  type="submit" class="btn btn-info pull-right">Save Changes</button>
              </div> 
          
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

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                    <span class="label label-danger pull-right">70%</span>
                  </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
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