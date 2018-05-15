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
$ss="select * from m_category ";
$Ess=mysql_query($ss);
$Fss=mysql_fetch_array($Ess);
$ns=mysql_num_rows($Ess);
$ns1=$ns+0001;
$dc="TC".$ns1;

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
<!--<a href="#" onClick="popup_window_show('#popup_window_id_B2562FB5F3577D989E47A6B8FB6A60D4', { pos : 'window-center', parent : this, x : 0, y : 0, width : 'auto' }); return false;">Open popup window</a>-->
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
        Category Master
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
              <h3 class="box-title">Create Categories</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			
            <form class="form-horizontal" method="post" action="m_category_act.php">
              <div class="box-body">
                  
                <div class="hidden">
                  <label for="catcode" class="col-sm-3 control-label">Category Id</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="c_id" id="c_id" value="<?php echo $dc; ?>" onKeyPress="return tabE(this,event)"  placeholder="Category Code" required>
                  </div>
                </div>
                <div class="form-group">
                      <label for="catname" class="col-sm-3 control-label">Category Name</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="c_name" id="c_name"   placeholder="Category Name" onKeyPress="return tabE(this,event)" style="text-transform:uppercase" required>
                      </div>
                    </div>                   
                   <div class="form-group">
                      <label for="catname" class="col-sm-3 control-label">Description</label>
                      <div class="col-sm-8">
                   <textarea name="c_description" cols="90" name="c_description" id="c_description" rows="4" placeholder="Terms" onKeyPress="return tabE(this,event)" style="text-transform:uppercase"> </textarea>
                      </div>
                    </div>  
              </div>
              <!-- /.box-body -->
			   <audio id="myAudio">
  <source src="speech.ogg" type="audio/ogg">
  <source src="speech.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
              <div class="box-footer">
			 
                <button type="submit" class="btn btn-default " onClick="javascript:history.go(-1);">Cancel</button>
                <button onClick="playAudio()" type="submit" class="btn btn-info pull-right">Save Changes</button>
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
              <h3 class="box-title">Available Categories</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Category Id</th>
                  <th>Category Name</th>
				  <th>Description</th>
                  <th width="15%">Edit / Delete</th>
                </tr>
                </thead>
                <tbody>
				<?php
				$ct="select * from t_category";
				$Ect=mysql_query($ct);
				while($Fct=mysql_fetch_array($Ect))
				{
				?>
                <tr>
                  <td><?php echo $Fct['code']; ?></td>
                  <td><?php echo $Fct['category']; ?></td>
                  <td>
                      <a href="category.php?id=<?php echo $Fct['id']; ?>" class="btn-box-tool"><i class="fa fa-edit custom-icon1"></i></a>
                      <a href="category_delete.php?id=<?php echo $Fct['id']; ?>" onClick="popup_window_show('#popup_window_id_33ED1F5BB26C0F584EEC6292161E14FB', { pos : 'window-center', parent : this, x : 0, y : 0, width : 'auto' });;" class="btn-box-tool"><i class="fa fa-close custom-icon1"></i></a>
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