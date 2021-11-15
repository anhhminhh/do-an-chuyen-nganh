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
                            <a href="taomoi_danhmuc_sanpham.php"> <button type="submit" class="btn btn-primary"> <i class="fas fa-user-plus"></i> Tạo mới</button></a>
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                                <li class="breadcrumb-item active">Quản lý danh mục</li>
                                <li class="breadcrumb-item active">Danh sách loại sản phẩm</li>

                            </ol>
                        </div>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <div class="card">
            <div class="card-header">
                <h3 class="card-title" style="color: red">Danh sách loại sản phẩm</h>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên loại sản phẩm</th>
                                <th></th>
                                <th></th>
                                <th></th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr role="row" class="odd">
                                <td tabindex="0" class="sorting_1">1</td>
                                <td>IPhone</td>
                                <td ><a href="taomoi_sanpham.php"> <button type="submit" class="btn btn-primary1" style="background: #7B68EE"> <i class="fas fa-plus"></i> &nbsp; Thêm sản phẩm</button></a> </td>
                                <td ><a href="#"> <button type="submit" class="btn btn-primary1"> <i class="fas fa-edit"></i> &nbsp; Sửa</button></a> </td>
                                <td ><a href="#"> <button type="submit" class="btn btn-primary1" style="background: #FFA500"> <i class="fas fa-trash-alt"></i> &nbsp;  Xoá</button></a> </td>
                            </tr><tr role="row" class="even">
                                <td tabindex="0" class="sorting_1">2</td>
                                <td>SamSung</td>
                                <td ><a href="taomoi_sanpham.php"> <button type="submit" class="btn btn-primary1" style="background: #7B68EE"> <i class="fas fa-plus"></i></i> &nbsp; Thêm sản phẩm</button></a> </td>
                                <td ><a href="#"> <button type="submit" class="btn btn-primary1"> <i class="fas fa-edit"></i> &nbsp; Sửa</button></a> </td>
                                <td ><a href="#"> <button type="submit" class="btn btn-primary1" style="background: #FFA500"> <i class="fas fa-trash-alt"></i> &nbsp;  Xoá</button></a> </td>
                            </tr><tr role="row" class="odd">
                                <td tabindex="0" class="sorting_1">3</td>
                                <td>Xiaomi</td>
                                <td ><a href="taomoi_sanpham.php"> <button type="submit" class="btn btn-primary1" style="background: #7B68EE"> <i class="fas fa-plus"></i> &nbsp; Thêm sản phẩm</button></a> </td>
                                <td ><a href="#"> <button type="submit" class="btn btn-primary1"> <i class="fas fa-edit"></i> &nbsp; Sửa</button></a> </td>
                                <td ><a href="#"> <button type="submit" class="btn btn-primary1" style="background: #FFA500"> <i class="fas fa-trash-alt"></i> &nbsp;  Xoá</button></a> </td></tr>
                                <tr role="row" class="odd">
                                    <td tabindex="0" class="sorting_1">4</td>
                                    <td>Pixel</td>
                                    <td ><a href="taomoi_sanpham.php"> <button type="submit" class="btn btn-primary1" style="background: #7B68EE"> <i class="fas fa-plus"></i> &nbsp; Thêm sản phẩm</button></a> </td>
                                    <td ><a href="#"> <button type="submit" class="btn btn-primary1"> <i class="fas fa-edit"></i> &nbsp; Sửa</button></a> </td>
                                    <td ><a href="#"> <button type="submit" class="btn btn-primary1" style="background: #FFA500"> <i class="fas fa-trash-alt"></i> &nbsp;  Xoá</button></a> </td>

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











































