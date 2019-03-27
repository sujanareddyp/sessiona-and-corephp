<?php
	echo "<h3>Array is collections of similar data types,it help to store multiple values in a single variable</h3>";
	$a=100;
	$myarray=array(10,20,100,"Apple","Mango","Orange",50.50,999999);
	echo $a;
	
	echo "<br>";
	//how to print structure of an array using php
	
	var_dump($myarray);
	
	echo"<hr>";
	
	echo "<pre>";
	print_r($myarray);
	echo "</pre>";
	
	//how  to add new element inside array
	
	array_push($myarray,"Banana");
	echo "<pre>";
	print_r($myarray);
	echo "</pre>";
	
	array_unshift($myarray,"Grapes");
	echo "<pre>";
	print_r($myarray);
	echo "</pre>";
	
	//how to remove elements
	
	array_pop($myarray);
	echo "<pre>";
	print_r($myarray);
	echo "</pre>";
	
	array_shift($myarray);
	echo "<pre>";
	print_r($myarray);
	echo "</pre>";
	
	//how to merge two or more array together
	
	$myarray2=array(10,20,50,1000,"Grapes","Papaya","Mango",2000);
	$myarray3=array("Grapes","Papaya","Mango");
	
	$array4=array_merge($myarray,$myarray2,$myarray3);
	echo "<pre>";
	print_r($array4);
	echo "</pre>";
	
	echo"<hr>";
	$array5=array_combine($myarray,$myarray2);
	echo "<pre>";
	print_r($array5);
	echo "</pre>";
	
	//how to remove duplicate elements from  array
	
	$array6=array_unique($array4);
	echo "<pre>";
	print_r($array6);
	echo "</pre>";
	
	//how to sort the array
	
	sort($array6);
	echo "<pre>";
	print_r($array6);
	echo "</pre>";
	
	//desc
	
	rsort($array6);
	echo "<pre>";
	print_r($array6);
	echo "</pre>";
	
	
	
	
	
	
	
	
	
?>