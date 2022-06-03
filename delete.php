<?php
include('demo.php');
$u=new user();
$con=$u->connection();
$id=$_GET['id'];
$u->data_delete($con,$id);
?>