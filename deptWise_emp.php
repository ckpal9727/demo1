<?php
include('connection.php');
$select="SELECT e_id,e_name,e.d_id,e_job from emp_master as e join dept_master as d on e.d_id=d.d_id WHERE d.d_id=2 ; ";
$result=mysqli_query($con,$select)

?>
<html>
    <head>
</head>
<body>
    <form method="">
        <select name="op" onchange="this.form.submit()">
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
        </select>
        <table border="1">
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
</form>
</body>
</html>