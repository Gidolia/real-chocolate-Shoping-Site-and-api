<?php

include('database_connect.php');

if(isset($_POST['submit_pro']))
{
    
    
    
    $pid=$_POST['p_id'];
    $mob=$_POST['mobile'];   
    ///////////////////////////////fetching Product Detail
    $re="SELECT * FROM `product` WHERE `p_id`='$pid' ";
    $dcr=$con->query($re);
    $pro_fet=$dcr->fetch_assoc();   
    ////////////////////////////fetching shoping cart   

    $ca_sel="SELECT * FROM `product_cart` WHERE `p_id`='$pid' AND `c_mob`='$mob'";
    $ca_que=$con->query($ca_sel);
    $rows=$ca_que->num_rows;
    
    
    
    if($rows >0){
        
        $ca_fet=$ca_que->fetch_assoc();  
      

        $new_qty=$ca_fet['qty']+$_POST['qty'];
        $fv="UPDATE `product_cart` SET `qty` = '$new_qty' , `c_mob` = '$mob' WHERE `product_cart`.`pc_id` = '$ca_fet[pc_id]'";
        
        if($con->query($fv)==TRUE)
        {
            echo "<script>location.href='shoping-cart.php';</script>";
        }else{
            echo "<script>alert('Failed Plz Try Again Some Error Occours');location.href='shoping-cart.php';</script>";
        }
    }else{

        $total_amount=$_POST['qty']*$pro_fet['dp'];
        // echo $total_amount."<br>";        
        $pid=$_POST['p_id'];
        // echo $pid."<br>";        
        $pro=$pro_fet['mrp'];
        // echo $pro."<br>";
        $dp=$pro_fet['dp'];
        
        $addp=$pro_fet['dp'];
        // echo $addp."<br>";
        $qty=$_POST['qty'];
        // echo $qty."<br>";
        $mobile=$_POST['mobile'];

        $reo="INSERT INTO `product_cart` (`pc_id`, `c_mob`, `p_id`, `date`, `time`, `mrp`, `dp`, `a_d_dp_id`, `spin_discount`, `qty`, `total_price`) VALUES ('NULL', '$mobile', '$pid', '$date', '$time', '$pro', '$dp', '$addp', 'n', '$qty', '$total_amount')";
        // print_r($reo);
        // die;
      
        if($con->query($reo)==TRUE)
        {
            echo "<script>location.href='shoping-cart.php';</script>";
            
        }else{
            echo "<script>alert('Failed Plz Try Again Some Error Occours');location.href='shoping-cart.php';</script>";
        }

    }
    
}


?>