<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'layouts/headerpage.php'; ?>
    </head>
    <!-- body -->
    <body class="main-layout special-page">

        <!-- header -->
        <header>
            <!-- header inner -->
            <?php include 'layouts/navbar.php'; ?>
            <!-- end header inner -->
        </header>
        <!-- end header -->
        <div class="col-md-12">
            <div class="sub-title">
                <a href="brand.php">Điện thoại</a><span>  >  </span><a href="product.php">Điện thoại Iphone</a>
            </div>
            <div class="titlepage">
                <h2>Điện thoại IPHONE</h2>
            </div>
        </div>

        <div class="container">
            <div class="w3-content w3-display-container">
                <?php
                for ($index = 0; $index < 10; $index++)
                    echo '<img class="mySlides" src="images/gtsp-' . $index + 1 . '.jpg">';
                echo '<button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>';
                echo '<button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>';
                include 'utils/LTDslideShowControl.php';
                ?>
            </div>
            <div class="container">
                
            </div>
        </div>

        <!-- footer -->
        <footer>
            <?php include 'layouts/footerpage.php'; ?>
        </footer>
        <!-- end footer -->
        <?php include 'layouts/script.php'; ?>
    </body>
</html>