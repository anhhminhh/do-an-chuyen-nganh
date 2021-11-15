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
              <a href="index.php"><button type="submit" class="btn btn-primary"> <i class="fas fa-undo"></i> Trở lại</button></a>
              <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
               <li class="breadcrumb-item active">Quản lý sản phẩm</li>
               <li class="breadcrumb-item active">Thêm sản phẩm</li>
               
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
        <h3 class="card-title">Thêm sản phẩm</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form role="form">
        <div class="card-body">
         <div class="form-group">
          <label>Hãng</label>
          <select class="form-control">
            <option>Apple</option>
            <option>SamSung</option>
            <option>Xiaomi</option>
            <option>Google Pixel</option>

          </select>
        </div>
        <div class="form-group">
          <label >Tên máy</label>
          <input type="text" class="form-control" name="txt_username" id="username">
        </div>
        <div class="form-group">
          <label >Thông số chi tiết</label>
          <input type="password" class="form-control" name="txt_password" id="password">
        </div>
        <div class="form-group">
          <label >Giá bán</label>
          <input type="email" class="form-control" name="txt_email" id="phone">
        </div>
        <div class="form-group">
          <label >Phụ kiện đi kèm</label>
          <input type="email" class="form-control" name="txt_email" id="phone">
        </div>
        
        <div class="form-group">
          <label >Ảnh </label>
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
