<link rel="stylesheet" href="style.css">
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index.php" class="brand-link">
    <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
    style="opacity: .8">
    <span class="brand-text font-weight-light">Trang Quản Trị </span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="fas fa-user-cog nav-icon"></i>
            <p> Quản lý người dùng
              <i class="right fas fa-angle-left nav-iconn" ></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item" >
              <a href="danhsach_nguoidung.php  ?>" class="nav-link">
               <i class="far fa-folder nav-icon" ></i>
               <p >Danh sách người dùng</p>
             </a>
           </li>
           <li class="nav-item" >
            <a href="taomoi_nguoidung.php" class="nav-link">
             <i class="far fa-folder nav-icon" ></i>
             <p>Thêm người dùng</p>
           </a>
         </li>
       </ul>
     </li>
     <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <li class="nav-item has-treeview" >
        <a href="#" class="nav-link">
         <i class="fas fa-swatchbook nav-icon"></i>
         <p >Quản lý danh mục  <i class="fas fa-angle-left right nav-iconn"></i>
         </p>
       </a>
       <ul class="nav nav-treeview">
        <li class="nav-item" >
          <a href="danhmuc_sanpham.php" class="nav-link" >
            <i class="far fa-folder nav-icon" ></i>
            <p>Sản phẩm</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="danhmuc_baiviet.php" class="nav-link" >
           <i class="far fa-folder nav-icon" ></i>
           <p>Bài viết</p>
         </a>
       </li>
       <li class="nav-item" >
        <a href="danhmuc_lienhe.php" class="nav-link">
          <i class="far fa-folder nav-icon" ></i>
          <p>Liên hệ</p>
        </a>
      </li>
    </ul>
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
         <i class="fas fa-list-alt nav-icon"></i>
         <p> Quản lý sản phẩm
          <i class="right fas fa-angle-left nav-iconn"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item" >
          <a href="sanpham_iphone.php" class="nav-link">
            <i class="far fa-folder nav-icon" ></i>
            <p >Apple</p>
          </a>
        </li>
        <li class="nav-item" >
          <a href="sanpham_samsung.php" class="nav-link">
            <i class="far fa-folder nav-icon" ></i>
            <p>SamSung</p>
          </a>
        </li>
        <li class="nav-item" >
          <a href="sanpham_xiaomi.php" class="nav-link">
            <i class="far fa-folder nav-icon" ></i>
            <p>Xiaomi</p>
          </a>
        </li>
        <li class="nav-item" >
          <a href="sanpham_google.php" class="nav-link">
            <i class="far fa-folder nav-icon" ></i>
            <p>Google Pixel</p>
          </a>
        </li>
      </ul>
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
           <i class="fas fa-clipboard-list nav-icon"></i>
           <p> Quản lý đơn hàng
            <i class="right fas fa-angle-left nav-iconn"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item" >
            <a href="danhsach_donhang.php" class="nav-link">
              <i class="far fa-folder nav-icon" ></i>
              <p >Danh sách đơn hàng</p>
            </a>
          </li>
          <li class="nav-item" >
            <a href="taomoi_donhang.php" class="nav-link">
              <i class="far fa-folder nav-icon" ></i>
              <p>Thêm đơn hàng</p>
            </a>
          </li>
        </ul>
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-file-word nav-icon"></i>
              <p> Quản lý bài viết
                <i class="right fas fa-angle-left nav-iconn"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item" >
                <a href="baiviet_tintuc.php" class="nav-link">
                 <i class="far fa-folder nav-icon" ></i>
                  <p >Tin tức</p>
                </a>
              </li>
              <li class="nav-item" >
                <a href="baiviet_tinkhuyenmai.php" class="nav-link">
                 <i class="far fa-folder nav-icon" ></i>
                  <p>Tin khuyến mãi</p>
                </a>
              </li>
              <li class="nav-item" >
                <a href="baiviet_thongbao.php" class="nav-link">
                 <i class="far fa-folder nav-icon" ></i>
                  <p>Thông báo</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="fas fa-folder-plus nav-icon"></i>
                  <p> Quản lý danh mục bài viết
                    <i class="right fas fa-angle-left nav-iconn"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item" >
                    <a href="qldm_baiviet.php" class="nav-link">
                      <i class="far fa-folder nav-icon" ></i>
                      <p >Danh sách danh mục bài viết</p>
                    </a>
                  </li>
                  <li class="nav-item" >
                    <a href="taomoi_danhmuc_baiviet.php" class="nav-link">
                      <i class="far fa-folder nav-icon" ></i>
                      <p>Thêm danh mục bài viết</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>