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
    <div class="brand_color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>EMAIL LIÊN HỆ</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- contact -->
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <form class="main_form">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="&#xf007 Họ và Tên" type="text" name="Your Name">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="&#xf0e0 Địa chỉ email" type="email" name="Email">
                            </div>
                            <div class=" col-md-12">
                                <input class="form-control" placeholder="&#xf095 Số điện thoại" type="tel" name="Phone">
                            </div>
                            <div class="col-md-12">
                                <textarea class="textarea" placeholder="Message"></textarea>
                            </div>
                            <div class=" col-md-12">
                                <input class="form-submit" type="submit" name="action" value="GỬI">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->

    <!-- footer -->
    <footer>
        <?php include 'layouts/footerpage.php'; ?>
    </footer>
    <!-- end footer -->
    <?php include 'layouts/script.php'; ?>
</body>

</html>