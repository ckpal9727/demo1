<html>
<body>
<form action="page2.php" method="post">
username:<input type="text" name="username" 
value="<?php if(isset($_COOKIE['uname'])){ echo $_COOKIE['uname'];}?>"><br>
password:<input type="password" name="password"><br>
remember:<input type="checkbox" name="remember"><br>

<input type="submit">
</form>
</body>
</html>