<?php
	include("header.php");
?>

<form action="uploadphoto.php" method="POST" enctype="multipart/form-data">

<table align="center" cellpadding="10">
<caption><h3> upload new photo</h3></caption>
<tr>
	<th>choose photo</th>
	<td> <input type="file" name="photo"></td>
	</tr>
	<tr>
	<th>about photo</th>
	<td> <textarea name="about"></textarea></td>
	</tr>
	<tr>
	<th colspan="2">
	<button type="submit">upload</button>
	</th>
	</tr>
	</table>
</form>

<?php
	include("footer.php");
?>
