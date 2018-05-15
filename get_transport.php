<?php
require_once("dbinfo.php");

				

if(!empty($_POST["country_id"])) {
	$query ="SELECT * FROM t_party WHERE name = '" . $_POST["country_id"] . "'";
	$results = mysql_query($query);
?>
	
<?php

	while($row=mysql_fetch_array($results)) {
?>
  	<option value="<?php echo $row["transport"]; ?>"><?php echo $row["transport"]; ?></option>
	
<?php
}
}

?>

                