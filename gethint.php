<?php
include("dbinfo.php");
// Array with names

$g="select * from m_item_master ";
$Eg=mysql_query($g);
while($Fg=mysql_fetch_array($Eg))
{
$a[]=$Fg['item_name'];
// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
				
            } else {
			   
                $hint .= " $name";
            }
        }
    }
}
}
// Output "no suggestion" if no hint was found or output correct values 
echo $hint === ""  ?  : $hint; ?>
