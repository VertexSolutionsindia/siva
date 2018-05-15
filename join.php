<?php
include("dbinfo.php");

$r="select * from t_itemcomp";
$Er=mysql_query($r);
while($Fr=mysql_fetch_array($Er))
{

$r1="insert into t_item set company='TICSON',code='".$Fr['code']."',itemname='".$Fr['item_name']."',subcategory='".$Fr['subcategory']."',uom='".$Fr['uom']."',category='".$Fr['category']."',size='".$Fr['size']."',colour='".$Fr['color']."',item='".$Fr['item']."'";
$Er1=mysql_query($r1);
}

?>
