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
					<td><input class="form-control" type="text" id="MaPhongBan" value="<?php echo $maPhongBan; ?>" disabled></td>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Tên phòng ban</label>
				<div class="col-sm-8">
					<td><input class="form-control" type="text" id="TenPhongBan" value="<?php echo $row['TenPhongBan']; ?>"></td>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Thời gian</label>
				<div class="col-sm-8">
					<td><input class="form-control" type="date" id="ThoiGian" value="<?php echo $row['ThoiGian']; ?>"></td>
				</div>
			</div>
			<div style="text-align:center;">
			<input class="btn" type="button" value="Cập nhật" name="btn_Submit" onclick="save()">
			</div>
		</form>
<label id="notice" class="text-success" style="font-size: 18px;"></label>

		<?php
	}
	else{
		echo '<center><h3>Mã phòng ban: '.$maPhongBan.' không tồn tại trong database!</h3></center>';
	}
	?>
</div>
<script type="text/javascript">
	function save(){

		var http = new XMLHttpRequest();
		http.onreadystatechange = function(){
			if (this.readyState == 4 && this.status == 200 ) {
				$("#notice").text(this.responseText);
			}
		}

		link="XuLySuaPhongBan.php?MaPhongBan="+document.getElementById("MaPhongBan").value+"&TenPhongBan="+document.getElementById("TenPhongBan").value+"&ThoiGian="+document.getElementById("ThoiGian").value;

		http.open("POST",link,true);
		http.send();
	}
</script> 