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
  
  <?php include 'layouts/menutrai.php'?>
  
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <div class="card-footer">
              <a href="danhmuc_sanpham.php"><button type="submit" class="btn btn-primary"> <i class="fas fa-undo"></i> Trở lại</button></a>
              <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
               <li class="breadcrumb-item active">Quản lý danh mục</li>
               <li class="breadcrumb-item active">Danh sách loại sản phẩm</li>
               <li class="breadcrumb-item active">Tạo mới</li>
             </ol>
           </div>
         </div><!-- /.col -->
       </div><!-- /.row -->
     </div><!-- /.container-fluid -->
   </div>
   <!-- /.content-header -->

   <div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Tạo mới loại sản phẩm</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form role="form">
        <div class="card-body">
          <div class="form-group">
            <label >Tên danh mục loại sản phẩm</label>
            <input type="text" class="form-control" name="txt_dmbv" id="dmbv">
          </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer" style="margin-top: -15px">
          <button type="submit" class="btn btn-primary">Tạo</button>
          <button type="submit" class="btn btn-primary" style="margin-left: 20px ;background: #FA8072; border: 0px">Làm mới</button>
        </div>
      </form>
    </div>
    <!-- /.card -->

    <!-- Form Element sizes -->
    <!-- /.card-footer -->
  </form>
</div>
<!-- /.card -->

</div>




</div>
<!-- /.content-wrapper -->
<?php include 'layouts/footer&jquery.php';?>
</body>
</html>
