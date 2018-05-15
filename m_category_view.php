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
  
 <?php
include("dbinfo.php");
$ss="select * from m_category";
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
        Category  Master
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
              <h3 class="box-title">Available Category</h3>
            
			<h4><div align="right" style=" border::groove; color:#00BFFF"> <a href="m_category.php"><button>Add New Category</button></a> </div></h4>
            </div>
            <!-- /.box-header --> 
            <!-- form start -->
			
			
				<?php
			if(isset($_REQUEST['id'])!="")
			{
			$ct1="select * from m_category where id='".$_REQUEST['id']."'";
				$Ect1=mysql_query($ct1);
				$Fct1=mysql_fetch_array($Ect1);
			?>
 <form class="form-horizontal" method="post" action="m_category_edit.php?id=<?php echo $Fct1['id']; ?>">
              <div class="box-body">
                  
                <div class="hidden">
                  <label for="itemcode" class="col-sm-3 control-label">Category Id</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="c_id" id="c_id" value="<?php echo $Fct1['c_id']; ?>" onKeyPress="return tabE(this,event)" required>
                  </div>
                </div>
                <div class="form-group">
                      <label for="catname" class="col-sm-3 control-label">Category Name</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="c_name" autofocus="autofocus" id="c_name"  value="<?php echo $Fct1['c_name']; ?>" onKeyPress="return tabE(this,event)" style="text-transform:uppercase"  required>
                      </div>
                    </div>                   
                  
					  <div class="form-group">
                      <label for="subcatname" class="col-sm-3 control-label">Description</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="c_description" id="c_description"  value="<?php echo $Fct1['c_description']; ?>" onKeyPress="return tabE(this,event)" placeholder="Description" style="text-transform:uppercase">
                      </div>
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
			
              <table id="example1" class="table table-bordered table-striped" style="width:100%">
                <thead>
                <tr>
                  <th>Category Name</th>
				  <th>Description</th>
					 <th>User</th>
					 <th>Branch</th>
					 <th>Status</th>
                  <th>Edit / Delete</th>
                </tr>
                </thead>
                          <tbody>
				<?php
				$ct="select * from m_category where branch='".$_SESSION['branch']."' order by id desc";
				$Ect=mysql_query($ct);
				while($Fct=mysql_fetch_array($Ect))
				{
				?>
                <tr>
				  <td><?php echo $Fct['c_name']; ?></td>
				  <td><?php echo $Fct['c_description']; ?></td>
				  <td><?php echo $Fct['user'];?></td>
				  <td><?php echo $Fct['branch'];?></td>
                 <td><?php echo $Fct['status'];?></td>
                 
                  <td>
                      <a href="m_category_view.php?id=<?php echo $Fct['id']; ?>" class="btn-box-tool"><i class="fa fa-edit custom-icon1"></i></a>
                      <a href="m_category_delete.php?id=<?php echo $Fct['id']; ?>" onClick="popup_window_show('#popup_window_id_33ED1F5BB26C0F584EEC6292161E14FB', { pos : 'window-center', parent : this, x : 0, y : 0, width : 'auto' });;" class="btn-box-tool"><i class="fa fa-close custom-icon1"></i></a>
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