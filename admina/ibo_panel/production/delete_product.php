<?php 
	$id=$_GET['id'];
	include "../../../database_connect.php";
	$del="DELETE FROM `product` WHERE p_id='$id'";
    $d=$con->query($del);
    header('Location:./product.php');


?>