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
$ss="select * from m_supplier_master";
$Ess=mysql_query($ss);
$Fss=mysql_fetch_array($Ess);
$ns=mysql_num_rows($Ess);
$ns1=$ns+0001;
$dc="TS".$ns1;

?>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
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
<form method="post" action="m_supplier_master_act.php">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Supplier Master
        <small></small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Supplier Master</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="form-horizontal">
              <div class="box-body">
                  
                <div class="hidden">
                  <label for="code" class="col-sm-3 control-label">Supplier Id</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="supplier_id" id="supplier_id" value="<?php echo $dc; ?>" onKeyPress="return tabE(this,event)" placeholder="Party Code" readonly="true">
                  </div>
                </div>
                  
                  
                <div class="form-group">
                  <label for="name" class="col-sm-3 control-label">Supplier Name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="supplier_name" id="supplier_name" onKeyPress="return tabE(this,event)" placeholder="Supplier Name" style="text-transform:uppercase" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="address1" class="col-sm-3 control-label">Address</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="address" id="address" onKeyPress="return tabE(this,event)" style="text-transform:uppercase" placeholder="Address">
                  </div>
                </div> 
				 <div class="form-group">
                  <label for="" class="col-sm-3 control-label">Email Id</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="email" id="email" onKeyPress="return tabE(this,event)" style="text-transform:uppercase" placeholder="Email Id">
                  </div>
                </div>   
            <div class="form-group">
                  <label for="address2" class="col-sm-3 control-label">GSTIN No</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="gstin" id="gstin" onKeyPress="return tabE(this,event)" style="text-transform:uppercase" placeholder="GSTIN No">
                  </div>
                </div>  
               <div class="form-group">
                  <label for="city" class="col-sm-3 control-label">Contact Person</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="c_person" id="c_person" onKeyPress="return tabE(this,event)" style="text-transform:uppercase" placeholder="Contact Person">
                  </div>
                </div>  
                  <div class="form-group">
                  <label for="phone" class="col-sm-3 control-label">Contact No</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="c_no" id="c_no" onKeyPress="return tabE(this,event)"  placeholder="Contact No">
                  </div>
                </div>  
                  <div class="form-group">
                  <label for="email" class="col-sm-3 control-label">Alternative No</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="al_no" id="al_no" onKeyPress="return tabE(this,event)" placeholder="Alternative No">
                  </div>
                </div> 
				 <div class="form-group">
                  <label for="gstin" class="col-sm-3 control-label">PAN No</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="pan_no" id="pan_no" onKeyPress="return tabE(this,event)" placeholder="PAN No">
                  </div>
                </div>  
				 <div class="form-group">
                  <label for="gstin" class="col-sm-3 control-label">Discount</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="discount" id="discount" onKeyPress="return tabE(this,event)" placeholder="DISCOUNT">
                  </div>
                </div>  
				
				
				    
              </div>
              <!-- /.box-body -->
              
              <!-- /.box-footer -->
            </div>
			
          </div>
		  
        </div>
		
		
		<div class="col-md-6">
          <div class="box box-info">
            <div class="box-header with-border">
			
              <h3 class="box-title">Bank Details-1</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="form-horizontal">
              <div class="box-body">
			  
                <div class="form-group">
                  <label for="name" class="col-sm-3 control-label">A/C Holder name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="holder_1" id="holder_1" onKeyPress="return tabE(this,event)" style="text-transform:uppercase" placeholder="A/C Holder name">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="address2" class="col-sm-3 control-label">Bank Name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="bank_1" id="bank_1" onKeyPress="return tabE(this,event)" style="text-transform:uppercase" placeholder="Bank Name">
                  </div>
                </div>  
            <div class="form-group">
                  <label for="address2" class="col-sm-3 control-label">A/c Number</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="ac_no_1" id="ac_no_1" onKeyPress="return tabE(this,event)" style="text-transform:uppercase" placeholder="A/c Number">
                  </div>
                </div>  
               <div class="form-group">
                  <label for="city" class="col-sm-3 control-label">Branch</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="branch_1" id="branch_1" onKeyPress="return tabE(this,event)" style="text-transform:uppercase" placeholder="Branch">
                  </div>
                </div>  
                  <div class="form-group">
                  <label for="city" class="col-sm-3 control-label">IFSC Code</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="ifsc_1" id="ifsc_1" onKeyPress="return tabE(this,event)" style="text-transform:uppercase" placeholder="IFSC Code">
                  </div>
                </div>  
         <div class="box-header with-border">
              <h3 class="box-title">Bank Details-2</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="form-horizontal">
              <div class="box-body">
                  
               
                  
                <div class="form-group">
                  <label for="name" class="col-sm-3 control-label">A/C Holder name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="holder_2" id="holder_2" onKeyPress="return tabE(this,event)" style="text-transform:uppercase" placeholder="A/C Holder name">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="address2" class="col-sm-3 control-label">Bank Name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="bank_2" id="bank_2" onKeyPress="return tabE(this,event)" style="text-transform:uppercase" placeholder="Bank Name">
                  </div>
                </div>  
            <div class="form-group">
                  <label for="address2" class="col-sm-3 control-label">A/c Number</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="ac_no_2" id="ac_no_2" onKeyPress="return tabE(this,event)" style="text-transform:uppercase" placeholder="A/c Number">
                  </div>
                </div>  
               <div class="form-group">
                  <label for="city" class="col-sm-3 control-label">Branch</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="branch_2" id="branch_2" onKeyPress="return tabE(this,event)" style="text-transform:uppercase" placeholder="Branch">
                  </div>
                </div>  
                  <div class="form-group">
                  <label for="city" class="col-sm-3 control-label">IFSC Code</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="ifsc_2" id="ifsc_2" onKeyPress="return tabE(this,event)" style="text-transform:uppercase" placeholder="IFSC Code">
                  </div>
                </div>  
				  <div class="box-header with-border">
              <h3 class="box-title">Bank Details-3</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="form-horizontal">
              <div class="box-body">
                  
               
                  
                <div class="form-group">
                  <label for="name" class="col-sm-3 control-label">A/C Holder name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="holder_3" id="holder_3" onKeyPress="return tabE(this,event)" style="text-transform:uppercase" placeholder="A/C Holder name">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="address2" class="col-sm-3 control-label">Bank Name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="bank_3" id="bank_3" onKeyPress="return tabE(this,event)" style="text-transform:uppercase" placeholder="Bank Name">
                  </div>
                </div>  
            <div class="form-group">
                  <label for="address2" class="col-sm-3 control-label">A/c Number</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="ac_no_3" id="ac_no_3" onKeyPress="return tabE(this,event)" style="text-transform:uppercase" placeholder="A/c Number">
                  </div>
                </div>  
               <div class="form-group">
                  <label for="city" class="col-sm-3 control-label">Branch</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="branch_3" id="branch_3" onKeyPress="return tabE(this,event)" style="text-transform:uppercase" placeholder="Branch">
                  </div>
                </div>  
                  <div class="form-group">
                  <label for="city" class="col-sm-3 control-label">IFSC Code</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="ifsc_3" id="ifsc_3" onKeyPress="return tabE(this,event)" style="text-transform:uppercase" placeholder="IFSC Code">
                  </div>
                </div>  
				
					      
              </div>
			  
			  
              <!-- /.box-body -->
              
              <!-- /.box-footer -->
            </div>
          </div>
        </div>
		
          </div>
        </div>
        <!--/.col (left) -->
        <!-- right column -->
		
          </div>
        </div>
		
		
	    <div class="col-md-12">
		<div class="box-footer">
                <button type="submit" class="btn btn-default" onClick="javascript:history.go(-1);">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Save Changes</button>
              </div>
			  </div>
			  </div>
			  </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
   <?php include("footer.php");?>

  <!-- Control Sidebar -->
  
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<?php include("script.php");?>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>