<!DOCTYPE html>
<html lang="en">

    <head>
        <?php include 'layouts/headerpage.php'; ?>
    </head>
    <!-- body -->

    <body class="main-layout">

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

        <!-- brand -->
        <div class="brand">
            <div class="container">
                <div class="brand-box">
                    <div class="list-inline-item">
                        <ul class="col-auto" style="background-color: #ffffff; height: 100px; ">
                            <li class="thuonghieu"><a href="#"><img src="images/logo-iphone-220x48.png"></a></li>
                            <li class="thuonghieu"><a href="#"><img src="images/samsungnew-220x48-1.png"></a></li>
                            <li class="thuonghieu"><a href="#"><img src="images/oppo-logo.jpg"></a></li>
                            <li class="thuonghieu"><a href="#"><img src="images/vivo-logo.jpg"></a></li>
                            <li class="thuonghieu"><a href="#"><img src="images/xiaomi-logo.png"></a></li>
                            <li class="thuonghieu"><a href="#"><img src="images/realme-logo.png"></a></li>
                            <li class="thuonghieu"><a href="#"><img src="images/nokia-logo.jpg"></a></li>
                            <li class="thuonghieu"><a href="#"><img src="images/mobell-logo.jpg"></a></li>
                            <li class="thuonghieu"><a href="#"><img src="images/itel-logo.jpg"></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="brand-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="titlepage">
                                <h2>Sản phẩm nổi bật</h2>
                            </div>
                        </div>
                    </div>
                </div>
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
                            echo'</div>';
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

        <!-- footer -->
        <footer>
            <?php include 'layouts/footerpage.php'; ?>
        </footer>
        <!-- end footer -->
        <?php include 'layouts/script.php'; ?>
    </body>

</html>