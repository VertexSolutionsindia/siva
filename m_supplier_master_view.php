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
        Supplier Master
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
              <h3 class="box-title">Available Supplier Master</h3>
            
			<h4><div align="right" style=" border::groove; color:#00BFFF">  <a href="m_supplier_master.php"><button>Add New Supplier</button></a> </div></h4>
            </div>
            <!-- /.box-header --> 
            <!-- form start -->
			
			
				<?php
			if(isset($_REQUEST['id'])!="")
			{
			$ct1="select * from m_supplier_master where id='".$_REQUEST['id']."'";
				$Ect1=mysql_query($ct1);
				$Fct1=mysql_fetch_array($Ect1);
			?>
            <form class="form-horizontal" method="post" action="m_supplier_master_edit.php?id=<?php echo $Fct1['id']; ?>">
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
                    <input type="text" class="form-control" name="supplier_id" id="supplier_id" value="<?php echo $Fct1['supplier_id']; ?>" onKeyPress="return tabE(this,event)" placeholder="Party Code">
                  </div>
                </div>
                  
                  
                <div class="form-group">
                  <label for="name" class="col-sm-3 control-label">Supplier Name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="supplier_name" id="supplier_name" value="<?php echo $Fct1['supplier_name']; ?>" onKeyPress="return tabE(this,event)" placeholder="Supplier Name" style="text-transform:uppercase" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="address1" class="col-sm-3 control-label">Address</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="address" id="address" value="<?php echo $Fct1['address']; ?>" onKeyPress="return tabE(this,event)" style="text-transform:uppercase" placeholder="Address">
                  </div>
                </div> 
				 <div class="form-group">
                  <label for="" class="col-sm-3 control-label">Email Id</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="email" id="email" value="<?php echo $Fct1['email']; ?>" onKeyPress="return tabE(this,event)" style="text-transform:uppercase" placeholder="Email Id">
                  </div>
                </div>   
            <div class="form-group">
                  <label for="address2" class="col-sm-3 control-label">GSTIN No</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="gstin" id="gstin" value="<?php echo $Fct1['gstin']; ?>" onKeyPress="return tabE(this,event)" style="text-transform:uppercase" placeholder="GSTIN No">
                  </div>
                </div>  
               <div class="form-group">
                  <label for="city" class="col-sm-3 control-label">Contact Person</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="c_person" id="c_person" value="<?php echo $Fct1['c_person']; ?>" onKeyPress="return tabE(this,event)" style="text-transform:uppercase" placeholder="Contact Person">
                  </div>
                </div>  
                  <div class="form-group">
                  <label for="phone" class="col-sm-3 control-label">Contact No</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="c_no" id="c_no" value="<?php echo $Fct1['c_no']; ?>" onKeyPress="return tabE(this,event)" style="text-transform:uppercase" placeholder="Contact No">
                  </div>
                </div>  
                  <div class="form-group">
                  <label for="email" class="col-sm-3 control-label">Alternative No</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="al_no" id="al_no" value="<?php echo $Fct1['al_no']; ?>" onKeyPress="return tabE(this,event)" style="text-transform:uppercase" placeholder="Alternative No">
                  </div>
                </div> 
				 <div class="form-group">
                  <label for="gstin" class="col-sm-3 control-label">PAN No</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="pan_no" id="pan_no" value="<?php echo $Fct1['pan_no']; ?>" onKeyPress="return tabE(this,event)" style="text-transform:uppercase" placeholder="PAN No">
                  </div>
                </div>  
				 <div class="form-group">
                  <label for="gstin" class="col-sm-3 control-label">Discount</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="discount" id="discount" value="<?php echo $Fct1['discount']; ?>" onKeyPress="return tabE(this,event)" style="text-transform:uppercase" placeholder="PAN No">
                  </div>
                </div>  
				
              </div>
              <!-- /.box-body -->
              
              <!-- /.box-footer -->
            </div>
          </div>
        </div>
        <!--/.col (left) -->
        <!-- right column -->
		
		
			  
              <!-- /.box-body -->
              
              <!-- /.box-footer -->
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
                    <input type="text" class="form-control" name="holder_1" id="holder_1" value="<?php echo $Fct1['holder_1']; ?>" onKeyPress="return tabE(this,event)" style="text-transform:uppercase" placeholder="A/C Holder name">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="address2" class="col-sm-3 control-label">Bank Name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="bank_1" id="bank_1" value="<?php echo $Fct1['bank_1']; ?>" onKeyPress="return tabE(this,event)" style="text-transform:uppercase" placeholder="Bank Name">
                  </div>
                </div>  
            <div class="form-group">
                  <label for="address2" class="col-sm-3 control-label">A/c Number</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="ac_no_1" id="ac_no_1" value="<?php echo $Fct1['ac_no_1']; ?>" onKeyPress="return tabE(this,event)" style="text-transform:uppercase" placeholder="A/c Number">
                  </div>
                </div>  
               <div class="form-group">
                  <label for="city" class="col-sm-3 control-label">Branch</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="branch_1" id="branch_1" value="<?php echo $Fct1['branch_1']; ?>" onKeyPress="return tabE(this,event)" style="text-transform:uppercase" placeholder="Branch">
                  </div>
                </div>  
                  <div class="form-group">
                  <label for="city" class="col-sm-3 control-label">IFSC Code</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="ifsc_1" id="ifsc_1" value="<?php echo $Fct1['ifsc_1']; ?>" onKeyPress="return tabE(this,event)" style="text-transform:uppercase" placeholder="IFSC Code">
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
                    <input type="text" class="form-control" name="holder_2" id="holder_2" value="<?php echo $Fct1['holder_2']; ?>" onKeyPress="return tabE(this,event)" style="text-transform:uppercase" placeholder="A/C Holder name">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="address2" class="col-sm-3 control-label">Bank Name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="bank_2" id="bank_2" value="<?php echo $Fct1['bank_2']; ?>" onKeyPress="return tabE(this,event)" style="text-transform:uppercase" placeholder="Bank Name">
                  </div>
                </div>  
            <div class="form-group">
                  <label for="address2" class="col-sm-3 control-label">A/c Number</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="ac_no_2" id="ac_no_2" value="<?php echo $Fct1['ac_no_2']; ?>" onKeyPress="return tabE(this,event)" style="text-transform:uppercase" placeholder="A/c Number">
                  </div>
                </div>  
               <div class="form-group">
                  <label for="city" class="col-sm-3 control-label">Branch</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="branch_2" id="branch_2" value="<?php echo $Fct1['branch_2']; ?>" onKeyPress="return tabE(this,event)" style="text-transform:uppercase" placeholder="Branch">
                  </div>
                </div>  
                  <div class="form-group">
                  <label for="city" class="col-sm-3 control-label">IFSC Code</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="ifsc_2" id="ifsc_2" value="<?php echo $Fct1['ifsc_2']; ?>" onKeyPress="return tabE(this,event)" style="text-transform:uppercase" placeholder="IFSC Code">
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
                    <input type="text" class="form-control" name="holder_3" id="holder_3" value="<?php echo $Fct1['holder_3']; ?>" onKeyPress="return tabE(this,event)" style="text-transform:uppercase" placeholder="A/C Holder name">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="address2" class="col-sm-3 control-label">Bank Name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="bank_3" id="bank_3" value="<?php echo $Fct1['bank_3']; ?>" onKeyPress="return tabE(this,event)" style="text-transform:uppercase" placeholder="Bank Name">
                  </div>
                </div>  
            <div class="form-group">
                  <label for="address2" class="col-sm-3 control-label">A/c Number</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="ac_no_3" id="ac_no_3" value="<?php echo $Fct1['ac_no_3']; ?>" onKeyPress="return tabE(this,event)" style="text-transform:uppercase" placeholder="A/c Number">
                  </div>
                </div>  
               <div class="form-group">
                  <label for="city" class="col-sm-3 control-label">Branch</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="branch_3" id="branch_3" value="<?php echo $Fct1['branch_3']; ?>" onKeyPress="return tabE(this,event)" style="text-transform:uppercase" placeholder="Branch">
                  </div>
                </div>  
                  <div class="form-group">
                  <label for="city" class="col-sm-3 control-label">IFSC Code</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="ifsc_3" id="ifsc_3" value="<?php echo $Fct1['ifsc_3']; ?>" onKeyPress="return tabE(this,event)" style="text-transform:uppercase" placeholder="IFSC Code">
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
			
              <table id="example1" class="table table-bordered table-striped" style="width:200%">
                <thead>
                <tr>
				<th>S.No</th>
                  <th>Supplier name</th>
				    <th>Address</th>
                  <th>Email Id</th>
				    <th>GSTIN</th>
                  <th>Contact Person</th>
				    <th>Contact No</th>
                  <th>Alter No</th>
				    <th>PAN No</th>
					 <th>Discount</th>
                  <th>Ac Holder Name</th>
				    <th>Bank</th>
                  <th>Ac No</th>
				    <th>Branch</th>
                  <th>IFSC Code</th>
				  <th>Ac Holder Name</th>
				  <th>Bank</th>
				  <th>Ac No</th>
				    <th>Branch</th>
                  <th>IFSC Code</th>
				    <th>Ac Holder Name</th>
				    <th>Bank</th>
                  <th>Ac No</th>
				     <th>Branch</th>
				    <th>IFSC Code</th>
                  <th>Status</th>
				   <th>User</th>
				    <th>Branch</th>
                  <th>Edit / Delete</th>
                </tr>
                </thead>
                          <tbody>
				<?php
				$i=0;
				$ct="select * from m_supplier_master where branch='".$_SESSION['branch']."' and status='Active'";
				$Ect=mysql_query($ct);
				while($Fct=mysql_fetch_array($Ect))
				{
				$i++;
				?>
                <tr>
				  <td><?php echo $i; ?></td>
				  <td><?php echo $Fct['supplier_name']; ?></td>
                  <td><?php echo $Fct['address']; ?></td>
				  <td><?php echo $Fct['email']; ?></td>
                  <td><?php echo $Fct['gstin']; ?></td>
				  <td><?php echo $Fct['c_person']; ?></td>
                  <td><?php echo $Fct['c_no']; ?></td>
				  <td><?php echo $Fct['al_no']; ?></td>
                  <td><?php echo $Fct['pan_no']; ?></td>
				  <td><?php echo $Fct['discount']; ?></td>
				  <td><?php echo $Fct['holder_1']; ?></td>
                  <td><?php echo $Fct['bank_1']; ?></td>
				  <td><?php echo $Fct['ac_no_1']; ?></td>
                  <td><?php echo $Fct['branch_1']; ?></td>
				  <td><?php echo $Fct['ifsc_1']; ?></td>
                  <td><?php echo $Fct['holder_2']; ?></td>
				  <td><?php echo $Fct['bank_2']; ?></td>
                  <td><?php echo $Fct['ac_no_2']; ?></td>
				  <td><?php echo $Fct['branch_2']; ?></td>
                  <td><?php echo $Fct['ifsc_2']; ?></td>
				  <td><?php echo $Fct['holder_3']; ?></td>
				  <td><?php echo $Fct['bank_3']; ?></td>
                  <td><?php echo $Fct['ac_no_3']; ?></td>
				  <td><?php echo $Fct['branch_3']; ?></td>
                  <td><?php echo $Fct['ifsc_3']; ?></td>
				  <td><?php echo $Fct['user']; ?></td>
				  <td><?php echo $Fct['branch']; ?></td>
				  <td><?php echo $Fct['status']; ?></td>
                 
                 
                  <td>
                      <a href="m_supplier_master_view.php?id=<?php echo $Fct['id']; ?>" class="btn-box-tool"><i class="fa fa-edit custom-icon1"></i></a>
                      <a href="m_supplier_master_delete.php?id=<?php echo $Fct['id']; ?>" onClick="popup_window_show('#popup_window_id_33ED1F5BB26C0F584EEC6292161E14FB', { pos : 'window-center', parent : this, x : 0, y : 0, width : 'auto' });;" class="btn-box-tool"><i class="fa fa-close custom-icon1"></i></a>
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