<?php
include "database_connect.php";
$re="SELECT * FROM `product` WHERE `p_id`=".$_GET['p_id'];
$dcr=$con->query($re);
$pro_fet=$dcr->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="LP Online Shop">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $pro_fet['name'];?> || Real Choclate</title>

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

                                <li><a href="shop-grid.php?id="<?php echo $cat['c_id'];?>><?php echo $cat['name'];?></a></li>

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
                                <span>Support 24*7</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <!--<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-lg-12 text-center">-->
    <!--                <div class="breadcrumb__text">-->
    <!--                    <h2><?php echo $pro_fet['name'];?></h2>-->
    <!--                    <div class="breadcrumb__option">-->
    <!--                        <a href="./index.php">Home</a>-->
    <!--                        <a href="./index.php"><?php echo $pro_fet['name'];?></a>-->
    <!--                        <span><?php echo $pro_fet['name'];?></span>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!-- Breadcrumb Section End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container" >
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src="./admina/ibo_panel/production/images/<?php echo $pro_fet['img1'];?>" alt="Image?"style="height:400px;width:100%;">
                        </div>
                        <!--<div class="product__details__pic__slider owl-carousel">-->
                        <!--    <img data-imgbigurl="images/<?php #echo $pro_fet['img1'];?>"-->
                        <!--        src="./admina/ibo_panel/production/images/<?php #echo $pro_fet['img1'];?>" alt="Image?">-->

                        <!--    <img data-imgbigurl="images/<?php #echo $pro_fet['img2'];?>"-->
                        <!--        src="./admina/ibo_panel/production/images/<?php #echo $pro_fet['img2'];?>" alt="Image?">-->
                            
                        <!--</div>-->
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3><?php echo $pro_fet['name'];?></h3>
                        
                        <div class="product__details__price">
                            <?php echo "₹".$pro_fet['dp'];?>
                            <span style="text-decoration: line-through;">
                            <?php echo "₹".$pro_fet['mrp'];?>/-
                            </span>
                        </div>
                        <p><?php echo $pro_fet['short_description'];?></p>
                        <?php
                        if(isset($_SESSION['mobile']))
                        {?>
                        <form action="process_add_to_cart.php" method="post">
                        <div class="product__details__quantity" >
                            <div class="quantity" >
                                <div class="pro-qty">
                                    <input type="text" value="1" name="qty" style="background-color: #7B3F00;color: white;">
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="p_id" value="<?php echo $_GET['p_id'];?>" >
                        <input type="hidden" name="mobile" value="<?php echo $_SESSION['mobile'];?>" >
                        <input type="submit" name="submit_pro" class="primary-btn" value="ADD TO CART" style="background-color: #7B3F00;border:none;">

                        
                        </form>
                        <?php }else{?>
                        <a href="login.php" class="primary-btn">Login First To Buy</a>
                        <?php }?>
                        <ul>
                            <li><b>Availability</b> <span>In Stock</span></li>
                            <li><b>Shipping</b> <span>Not Available <samp>Free pickup today</samp></span></li>
                            <li><b>Weight</b> <span><?php echo $pro_fet['weight'];?></span></li>
                            <li><b>Share on</b>
                                <div class="share">
                                    
                                    <a href="#"><i class="fa fa-whatsapp"></i></a>
                                   
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                    aria-selected="true" style="font-size: 30px;text-decoration: underline;">Description</a>
                            </li>
                            
                            
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6 align="center">Products Infomation</h6>
                                    <p><i><?php echo $pro_fet['long_description'];?></i></p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->

    <!-- Related Product Section Begin -->
    <!--<section class="related-product">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-lg-12">-->
    <!--                <div class="section-title related__product__title">-->
    <!--                    <h2>Related Product</h2>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="row">-->
    <!--            <div class="col-lg-3 col-md-4 col-sm-6">-->
    <!--                <div class="product__item">-->
    <!--                    <div class="product__item__pic set-bg" data-setbg="img/product/product-1.jpg">-->
    <!--                        <ul class="product__item__pic__hover">-->
    <!--                            <li><a href="#"><i class="fa fa-heart"></i></a></li>-->
    <!--                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>-->
    <!--                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>-->
    <!--                        </ul>-->
    <!--                    </div>-->
    <!--                    <div class="product__item__text">-->
    <!--                        <h6><a href="#">Crab Pool Security</a></h6>-->
    <!--                        <h5>$30.00</h5>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-3 col-md-4 col-sm-6">-->
    <!--                <div class="product__item">-->
    <!--                    <div class="product__item__pic set-bg" data-setbg="img/product/product-2.jpg">-->
    <!--                        <ul class="product__item__pic__hover">-->
    <!--                            <li><a href="#"><i class="fa fa-heart"></i></a></li>-->
    <!--                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>-->
    <!--                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>-->
    <!--                        </ul>-->
    <!--                    </div>-->
    <!--                    <div class="product__item__text">-->
    <!--                        <h6><a href="#">Crab Pool Security</a></h6>-->
    <!--                        <h5>$30.00</h5>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-3 col-md-4 col-sm-6">-->
    <!--                <div class="product__item">-->
    <!--                    <div class="product__item__pic set-bg" data-setbg="img/product/product-3.jpg">-->
    <!--                        <ul class="product__item__pic__hover">-->
    <!--                            <li><a href="#"><i class="fa fa-heart"></i></a></li>-->
    <!--                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>-->
    <!--                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>-->
    <!--                        </ul>-->
    <!--                    </div>-->
    <!--                    <div class="product__item__text">-->
    <!--                        <h6><a href="#">Crab Pool Security</a></h6>-->
    <!--                        <h5>$30.00</h5>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-3 col-md-4 col-sm-6">-->
    <!--                <div class="product__item">-->
    <!--                    <div class="product__item__pic set-bg" data-setbg="img/product/product-7.jpg">-->
    <!--                        <ul class="product__item__pic__hover">-->
    <!--                            <li><a href="#"><i class="fa fa-heart"></i></a></li>-->
    <!--                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>-->
    <!--                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>-->
    <!--                        </ul>-->
    <!--                    </div>-->
    <!--                    <div class="product__item__text">-->
    <!--                        <h6><a href="#">Crab Pool Security</a></h6>-->
    <!--                        <h5>$30.00</h5>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!-- Related Product Section End -->

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