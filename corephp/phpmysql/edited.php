<?php
	$conn=mysqli_connect("localhost","root","","phpmysql");
?>
<a href="userpersonal.php">New Contact</a>
<table align="center" cellpadding="10">
	<caption><h2>User List</h2></caption>
		<tr bgcolor="pink">
			<th>ID</th>
			<th>FULL NAME</th>
			<th>LAST NAME</th>
			<th>MOBILE NO</th>
			<th>Email</th>
			<th>GENDER</th>
			<th>MARITAL STATUS</th>
			<th>FULL ADDRESS</th>
			<th>PINCODE</th>
			<th>STATE</th>
			<th>DISTRICT</th>
		</tr>
		<?php
			$sql="select * from personal";
			$res = mysqli_query($conn,$sql);//to execute the query 
			
			//to convert from object to array where $res is an object
			while($row =mysqli_fetch_object($res))
			
			{
			echo "<tr>";
			echo "<td> $row->id </td>";
			echo "<td> $row->name </td>";
			echo "<td> $row->mobile </td>";
			echo "<td> $row->message </td>";
			echo "</tr>";
			}
		?>
</table>
<p align="center">
	$row=mysqli_fetch_object($res);
	<br>
	mysqli_fetch_object() this function convert from multidimension
	array to 1 dimensional array
	<br>
	it return the data in object array format.so we have to use as
	$row->colname
	<br>
	$row->message
	
</p>



