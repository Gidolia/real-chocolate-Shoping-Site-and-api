<?php
include "database_connect.php";
if(isset($_SESSION['mobile']))
{
?><!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout || Real Choclate</title>

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
                                <i class="fa fa-phone" ></i>
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
    <section class="breadcrumb-section set-bg" data-setbg="images/c1.jpg" style="height: 500px;">
        <div class="container">
            <div class="row">
                
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
       <div class="col-lg-12 text-center">
        <div class="breadcrumb__text">
            <h2 style="color: black;">Checkout</h2>
            <img src="images/underline1.png" style="margin-top: -80px;">
            <div class="breadcrumb__option" style="margin-top: -75px;">
                <a href="./index.php" style="color: black;">Home / Checkout</a>
            </div>
        </div>
    </div>
    <!-- Checkout Section Begin -->
    <section class="checkout spad" style="margin-top: -50px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6><span class="icon_tag_alt"></span> Have a coupon? <a href="#">Click here</a> to enter your code
                    </h6>
                </div>
            </div>
            <div class="checkout__form">
                <h4>Billing Details</h4>
                <form action="process_checkout.php" method="post">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="checkout__input">
                                        <p>Full Name<span>*</span></p>
                                        <input type="text" name="name" required>
                                    </div>
                                </div>
                            
                            </div>
                             <div class="row">
                                <div class="col-lg-12">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="email" name="mail" required>
                                    </div>
                                </div>
                            
                            </div>
                            
                            <div class="checkout__input">
                                <p>Address<span>*</span></p>
                                <textarea name="addreass" style="width: 100%;
	height: 90px;
	border: 1px solid #ebebeb;
	padding-left: 20px;
	font-size: 16px;
	color: #b2b2b2;
	border-radius: 4px;" required>
                                    
                                </textarea>
                                
                            </div>
                            <div class="checkout__input">
                                <p>Town/City<span>*</span></p>
                                <input type="text" name="city" required>
                            </div>
                            <div class="checkout__input">
                                <p>State<span>*</span></p>
                                <input type="text" name="state" required>
                            </div>
                            <div class="checkout__input">
                                <p>Postcode / ZIP<span>*</span></p>
                                <input type="text" name="pincode" required>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="checkout__input">
                                        <p>Phone<span>*</span></p>
                                        <input type="text" name="mobile_no" required>
                                        <input type="hidden" name="rfs" value="<?php echo $cart_total?>">
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>Your Order</h4>
                                <div class="checkout__order__products">Products <span>Total</span></div>
                                <ul>
                                    <?php
                                    $mob=$_SESSION['mobile'];
                                $rftss="SELECT * FROM `product_cart` WHERE `c_mob`='$mob'";
                                $rttt=$con->query($rftss);
                                while($cr=$rttt->fetch_assoc()){
                                    
                                    $rfs=0;
                                    $fg="SELECT * FROM `product` WHERE `p_id`='".$cr['p_id']."'";
                                    $dp=$con->query($fg);
                                    $fty=$dp->fetch_assoc();
                                    $a=$cr['a_d_dp_id']*$cr['qty'];                                   
                                    $rfs=$cart_total;

                                    ?>
                                    <li><?php echo $fty['name'];?> <span><?php echo $a;?>/-</span></li>
                                    <?php }?>
                                </ul>
                                <?php 
                                ?>
                                
                                <div class="checkout__order__subtotal">Subtotal <span><?php echo $cart_total;?>/-</span></div>
                                <div class="checkout__order__total" name="rfs">Total <span><?php echo $cart_total;?>/-</span></div>
                                
                             
                                <p>Currently we are not delivering when ever you get time you can pick up from the office</p>
                                
                                
                                <button type="submit" class="site-btn" name="submit_check_out" style="background-color: #7B3F00;">PLACE ORDER</button>
                            </div>
                        </div>
                    </div>
                </form>
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
<?php }
else{
    echo "<script>alert('Plz Login First');location.href='login.php';</script>";
}