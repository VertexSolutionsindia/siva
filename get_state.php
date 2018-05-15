<?php
require_once("dbinfo.php");

if(!empty($_POST["country_id"])) {
	$query ="SELECT * FROM t_item WHERE company = '" . $_POST["country_id"] . "'";
	$results = mysql_query($query);
	for($i=1;$i<=50;$i++)
				{
?>
	<option value="">Select State</option>
<?php
	while($state=mysql_fetch_array($results)) {
?>
	<option value="<?php echo $state["itemname"]; ?>"><?php echo $state["itemname"]; ?></option>
<?php
	}
}
}
?>