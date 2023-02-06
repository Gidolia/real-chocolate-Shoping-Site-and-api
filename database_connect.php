<?php
//error_reporting(E_ERROR | E_PARSE);
$host="localhost";
$username="real_chocolate";
$pass="Real@1234";
$db_name="realchocolate";

/////////////////connection
$con=new MySQLi($host, $username, $pass, $db_name);
//$data=mysqli_query($con);
if($con->connect_error){
	die("connection failed: " . $con->connect_error);

}


 date_default_timezone_set('Asia/Calcutta');

$time=date("H:i:s");
$date=date("Y-m-d");

function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
$ipad=get_client_ip();

$url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

$site_open_info="INSERT INTO `site_open_info` (`soi_id`, `url`, `date`, `time`, `ip_addreass`) VALUES (NULL, '$url', '$date', '$time', '$ipad');";


$con->query($site_open_info);


session_start();
if(isset($_SESSION['mobile']))
{   
    $mob=$_SESSION['mobile'];   
    $password=$_SESSION['password'];
    $log="SELECT * FROM `costumer` WHERE `mobile`='$mob' AND `password`='$password'";
    $sd=$con->query($log);
    $d_detail=$sd->fetch_assoc();
   // echo $d_detail[name];
   // echo "1";
}

?>