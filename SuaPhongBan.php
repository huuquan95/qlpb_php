<div class="div_center_mid">
<h2>Cập nhật thông tin phòng ban</h2>
	<?php session_start();
include("KetNoi.php");
$maPhongBan= $_GET["MaPhongBan"];
$sl= mysqli_query($conn,"select * from phongban where MaPhongBan='$maPhongBan'");
if($row= mysqli_fetch_assoc($sl)){
	?>

	<form class="form-horizontal" style="margin-top:50px;">
		<div class="form-group">
			<label class="col-sm-3 control-label">Mã phòng ban</label>
			<div class="col-sm-8">
				<td><input class="form-control" type="" name="" value="<?php echo $maPhongBan; ?>" disabled></td>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label">Tên phòng ban</label>
			<div class="col-sm-8">
				<td><input class="form-control" type="" name="" value="<?php echo $row['TenPhongBan']; ?>"></td>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label">Thời gian</label>
			<div class="col-sm-8">
				<td><input class="form-control" type="date" name="" value="<?php echo $row['Thoigian']; ?>"></td>
			</div>
		</div>
		<div style="text-align:center;">
			<input class="btn" type="submit" value="Cập nhật" name="btn_Submit">
		</div>
	</form>

	<?php
}
else{
	echo '<center><h3>Mã phòng ban: '.$maPhongBan.' không tồn tại trong database!</h3></center>';
}
?>
</div>