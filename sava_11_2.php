<html>
<head>
<script>
function show_data()
{	
	xmlhttp=new XMLHttpRequest();
	xmlhttp.onreadystatechange=function()
	{
		if(xmlhttp.readyState==4 && xmlhttp.status==200 )
		{
			document.getElementById("show").innerHTML=this.responseText;
		}
	}
	xmlhttp.open("GET","show.php",true);
	xmlhttp.send();
}
function add_data()
{
	
	xmlhttp=new XMLHttpRequest();
	xmlhttp.onreadystatechange=function()
	{
		if(xmlhttp.readyState==4 && xmlhttp.status==200 )
		{
			var uname=document.getElementById("uname").value;
			var pass=document.getElementById("pass").value;
			
		}
	}
	xmlhttp.open("GET","",true);
	xmlhttp.send();
	
}
</script>
</head>
<body onload="show_data()">
<form>
<table>
<tr>
<td>
username:<input type="text" name="uname" id="uname"> <br>
Password:<input type="text" name="pass" id="pass"> <br>
<input type="button" value="add" onclick="add_data()">
</td>
<td id="show"></td>
</tr>
</table>
</form>
</body>
</html>