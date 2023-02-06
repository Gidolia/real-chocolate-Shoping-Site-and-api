<?php
include "../database_connect.php";

$de="SELECT * FROM `category`";
$dc=$con->query($de);
     
     while($fetch=$dc->fetch_assoc()){
         $data[]=$fetch;
     }
     echo (json_encode($data));
?>