<!DOCTYPE html>
<html lang="en">

    <head>
        <?php include 'layouts/headerpage.php'; ?>
    </head>
    <!-- body -->

    <body class="main-layout ">
        <!-- loader 
        <div class="loader_bg">
            <div class="loader"><img src="images/loading.gif" alt="#" /></div>
        </div>
        <!-- end loader -->
        <!-- header -->
        <header>
            <!-- header inner -->
            <?php include 'layouts/navbar.php'; ?>
            <!-- end header inner -->
        </header>
        <!-- end header -->
        <!--section-->
        <?php include 'layouts/section.php'; ?>
        <!--end section-->

        <!-- about -->
        <div class="about">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-5 col-md-5 co-sm-l2">
                        <div class="about_img">
                            <figure><img src="images/about.png" alt="img" /></figure>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-7 co-sm-l2">
                        <div class="about_box">
                            <span>Our Mobile Shop</span>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of It is a long established fact that a reader will be distracted by the </p>

                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-7 co-sm-l2">
                        <div class="about_box_ ">
                            <span>Our Mobile Shop</span>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of It is a long established fact that a reader will be distracted by the </p>

                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-5 co-sm-l2">
                        <div class="about_img">
                            <figure><img src="images/about.png" alt="img" /></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end about -->

        <!-- brand -->
        <div class="brand">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titlepage">
                            <h2 style="padding-top: 30px;">Sản phẩm nổi bật</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="brand-bg">
                <div class="container">
                    <div class="row">
                        <?php
                        for ($index = 0; $index < 6; $index++) {
                            echo '<div id="' . $index . '" class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">';
                            echo '<div class="brand_box">';
                            echo '<a href="product.php"><img src="images/' . $index + 1 . '.png" alt="img" /></a>';
                            echo '<h3><strong class="red">'. number_format("10000000", 0,",",".").'&nbsp;VNĐ</strong></h3>';
                            echo '<span><a href="product.php">Mobile Phone</a></span>';
                            echo '<i><img src="images/star.png"/></i>';
                            echo '<i><img src="images/star.png"/></i>';
                            echo '<i><img src="images/star.png"/></i>';
                            echo '<i><img src="images/star.png"/></i>';
                            echo '<i><img src="images/star.png"/></i>';
                            echo '</div>';
                            echo '</div>';
                        }
                        ?>         
                        <div class="col-md-12">
                            <a class="read-more">See More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- end brand -->
        <!-- clients -->
        <div class="clients">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titlepage">
                            <h2>what say our clients</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clients_red">
            <div class="container">
                <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#testimonial_slider" data-slide-to="0" class=""></li>
                        <li data-target="#testimonial_slider" data-slide-to="1" class="active"></li>
                        <li data-target="#testimonial_slider" data-slide-to="2" class=""></li>
                    </ul>
                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <div class="testomonial_section">
                                <div class="full center">
                                </div>
                                <div class="full testimonial_cont text_align_center cross_layout">
                                    <div class="cross_inner">
                                        <h3>Due markes<br><strong class="ornage_color">Rental</strong></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess</i>
                                        </p>
                                        <div class="full text_align_center margin_top_30">
                                            <img src="icon/testimonial_qoute.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item active">

                            <div class="testomonial_section">
                                <div class="full center">
                                </div>
                                <div class="full testimonial_cont text_align_center cross_layout">
                                    <div class="cross_inner">
                                        <h3>Due markes<br><strong class="ornage_color">Rental</strong></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess</i>
                                        </p>
                                        <div class="full text_align_center margin_top_30">
                                            <img src="icon/testimonial_qoute.png">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="carousel-item">

                            <div class="testomonial_section">
                                <div class="full center">
                                </div>
                                <div class="full testimonial_cont text_align_center cross_layout">
                                    <div class="cross_inner">
                                        <h3>Due markes<br><strong class="ornage_color">Rental</strong></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess</i>
                                        </p>
                                        <div class="full text_align_center margin_top_30">
                                            <img src="icon/testimonial_qoute.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
        <!-- end clients -->

        <!-- footer -->
        <footer>
            <?php include 'layouts/footerpage.php'; ?>
        </footer>
        <!-- end footer -->
        <?php include 'layouts/script.php'; ?>
    </body>

</html>