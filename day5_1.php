<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
<?php

     function total($a,$b,$c)
     {
        $tire=200;
        $oil=500;
        $spark=1000;
        $as=($tire*$a)+($oil*$b)+($spark*$c);
        return $as;
     }
?>
<?php
    if(isset($_POST['s']))
    {
        
        $tir=$_POST['tire'];
        $oi=$_POST['oil'];
        $spar=$_POST['spark'];
        $ans=total($tir,$oi,$spar);
    }
    else{
        $ans="";
        $tir="";
        $oi="";
        $spar="";
    }
?>
 
  
  <body>
    <div class="container">
    <form method="post">
    
      <table class="table">
        <thead  >
          <tr>
          <td  scope="col">Item</td>
          <td  scope="col">Quality</td>
          </tr>
        </thead>
        <tbody>
         <tr>
          <td  scope="col">Tires</td>
          <td  scope="col"><input type="text" name="tire" class="form-control"></td>
        </tr> <tr>
          <td  scope="col">Oil</td>
          <td  scope="col"><input type="text" name="oil" class="form-control"></td>
        </tr> <tr>
          <td  scope="col">Spark Plug</td>
          <td  scope="col""><input type="text" name="spark" class="form-control"></td>
          <tr>
            <td scope="col">Totla</td>
              <td scope="col"><input type="text" class="form-control" value="<?php echo $ans ?>"></td>
          </tr>
        </tr>
          <td><input class="btn btn-primary" name="s" type="submit" value="click"></td>
        
       
</tbody>
      </table>
  </form>
  </div>
    

  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>