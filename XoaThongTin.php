<?php session_start();
include("KetNoi.php");
?>
<div class="div_center_mid">
<h2>Xóa Thông Tin</h2>
	<table class="table table-resposive table-hover">
		<caption><h3>Danh sách nhân viên</h3></caption>
		<tr>
			<th>Mã nhân viên</th>
			<th>Tên nhân viên</th>
			<th>Chỉnh sửa</th>
		</tr>
		<?php
		$sl= mysqli_query($conn,"select * from nhanvien");
		while($row= mysqli_fetch_assoc($sl)){
			echo '<tr><td>'.$row['MaNhanVien'].'</td>'.'<td>'.$row['TenNhanVien'].'</td><td><a href=\'?MaNVXoa='.$row['MaNhanVien'].'\'>Xóa</a></td></tr>';
		}
		?>
	</table>
<hr>
	<table class="table table-resposive table-hover">
		<caption><h3>Danh sách phòng ban</h3></caption>
		<tr>
			<th>Mã phòng ban</th>
			<th>Tên phòng ban</th>
			<th>Chỉnh sửa</th>
		</tr>
		<?php
		$sl= mysqli_query($conn,"select * from phongban");
		while($row= mysqli_fetch_assoc($sl)){
			echo '<tr><td>'.$row['MaPhongBan'].'</td><td>'.$row['TenPhongBan'].'</td><td><a href=\'?MaPhongXoa='.$row['MaPhongBan'].'\'>Xóa</a></td></tr>';
		}
		?>
	</table>
</div>