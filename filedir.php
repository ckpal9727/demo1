
<script>
<script type="text/javascript">
function sele()
{
	var ele=document.getElementsByName("check[]");
    var n=ele.length;
    //console.log(n);
    
    var i=0
    for(i=0;i<n;i++)
    {
        ele[i].checked=true;
    }
}
</script>
<?php
if(isset($_POST['del']))
{
	$chk=$_POST['check'];
	$i=0;
	while($i<sizeof($chk))
	{
		$filename="tmp"."\\".$chk[$i];
		unlink($filename);
		$i++;
	}
}
if(isset($_POST['cop']))
{
	$chk=$_POST['check'];
	//print_r($chk);
	$i=0;
	while($i<sizeof($chk))
	{
		//$filename="tmp"."\\".$chk[$i];
		$sr="tmp"."\\".$chk[$i];
		$ds="tmp1"."\\".$chk[$i];
		copy($sr,$ds);
		$i++;
	}
}
if(isset($_POST['mov']))
{
	$chk=$_POST['check'];
	//print_r($chk);
	$i=0;
	while($i<sizeof($chk))
	{
		//$filename="tmp"."\\".$chk[$i];
		$sr="tmp"."\\".$chk[$i];
		$ds="tmp1"."\\".$chk[$i];
		copy($sr,$ds);
		unlink($sr);
		$i++;
	}
}

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
	<input type="checkbox" name="check[]" value="<?php echo $f?>"><?php echo $f."<br>";?>
	<?php 
	}
	?>

<input type="button" name="sel" value="select" onclick="sele()">
<input type="submit" name="cop" value="cop">
<input type="submit" name="del" value="delete">
<input type="submit" name="mov" value="move">
</form>
<form method="post" action="create.php">
<input type="submit" name="create" value="create">
</form>
