<?php 
//include "database_connect.php";
include('./database_connect.php');
   
        $query="SELECT * FROM `copartner` ";
        $res=$con->query($query);
   
    
?> 
<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Co-partner || Real Chocolate</title>
    <!--Datatables-->
     <link href="./assets/datatables/dataTables.bootstrap4.css" rel="stylesheet">    
    <link href="./assets/datatables/style.min.css" rel="stylesheet">
    
   

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
    <!--DATA TABLE-->
      <link href="./admina/ibo_panel/ibo_panel/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="./admina/ibo_panel/ibo_panel/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="./admina/ibo_panel/ibo_panel/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="./admina/ibo_panel/ibo_panel/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="./admina/ibo_panel/ibo_panel/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
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
                                    <span class="arrow_carrot-down"></span>
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
                    
                    <img src="images/m1.jpg" alt="Girl in a jacket" width="100%" height="330" style="border-radius: 20px;">
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
                        <h2 >Co-Partners</h2>
                    </div>
                    <!--<form method="post" style="float:right;margin-bottom:2px;margin-top:-10px;">-->
                    <!--    <input type="text" name="ct" style="font-size:20px;"placeholder="Search Here">-->
                    <!--    <input type="submit" name="search" style="font-size:20px;background-color:brown;border-color:brown;color:white;margin-left:-5px;" value="search">-->
                            
                    <!--</form>-->
                    <table class="table table-bordered table-hover table-responsive-sm" id="file_export">
                            <thead class="bg-secondary">
                              <tr style="font-size:20px;">
                                <th>#</th>
                                <th style="font-size:20px;">Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Address</th>
                                <th>State</th>
                                <th>City</th>
                                <th>Certificate</th>
                              </tr>
                            </thead>
                            <tbody>
   
<?php
    $i=1;
    while($copartner=$res->fetch_assoc()){
?>
                              <tr style="font-size:15px;">
                                <td><?php echo $i++ ;?></td>
                                <td><?=$copartner['name']?></td>
                                <td><?=$copartner['email']?></td>
                                <td><?=$copartner['mobile']?></td>
                                <td><?=$copartner['address']?></td>
                                <td><?=$copartner['state']?></td>
                                <td><?=$copartner['city']?></td>
                                <td>
                                  <a href="./admina/ibo_panel/production/copartnerImg/<?php echo $copartner['certificate'];?>" target="_blank"><img src="./admina/ibo_panel/production/copartnerImg/<?php echo $copartner['certificate'];?>" style="height:50px;width:50px;">
                                  </a>  
                                </td>
                              </tr>
    
<?php
    }

?> 
                            </tbody>
                              </table>
                            </div>  
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End 1-->



 





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
    
    <script type="text/javascript">
        function effect1(){
            document.getElementById("myDIV").style.boxShadow = "-2px 2px 3px brown";
        }
        function effect2(){
            document.getElementById("myDIV").style.boxShadow = "";   
        }
        $(document).ready( function() {
        $(".Img").click( function() {
            this.requestFullscreen();
        });
    });
    </script>
<!--Datatables-->
  <script src="./assets/datatables/jquery.min.js"></script>  
    <script src="./assets/datatables/perfect-scrollbar.jquery.min.js"></script>  
    <script src="./assets/datatables/custom.min.js"></script>   
    <script src="./assets/datatables/datatables.min.js"></script>   
    <!--<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>-->
    <!--<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>-->
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>-->
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>-->
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>-->
    <!--<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>-->
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
    <script src="./assets/datatables/datatable-advanced.init.js"></script>


</body>

</html>