<?php
require_once("dbinfo.php");

if(!empty($_POST["country_id"])) {
	$query ="SELECT * FROM m_item_master WHERE barcode = '" . $_POST["country_id"] . "'";
	$results = mysql_query($query);
?>
	
<?php
	while($row=mysql_fetch_array($results)) {
?>

  	<option value="<?php echo $row["mrp"]; ?>"><?php echo $row["mrp"]; ?></option>
	
<?php
}
}
?>