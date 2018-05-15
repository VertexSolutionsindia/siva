<?php
include("dbinfo.php");

?>
    <!-- Logo -->
    <a href="#.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>S</span>
      <!-- logo for regular state and mobile devices -->
     
	 <span class="logo-lg"><b><?php echo $_SESSION['company']; ?></b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      
	  <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li style="padding-right:500px; font-size:24px"><a href="#.php"><?php echo $_SESSION['user']; ?></a></li>			
          <li><a href="logout.php"><b>Signout</b></a></li>
          </ul>
      </div>
    </nav>