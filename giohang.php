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
  <h2 class="text-center" style="color: red; font-style: bold; margin-top: 30px">GIỎ HÀNG</h2>
  <div class="container" style="border : 2px solid #000"> 
   <table id="cart" class="table table-hover table-condensed"> 
    <thead> 
     <tr> 
      <th>STT</th>
      <th >Hình ảnh</th>
      <th >Tên sản phẩm</th> 
      <th >Giá</th> 
      <th >Số lượng</th> 
      <th >Thành tiền</th> 
      <th ></th> 
      <th ></th> 
      <th ></th> 
    </tr> 
  </thead> 
  <tbody>
   <?php
   for ($i = 0; $i < 5; $i++) {
   echo '<tr>';
    echo ' <td style="width: 10px" > ' . ($i + 1) . ' </td>';
    echo ' <td><img src="images/Google-pixel-6-trasera-removebg-preview.png" alt="Sản phẩm 1" class="img-responsive" width="100px"></td>';
    echo ' <td>Google Pixel 6</td> ';
    echo ' <td>10.000.000 vnđ</td> ';
    echo ' <td>1</td> ';
    echo ' <td>10.000.000</td> ';
    echo ' <td ><a href="#"> <button type="submit" class="btn btn-primary1" style="background: #7B68EE;"> <i class="fas fa-book-reader"></i> &nbsp; Chi tiết</button></a> </td>';
    echo ' <td ><a href="#"> <button type="submit" class="btn btn-primary1" style="background: #FFA500"> <i class="fas fa-trash-alt"></i> &nbsp;  Xoá</button></a> </td>';

  }
echo '</tr>'
?>

</tbody><tfoot> 
 <tr> 
  <td><a href="brand.php" class="btn btn-warning"> Tiếp tục mua hàng</a>
  </td> 
  <td colspan="5" class="hidden-xs"> </td> 
  <td class="hidden-xs text-center" ><strong>Tổng tiền 50.000.000 vnđ</strong>
  </td> 
  <td><a href="about.php" class="btn btn-success btn-block">Thanh toán </a>
  </td> 
</tr> 
</tfoot> 
</table>
</div>
<footer>
  <?php include 'layouts/footerpage.php'; ?>

</body>

</html>