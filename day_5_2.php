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

  if(isset($_POST['op']))
  {
    function odd($n)
    {
        if($n%2==0)
        {
            return  $ans="the number is even";
        }
        else{
            return $ans="the number is odd";
        }
    }   
    function posi($n)
   {
       if($n>0)
       {
           echo $ans="the number is positive";
       }
       elseif($n==0)
       {
           echo $ans="number is 0";
       }
       else{
           echo $ans="the number is negative";
       }
   } 
   function prim($n)
   {
       for($i=2;$i<$n;$i++)
       {
           if($n%$i==0)
           {
               $flag=1;
           }
           else{
               $flag=0;
           }
       }
       if ($flag==1)
       {
           echo "The number is prime";
       }
       else{
           echo "the numner is not prime";
       }
   }
   function pali($n)
   {
       $rev=strrev($n);
       if($rev==$n)
       {
           echo "the number is palindromw";
       }
       else
       {
           echo "the number is not palidrome";
       }
   }
}
else{
    echo $ans="";
}
 ?>
  <?php 
  $ans="";
  if(isset($_POST['s']))
  {
      $no=$_POST['n1'];
      $a=$_POST['op'];

    
        switch($a)
        {
            case "odd":
                $ans=odd($no);
                break;
            case "positive":
              posi($no);
                break;
            case "prime";
                prim($no);
                break;
            case "pali":
                pali($no);
                break;   
        }  
  }
  else {
      $no="";
  }
 
 
    
  ?>
  <body>
      <form action="" method="post">
    
      <div class="container  justify-conten">
        <h1 class="text-center">Enter number</h1>
        <div><input type="text" class="form-control" name="n1" value="<?php echo $no ?>"></div>
      <div>Odd number<input type="radio" name="op" value="odd"></div>
      <div>Positive number<input type="radio" name="op" value="positive"></div>
      <div>Prime or Composite<input type="radio" name="op" value="prime"></div>
      <div>Palindrome or not<input type="radio" name="op" value="pali"></div>
      <div><input type="submit" name="s" value="click" class=" btn btn-primary form-control"></div>
      <div ><input type="text" class="form-control" value="<?php echo $ans; ?>"></div>
    </div></form>

  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

