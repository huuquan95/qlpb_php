<?php session_start();
include("KetNoi.php");

$maNhanVien= addslashes($_REQUEST["MaNhanVien"]);
$tenNhanVien= addslashes($_REQUEST["TenNhanVien"]);
$maPhongBan= addslashes($_REQUEST["MaPhongBan"]);
$diaChi= addslashes($_REQUEST["DiaChi"]);

$sql="update NHANVIEN set TenNhanVien=N'$tenNhanVien', MaPhongBan='$maPhongBan',DiaChi=N'$diaChi' where MaNhanVien='$maNhanVien'";
$rs= mysqli_query($conn,$sql);

echo "Cập nhật thành công!";
?>