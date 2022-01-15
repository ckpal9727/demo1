<?php

include('connection.php');
if(isset($_POST['s']))
{
	$img=$_FILES['img']['tmp_name'];
	$data=addslashes(file_get_contents($img));
	
	$date=date('Y-m-d');
	$insert="insert into images (image,created) values ('$data','$date');";
	if(mysqli_query($con,$insert))
	{
	
	
	}
	else
	{
		echo "not okk";
	}
}
?>
<html>
<body>
	<form method="post" enctype="multipart/form-data">
		<h1>Please select image to upload</h1>
	<input type="file" name="img">
	<input type="submit" name="s" value="upload">
	
	</form>
</body>
</html>
	
	