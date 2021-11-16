
  <?php
  if(isset($_SESSION['dangky'])){
    echo 'xin chào: '.'<span style="color:red">'.$_SESSION['dangky'].'</span>';
    
  } 
  ?>
</p>
<?php
	if(isset($_SESSION['cart'])){
		
	}
?>
<table class="table">
  <tr>
    <th>Id</th>
    <th>Mã sp</th>
    <th>Tên sản phẩm</th>
    <th>Hình ảnh</th>
    <th>Số lượng</th>
    <th>Giá sản phẩm</th>
    <th>Thành tiền</th>
    <th>Quản lý</th>
   
  </tr>
  <?php
  if(isset($_SESSION['cart'])){
  	$i = 0;
  	$tongtien = 0;
  	foreach($_SESSION['cart'] as $cart_item){
  		$thanhtien = $cart_item['soluong']*$cart_item['giasp'];
  		$tongtien+=$thanhtien;
  		$i++;
  ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $cart_item['masp']; ?></td>
    <td><?php echo $cart_item['tensanpham']; ?></td>
    <td><img src="admincp/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh']; ?>" width="150px"></td>
    <td>
    <a href="pages/main/themgiohang.php?tru=<?php echo $cart_item['id'] ?>"><i class="fa fa-minus fa-style" aria-hidden="true"></i></a>
    	<?php echo $cart_item['soluong']; ?>
    	
      <a href="pages/main/themgiohang.php?cong=<?php echo $cart_item['id'] ?>"><i class="fa fa-plus fa-style" aria-hidden="true"></i></a>
    </td>
    <td style=" color:#ee4d2d"><?php echo number_format($cart_item['giasp'],0,',','.').'đ'; ?></td>
    <td style=" color:#ee4d2d"><?php echo number_format($thanhtien,0,',','.').'đ' ?></td>
    <td style="text-align: center; color:red "><a href="pages/main/themgiohang.php?xoa=<?php echo $cart_item['id'] ?>"><i class="far fa-trash-alt icon-del"></i></a></td>
  </tr>
  <?php
  	}
  ?>
   <tr>
    <td colspan="8">
    	<h4 style="float: left;">Tổng tiền: <span style="color:#ee4d2d;display:"><?php echo number_format($tongtien,0,',','.').'vnđ' ?></span></h4><br/>
    	<h6 style="float: right;margin: -13px 0 0 0;"><a href="pages/main/themgiohang.php?xoatatca=1">Xoá tất cả</a></h6>
      <div style="clear: both;"></div>
      <?php
        if(isset($_SESSION['dangky'])){
          ?>
           <p style="text-align:center"><a class="order" href="pages/main/thanhtoan.php">Đặt hàng</a></p>
      <?php
        }else{
      ?>
        <p style="text-align: center;"><a class="order" href="index.php?quanly=dangky">Đăng ký đặt hàng</a></p>
      <?php
        }
      ?>
      
     


    </td>

   
  </tr>
  <?php	
  }else{ 
  ?>
   <tr>
    <td colspan="8"><p style="text-align:center;"><img src="https://bizweb.dktcdn.net/100/408/793/themes/794454/assets/empty-cart.png?1615794453304" alt=""></p></td>
   
  </tr>
  <?php
  } 
  ?>
 
</table>