<?php

/*mysql_connect("localhost","root","");
mysql_select_db("annai");*/
include("dbinfo.php");

if(isset($_GET['getCountriesByLetters']) && isset($_GET['letters'])){
	$letters = $_GET['letters'];
	$letters = preg_replace("/[^a-z0-9 ]/si","",$letters);
	$res = mysql_query("select item_name,id from m_item_master where item_name like '".$letters."%'") or die(mysql_error());
	#echo "1###select ID,countryName from ajax_countries where countryName like '".$letters."%'|";
	while($inf = mysql_fetch_array($res)){
		echo strtoupper($inf["id"])."###".strtoupper($inf["item_name"])."|";
	}	
}
?>
