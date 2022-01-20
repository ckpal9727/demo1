<?php
            $con=mysqli_connect('localhost','root','','mca-1');
			$query="select * from user_master";
            $result=mysqli_query($con,$query);
            while($row=mysqli_fetch_array($result))
            {
                $id=$row['u_fname'];
                $name=$row['u_lname'];
                echo $id." ".$name."<br>";
            }
           
        ?>