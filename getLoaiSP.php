<?php
include "connect.php";
$query =  "SELECT * FROM `sanpham`";
$data = mysqli_query($conn,$query);
$reslut = array();
while($row = mysqli_fetch_assoc($data)){
    $reslut[] = ($row);
}

if($reslut != null){

    $arr = [
        'success' => true,
        'message' => "Thanh cong",
        'reslut' => $reslut
    ];
}else{
    $arr = [
        'success' => false,
        'message' => "That bai",
    ];
}

print_r(json_encode($arr));
?>