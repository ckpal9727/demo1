<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<?php
    function upper($in)
    {
        return strtoupper($in);
    }
    function lower($in)
    {
        return strtolower($in);
    }
    function right($n)
    {
        $str= substr($n,2);
        return $str;
     
    }
    function left($n)
    {

        $str= substr($n,3,strlen($n));
        return $str;
     
    }
    
?>
<?php 
    if(isset($_POST['s']))
    {
        $n=$_POST['in'];
       $op=$_POST['op'];
        switch($op)
        {
            case "upper":
                $ans=upper($n);
                break;
            case "lower":
                $ans=lower($n);
                break;
            case "right":
                $ans=right($n);
                break;
            case "left":
                    $ans=right($n);
                    break;
        }
       
    }
    else{
        $ans="";
    }
?>
<body><div class="container d-flex justify-content-center">
    <form method="post">
        <div class="container">
            <h1><b>Enert The string</b></h1>
          <p class="text-start   rounded"> <h3>Enter String </h3> </p> <input class="form-control rounded" type="text " name="in">
           <div></div><br>
            <b>Upper</b><input type="radio" name="op" id="" value="upper"><br>
           <b> Lower </b><input type="radio" name="op" id="" value="lower"><br>
           <b> right </b><input type="radio" name="op" id="" value="right"><br>
           <b> left</b><input type="radio" name="op" id="" value="left"><br><br>
</div>  
<div class="container d-flex justify-content-center ">
    <div>
            <input type="submit" name="s" class="btn btn-primary">
</div>
</div><br>
            <div class="container">
            <p class="text"><h3>Output:</h3></p> <input class="form-control" type="text" value="<?php echo $ans; ?>">
</div>
        </div>
    </form>
</div>
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
</body>
</html>