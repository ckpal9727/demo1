<?php

	$dir="tmp";
	if(!file_exists($dir))
	{
	mkdir("tmp",0777);
	}
	$files=scandir("./tmp",1);//1 for assending
	foreach($files as $f)
	{
	?>
<form method="post">
	<input type="checkbox" name="check[]"><?php echo $f."<br>";?>
	<?php 
	
	}
	?>
</form>
<form method="post" action="create.php">
<input type="submit" name="create" value="create">
</form>
