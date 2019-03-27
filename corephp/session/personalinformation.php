<html>
	<body>
	<?php
			session_start();
			if (isset($_SESSION['msg']))//to check available or not
			{
				echo $_SESSION['msg'];//to print
				unset ($_SESSION['msg']);//to delete from session
			}
		?>
		<form action="savepersonal.php" method="POST">
			<table align="center" cellpadding="10">
				<caption><h3>Personal Information</h3></caption>
				<tr>
					<th bgcolor="orange">Full Name</th>
					<td bgcolor="pink"><input type="text" name="fname"></td>
				</tr>
				<tr>
					<th bgcolor="orange">Last Name</th>
					<td bgcolor="pink"><input type="text" name="lname"></td>
				</tr>
				<tr>
					<th bgcolor="orange">Mobile No</th>
					<td bgcolor="pink"><input type="text" name="mobile"></td>
				</tr>
				<tr>
					<th bgcolor="orange">E-Mail</th>
					<td bgcolor="pink"><input type="text" name="email"></td>
				</tr>
				<tr>
					<th bgcolor="orange">Password</th>
					<td bgcolor="pink"><input type="password" name="pass"></td>
				</tr>
				<tr>
					<th bgcolor="orange">Confirm Password</th>
					<td bgcolor="pink"><input type="password" name="conpass"></td>
				</tr>
				<tr>
					<th bgcolor="orange">Date of Birth</th>
						<td bgcolor="pink">
							<input type="datetime-local" name="dob">
						</td>
				</tr>
				<tr>
					<th bgcolor="orange">Full Address</th>
					<td bgcolor="pink"><textarea type="text" name="address"></textarea></td>
				</tr>
				<tr>
					<th bgcolor="orange">Pincode</th>
					<td bgcolor="pink"><input type="text" name="pin"></td>
				</tr>
				<tr>
					<th bgcolor="orange">State</th>
						<td bgcolor="pink">
							<select name="state">
								<option value="">Choose state</option>
								<option value="telangana">Telangana</option>
								<option value="karnataka">Karnataka</option>
								<option value="tamilnadu">Tamilnadu</option>
							</select>
						</td>
				</tr>
				<tr>
					<th bgcolor="orange">District</th>
						<td bgcolor="pink">
							<select name="district">
								<option value="">Choose district</option>
								<option value="hyderabad">Hyderabad</option>
								<option value="bangalore">Bangalore</option>
								<option value="chennai">chennai</option>
							</select>
						</td>
				</tr>
				<tr>
					<th></th>
					<td><input type="checkbox">Agree on Terms and Conditions</td>
				</tr>
				<tr>
					<th colspan="2">
						<button type="submit">Register</button>
						<button type="reset">Clear</button>
						
					</th>
				</tr>
			</table>
		</form>
	</body>
</html>