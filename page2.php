<?php 


if(isset($_POST['remember']))
{
$username=$_POST['username'];
$password=$_POST['password'];
	setcookie('uname',$username,time()+1800);
	echo $_COOKIE['uname'];
}
else
{
	echo "cookie noiot set";
}
?>
