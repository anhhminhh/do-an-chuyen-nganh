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
                            <a href="taomoi_danhmuc_lienhe.php"> <button type="submit" class="btn btn-primary"> <i class="fas fa-user-plus"></i> Tạo mới</button></a>
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                                <li class="breadcrumb-item active">Quản lý danh mục</li>
                                <li class="breadcrumb-item active">Danh sách loại liên hệ</li>

                            </ol>
                        </div>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <div class="card">
            <div class="card-header">
                <h3 class="card-title" style="color: red">Danh sách loại liên hệ</h>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên loại liên hệ</th>
                                <th>Liên hệ</th>
                                <th></th>
                                <th></th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr role="row" class="odd">
                                <td tabindex="0" class="sorting_1">1</td>
                                <td>Hotline</td>
                                <td>01236221412</td>
                                <td ><a href="#"> <button type="submit" class="btn btn-primary1"> <i class="fas fa-edit"></i> &nbsp; Sửa</button></a> </td>
                                <td ><a href="#"> <button type="submit" class="btn btn-primary1" style="background: #FFA500"> <i class="fas fa-trash-alt"></i> &nbsp;  Xoá</button></a> </td>
                            </tr><tr role="row" class="even">
                                <td tabindex="0" class="sorting_1">2</td>
                                <td>Cửa hàng</td>
                                <td>Q8 - TPCHM</td>
                                <td ><a href="#"> <button type="submit" class="btn btn-primary1"> <i class="fas fa-edit"></i> &nbsp; Sửa</button></a> </td>
                                <td ><a href="#"> <button type="submit" class="btn btn-primary1" style="background: #FFA500"> <i class="fas fa-trash-alt"></i> &nbsp;  Xoá</button></a> </td>
                            </tr><tr role="row" class="odd">
                                <td tabindex="0" class="sorting_1">3</td>
                                <td>Facebook</td>
                                <td>Fb.com/anhhminnh</td>
                                <td ><a href="#"> <button type="submit" class="btn btn-primary1"> <i class="fas fa-edit"></i> &nbsp; Sửa</button></a> </td>
                                <td ><a href="#"> <button type="submit" class="btn btn-primary1" style="background: #FFA500"> <i class="fas fa-trash-alt"></i> &nbsp;  Xoá</button></a> </td></tr>

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











































