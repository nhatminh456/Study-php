<?php
// hàm cơ bản
// function xinchao(){
//     echo "Xin chào";
// }

// xinchao();

// hàm có tham số
// function tinhtong($a,$b) {
//     return $a+$b;
    
// }

// echo tinhtong(10,20);

// function myname($name) {
//     echo "Xin chào $name";
// }

// myname("Minh");

//Ví dụ hàm 2
// function thongtin($name,$age) {
//     echo "Hello tôi tên là $name, tôi $age tuổi ";

// }

// thongtin("Minh",21);


// hàm với tham số mặc định
function info($name = "No name") {
    echo "Xin chào tôi tên là $name";
}

info();

function tong(int $a, int $b) {
    $tong = $a+$b;
    return $tong;
}

echo tong(10,20);


?>