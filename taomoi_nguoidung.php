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
              <a href="danhsach_nguoidung.php"><button type="submit" class="btn btn-primary"> <i class="fas fa-undo"></i> Trở lại</button></a>
              <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
               <li class="breadcrumb-item active">Quản lý người dùng</li>
               <li class="breadcrumb-item active">Thêm người dùng</li>
               
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
        <h3 class="card-title">Thông tin người dùng</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form role="form">
        <div class="card-body">
          <div class="form-group">
            <label >Họ và tên</label>
            <input type="text" class="form-control" name="txt_username" id="username">
          </div>
          <div class="form-group">
            <label >Password</label>
            <input type="password" class="form-control" name="txt_password" id="password">
          </div>
          <div class="form-group">
            <label >Số điện thoại</label>
            <input type="email" class="form-control" name="txt_email" id="phone">
          </div>
          <div class="form-group">
            <label >Địa chỉ</label>
            <input type="email" class="form-control" name="txt_email" id="phone">
          </div>
          
          <div class="form-group">
            <label >Email</label>
            <input type="email" class="form-control" name="txt_email" id="email">
          </div>
          <div class="form-group">
            <label>Loại tài khoản</label>
            <select class="form-control">
              <option>Quản trị viên</option>
              <option>Người dùng</option>
            </select>
          </div>
          <div class="col-sm-6">
            <!-- radio -->
            <label>Giới tính</label>
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="radio1" checked="">
                <label class="form-check-label">Nam</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="radio1" >
                <label class="form-check-label">Nữ</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="radio1" >
                <label class="form-check-label">Khác</label>
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <label >Ảnh đại diện</label>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="avatar" name="txt_avatar">
                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
              </div>
              <div class="input-group-append">
                <span class="input-group-text" id="">Upload</span>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer" style="margin-top: -15px">
          <button type="submit" class="btn btn-primary">Create</button>
          <button type="submit" class="btn btn-primary" style="margin-left: 20px ;background: #FA8072; border: 0px">Reset</button>
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
