<?php
	include("header.php");

?>
<h3 align="center">File Read Example </h3>
<?php
	$obj = fopen("myuser.txt","r");
	$data = fread($obj,4000);
	fclose($obj);
	echo $data;
?>
<hr color="green" size="1">
<?php
$data2 =file_get_contents("myuser.txt");   // read all data at a  time 
echo $data2;

?>

<?php
include("footer.php");
?>