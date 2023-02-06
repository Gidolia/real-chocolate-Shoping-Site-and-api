<?php include "database_connect.php";?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products || Real Choclate</title>

  
  

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
    <!--<div id="preloder">-->
    <!--    <div class="loader"></div>-->
    <!--</div>-->

    <?php include "include/header.php";?>

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
                                <li><a href="shop-grid.php?id=<?=$cat['c_id']?>">
                                             <?php echo $cat['name'];?>                                        
                                    </a>
                                </li>
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
                                <span>Supports 24*7 </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="images/n.jpg" style="height: 550px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <!-- <div class="breadcrumb__text">
                        <h2>Shop</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Home</a>
                            <span>Shop</span>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <!-- <div class="sidebar">
                        <div class="sidebar__item" >
                            <h4 >Department</h4>
                            <ul>
                                <?php 
                            $df="SELECT * FROM `category`";
                            $co=$con->query($df);
                            while($cat=$co->fetch_assoc())
                            {

                                ?>
                                 <li><a href="shop-grid.php?c_id=<?php echo $cat['c_id'];?>"><?php echo $cat['name'];?></a></li>
                                 <li><a href="shop-grid.php?c_id="<?php echo $cat['c_id'];?>><?php echo $cat['name']?></a></li>
                                <?php

                            }
                            
                            ?> 
                            </ul>


                        </div>
                    </div> -->
                </div>
                <div class="offset-1 col-lg-10 col-md-7">
                    <?php
                    
                    if($_GET[id]!=""){
                        $re="SELECT * FROM `product` WHERE `c_id`='$_GET[id]' ORDER BY `p_id` DESC";
                    }else{
                        $re="SELECT * FROM `product` WHERE `c_id`='f' ORDER BY `p_id` DESC";
                    }
                    //WHERE `c_id`='".$_GET['c_id']."'
                    
                    $dcr=$con->query($re);
                    $bhu=$dcr->num_rows;
                    
                    
                    
                    ?>
                    <h1 style="font-size: 30px;font-weight: bolder;text-align: center;">All Products</h1>
                    <hr style="background-color: black;width:900px;">
                    <div class="col-lg-4 col-md-4">
                                <div class="filter__found">
                                    <h6><span s><?php echo $bhu;?></span> Products found</h6>
                                </div>
                    </div>
                    
                    <div class="row">
                        <?php
                        while($pr=$dcr->fetch_assoc())
                        {
                            ?>
                        
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item" style="border-radius: 20px;border:1px solid black;box-shadow: 10px 10px 15lpx brown;background-color:  #BD5D12;color: white;" id="hov">
                                <a href="shop-details.php?p_id=<?php echo $pr['p_id'];?>">
                                <div class="product__item__pic set-bg" data-setbg="./admina/ibo_panel/production/images/<?php echo $pr['img1'];?>" style="border-radius: 20px 20px 0px 0px ;height: 300px;border:1px solid black;">
                                    <ul class="product__item__pic__hover">
                                        <li><i class="fa fa-shopping-cart"></i></li>
                                    </ul>
                                </div>
                                </a>
                             <div class="product__item__text" >
                                 <h6><a href="shop-details.php?p_id=<?php echo $pr['p_id'];?>"  >
                                   
                                  
                                      <i style="font-size: 20px;color: white;">  <b><?php echo $pr['name'];?> </b></i>
                                        
                                  
                                   
                                    </a>
                                 </h6>
                                <span> <strike>Rs.<?php echo $pr['mrp'];?>/-</strike> <b><big> Rs.<?php echo $pr['dp'];?>/-</big></b></span>        
                                                                 
                             </div>
                            </div>
                        </div>
                        <?php } ?>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Footer Section Begin -->
    <?php  include "include/footer.php";?>
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