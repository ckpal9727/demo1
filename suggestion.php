<html>
	<head>
		<script src="jquery_3.js"></script>
		<script type="text/javascript">
			// alert("hii");
			$(document).ready(function()
			{
				$("#h").keyup(function()
				{
					var q=document.getElementById('h').value;
				
				$.ajax({
					url:'searchresult.php',
					method:'POST',
					data:{req:q},
					success:function(response)
					{
						$("#list").html(response)
					}
				});
			});
			});
		</script>		
	</head>
	<body>
		<h1>suggestion</h1>
		name:<input type="text" name="" id="h">
		<ul>
			<li id="list"></li>
		</ul>
		
	</body>
</html>