<?php
require_once("dbinfo.php");

if(!empty($_POST["country_id"])) {
	$query ="SELECT * FROM m_staff WHERE branch_id = '" . $_POST["country_id"] . "'";
	$results = mysql_query($query);
?>
	
<?php
	while($row=mysql_fetch_array($results)) {
?>

  	<option value="<?php echo $row["user_name"]; ?>"><?php echo $row["user_name"]; ?></option>
	
<?php
}
}
?>