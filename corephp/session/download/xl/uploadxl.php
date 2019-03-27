<?php 
        $conn = mysqli_connect("localhost", "root", "", "phpmysession");
		$filename=$_FILES["file"]["tmp_name"];
		 if($_FILES["file"]["size"] > 0)
		{
		$file = fopen($filename, "r");
				 while (($row = fgetcsv($file, 10000, ",")) !== FALSE)
				 {
					$sql = "INSERT into user(name,mobile,email,password) 
							values('".trim($row[0])."','".trim($row[1])."' ,'".trim($row[1])."','".trim($row[2])."' )";
					mysqli_query($conn,$sql); 
				 }
				 fclose($file);
		}
		header("Location:myxl.php");
?>