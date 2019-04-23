<?php
  include "administrator/config/config_db.php";
  $data = new configData();
?>
<!DOCTYPE html>
  <html>
    <?php include 'template/head.php';?>
    <body>
        <div id="preloader">        
            <div class="progress">
                <div class="indeterminate"></div>
            </div>        
        </div>
        <!-- END PRELOADER -->
        <header id="header" role="banner">
            <div class="navbar-fixed">
                <nav>
                <div class="container">
                    <div class="nav-wrapper">
                    <!-- LOGO -->

                    <!-- TEXT BASED LOGO -->
                    <a href="index.php" class="brand-logo"><img style="max-width:40px; margin-top: -5px;height: auto; border-radius: 20px;" src="img/cakra.jpg"></a>
                    
                    <!-- Image Based Logo -->                
                        <!-- <a href="index.html" class="brand-logo"><img src="img/logo.jpeg" alt="logo img"></a>  -->
                    <ul class="right hide-on-med-and-down custom-nav">                 
                        <li><a href="index.php">Home</a></li>              
                    </ul>
                    <!-- For Mobile View -->
                    <ul id="slide-out" class="side-nav menu-scroll">
                        <li><a href="index.php">Home</a></li>
                    </ul>
                    <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                    </div>
                </div>
                </nav>
            </div>  
        </header>
        <div class="main-wrapper">
            <main role="main">
                <!-- START BLOG BANNER -->
                <section id="banner">
                    <div class="parallax-container">
                        <div class="parallax">
                            <img src="img/blog-header-bg.jpg">
                        </div>
                        <div class="overlay-header"></div>
                        <div class="overlay-content">
                            <div class="container">
                                <?php
                                    foreach ($data->showTPSbyID($_GET['id']) as $tps_id) {
                                ?>
                                    <h1 class="header-title"><?php echo $tps_id['nama_tps'];?></h1>
                                    <p style="color:white;"><b>TPS tersebut terletak di Kecamatan <?php echo $tps_id['nama_kecamatan'];?>, Kabupaten <?php echo $tps_id['nama'];?>, DI Yogyakarta</b></p>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="main-wrapper">
                    <main role="main">
                        <div class="portfolio-bottom" style="margin-bottom:200px;">
                            <div class="container">
                            <div class="portfolio-bottom-inner">
                                <div id="portfolio-list">
                                    <?php
                                        foreach ($data->showFotoByTPS($_GET['id']) as $f ) {
                                    ?>             
                                    <div class="mix html" data-value="1">
                                        <a href="administrator/images/<?php echo $f['foto']?>" target="_blank">
                                            <img src="administrator/images/<?php echo $f['foto']?>" alt="img">
                                            <i class="material-icons view-icon">pageview</i>
                                        </a>
                                    </div>
                                    <?php
                                        }
                                    ?>       
                                </div>
                            </div>
                            </div>
                        </div>
                        <?php
                            include 'template/pages/blog.php';
                            include 'template/footer.php';
                        ?>
                    </main>
                </div>
        <!-- jQuery Library -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <!-- Materialize js -->
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <!-- Skill Progress Bar -->
        <script src="js/appear.min.js" type="text/javascript"></script>
        <script src="js/pro-bars.min.js" type="text/javascript"></script>
        <!-- Owl slider -->      
        <script src="js/owl.carousel.min.js"></script>    
        <!-- Mixit slider  -->
        <script src="http://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>
        <!-- counter -->
        <script src="js/waypoints.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>     

        <!-- Custom Js -->
        <script src="js/custom.js"></script>      
    </body>
  </html>