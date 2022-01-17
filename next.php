
<?php
	session_start();
	 //session_destroy();
	$con=mysqli_connect('localhost','root','','mca-1');
	$query="select * from user_master";
	$result=mysqli_query($con,$query);
	$username=$_POST['username'];
	$password=$_POST['password'];
	while($row=mysqli_fetch_array($result))
	{
	
		//echo $row['u_name'];
		//echo "<br>";
		//echo $row['u_password'];
		//echo "<br>";
		
		if(($row['u_name'] ==$username) && ($row['u_password'] ==$password))
		{
		   
			$_SESSION['uname']=$username;
			$_SESSION['log_time']=time();
			//header("Location:valid.php");
		}
	}
	if(isset($_SESSION['uname']))
	{
		//echo "welcome " .$_SESSION['uname'];
		header("Location:valid.php");
	}
	else
	{
		echo "not user";
	}
 ?>
