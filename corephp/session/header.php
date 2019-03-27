<html>
	<head>
	
	</head>

<body>

<?php
	session_start();
	if(!isset( $_SESSION['email']))
	{
		$_SESSION['msg']="Sorry ! Inorder to access Please Login";
			header("Location:index.php");
	}
	
	echo "Welcome : " . $_SESSION['email'].""
?>

<span style="float:right;"><a href="logout.php">Logout</a></span>

<hr color="red" size="1">
	<table align="center" cellpadding="7">
	<tr>
	<th> <a href="home.php">Home</a></th>
	<th> <a href="profile.php">My profile</a></th>
	<th> <a href="newimage.php">Upload photo</a></th>
	<th> <a href="imagelist.php">Image List</a></th>
	<th> <a href="uploadxl.php">XL upload</a></th>
	<th> <a href="xldownload.php">XL Download</a></th>
	<th> <a href="pdfdownload.php">PDF Download<a></th>
	<th> <a href="fileread.php">File Read</a></th>
	<th> <a href="filewrite.php">File Write</a></th>
	</tr>
	</table>