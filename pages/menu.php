<?php

	$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
	$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
	
	    		
?>
<?php
	if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
		unset($_SESSION['dangky']);
	} 
?>
<div class="menu">
			<a href="index.php" class="icon-link">
			<img src="//bizweb.dktcdn.net/thumb/medium/100/394/290/themes/826502/assets/logo.png?1632458437406" alt="EGA Fashion">
			</a>
			<ul class="list_menu">
				<li><a href="index.php">Trang chủ</a></li>
				<?php 
				while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
				?>
				<?php
				} 
				?>
				<li><a href="index.php?quanly=giohang">Giỏ hàng</a></li>
				<?php
				if(isset($_SESSION['dangky'])){ 

				?>
				<li><a href="index.php?dangxuat=1">Đăng xuất</a></li>
				<li><a href="index.php?quanly=thaydoimatkhau">Thay đổi mật khẩu</a></li>
				<?php
				}else{ 
				?>
				<li><a href="index.php?quanly=dangky">Đăng ký</a></li>
				<?php
				} 
				?>
				

				<li><a href="index.php?quanly=tintuc">Tin tức</a></li>
				
			</ul>

			<span class="search">
				<form action="index.php?quanly=timkiem" method="POST">
					<input type="text" placeholder="Tìm kiếm sản phẩm..." name="tukhoa">
					<input type="submit" name="timkiem" value="Tìm kiếm">
				</form>
			</span>
		</div>