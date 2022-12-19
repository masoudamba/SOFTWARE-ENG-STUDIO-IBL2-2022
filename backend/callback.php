<?php
session_start();

require 'connect.php';

date_default_timezone_set("Africa/Nairobi");
header("Access-Control-Allow-Origin: *");
$data = file_get_contents('php://input');
$json = json_decode($data);
$Body = $json->Body;

if ($ResultCode != 0) {
    exit();
}else {
    $stkCallback = $Body->stkCallback;
    $MerchantRequestID = $stkCallback->MerchantRequestID;
    $checkOutId = $stkCallback->CheckoutRequestID;
    $ResultCode = $stkCallback->ResultCode;
    $CallbackMetadata = $stkCallback->CallbackMetadata;
    $Item = $CallbackMetadata->Item;
    $Item = json_decode(json_encode($Item), true);
    $Amount = json_decode(json_encode($Item[0]));;;
    $MpesaReceiptNumber  = json_decode(json_encode($Item[1]));
    $PhoneNumber = json_decode(json_encode($Item[4]));
    $PhoneNumber = $PhoneNumber->Value;
    $MpesaReceiptNumber = $MpesaReceiptNumber->Value;
    $Amount = $Amount->Value;
    confirmPayment($MpesaReceiptNumber, $checkOutId);

}

function confirmPayment($MpesaReceiptNumber = null, $checkOutId = null)
{
    $dba = new DBA();
    $db = $dba->db;
    try {
        $stmt = $db->prepare("UPDATE payment SET `mpesa_receipt`=:MpesaReceiptNumber, `status`=:status WHERE `query_id`=:checkOutId");
        $stmt->execute([':MpesaReceiptNumber' => $MpesaReceiptNumber, ':status' => 'paid', ':checkOutId' => $checkOutId]);
    } catch (PDOException $e) {
        return $e->getMessage();
    }
}
?>