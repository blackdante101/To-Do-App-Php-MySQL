<?php 
include('db.php');
$id=$_GET['id'];
$sql="DELETE FROM todatbl WHERE id='$id'";
?>
