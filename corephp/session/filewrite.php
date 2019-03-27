<?php
	include("header.php");

?>
<h3 align="center">Write into File </h3>
<center>
<form action="datawrite.php" method="POST">
	<p>
		<b> Enter the Text Below </b> <br>
		
		<textarea cols="40" rows="10" name="userdata"></textarea>
		</p>
		
		<p>
		<button type="submit"> Write  Now </button>
		<button type="submit"> Clear  Now </button>
		</p>
</form>
</center>

<?php
include("footer.php");
?>