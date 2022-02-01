<html>
	<head>
		<script src="jquery.js"></script>
		<script type="text/javascript">
			
			$(document).ready(function()
			{ 
				$("#h").keyup(function()
				{
					var q=document.getElementById('h').value;
				
				$.ajax({
					url:'12_2_searchRislt.php',
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