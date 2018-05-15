
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
      <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>SIVA | DEPARTMENTAL STORE</title>

        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/waves.min.css" type="text/css" rel="stylesheet">
        <!--        <link rel="stylesheet" href="css/nanoscroller.css">-->
        <link href="css/menu.css" type="text/css" rel="stylesheet">
        <link href="css/style.css" type="text/css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style type="text/css">
<!--
.style1 {font-family: "Times New Roman", Times, serif}
.style6 {font-family: Geneva, Arial, Helvetica, sans-serif}
.style7 {font-family: Georgia, "Times New Roman", Times, serif}
-->
        </style>
</head>
<body>
   
     <!-- Static navbar -->

        
        <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        
        <!-- Optionally, you can add icons to the links -->
        <li><a href="home.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-list-alt"></i> <span>Item Management</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="m_company_creation_master_view.php"><i class="fa fa-dropbox"></i> <span>Company Creation</span></a></li>
            <li><a href="m_branch_creation_master_view.php"><i class="fa fa-dropbox"></i> <span>Branch Creation</span></a></li>
            <li><a href="m_department_master_view.php"><i class="fa fa-users"></i> <span>Department Master</span></a></li>
			<li><a href="m_role_master_view.php"><i class="fa fa-link"></i> <span>Role Master</span></a></li>
			<li><a href="m_staff_master_view.php"><i class="fa fa-user-plus"></i> <span>Staff Master</span></a></li>
			<li><a href="m_unit_master_view.php"><i class="fa fa-link"></i> <span>unit Master</span></a></li>
            <li><a href="m_supplier_master_view.php"><i class="fa fa-user"></i> <span>Supplier Master</span></a></li>
			<li><a href="m_category_view.php"><i class="fa fa-dropbox"></i> <span>category Creation</span></a></li>
			 <li><a href="m_item_master_view.php"><i class="fa fa-link"></i> <span>Item Master</span></a></li>
			  <li><a href="m_customer_master_view.php"><i class="fa fa-link"></i> <span>Customer Master</span></a></li>
            
          </ul>
       
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-shopping-cart"></i> <span>Purchase</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="purchase.php"><i class="fa fa-shopping-cart"></i> <span>Purchase Entry</span></a></li>
          </ul>
       
        </li> 
		
		 
		
		<li class="treeview">
          <a href="#"><i class="fa fa-cubes"></i> <span>Stock Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a href="Inventory.php"><i class="fa fa-cubes"></i> <span>Inventory</span></a></li>
			
			   
              </ul>
		 </li> 	  
		<li class="treeview">
          <a href="#"><i class="fa fa-line-chart"></i> <span>Sales</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
             
			  <li><a href="sales_invoice.php"><i class="fa fa-line-chart"></i> <span>Retail Invoice</span></a></li>
			   <li><a href="sale_door.php"><i class="fa fa-line-chart"></i> <span>Door Delivery Invoice</span></a></li>
			    <li><a href="whole_sales_invoice.php"><i class="fa fa-line-chart"></i> <span>Whole Sales Invoice</span></a></li>
			  
          </ul>
		 </li> 
		<li class="treeview">
          <a href="#"><i class="fa fa-pencil"></i> <span>Modify</span>
		  
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
             
			  <li><a href="purchase_invoice_no.php"><i class="fa fa-pencil"></i> <span>Purchase Order Edit</span></a></li>
			  <li><a href="purchase_order_delete.php"><i class="fa fa-remove"></i> <span>Purchase Order Delete</span></a></li>
			   <li><a href="sales_invoice_bill_no.php"><i class="fa fa-pencil"></i> <span>Sales Invoice Edit</span></a></li>
			   <li><a href="sales_invoice_bill_delete.php"><i class="fa fa-remove"></i> <span>Sales Invoice Delete</span></a></li>
			  
              </ul>
        
         </li> 
		
		<li class="treeview">
          <a href="#"><i class="fa fa-user-circle"></i> <span>HR Management</span>
		  
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
             
			  <li><a href="hr_people_job_view.php"><i class="fa fa-pencil"></i> <span>People Requisting for job </span></a></li>
			  
			  
              </ul>
        
         </li> 
		<li class="treeview">
          <a href="#"><i class="fa fa-file"></i> <span>Reports</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
		   <li><a href="sales_bill_report.php"><i class="fa fa-calendar-o"></i> <span>Sales Bill Report</span></a></li>
              <li><a href="purchase_bill_report.php"><i class="fa fa-calendar-o"></i> <span>Purchase Report</span></a></li>
				  <li><a href="customer_balance_report.php"><i class="fa fa-bar-chart"></i> <span>Customer pending Report</span></a></li>
		<li><a href="supplier_balance_report.php"><i class="fa fa-bar-chart"></i> <span>Supplier Balance Report</span></a></li>
		<li><a href="#.php"><i class="fa fa-bar-chart"></i> <span>Daily Stock Report </span></a></li>
		<li><a href="#.php"><i class="fa fa-bar-chart"></i> <span>Party Wise Bill Report</span></a></li>
		<li><a href="#.php"><i class="fa fa-bar-chart"></i> <span>Item Wise Sales Report</span></a></li>
	
		
		
              </ul>
			   </li> 
      <!-- /.sidebar-menu -->
    </section>
<script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/metisMenu.min.js"></script>
        <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
        <!-- Flot -->
        <script src="js/flot/jquery.flot.js"></script>
        <script src="js/flot/jquery.flot.tooltip.min.js"></script>
        <script src="js/flot/jquery.flot.resize.js"></script>
        <script src="js/flot/jquery.flot.pie.js"></script>
        <script src="js/chartjs/Chart.min.js"></script>
        <script src="js/pace.min.js"></script>
        <script src="js/waves.min.js"></script>
        <script src="js/jquery-jvectormap-world-mill-en.js"></script>
        <!--        <script src="js/jquery.nanoscroller.min.js"></script>-->
        <script type="text/javascript" src="js/custom.js"></script>
        <script type="text/javascript">
            $(function () {

                var barData = {
                    labels: ["January", "February", "March", "April", "May", "June", "July"],
                    datasets: [
                        {
                            label: "My First dataset",
                            fillColor: "rgba(220,220,220,0.5)",
                            strokeColor: "rgba(220,220,220,0.8)",
                            highlightFill: "rgba(220,220,220,0.75)",
                            highlightStroke: "rgba(220,220,220,1)",
                            data: [65, 59, 80, 81, 56, 55, 40]
                        },
                        {
                            label: "My Second dataset",
                            fillColor: "rgba(14, 150, 236,0.5)",
                            strokeColor: "rgba(14, 150, 236,0.8)",
                            highlightFill: "rgba(14, 150, 236,0.75)",
                            highlightStroke: "rgba(14, 150, 236,1)",
                            data: [28, 48, 40, 19, 86, 27, 90]
                        }
                    ]
                };

                var barOptions = {
                    scaleBeginAtZero: true,
                    scaleShowGridLines: true,
                    scaleGridLineColor: "rgba(0,0,0,.05)",
                    scaleGridLineWidth: 1,
                    barShowStroke: true,
                    barStrokeWidth: 2,
                    barValueSpacing: 5,
                    barDatasetSpacing: 1,
                    responsive: true
                };


                var ctx = document.getElementById("barChart").getContext("2d");
                var myNewChart = new Chart(ctx).Bar(barData, barOptions);

            });
        </script>
        <!-- Google Analytics:  -->
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments);
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-3560057-28', 'auto');
            ga('send', 'pageview');
        </script>
    
</body>
</html>
