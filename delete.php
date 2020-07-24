<?php 
include('db.php');
$id=$_GET['id'];
$sql="DELETE FROM todatbl WHERE id='$id'";
$result=$con->query($sql);
header('location:index.php');
?>