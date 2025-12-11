<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');

/*
 * Config VNPAY environment (Đã bỏ, không dùng)
 *
$vnp_TmnCode = "7RQY8SY0"; 
$vnp_HashSecret = "8EB9JFRGAU4SI044C6LOM0W3HHOP8PJ2"; 
$vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
$vnp_Returnurl = "http://localhost/vnpay_php/vnpay_return.php";
$vnp_apiUrl = "http://sandbox.vnpayment.vn/merchant_webapi/merchant.html";
$apiUrl = "https://sandbox.vnpayment.vn/merchant_webapi/api/transaction";
*
*/

// Thời gian bắt đầu và hết hạn của giao dịch (Chỉ giữ nếu còn dùng logic thời gian)
$startTime = date("YmdHis");
$expire = date('YmdHis', strtotime('+15 minutes', strtotime($startTime)));

// Các thông tin cấu hình chung (nếu cần)
// $vnp_Version = "2.1.0"; 
// $vnp_Command = "pay";    
// $vnp_CurrCode = "VND";   
?>