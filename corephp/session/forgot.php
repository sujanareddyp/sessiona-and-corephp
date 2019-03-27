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
		<form action="personal.php" method="POST">
			<table align="center" cellpadding="10">
				<caption><h3>Forget Password</h3>
				<hr color="skyblue" size="1">
				</caption>
				
				<tr>
					<th bgcolor="orange">E-Mail</th>
					<td bgcolor="pink"><input type="text" name="email"></td>
				</tr>
				<tr>
					<th bgcolor="orange">Re-enter Password</th>
					<td bgcolor="pink"><input type="password" name="pass"></td>
				</tr>
				<tr>
					<th bgcolor="orange">confirm Password</th>
					<td bgcolor="pink"><input type="password" name="pass"></td>
				</tr>
				<tr>
					<th colspan="2">
						<button type="submit">Save</button>
						<button type="reset">Clear</button>
					</th>
				</tr>
			</table>
		</form>
	</body>
</html>