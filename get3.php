<?php
include("dbinfo.php");     
  
	    $echeck="select * from m_item_master where item_name='".$_POST['inputs']."' and status='Active'"; 
       $echk=mysql_query($echeck);
        $ecount=mysql_fetch_array($echk); 
      
	   echo $ecount['mrp'];
      
?>	  


