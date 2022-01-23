            <option value="">select</option>
<?php
    $con=mysqli_connect("localhost","root","","mca-1");
   
    $id=$_POST['id'];  
    echo $id;        
    $query="select * from state_master where c_id='$id'";
    $result=mysqli_query($con,$query);
  
    while($row=mysqli_fetch_array($result))
    {
        $sid=$row['s_id'];
        $sname=$row['s_name'];
   
?>
<option value="<?php echo $sid; ?>"><?php echo $sname; ?> </option>
<?php
    }
?>

