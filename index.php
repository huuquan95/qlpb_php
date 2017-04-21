<!DOCTYPE html>
<html>
<head>
	<title>Trang Chủ</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {

			$("#noidung").load('TrangChu.php');

			$('#list_menu li a').click(function (){
				$("#noidung").load(this.id);
			});
		});
	</script>
</head>

<body>
	<div class="container">
		<div class="col-md-2"><img src="img/img10.png" alt="Image" style="width: 100%;height: auto;"> </div>
		<div class="col-md-8 div_center_top">
			<center><h1>CHƯƠNG TRÌNH QUẢN LÝ PHÒNG BAN</h1></center>
		</div>
		<div class="col-md-2"><img src="img/img1.png" alt="Image" style="width: 100%;height: auto;"> </div>
	</div>
	<div class="container">
		<div class="col-md-2"> 
			<ul id="list_menu">
				<li><a id="TrangChu.php">Trang chủ</a></li>
				<li><a id="XemNhanVien.php">Xem nhân viên</a></li>
				<li><a id="XemPhongBan.php">Xem phòng ban</a></li>
				<li><a id="TimKiem.php">Tìm kiếm</a></li>
				<li><a id="CapNhatThongTin.php">Cập nhật thông tin</a></li>
				<li><a id="XoaThongTin.php">Xóa thông tin</a></li>
				<li><a id="XoaTatCa.php">Xóa tất cả</a></li>
				<li><a id="TroGiupChuongTrinh.php">Trợ giúp chương trình</a></li>
			</ul>
		</div>
		<div class="col-md-8 container" style="margin-top: 30px;" id="noidung">
		</div>
		<div class="col-md-2">
			<img src="img/img8.jpg" alt="Image" style="width: 100%;">
			<img src="img/img6.jpg" alt="Image" style="width: 100%;">
			<img src="img/img10.png" alt="Image" style="width: 100%;">
		</div>
	</div>
</body>
</html>