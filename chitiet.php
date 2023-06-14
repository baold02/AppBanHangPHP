<?php
include "connect.php";
$page = $_POST['page'];
$total = 5;
$pos = ($page-1)*$total;
$loai = $_POST['loai'];
$query = 'SELECT * FROM `sanphammoi` WHERE `loai` = '.$loai.' LIMIT '.$page.','.$total.'
';
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