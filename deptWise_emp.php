<?php
include('connection.php');
$select="SELECT e_id,e_name,e.d_id,e_job from emp_master as e join dept_master as d on e.d_id=d.d_id WHERE d.d_id=2 ; ";
$result=mysqli_query($con,$select)

?>
<html>
    <head>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <center>
        <h1><b>Department wise Employee details</b></h1>
</center>
<br>
<br>
    <form method="">
        <div class="container ">
            <div class="d-flex  justify-content-center"><div>
        <select class="btn btn-light" name="op" onchange="this.form.submit()">
        <option>select</option>
        <?php
        $select="select * from dept_master;";
        $result=mysqli_query($con,$select);
       while($row=mysqli_fetch_array($result))
       {
           $id=$row['d_id'];
           $dept_name=$row['d_name'];
          

        ?>
        <option value="<?php echo $id?>"><?php echo $dept_name?></option>

        <?php
       }
        ?>
        </select></div></div><br>
        <br>
        <table class="table table-hover">
            <tr>
                <th>department id</th>
                <th>employee id</th>
                <th>employee name</th>
                <th>employee job</th>
            </tr>
           
<?php 
if(isset($_GET['op'])) {
    $id=$_GET['op'];
    $select="SELECT e_id,e_name,e.d_id,e_job from emp_master as e join dept_master as d on e.d_id=d.d_id WHERE d.d_id= $id; ";
    $result=mysqli_query($con,$select);
     while($row=mysqli_fetch_array($result))
       {
            $d_id=$row['d_id'];
            $e_name=$row['e_name'];
            $e_id=$row['e_id'];
            $e_job=$row['e_job'];
?>
<tr>
<td><?php echo $d_id?></td>
<td><?php echo $e_id?></td>
<td><?php echo $e_name?></td>
<td><?php echo $e_job?></td>
       </tr>
<?php
       }
    }

?>

            
    </table>
</div>
</form>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
</body>
</html>
