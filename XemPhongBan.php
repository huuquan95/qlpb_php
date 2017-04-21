<script type="text/javascript">
	$(document).ready(function() {

		$('#table_PhongBan tr td a').click(function (){
			$("#noidung").load(this.id);
		}); 
	});
</script>

<?php session_start();
include("KetNoi.php");
?>
<div class="div_center_mid">
	<table class="table table-resposive table-hover" id="table_PhongBan">
		<caption><h3>Danh sách phòng ban</h3></caption>
		<tr>
			<th>Mã phòng ban</th>
			<th>Tên phòng ban</th>
			<th>Thời gian</th>
			<th>Xem nhân viên</th>
		</tr>
		<?php
		$sl= mysqli_query($conn,"select * from phongban");
		while($row= mysqli_fetch_assoc($sl)){
			echo '<tr><td>'.$row['MaPhongBan'].'</td><td>'.$row['TenPhongBan'].'</td><td>'.$row['ThoiGian'].'</td><td><a id="XemPhongBanCuthe.php?MaPhongBan='.$row['MaPhongBan'].'" href="#">Xem</a></td></tr>';
		}
		?>
	</table>
</div>