<?php
	$sql_sua_danhmucbv = "SELECT * FROM tbl_danhmucbaiviet WHERE id_baiviet='$_GET[idbaiviet]' LIMIT 1";
	$query_sua_danhmucbv = mysqli_query($mysqli,$sql_sua_danhmucbv);
?>
<p>Sửa danh mục sản phẩm</p>
<table class="table">
 <form method="POST" action="modules/quanlydanhmucbaiviet/xuly.php?idbaiviet=<?php echo $_GET['idbaiviet'] ?>">
 	<?php
 	while($dong = mysqli_fetch_array($query_sua_danhmucbv)) {
 	?>
	  <tr class="table-primary">
	  	<td>Tên danh mục</td>
	  	<td><input type="text" value="<?php echo $dong['tendanhmuc_baiviet'] ?>" name="tendanhmucbaiviet"></td>
	  </tr>
	  <tr class="table-primary">
	    <td>Thứ tự</td>
	    <td><input type="text" value="<?php echo $dong['thutu'] ?>" name="thutu"></td>
	  </tr>
	   <tr class="table-primary">
	    <td colspan="2"><input type="submit" name="suadanhmucbaiviet" value="Sửa danh mục bài viết"></td>
	  </tr>
	  <?php
	  } 
	  ?>

 </form>
</table>