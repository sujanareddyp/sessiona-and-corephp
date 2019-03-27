<?php
include("dbconfig.php");

$about = $_POST['about'];
$photoname = time().$_FILES['photo']['name'];
$photosize = $_FILES['photo']['size'];
$phototype = $_FILES['photo']['type'];
$tmploc = $_FILES['photo']['tmp_name'];

echo $tmploc;

//move_upload_file(source, destination);
move_uploaded_file($tmploc, "userphoto/$photoname");

$sql="insert into myphoto (about, photoname)
values('$about', '$photoname')";

$res= mysqli_query($conn, $sql);
if( $res == true)
{
	header("Location:imagelist.php");
	
}else
{
	header("Location:newimage.php");
}
?>