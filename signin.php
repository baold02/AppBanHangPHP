<?php
include "connect.php";
$email = $_POST['email'];
$pass = $_POST['pass'];


$query = 'SELECT * FROM `users` WHERE `email` = "'.$email.'" AND "'.$pass.'" 
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