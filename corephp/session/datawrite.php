<?php
	$newdata = $_POST['userdata']; // to catch data
	$newdata = "<p>$newdata (File updated On: ". date('Y-m-d H:i:s')." )</p>";
	$obj = fopen("myuser.txt","a+");
	fwrite($obj,$newdata); // to write data in opened file 
	fclose($obj);
	header("Location:fileread.php"); // redirect to file 
	

?> 	