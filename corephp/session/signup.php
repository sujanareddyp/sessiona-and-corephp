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
		<form action="saveuser.php" method="POST">
			<table align="center" cellpadding="10">
				<caption><h3>Sign Up</h3></caption>
				<tr>
					<th bgcolor="orange">Full Name</th>
					<td bgcolor="pink"><input type="text" name="fname"></td>
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
					<th colspan="2">
						<button type="submit">Register</button>
						<button type="reset">Clear</button>
						<hr color="red" size="1">
						<a href="index.php"> I have Account</a>
					</th>
				</tr>
			</table>
		</form>
	</body>
</html>