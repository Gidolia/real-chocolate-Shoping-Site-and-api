<?php
include "../database_connect.php";

$ro="SELECT `mobile`, `coin`  FROM `costumer`";

$dc=$con->query($ro);

     while($fetch=$dc->fetch_assoc()){
         $data[]=$fetch;
     }
     echo (json_encode($data));
?>