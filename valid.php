<?php
	function vaild()
	{
		session_start();
		//echo $_SESSION['uname'];
		//echo $_SESSION['log_time'];
		$duration=30;
		if(time()-$_SESSION['log_time']<$duration)
		{
				echo "welcome".$_SESSION['uname'];
		}
		else
		{
			 
			unset($_SESSION['uname']);
			echo "<a href='session.php'>login</a>";
		}
	}
	vaild();
?>