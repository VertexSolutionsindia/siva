<?php
include("dbinfo.php");     
  
	    $echeck="select * from p_purchase where item_name='".$_POST['qty']."' and status='Active'";
       $echk=mysql_query($echeck);
        $ecount=mysql_fetch_array($echk); 
      
	   echo $ecount['free'];
      
?>	  


