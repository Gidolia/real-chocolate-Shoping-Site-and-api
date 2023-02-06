<?php
include "database_connect.php";

if(isset($_SESSION['mobile']))
{
    if(isset($_POST['submit_check_out']))
    {
        //Step 1
        // $frps="SELECT MAX(ob_id) AS max  FROM `order_bill`";
        // $lpo=$con->query($frps);
        // $yout=$lpo->fetch_assoc();

        //$ob_id=$yout['max']+1;
        $mob=$_SESSION['mobile'];
        $mno=$_POST['mobile_no'];
        $add=$_POST['addreass'];
        $ct=$_POST['city'];
        $st=$_POST['state'];
        $pc=$_POST['pincode'];
        $rfs=$_POST['rfs'];
        $nm=$_POST['name'];
        $mail=$_POST['mail'];
        
        
         // Step 2     
        $dh="INSERT INTO `order_bill` ( `mobile`, `calling_no`, `name`,`email`,`addreass`, `city`, `state`, `pin_code`, `price`, `status`,`date`,`time`) VALUES ('$mob', '$mno', '$nm','$mail','$add', '$ct', '$st', '$pc', '$rfs', 'order confirmed','$date','$time');"; 
        //echo $dh;
        //die;

        //Step 3
        $odetail=$con->query("SELECT * FROM `order_bill` ORDER BY `date` DESC");
        $od=$odetail->fetch_assoc();

         //Step 4   
        $dh .="DELETE FROM `product_cart` WHERE `c_mob` = '$mob';";
        
        //Step 5
        $pcr="SELECT * FROM `product_cart` WHERE `c_mob`='$mob'";
        $poi=$con->query($pcr);

        $dco=$poi->fetch_assoc();

            
         while($dco=$poi->fetch_assoc())
         {
            
            $a=$dco['a_d_dp_id']*$dco['qty'];
            $rfs=$rfs+$a;
            $pid=$dco['p_id'];
            $mrp=$dco['mrp'];
            $dp=$dco['dp'];
            $adpd=$dco['a_d_dp_id'];
            $dco=$dco['qty'];
            //$qtyprice=$od['price'];
            $ob_id=$od['ob_id'];

            
            $dh.="INSERT INTO `order_bill_detail` ( `ob_id`, `p_id`, `mrp`, `dp`, `price`,`qty_price`, `qty`,`mobile`) VALUES ('$ob_id', '$pid', '$mrp', '$dp', '$adpd', '0','$dco','$_SESSION[mobile]');";
            
            

            
            
        // $con->query($dh);
         }
                // print_r($dh);
                // die;
        
        if($con->multi_query($dh)==TRUE)
        {
            echo "<script>alert('Success! Orders Placed Successfully');location.href='index.php';</script>";
        }
        else{
            echo "<script>alert('Failed ! Plz Try Again');location.href='index.php';</script>";
        }
        
    }
    
}else{
    echo "<script>alert('Sorry Something Went Wrong Plz Try Again');location.href='login.php';</script>";
}