<?php 
include('db.php');

$task=$_POST['task'];
$time=$_POST['time'];

if (isset($_POST['submit'])) {
	$sql="INSERT INTO todatbl(task,time) VALUES ('$task','$time')";
	$result=$con->query($sql);
	if ($result == TRUE) {
		header('location:index.php');
	}
	else{
		echo "error";
	}
}
if (isset($_POST['edit'])) {
	$id=$_POST['id'];
	$sql=" UPDATE todatbl SET task='$task',time='$time' WHERE id ='$id'";
	$result=$con->query($sql);
	if ($result == TRUE) {
		header('location:index.php');
	}
	else{
		echo "error";
	}
}
?>