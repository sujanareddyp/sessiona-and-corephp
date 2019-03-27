<?php
	session_start();
	include("dbconfig.php");
	
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	 if(($email=="")|| ($pass==""))
	 {
		 $_SESSION['msg']="Email or Password is empty !";
		 header("Location:index.php");
	 }
	 else
	 {
		$sql="select * from  user where email='$email' and password='$pass'";// echo "Wait checking...";
		$res = mysqli_query($conn,$sql);
		$totaluser= mysqli_num_rows($res);//to find out no of matching
		//echo $totaluser;
		if($totaluser==0)
		{
			$_SESSION['email']=$email;//to identify who is login
			header("Location:home.php");
		}
		else
		{
			$_SESSION['msg']="Invalid Login Details !";
			header("Location:index.php");
		}
	 }
?>