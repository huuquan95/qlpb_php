<?php session_start();
include("KetNoi.php");

$strSearch= addslashes($_REQUEST["strSearch"]);

$sql="select MaNhanVien, TenNhanVien, TenPhongBan, DiaChi from nhanvien join phongban on nhanvien.MaPhongBan=phongban.MaPhongBan where MaNhanVien like N'%$strSearch%' or TenNhanVien like N'%$strSearch%'";

$rs= mysqli_query($conn,$sql);
$text="";

while($row= mysqli_fetch_assoc($rs)){
	$text=$text.'<tr><td>'.$row['MaNhanVien'].'</td><td>'.$row['TenNhanVien'].'</td><td>'.$row['TenPhongBan'].'</td><td>'.$row['DiaChi'].'</td></tr>';
};

if($text==""){

	echo "<h3>Không tìm ra kết quả phù hợp!</h3>";
}
else{

	$text='<h2>Kết quả tìm kiếm</h2><table class="table table-resposive table-hover"><caption><h3>Danh sách nhân viên</h3></caption><tr><th>Mã nhân viên</th><th>Tên nhân viên</th><th>Mã phòng ban</th><th>Địa chỉ</th></tr>'.$text.'</table>';
	
	echo $text;	
}
?>