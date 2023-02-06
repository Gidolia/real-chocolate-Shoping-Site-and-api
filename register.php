<?php 

include('database_connect.php');

?>

<!DOCTYPE html>

<html lang="zxx">



<head>

    <meta charset="UTF-8">

    <meta name="description" content="Ogani Template">

    <meta name="keywords" content="Ogani, unica, creative, html">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Login || Real Choclate</title>



    <!-- Google Font -->

    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">



    <!-- Css Styles -->

    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">

    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">

    <link rel="stylesheet" href="css/nice-select.css" type="text/css">

    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">

    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">

    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">

    <link rel="stylesheet" href="css/style.css" type="text/css">

</head>



<body>

    <!-- Page Preloder -->

    <div id="preloder">

        <div class="loader"></div>

    </div>



    <?php include "include/header.php";?>

    <!-- Header Section End -->



    <!-- Hero Section Begin -->

    <section class="hero hero-normal">

        <div class="container">

            <div class="row">

                <div class="col-lg-3">

                    <div class="hero__categories">

                        <div class="hero__categories__all" style="background-color: #7B3F00;">

                            <i class="fa fa-bars"></i>

                            <span>All Categories</span>

                        </div>

                        <ul>

                            <?php 

                            $df="SELECT * FROM `category`";

                            $co=$con->query($df);

                            while($cat=$co->fetch_assoc())

                            {

                                ?>

                                <li><a href="shop-grid.php?id=<?php echo $cat['c_id'];?>"><?php echo $cat['name'];?></a></li>

                                <?php

                            }

                            ?> 

                        </ul>

                    </div>

                </div>

                <div class="col-lg-9">

                    <div class="hero__search">

                        <div class="hero__search__form">

                            <form action="#">

                                <div class="hero__search__categories">

                                    All Categories

                                    <span class="arrow_carrot-down"></span>

                                </div>

                                <input type="text" placeholder="What do yo u need?">

                                <button type="submit" class="site-btn" style="background-color: #7B3F00;">SEARCH</button>

                            </form>

                        </div>

                        <div class="hero__search__phone">

                            <div class="hero__search__phone__icon" style="background-color: #7B3F00;color: white;">

                                <i class="fa fa-phone"></i>

                            </div>

                            <div class="hero__search__phone__text">

                                <h5>18001232348</h5>

                                <span>Support 24*7 </span>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- Hero Section End -->



    <!-- Breadcrumb Section Begin -->

    <!--<section class="breadcrumb-section set-bg" data-setbg="img/banner/banner-1.jpg" style="height: 600px;">-->

    <!--    <div class="container">-->

    <!--        <div class="row">-->

               

    <!--        </div>-->

    <!--    </div>-->

    <!--</section>-->

       <div class="col-lg-12 text-center" >

        <div class="breadcrumb__text" >

            <h2 style="color: black;">Register</h2>

            <img src="images/underline1.png" style="margin-top: -70px;">

            <div class="breadcrumb__option" style="margin-top: -70px;">

                 <a href="/" style="color: black;">Home / Register</a>

            </div>

        </div>

   </div>

    <!-- Breadcrumb Section End -->



    <!-- Checkout Section Begin -->

    <section class="checkout spad" style="margin-top: -50px;">

        <div class="container-fluid" >

            

            <div class="checkout__form" >

            

                <form method="post" >

                    <div class="row justify-content-center mt-3 " >

                        <div class="col-lg-6" style="padding-top: 10px;background-color:#EDC990;border-radius: 20px;">

                            <div class="row">

                                <div class="col-lg-6">

                                    <div class="checkout__input">

                                        <p><big>Name</big><span>*</span></p>

                                        <input type="text" name="uname" placeholder="Enter your name">

                                    </div>

                                </div>

                                <div class="col-lg-6">

                                    <div class="checkout__input">

                                        <p><big>Mobile</big><span>*</span></p>

                                        <input type="text" name="umob" placeholder="Enter Mobile Number">

                                    </div>

                                </div>

                            </div>

                            <div class="row">

                                <div class="col-lg-6">

                                    <div class="checkout__input">

                                        <p><big>Email</big><span>*</span></p>

                                        <input type="email" name="uemail" placeholder="Enter email id">

                                    </div>

                                </div>

                                <div class="col-lg-6">

                                    <div class="checkout__input">

                                        <p><big>Password</big><span>*</span></p>

                                        <input type="password" name="upass" placeholder="Enter Password">

                                    </div>

                                </div>

                            </div>

                              <div class="row">

                                <div class="col-lg-6">

                                    <div class="checkout__input">

                                        <p><big>State</big><span>*</span></p>

                                        <input type="text" name="ustate" placeholder="Enter your State">

                                    </div>

                                </div>

                                <div class="col-lg-6">

                                    <div class="checkout__input">

                                        <p><big>City</big><span>*</span></p>

                                        <input type="text" name="ucity" placeholder="Enter your city">

                                    </div>

                                </div>

                            </div>

                            <div class="row">

                                <div class="col-lg-6">

                                    <div class="checkout__input">

                                        <p><big>Date of Birth</big><span>*</span></p>

                                        <input type="date" name="udob" placeholder="Enter Date of Birth">

                                    </div>

                                </div>

                                <div class="col-lg-6">

                                    <div class="checkout__input">

                                        <p><big>Address</big><span>*</span></p>

                                        <input type="text" name="uadd" placeholder="Enter your Address">

                                    </div>

                                </div>

                                

                            </div>

                           <!--  <div class="checkout__input">

                                <p><big>Password</big><span>*</span></p>

                                <input type="password" name="password" placeholder="password">

                            </div> -->

                            <div class="checkout__input" align="center">

                                

                                <button type="submit" class="site-btn" name="reg_sub" style="background-color: #7B3F00;border-radius: 15px;">Register</button><br>
                                Already have a account <a href="login.php" ><i class="fa-solid fa-user-pen"></i>Login</a>

                            </div>

                        </div>

                           

                        </div>

                    </div>


                </form>

<?php

if(isset($_POST['reg_sub']))

{

    $name=$_POST['uname'];

    $email=$_POST['uemail'];

    $pass=$_POST['upass'];

    $state=$_POST['ustate'];

    $city=$_POST['ucity'];

    $dob=$_POST['udob'];

    $mob=$_POST['umob'];

    $add=$_POST['uadd'];

    $log="INSERT INTO `costumer`(`name`, `mobile`, `password`, `email`, `addreass`, `city`, `state`, `dob`) VALUES ('$name','$mob','$pass','$email','$add','$city','$state','$dob')";

    $sd=$con->query($log);  

    

    if($sd)

    {

        echo "<script>alert('Registeration successfull');location.href='login.php';</script>";

    }else{

        echo "<script>alert('Registeration Fail');location.href='login.php';</script>";

    }

}

?>

            </div>

        </div>

    </section>

    <!-- Checkout Section End -->



    <!-- Footer Section Begin -->

    <?php include "include/footer.php";?>

    <!-- Footer Section End -->



    <!-- Js Plugins -->

    <script src="js/jquery-3.3.1.min.js"></script>

    <script src="js/bootstrap.min.js"></script>

    <script src="js/jquery.nice-select.min.js"></script>

    <script src="js/jquery-ui.min.js"></script>

    <script src="js/jquery.slicknav.js"></script>

    <script src="js/mixitup.min.js"></script>

    <script src="js/owl.carousel.min.js"></script>

    <script src="js/main.js"></script>



 



</body>



</html>