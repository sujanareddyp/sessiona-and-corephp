<?php
	session_start();//to maintain the variable globally in project
	include("dbconfig.php");
	
	$name=$_POST['fname'];
	$lsname=$_POST['lname'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$conpass=$_POST['conpass'];
	$date=$_POST['dob'];
	$pincode=$_POST['pin'];
	$state=$_POST['state'];
	$district=$_POST['district'];
	
	$sql="insert into personal(name,lsname,mobile,email,password,confirmpassword,date,pincode,state,district)
	values('$name','$lsname','$mobile','$email','$pass','$conpass','$date','$pincode','$state','$district')";
	
	$status = mysqli_query($conn,$sql);
	if ($status==true)
	{
		$_SESSION['msg']="Please Login";
		header("Location:personal.php");
	}
	else
	{
		$_SESSION['msg']="Some error! Try  again ...";	
		header("Location:personalinformation.php");
	}
?>