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
			$sql="select name,id,message,mobile from contact";
			$res = mysqli_query($conn,$sql);//to execute the query 
			
			//to convert from object to array where $res is an object
			while($row =mysqli_fetch_row($res))
			
			{
			echo "<tr>";
			echo "<td>" .$row[1] ."</td>";
			echo "<td>". $row[0]." </td>";
			echo "<td>". $row[3]." </td>";
			echo "<td>". $row[2]."</td>";
			echo "</tr>";
			}
		?>
</table>
<p align="center">
	$row=mysqli_fetch_row($res);
	<br>
	mysqli_fetch_row() this function convert from multidimension
	array to 1 dimensional array
	<br>
	it return the data in numeric array format.so we have to use as
	$row[index position]
	<br>
	$row[2]
	
</p>



