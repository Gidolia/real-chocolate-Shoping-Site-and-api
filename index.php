<?php 
//include "database_connect.php";
include('./database_connect.php');

?>


<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME || Real Chocolate</title>
    <script type="text/javascript">
        function effect1(){
            document.getElementById("myDIV").style.boxShadow = "-2px 2px 3px brown";
        }
        function effect2(){
            document.getElementById("myDIV").style.boxShadow = "";   
        }
    </script>
  
   

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
   <!--  <div id="preloder">
        <div class="loader"></div>
    </div> -->
    <?php
        include('./include/header.php');
    ?>

    <?php #include "include/header.php";?>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all" style="background-color: #7B3F00;">
                            <i class="fa fa-bars"></i>
                            <span>All Categories </span>
                        </div>
                        <ul>
                            <?php 
                                $df="SELECT * FROM `category`";
                                $co=$con->query($df);
                                while($cat=$co->fetch_assoc())
                                {                                   
                                    
                            ?>
                                <li><a href="shop-grid.php?id=<?php echo $cat['c_id'];?>">
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
                                </div>
                                <input type="text" placeholder="What do yo u need?" id="myDIV" onmouseover="effect1()" onmouseout="effect2()" >
                                <button type="submit" class="site-btn" style="background-color: #7B3F00;">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon" style="background-color: #7B3F00;">
                                <i class="fa fa-phone" style="color: white;"></i>
                            </div>
                            <div class="hero__search__phone__text" >
                                <h5>18001232348</h5>
                                <span>Supports 24*7</span>
                            </div>
                        </div>
                    </div>
                    
                    <img src="images/c1.jpg" alt="Girl in a jacket" width="100%" height="300" style="border-radius: 20px;">
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin 1-->
    <section >
        <div class="container">
            <div class="row" >
                <div class="col-lg-12" >
                    <div class="section-title">
                        <h2 >Daily Deals Product</h2>
                    </div>
        
                    <div class="row" >
                         <div class="categories__slider owl-carousel">

                 <?php
                
                    $re="SELECT * FROM `product` WHERE `c_id`='f' ORDER BY `p_id` DESC LIMIT 0,10";
                    $dcr=$con->query($re);
                    $bhu=$dcr->num_rows;
                    while($pr=$dcr->fetch_assoc()){
                    ?>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="product__item" style="border-radius: 20px;border:1px solid black;box-shadow: 10px 10px 15lpx brown;background-color:  #BD5D12;color: white;" id="hov" >
                                <a href="shop-details.php?p_id=<?php echo $pr['p_id'];?>">
                                <div class="product__item__pic set-bg" data-setbg="./admina/ibo_panel/production/images/<?php echo $pr['img1'];?>" style="border-radius: 20px 20px 0px 0px ;height: 300px;border:1px solid black;">
                                    <ul class="product__item__pic__hover">
                                        <li><i class="fa fa-shopping-cart"></i></li>
                                    </ul>
                                </div>
                                </a>
                                <div class="product__item__text">
                                    <h6><a href="shop-details.php?p_id=<?php echo $pr['p_id'];?>" style="font-size: 20px;font-weight: bold;font-style: italic;color: white;"><?php echo $pr['name'];?></a></h6>
                                    
                                  <strike><?php echo "₹".$pr['mrp'];?>/-</strike>
                                    <big><b><?php echo "₹".$pr['dp'];?>/-</b></big>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                    
                   
                        
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End 1-->

  
      <!-- Categories Section Begin 5 -->
 <section >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Top Product</h2>
                    </div>
        
                    <div class="row">
                         <div class="categories__slider owl-carousel">

                 <?php
                    $re="SELECT * FROM `product` WHERE `c_id`='f'";
                    $dcr=$con->query($re);
                    $bhu=$dcr->num_rows;
                    ?>
                        <?php
                        while($pr=$dcr->fetch_assoc())
                        {
                            ?>
                        
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="product__item" style="border-radius: 20px;border:1px solid black;box-shadow: 10px 10px 15lpx brown;background-color:  #BD5D12;color: white;">
                                <a href="shop-details.php?p_id=<?php echo $pr['p_id'];?>">
                                <div class="product__item__pic set-bg" data-setbg="./admina/ibo_panel/production/images/<?php echo $pr['img1'];?>"style="border-radius: 20px 20px 0px 0px;border:1px solid black;box-shadow: 10px 10px 15lpx brown;">
                                    <ul class="product__item__pic__hover">
                                        <li><i class="fa fa-shopping-cart"></i></li>
                                    </ul>
                                </div>
                                </a>
                               <div class="product__item__text">
                                    <h6><a href="shop-details.php?p_id=<?php echo $pr['p_id'];?>" style="font-size: 20px;font-weight: bold;font-style: italic;color: white;"><?php echo $pr['name'];?></a></h6>
                                    
                                  <strike> <?php echo "₹".$pr['mrp'];?>/-</strike>
                                    <big><b><?php echo "₹".$pr['dp'];?>/-</b></big>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>   
    <!-- Categories Section End 5-->
    
     <!-- Categories Section Begin 3 -->

    <!-- Categories Section End 3-->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                    <img src="images/c2.jpg" alt="Girl in a jacket" width="100%" height="300" style="border-radius: 20px;box-shadow: 5px 5px 5px brown ;padding:5px;">                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                    <img src="images/c3.jpg" alt="Girl in a jacket" width="100%" height="300" style="border-radius: 20px;box-shadow: 5px 5px 5px brown ;padding:5px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

</br>
    <!-- Categories Section Begin 4 -->
    <section >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Chocolates For You</h2>
                    </div>
                    <div class="row">
                <?php
                $re="SELECT * FROM `product` WHERE `c_id`='f'LIMIT 0,8 ";
                $dcr=$con->query($re);
                $bhu=$dcr->num_rows;
                while($pr=$dcr->fetch_assoc())
                {
                ?>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="product__item " style="border-radius: 20px;border:1px solid black;box-shadow: 10px 10px 15lpx brown;background-color:  #BD5D12;color: white;">
                                <a href="shop-details.php?p_id=<?php echo $pr['p_id'];?>">
                                <div class="product__item__pic set-bg my1" data-setbg="./admina/ibo_panel/production/images/<?php echo $pr['img1'];?>" style="border-radius: 20px 20px 0px 0px ;height: 300px;border:1px solid black;">
                                    <ul class="product__item__pic__hover">
                                        <li><i class="fa fa-shopping-cart"></i></li>
                                    </ul>
                                </div>
                                </a>
                                <div class="product__item__text">
                                    <h6><a href="shop-details.php?p_id=<?php echo $pr['p_id'];?>" style="font-size: 20px;font-weight: bold;font-style: italic;color: white;"><?php echo $pr['name'];?></a></h6>
                                    
                                  <strike> <?php echo "₹".$pr['mrp'];?>/-</strike>
                                    <big><b><?php echo "₹".$pr['dp'];?>/-</b></big>
                                </div>
                            </div>
                        </div>
                <?php 
                } 
                ?>
                  
                  
                </div>
                <center>
                    <a href="shop-grid.php?id=f">
                    <button class="btn btn-danger" style="margin:50px;">View All</button>    
                    </a>
                </center> 
            </div>
        </div>
    </section>
    <!-- Categories Section End 4-->


    <!-- Footer Section Begin -->
    <?php
    include "include/footer.php";?>
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