<?php
$con=mysqli_connect('localhost','root','','mca-1');

$name=$_POST['req'];
$select="select * from user_master where u_name='$name'";
$result=mysqli_query($con,$select);
$no_row=mysqli_num_rows($result);
if($no_row>0)
{
	while ($row=mysqli_fetch_array($result)) {
		echo $row['u_name'];
	}
}
else
{
	echo "not found";
}
?>