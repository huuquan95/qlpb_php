<?php session_start();
include("KetNoi.php");
$maPhongBan= $_GET["MaPhongBan"];

$rs= mysqli_query($conn,"select * from phongban where MaPhongBan='$maPhongBan'");
$row= mysqli_fetch_assoc($rs);
$tenPhongBan= $row['TenPhongBan'];
?>
<div class="div_center_mid">
	<table class="table table-resposive table-hover">
		<caption><h3>Danh sách nhân viên trong phòng <?php echo $tenPhongBan; ?></h3></caption>
		<tr>
			<th>Mã nhân viên</th>
			<th>Tên nhân viên</th>
			<th>Địa chỉ</th>
		</tr>
		<?php
		$rs= mysqli_query($conn,"select * from nhanvien where MaPhongBan='$maPhongBan'");
		while($row= mysqli_fetch_assoc($rs)){
			echo '<tr><td>'.$row['MaNhanVien'].'</td><td>'.$row['TenNhanVien'].'</td><td>'.$row['DiaChi'].'</td></tr>';
		}
		?>
	</table>
</div>