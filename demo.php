<?php
class user1
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
		$query="insert into user_master (u_name,u_password) values('$username','$password')";
				if(mysqli_query($con,$query))
		{
			echo "okk";
		}
		else
		{
			echo "not";
		}
		
		
	}
	 public function data_search($con,$username)
    {
        $f=0;
        	$query="select * from user_master where u_name='$username'";
            $result=(mysqli_query($con,$query));
            if($result<1)
            {
                $f=1;
                echo "not found";
            }
            else
            {
               while($row=mysqli_fetch_array($result))
               {
                   echo "the name is find at ".$row['u_id']."<br>";
               }
            }
           

    }
	
}
?>
