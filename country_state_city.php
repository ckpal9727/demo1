<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery.js"></script>
    <script type="text/javascript">
        $(document).ready(function()
        {
           $("#Country").change(function()
           {
              
                var sel=$("#Country option:selected").val();
                  $.ajax({ 
                   url:'state.php',
                   method:'POST',
                   data:{id:sel},
                   success:function(response)
                   {
                        $("#states").html(response);
                   }
               });
           });
           $("#states").change(function()
           {
               //alert("hii");
               var stat=$("#states option:selected").val();
               console.log(stat);
                 $.ajax({
                   url:'city.php',
                   method:'POST',
                   data:{sid:stat},
                   success:function(response)
                   {
                       $("#
                       ").html(response);
                   }
               });
             
           });
        });
    </script>
    <title>Document</title>
</head>
<body>
    
    <select name="country" id="Country">
        <option value="">select</option> 
        
        <?php
        echo "hii";
            $con=mysqli_connect("localhost","root","","mca-1");
            
            $query="select * from country_master";
            $result=mysqli_query($con,$query);
           while($row=mysqli_fetch_array($result))
           {
               $id=$row['c_id'];
               $name=$row['c_name'];
        ?>
        <option value="<?php echo $id; ?>"><?php echo $name ;?></option>
        <?php
           }
        ?>
        </select>
       
       
           <select name="" id="states">
            <option value="">select</option>
        </select>
        <select id="cities">
             <option value="">select</option>
        </select>
        
    
</body>
</html>