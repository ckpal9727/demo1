<?php
include('demo.php');
$u=new user();
$con=$u->connection();
$id=$_GET['id'];
if(isset($_POST['s'])){
$username=$_POST['username'];
$u->data_update($con,$id,$username);
}


?>
<html>
<form method="post">
	name:<input type="text" name="username"><br>
	<input type="submit" value="submit" name="s">
</form>
</html>
