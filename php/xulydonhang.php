<?php
require_once('../BackEnd/ConnectionDB/DB_classes.php');

if (isset($_POST['request']) && $_POST['request'] == 'getall') {
	// Lấy danh sách đơn hàng
	$donhang = (new HoaDonBUS())->select_all();

	// Lấy danh sách chi tiết đơn hàng
	$ctdonhang = (new ChiTietHoaDonBUS())->select_all();

	// Gộp các chi tiết đơn hàng vào các đơn hàng tương ứng
	foreach ($donhang as &$dh) {
		$dscthd = array_filter($ctdonhang, function ($cthd) use ($dh) {
			return $cthd['MaHD'] == $dh['MaHD'];
		});
		$dh['ChiTiet'] = $dscthd;
	}

	// Trả về kết quả dưới dạng JSON
	die(json_encode($donhang));
}
?>