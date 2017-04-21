<?php session_start();
include("KetNoi.php");

$maPhongBan= addslashes($_REQUEST["MaPhongBan"]);
$tenPhongBan= addslashes($_REQUEST["TenPhongBan"]);
$thoiGian= addslashes($_REQUEST["ThoiGian"]);

$sql="update PHONGBAN set TenPhongBan=N'$tenPhongBan', ThoiGian='$thoiGian' where MaPhongBan='$maPhongBan'";
$rs= mysqli_query($conn,$sql);

echo "Cập nhật thành công!";
?>