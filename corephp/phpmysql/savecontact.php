<?php
	$a =$_POST['fname'];
	$b =$_POST['mobile'];
	$c =$_POST['msg'];
	
	//$conn =mysqli_connect("servername","uname","password","dbname");
	$conn=mysqli_connect("localhost","root","","phpmysql");
	
	$sql="insert into contact(name,mobile,message) 
					values ('$a','$b','$c')";
					
	$status=mysqli_query($conn,$sql);//to execute query
	
	if ($status==true)
	{
		header("Location:contactlist.php");//to redirect 
	}
	else
	{
		header("Location:contact.html");
	}	
	
?>