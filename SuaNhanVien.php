<div class="div_center_mid">
	<h2>Cập nhật thông tin nhân viên</h2>
	<?php session_start();
	include("KetNoi.php");
	$maNhanVien= $_GET["MaNhanVien"];
	$sl= mysqli_query($conn,"select * from nhanvien where MaNhanVien='$maNhanVien'");
	if($row= mysqli_fetch_assoc($sl)){
		?>

		<form class="form-horizontal" style="margin-top:50px;" method="post">
			<div class="form-group">
				<label class="col-sm-3 control-label">Mã nhân viên:</label>
				<div class="col-sm-8">
					<input class="form-control" type="text" id="MaNhanVien" value="<?php echo $maNhanVien; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Tên nhân viên:</label>
				<div class="col-sm-8">
					<input class="form-control" type="text" id="TenNhanVien" value="<?php echo $row['TenNhanVien']; ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Mã phòng ban:</label>
				<div class="col-sm-8">
					<input class="form-control" type="text" id="MaPhongBan" value="<?php echo $row['MaPhongBan']; ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Địa chỉ:</label>
				<div class="col-sm-8">
					<input class="form-control" type="text" id="DiaChi" value="<?php echo $row['DiaChi']; ?>">
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
		echo '<center><h3>Mã nhân viên: '.$maNhanVien.' không tồn tại trong database!</h3></center>';
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

		link="XuLySuaNhanVien.php?MaNhanVien="+document.getElementById("MaNhanVien").value+"&TenNhanVien="+document.getElementById("TenNhanVien").value+"&MaPhongBan="+document.getElementById("MaPhongBan").value+"&DiaChi="+document.getElementById("DiaChi").value;

		http.open("POST",link,true);
		http.send();
	}
</script> 