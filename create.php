<?php
if(isset($_POST['s']))
{
	$filename=$_POST['filename'];
	$con=$_POST['cont'];
	$file=$filename.".txt";
	$create_file=fopen("./tmp/".$file,"w");
	fwrite($create_file,$con);
}

?>
<html>
<form method="post">
name:
<input type="text" name="filename" ><br>
content:
<textarea name="cont" row="3" cols="10"></textarea>

<input type="submit" name="s" value="create">
</form>
</html>