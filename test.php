<html>
<form method="post">
<table border="1">
<?php
	include('demo.php');
	$u=new user();
	$con=$u->connection();
	$view=$u->data_view($con);
	while($row =mysqli_fetch_array($view))
	{
?>
	<tr>
		<td><?php echo $row['u_id'] ?></td>
		<td><?php echo $row['u_name'] ?></td>
		<td><a href="update.php?id=<?php echo $row['u_id'] ?>">Update</a></td>
		<td><a href="delete.php?id=<?php echo $row['u_id'] ?>">Delete</a></td>
	</tr>
	<?php 
	}
	?>
<table>

</form>
<br>
<br>
<?php
include('demo.php');
$u=new user();
$con=$u->connection();
if(isset($_POST['s']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$u->data_insert($con,$username,$password);
}
?>
<form method="post">
name:<input type="text" name="username"><br>
password:<input type="password" name="password"><br>
	<input type="submit" value="submit" name="s">
</form>
</html>