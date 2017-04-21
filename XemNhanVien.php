<?php session_start();
include("KetNoi.php");
?>
<div class="div_center_mid">
	<table class="table table-resposive table-hover">
	<caption><h3>Danh sách nhân viên</h3></caption>
	<tr>
		<th>Mã nhân viên</th>
		<th>Tên nhân viên</th>
		<th>Mã phòng ban</th>
		<th>Địa chỉ</th>
	</tr>
	<?php
	$sl= mysqli_query($conn,"select * from nhanvien");
	while($row= mysqli_fetch_assoc($sl)){
		echo '<tr><td>'.$row['MaNhanVien'].'</td>'.'<td>'.$row['TenNhanVien'].'</td>'.'<td>'.$row['MaPhongBan'].'</td>'.'<td>'.$row['DiaChi'].'</td></tr>';
	}
	?>
</table>
</div>