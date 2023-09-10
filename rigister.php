<?php
include "connect.php";
$email = $_POST['email'];
$pass = $_POST['pass'];
$usernane = $_POST['usernane'];
$phone = $_POST['phone'];

//check data
$query = 'SELECT * FROM `users` WHERE `email` =  "'.$email.'"';
$data = mysqli_query($conn, $query);
$numrow = mysqli_num_rows($data);
if($numrow > 0){
    $arr = [
        'success' => true,  
        'message' => "Email da ton tai"
    ];
}else{
    $query = 'INSERT INTO `users`( `email`, `pass`, `usernane`, `phone`) VALUES ("'.$email.'","'.$pass.'","'.$usernane.'","'.$phone.'")';
    $data = mysqli_query($conn, $query);
    
    if($data != null){
    
        $arr = [
            'success' => true,  
            'message' => "Thanh cong"
        
        ];
    }else{
        $arr = [
            'success' => false,
            'message' => "khong thanh cong"
        ];
    }
}


print_r(json_encode($arr));

?>