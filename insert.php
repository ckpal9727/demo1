
	<html><head>
		        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
	<body>
		<div class="container d-flex justify-conent-center">
			<div><h1><b> PHP CRUD OPERATION</b></h1></div>
		</div><br>
		<div class="container d-flex justify-conent-center">
			
		<form method="post">
			<div class="container d-flex">
			<p><h2>name:</h2></p><input class="form-control ms-3" type="text" name="n">
			<p><h2 class="ms-3">email:</h3></p><input class="form-control ms-3" type="text" name="e">
			<input type="submit" class="btn btn-primary ms-3 " name="s">
			</div>
			
</form>
</div>
		

		<?php
	
	include('connection.php');
	if(isset($_POST['s']))
	{
		$n=$_POST['n'];
		$e=$_POST['e'];
		$insert="insert into user_master (name,email) values('$n','$e'); ";
		mysqli_query($con,$insert);
		
	}
	include('select.php');
	?>
	


	 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
	</body>
	</html>
