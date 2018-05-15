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
$ss="select * from m_staff";
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
        Staff Master
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
              <h3 class="box-title">Available Staff</h3>
            
			<h4><div align="right" style=" border::groove; color:#00BFFF"> <a href="m_staff_master.php"><button>Add New Staff</button></a> </div></h4>
            </div>
            <!-- /.box-header --> 
            <!-- form start -->
			
			
				<?php
			if(isset($_REQUEST['id'])!="")
			{
			$ct1="select * from m_staff where id='".$_REQUEST['id']."'";
				$Ect1=mysql_query($ct1);
				$Fct1=mysql_fetch_array($Ect1);
			?>
 <form class="form-horizontal" method="post" action="m_staff_master_edit.php?id=<?php echo $Fct1['id']; ?>" enctype="multipart/form-data">
              <div class="box-body">
                  
                               <div class="form-group">
                  <label for="code" class="col-sm-3 control-label">Staff Id No</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="s_id" id="s_id" value="<?php echo $Fct1['s_id']; ?>" onKeyPress="return tabE(this,event)"  placeholder="Staff Code" required readonly="true">
                  </div>
                </div>
				<div class="form-group">
                      <label for="catname" class="col-sm-3 control-label">Staff Name</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="s_name" id="s_name" value="<?php echo $Fct1['s_name']; ?>"  placeholder="Staff Name" onKeyPress="return tabE(this,event)" style="text-transform:uppercase" required>
                      </div>
                    </div> 
                <div class="form-group">
                      <label for="catname" class="col-sm-3 control-label">Date Of Brith</label>
                      <div class="col-sm-2">
                        <input type="date" class="form-control" name="dob" id="dob" value="<?php echo $Fct1['dob']; ?>"  placeholder="Date Of Brith" onKeyPress="return tabE(this,event)" style="text-transform:uppercase">
                      </div>
                    </div> 
					 <div class="form-group">
                      <label for="catname" class="col-sm-3 control-label">Age</label>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" name="age" id="age" value="<?php echo $Fct1['age']; ?>"  placeholder="Age" onKeyPress="return tabE(this,event)">
                      </div>
                    </div> 
				 <div class="form-group">
                      <label for="department" class="col-sm-3 control-label">Department</label>
                      <div class="col-sm-4">
                        <select class="form-control" name="department" id="department"   placeholder="Department" style="text-transform:uppercase" onKeyPress="return tabE(this,event)">
						<option><?php echo $Fct1['department']; ?></option>
						<option></option>
						<?php
						$dep1="select d_name from m_department where status='Active'";
						$dep=mysql_query($dep1);
						while($result=mysql_fetch_array($dep))
						{
						?>
						<option value="<?php echo $result['d_name'];?>"><?php echo $result['d_name'];?></option>
						<?php
						}
						?>
						</select>
                      </div>
					  <a href="m_department_master.php">Add New Department</a>
                    </div>  
				<div class="form-group">
                      <label for="address" class="col-sm-3 control-label">Address</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="address" id="address" value="<?php echo $Fct1['address']; ?>"  placeholder="Address" style="text-transform:uppercase" onKeyPress="return tabE(this,event)">
                      </div>
                    </div>  
				<div class="form-group">
                      <label for="city" class="col-sm-3 control-label">Mobile No</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="mobile" id="mobile" value="<?php echo $Fct1['mobile']; ?>"  placeholder="Mobile No" onKeyPress="return tabE(this,event)" required>
                      </div>
                    </div>  
				<div class="form-group">
                      <label for="mobno" class="col-sm-3 control-label">Alternate Mobile Number</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="al_mobile" id="al_mobile" value="<?php echo $Fct1['al_mobile']; ?>"  placeholder="Alternate Mobile Number" onKeyPress="return tabE(this,event)">
                      </div>
                    </div>  
					 <div class="form-group">
                      <label for="catname" class="col-sm-3 control-label">Date Of Join</label>
                      <div class="col-sm-2">
                        <input type="date" class="form-control" name="doj" id="doj" value="<?php echo $Fct1['doj']; ?>"  placeholder="Date Of Join" onKeyPress="return tabE(this,event)">
                      </div>
                    </div> 
					 <div class="form-group">
                      <label for="catname" class="col-sm-3 control-label">Salay</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="salary" id="salary" value="<?php echo $Fct1['salary']; ?>"  placeholder="Date Of Join" onKeyPress="return tabE(this,event)" style="text-transform:uppercase">
                      </div>
                    </div> 
					 <div class="form-group">
                      <label for="catname" class="col-sm-3 control-label">Working Time</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="work_time" id="work_time"  value="<?php echo $Fct1['work_time']; ?>" placeholder="Working Time" onKeyPress="return tabE(this,event)" style="text-transform:uppercase">
                      </div>
                    </div> 
					 <div class="form-group">
                      <label for="catname" class="col-sm-3 control-label">Blood group</label>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" name="blood_grp" id="blood_grp" value="<?php echo $Fct1['blood_grp']; ?>"  placeholder="Blood group" onKeyPress="return tabE(this,event)" style="text-transform:uppercase">
                      </div>
                    </div> 
					 <div class="form-group">
                      <label for="catname" class="col-sm-3 control-label">Medical Problem</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="md" id="md"  value="<?php echo $Fct1['md']; ?>" placeholder="Medical Problem" onKeyPress="return tabE(this,event)" style="text-transform:uppercase">
                      </div>
                    </div> 
					 <div class="form-group">
                      <label for="catname" class="col-sm-3 control-label">Parent/ Guardian </label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="pg" id="pg" value="<?php echo $Fct1['pg']; ?>"  placeholder="Parent/ Guardian" onKeyPress="return tabE(this,event)" style="text-transform:uppercase">
                      </div>
                    </div> 
					<div class="form-group">
                      <label for="city" class="col-sm-3 control-label">Emergency Number</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="p_mobile" id="p_mobile" value="<?php echo $Fct1['p_mobile']; ?>"  placeholder="Emergency Number" onKeyPress="return tabE(this,event)">
                      </div>
                    </div>  
				<div class="form-group">
                      <label for="mobno" class="col-sm-3 control-label">Alternate Mobile Number</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="p_al_mobile" id="p_al_mobile" value="<?php echo $Fct1['p_al_mobile']; ?>"  placeholder="Alternate Mobile Number" onKeyPress="return tabE(this,event)">
                      </div>
                    </div>  
					<div class="form-group">
                      <label for="mobno" class="col-sm-3 control-label">Orignal id</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="orignal_id" id="orignal_id" value="<?php echo $Fct1['orignal_id']; ?>"  placeholder="Orignal id" onKeyPress="return tabE(this,event)">
                      </div>
                    </div> 
					<div class="form-group">
                      <label for="mobno" class="col-sm-3 control-label">AADHAR NO</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="aadhar_no" id="aadhar_no" value="<?php echo $Fct1['aadhar_no']; ?>"  placeholder="AADHAR NO" onKeyPress="return tabE(this,event)">
                      </div>
                    </div> 
				<div class="form-group">
                      <label for="altmobno" class="col-sm-3 control-label">Image</label>
                      <div class="col-sm-4">
                        <input type="file" class="form-control" name="image" id="image" value="<?php echo $Fct1['image']; ?>"  placeholder="Alternate Mobile No" onKeyPress="return tabE(this,event)">
                      </div></div>
					  <div class="form-group">
                      <label for="altmobno" class="col-sm-3 control-label">Contract Periode</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="cp" id="cp" value="<?php echo $Fct1['cp']; ?>"  placeholder="Contract Periode" style="text-transform:uppercase" onKeyPress="return tabE(this,event)">
                      </div>
                    </div>  
					 <div class="form-group">
                      <label for="department" class="col-sm-3 control-label">Company</label>
                      <div class="col-sm-4">
                        <select class="form-control" name="company" id="company"   placeholder="Department" style="text-transform:uppercase" onKeyPress="return tabE(this,event)">
						<option><?php echo $Fct1['company']; ?></option>
						<option></option>
						<?php
						$dep1="select company_name from m_company_creation where status='Active'";
						$dep=mysql_query($dep1);
						while($result=mysql_fetch_array($dep))
						{
						?>
						<option value="<?php echo $result['company_name'];?>"><?php echo $result['company_name'];?></option>
						<?php
						}
						?>
						</select>
                      </div>
					  <a href="m_company_creation_master.php">Add New Company</a>
                    </div>                   
                 
					<div class="form-group">
                      <label for="department" class="col-sm-3 control-label">Role</label>
                      <div class="col-sm-4">
                        <select class="form-control" name="role" id="role"   placeholder="Department" style="text-transform:uppercase"   onKeyPress="return tabE(this,event)">
						<option><?php echo $Fct1['role']; ?></option>
						<option></option>
						<?php
						$dep1="select role_name from m_role where status='Active'";
						$dep=mysql_query($dep1);
						while($result=mysql_fetch_array($dep))
						{
						?>
						<option value="<?php echo $result['role_name'];?>"><?php echo $result['role_name'];?></option>
						<?php
						}
						?>
						</select>
                      </div>
					    <a href="m_role_master.php">Add New Role</a>
                    </div>
					<div class="form-group">
                      <label for="department" class="col-sm-3 control-label">Branch</label>
                      <div class="col-sm-4">
                        <select class="form-control" name="branch_id" id="branch_id"   placeholder="Department" style="text-transform:uppercase"  onKeyPress="return tabE(this,event)">
						<option><?php echo $Fct1['branch_id']; ?></option>
						<option></option>
						<?php
						$dep1="select branch_id from m_branch_creation where status='Active'";
						$dep=mysql_query($dep1);
						while($result=mysql_fetch_array($dep))
						{
						?>
						<option value="<?php echo $result['branch_id'];?>"><?php echo $result['branch_id'];?></option>
						<?php
						}
						?>
						</select>
                      </div>
					    <a href="m_branch_creation_master.php">Add New Branch</a>
                    </div>
					  <div class="box-header with-border">
              <h3 class="box-title">Login Details</h3>
            </div></br>
			<div class="form-group">
                      <label for="mobno" class="col-sm-3 control-label">User Name</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="user_name" id="user_name" value="<?php echo $Fct1['user_name']; ?>"  placeholder="User Name"  onKeyPress="return tabE(this,event)" style="text-transform:uppercase" required>
                      </div>
                    </div> 
					<div class="form-group">
                      <label for="mobno" class="col-sm-3 control-label">Password</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="password" id="password" value="<?php echo $Fct1['password']; ?>"  placeholder="Pasword"  onKeyPress="return tabE(this,event)" style="text-transform:uppercase" required>
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
			
              <table id="example1" class="table table-bordered table-striped" style="width:200%">
                <thead>
                <tr>
                    <th>Staff Id No</th>
				    <th>Staff Name</th>
					   <th>Date Of Brith</th>
                  <th>Age</th>
				    <th>Department</th>
                  <th>Address</th>
				    <th>Mobile No</th>
                  <th>Alternate Mobile Number</th>
				    <th>Date Of Join</th>
					 <th>Salay</th>
					  <th>Working Time</th>
					 <th>Blood group</th>
					 <th>Medical Problem</th>
					 <th>Parent/ Guardian</th>
					 <th>Emergency Number</th>
					 <th>Alternate Mobile Number</th>
					 <th>Orignal id</th>
					 <th>AADHAR NO</th>
					  <th>Image</th>
					 <th>Contract Periode</th>
					 <th>Company</th>
					 <th>Role</th>
					 <th>Branch</th>
					 <th>User Name</th>
					 <th>Password</th>
					 <th>User</th>
					 <th>Branch</th>
					 <th>Status</th>
                  <th>Edit / Delete</th>
                </tr>
                </thead>
                          <tbody>
				<?php
				$ct="select * from m_staff where branch='".$_SESSION['branch']."' and status='Active'";
				$Ect=mysql_query($ct);
				while($Fct=mysql_fetch_array($Ect))
				{
				?>
                <tr>
                 
				  <td><?php echo $Fct['s_id']; ?></td>
                  <td><?php echo $Fct['s_name']; ?></td>
				    <td><?php echo $Fct['dob']; ?></td>
				  <td><?php echo $Fct['age']; ?></td>
				  <td><?php echo $Fct['department']; ?></td>
                  <td><?php echo $Fct['address']; ?></td>
				  <td><?php echo $Fct['mobile']; ?></td>
                  <td><?php echo $Fct['al_mobile']; ?></td>
				    <td><?php echo $Fct['doj']; ?></td>
					  <td><?php echo $Fct['salary']; ?></td>
				  <td><?php echo $Fct['work_time'];?></td>
				   <td><?php echo $Fct['blood_grp'];?></td>
				    <td><?php echo $Fct['md'];?></td>
					 <td><?php echo $Fct['pg'];?></td>
					  <td><?php echo $Fct['p_mobile'];?></td>
					   <td><?php echo $Fct['p_al_mobile'];?></td>
					    <td><?php echo $Fct['orignal_id'];?></td>
						 <td><?php echo $Fct['aadhar_no'];?></td>
						  <td><img src="uploadimage/<?php echo $Fct['image']; ?>"  width="75" height="75"></td>
						   <td><?php echo $Fct['cp'];?></td>
						    <td><?php echo $Fct['company'];?></td>
							 <td><?php echo $Fct['role'];?></td>
							  <td><?php echo $Fct['branch_id'];?></td>
							   <td><?php echo $Fct['user_name'];?></td>
							    <td><?php echo $Fct['password'];?></td>
								 <td><?php echo $Fct['user'];?></td>
								  <td><?php echo $Fct['branch'];?></td>
								  <td><?php echo $Fct['status'];?></td>
				  
                 
                 
                  <td>
                      <a href="m_staff_master_view.php?id=<?php echo $Fct['id']; ?>" class="btn-box-tool"><i class="fa fa-edit custom-icon1"></i></a>
                      <a href="m_staff_master_delete.php?id=<?php echo $Fct['id']; ?>" onClick="popup_window_show('#popup_window_id_33ED1F5BB26C0F584EEC6292161E14FB', { pos : 'window-center', parent : this, x : 0, y : 0, width : 'auto' });;" class="btn-box-tool"><i class="fa fa-close custom-icon1"></i></a>
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