<?php
session_start();
require_once("dbinfo.php");

if(!empty($_POST["country_id"])) {
	$query ="SELECT * FROM t_item WHERE company='".$_SESSION['company']."' and state = '" . $_POST["country_id"] . "'";
	$results = mysql_query($query);
?>
	
<?php
	while($row=mysql_fetch_array($results)) {
?>

  	<option value="<?php echo $row["item"]; ?>"><?php echo $row["item"]; ?></option>
	
<?php
}
}
?>