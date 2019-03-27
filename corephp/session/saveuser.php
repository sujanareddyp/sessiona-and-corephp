<?php
	session_start();//to maintain the variable globally in project
	include("dbconfig.php");
	
	$name=$_POST['fname'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$sql="insert into user(name,mobile,email,password)
	values('$name','$mobile','$email','$pass')";
	
	$status = mysqli_query($conn,$sql);
	if ($status==true)
	{
		$_SESSION['msg']="Please Login";
		header("Location:index.php");
	}
	else
	{
		$_SESSION['msg']="Duplicate email or mobile or Some error ! Try again...";	
		header("Location:signup.php");
	}
?>