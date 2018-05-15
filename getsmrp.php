<?php
include("dbinfo.php");     
  
	    $echeck="select * from m_item_master where barcode='".$_POST['qty']."' and status='Active'"; 
       $echk=mysql_query($echeck);
        $ecount=mysql_fetch_array($echk); 
      
	   echo $ecount['mrp'];
      
?>	  


