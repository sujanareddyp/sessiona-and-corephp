<?php
	echo "<h2>PHP condition example</h2>";
	$a=100;
	$b=200;
	$c=50;
	
	if ($a> $b)
	{
		echo "Between $a and $b , the higher value is :".$a;
		
	}
	else
	{
		echo "Between $a and $b , the higher value is :".$b;	
	}	
?>
<hr color="red">
<h4>if else if example</h4>

<?php
	if (($a>$b) && ($a>$c))
	{
		echo "Between $a and $b , $c  the higher value is :".$a ;	
	}
	elseif(($b>$a) && ($b>$c))
	{
		echo "Between $a and $b , $c  the higher value is :".$b ;
	}
	else
	{
		echo "Between $a and $b , $c  the higher value is :".$c ;
	}
?>
<hr color="red">
<h4>Nested if example</h4>
<?php
	if($a>$b)
	{
		if($a%2==0)
		{
			echo "Between $a and $b , $a is higher & even no:".$a ;
		}
		else{
			echo "Between $a and $b , $b is higher & odd no:".$a ;
		}
	}
	else
	{
		$d = $b * $b;
		echo "Between $a and $b , $b is higher & square is:".$d;
	}
?>
<hr color="red">
<h4>Switch case  example</h4>
<?php
	$url="home.php";
	switch($url)
	{
		case "home.php":
		echo "<h3>It will load home page</h3>";
		break;
		
		case "login.php":
		echo "<h3>It will load login page</h3>";
		break;
		
		case "signup.php":
		echo "<h3>It will load signup page</h3>";
		break;
		
		case "contact.php":
		echo "<h3>It will load contact page</h3>";
		break;
		
		default:
		echo "<h3>It will load Error page</h3>";
	}
?>