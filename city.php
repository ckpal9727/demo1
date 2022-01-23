<option value="">select</option>
<?php
    $con=mysqli_connect("localhost","root","","mca-1");
   
    $sid=$_POST['sid'];  
           
    $query="select * from city_master where s_id='$sid'";
    $result=mysqli_query($con,$query);
  
    while($row=mysqli_fetch_array($result))
    {
        $cid=$row['ct_id'];
        $cname=$row['ct_name'];
   
?>
<option value="<?php echo $cid; ?>"><?php echo $cname; ?> </option>
<?php
    }
?>