<HTML>
			        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
	.txt-color{
		color:white;
		text-decoration:none;
	}
	.txt-color:hover
	{
		color:white;
	}
</style>
	<BODY>
		<div class="container d-flex justify-content-canter">
		<form >
			
		<table  class="table table-hover">
			
			<tr><td>id    </td>
			<td>name</td>
			<td>email</td>
			<td>Update</td>
			<td>Delete</td>
			</tr>
	<?php
			
				include('connection.php');		
				$select="select * from user_master";
				 $result=mysqli_query($con,$select);
				
				 while($row=mysqli_fetch_array($result))
				 {
					$id=$row['id'];
					$name =  $row['name'];
					$email =  $row['email'];

					echo "<tr>";
					echo "<td >".$id."</td>";
					echo "<td>".$name."</td>";
					echo "<td>".$email."</td>";
					echo "<td><button class='btn btn-primary  '><a class='txt-color' href='update.php?id=$id' >Update</a></button></td>";
					echo "<td><button class='btn btn-danger '><a class='txt-color' href='delete.php?id=$id' >Delete</a></button></td>";
					echo "</tr>";
				 }
				 
				 
			
			?>
			</table>
			</form>
				</div>
			
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
	</BODY>
	</HTML>
	