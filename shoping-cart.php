<?php
    include "database_connect.php";
    session_start();
    // print_r($_SESSION);
    if(isset($_SESSION['mobile']) AND $_SESSION[mobile]!=""){
    
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shoping Cart || Real Choclate </title>

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
                            <span >All Categories</span>
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
                            <div class="hero__search__phone__icon" style="background-color: #7B3F00;">
                                <i class="fa fa-phone" style="color: white;q"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>18001232348</h5>
                                <span>Supports 24*7 time</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="images/c1.jpg" style="height: 550px; ">
        <div class="container">
            <div class="row">
                
            </div>
        </div>
    </section>
    <div class="col-lg-12 text-center">
        <div class="breadcrumb__text">
            <h2 style="color: black;">Shopping Cart</h2>
            <img src="images/underline1.png" style="margin-top: -130px;width: 500px;">
            <div class="breadcrumb__option" style="margin-top: -120px;">
                <a href="./index.php" style="color: black;">Home /
                Shopping Cart</a>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad" style="margin-top: -50px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table class="table-hover">
                            <thead style="background-color:  #BD5D12;">
                                <tr>
                                    <th class="shoping__product" style="color: white;text-align:center ">Products</th>
                                    <th style="color: white;text-align: center;">Price</th>
                                    <th style="color: white;text-align: center">Quantity</th>
                                    <th style="color: white;text-align: center;">Total</th>
                                    <th style="color: white;text-align: center;">Remove</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $mob=$_SESSION['mobile'];
                                $rftss="SELECT * FROM `product_cart` WHERE `c_mob`='$mob'";
                                $rttt=$con->query($rftss);
                                while($cr=$rttt->fetch_assoc()){


                                    $fg="SELECT * FROM `product` WHERE `p_id`='".$cr['p_id']."'";
                                    $dp=$con->query($fg);
                                    $fty=$dp->fetch_assoc();
                                    
                                ?>
                                <tr>
                                    <td class="shoping__cart__item">
                                       <center><img src="admina/ibo_panel/production/images/<?php echo $fty['img1'];?>" alt="" height="100px" width="100px">
                                        <h5><?php echo $fty['name'];?></h5>
                                        </center> 
                                    </td>
                                    <td class="shoping__cart__price">
                                        <?php echo "₹".$cr['a_d_dp_id'];?>
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="<?php echo $cr['qty'];?>">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">
                                        <?php echo "₹".$cr['a_d_dp_id']*$cr['qty'];?>
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <a href="process_delete_cart.php?pc_id=<?php echo $cr['pc_id'];?>"><span class="icon_close"></span></a>
                                    </td>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="./shop-grid.php" class="primary-btn cart-btn" style="background-color: #7B3F00;color: white;">CONTINUE SHOPPING</a>
                        
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                            <h5>Discount Codes</h5>
                            <form action="#">
                                <input type="text" placeholder="Enter your coupon code">
                                <button type="submit" class="site-btn" style="background-color: #7B3F00;">APPLY COUPON</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Cart Total</h5>
                        <ul>
                            
                            <li>Total <span><?php echo "₹".$cart_total;?>/-</span></li>
                        </ul>
                        <a href="checkout.php" class="primary-btn" style="background-color: #BD5D12;">PROCEED TO CHECKOUT</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->

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