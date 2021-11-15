<!DOCTYPE html>
<html>
<head>
    <?php include 'layouts/headerpage.php' ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <?php include'layouts/menugiua.php' ?>

    <!-- Navbar -->

    <!-- /.navbar -->

    <!-- Main Sidebar Container -->

    <?php include 'layouts/menutrai.php' ?>



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <div class="card-footer">
                            <a href="taomoi_donhang.php"> <button type="submit" class="btn btn-primary"> <i class="fas fa-user-plus"></i> Tạo mới</button></a>
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                                <li class="breadcrumb-item active">Quản lý đơn hàng</li>
                                <li class="breadcrumb-item active">Danh sách đơn hàng</li>

                            </ol>
                        </div>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <div class="card">
            <div class="card-header">
                <h3 class="card-title" style="color: red">Danh sách đơn hàng</h>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>Mã đơn hàng</th>
                                <th>Tên khách hàng</th>
                                <th>Thanh toán</th>
                                <th>Trạng thái</th>
                                <th></th>
                                <th></th>
                                <th></th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            for ($i = 0; $i < 5; $i++) {
                            echo '<tr>';
                                echo ' <td> '. ($i + 1) .' </td>';
                                echo ' <td>Minh</td> ';
                                echo ' <td>1.000.000 vnđ</td> ';
                                echo ' <td>Đã hoàn thành</td> ';
                                echo ' <td ><a href="#"> <button type="submit" class="btn btn-primary1" style="background: #7B68EE"> <i class="fas fa-book-reader"></i> &nbsp; Xem chi tiết</button></a> </td>';
                                echo ' <td ><a href="#"> <button type="submit" class="btn btn-primary1"> <i class="fas fa-edit"></i> &nbsp; Sửa</button></a> </td>';
                                echo ' <td ><a href="#"> <button type="submit" class="btn btn-primary1" style="background: #FFA500"> <i class="fas fa-trash-alt"></i> &nbsp;  Xoá</button></a> </td>';

                            }
                        echo '</tr>'
                        ?>

                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>




    </div>
    <!-- /.content-wrapper -->
    <?php include 'layouts/footer&jquery.php'; ?>
</body>
</html>
