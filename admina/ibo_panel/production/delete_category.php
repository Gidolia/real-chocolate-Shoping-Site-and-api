<?php 
	$id=$_GET['id'];
	include "../../../database_connect.php";
	$del="DELETE FROM `category` WHERE id='$id'";
    $d=$con->query($del);
    header('Location:./category.php');


?>