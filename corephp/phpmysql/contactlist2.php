<?php
	$conn=mysqli_connect("localhost","root","","phpmysql");
?>
<a href="contact.html">New Contact</a>
<table align="center" cellpadding="10">
	<caption><h2>User List</h2></caption>
		<tr bgcolor="pink">
			<th>ID</th>
			<th>FULL NAME</th>
			<th>MOBILE NO</th>
			<th>MESSAGE</th>
		</tr>
		<?php
			$sql="select * from contact";
			$res = mysqli_query($conn,$sql);//to execute the query 
			
			//to convert from object to array where $res is an object
			while($row =mysqli_fetch_assoc($res))
			
			{
			echo "<tr>";
			echo "<td>" .$row['id'] ."</td>";
			echo "<td>". $row['name']." </td>";
			echo "<td>". $row['mobile']." </td>";
			echo "<td>". $row['message']."</td>";
			echo "</tr>";
			}
		?>
</table>
<p align="center">
	$row=mysqli_fetch_assoc($res);
	<br>
	mysqli_fetch_assoc() this function convert from multidimension
	array to 1 dimensional array
	<br>
	it return the data in associative array format.so we have to use as
	$row['colname']
	<br>
	$row['message']
	
</p>



