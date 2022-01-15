<?php
include('connection.php');
if(isset($_POST['s']))
{
    $name=$_POST['name'];
    $address=$_POST['address'];
    $contact=$_POST['contact'];
    $city=$_POST['city'];
    $country=$_POST['country'];

    $insert="insert into customer_master (c_name,c_address,c_contact,c_city,c_country) values ('$name','$address','$contact','$city','$country');";
    mysqli_query($con,$insert);
  
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <div>
        <div><h1>Customer Entry form</h1></div>
        <div>
            <form method="post">
           <table>
               <tr>
                   <td>customer name:</td>
                   <td><input type="text" name="name"></td>
               </tr>
               <tr>
                   <td>Address:</td>
                   <td><textarea name="address"></textarea></td>
               </tr>
               <tr>
                   <td>contact:</td>
                   <td><input type="text" name="contact"></td>
               </tr>
               <tr>
                   <td>city</td>
                   <td><input type="text" name="city"></td>
               </tr>
                <tr>
                   <td>country</td>
                   <td><input type="text" name="country"></td>
               </tr>
               <tr><td><input type="submit" value="submit" name="s"></td>
               <td><input type="button" value="reset" name="r"></td>
            </tr>
               
           </table>
</form>
        </div>
    </div>
    </center>
</body>
</html>