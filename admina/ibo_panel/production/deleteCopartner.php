<?php 
	$id=$_GET['id'];
	include "../../../database_connect.php";
	$del="DELETE FROM `copartner` WHERE `p_id`='$id'";
    $d=$con->query($del);
    header('Location:./copartnersList.php');


?>