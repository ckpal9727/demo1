<?php
class user
{
	public function connection()
	{
		$con=mysqli_connect('localhost','root','','mca-1');
		return $con;
	}
	public function data_view($con)
	{
		$query="select * from user_master";
		$result=mysqli_query($con,$query);
		return $result;		
	}
	public function data_update($con,$id,$username)
	{
		$query="update user_master set u_name='$username' where u_id=$id";
		if(mysqli_query($con,$query))
		{
			header("Location:test.php");
		}
		else
		{
			echo "not";
		}
	}
	public function data_delete($con,$id)
	{
		$query="delete from user_master where u_id=$id";
		if(mysqli_query($con,$query))
		{
			header("Location:test.php");
		}
		else
		{
			echo "not";
		}
	}
	public function data_insert($con,$username,$password)
	{
		$query="insert into user_master (u_name,u_password) values('ck','pal')";
		if(mysqli_query($con,$query))	
		{
			echo "data inserted";
		}
		else
		{
			echo "not";
		}
	}
	
}
?>