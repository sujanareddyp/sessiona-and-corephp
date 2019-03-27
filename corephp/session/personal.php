<html>
	<body>
	<center>
		<?php
			session_start();
			if (isset($_SESSION['msg']))//to check available or not
			{
				echo $_SESSION['msg'];//to print
				unset ($_SESSION['msg']);//to delete from session
			}
		?>
	</center>
		<form action="userpersonal.php" method="POST">
			<table align="center" cellpadding="10">
				<caption><h3>CANDIDATE LOGIN</h3>
				<hr color="skyblue" size="1">
				</caption>
				
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
						<button type="submit">Login</button>
						<button type="reset">Clear</button>
						<hr color="red" size="1">
						<a href="forgot.php">Forgot Password</a>
					</th>
				</tr>
			</table>
		</form>
	</body>
</html>