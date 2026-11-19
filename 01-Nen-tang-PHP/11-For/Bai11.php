<?php

$tong =0;


for($i=0; $i<=10; $i++) {
    $tong+=$i;
    echo "Vòng lặp thứ: " . $tong . "<br>";
}

// Lần 1
// tổng = 0, lần lặp đầu tiên i = 0 thỏa điều kiện i <=10, thực hiện tong = 0 + 0
// lần 2
// tong = 0, lần lặp thứ 2 i = 1 thỏa điều kiện, thực hiện tong = 0+1 (1).
// lần 3
// tong = 1, lần lặp thứ 3 i = 2 thỏa điều kiện, thực hiện tong = 1 + 2 (3).
// lần 4 
// tong = 3, lần lặp thứ 4 i = 3, thỏa, thực hiện tong = 3 + 3 (6).
// lần 5 
// tong = 6, lần lặp thứ 5 i =4, thỏa, thực hiện tổng = 6 + 4 (10)
// lần 6
// tong 10, lần lặp thứ 6 i =5, thỏa, thực hiện tổng = 10 + 5 (15)
// lần 7
// tong 15, lần lặp thứ 7 i =6, thỏa, thực hiện tổng = 15 + 6 (21)
// lần 8 
// tong = 21 lần lặp thứ 8, i =7, thỏa, thực hiện tổng = 21+ 7 (28)
// lần 9 
// tong = 28 lần lặp thứ 9, i =8,thỏa, thực hiện tổng = 28 + 8 (36)
// lần 10 
// tong = 36, lần lặp thứ 10, i =9,thỏa, thực hiện tổng = 36 +9 (45)
// lần 11
// tong = 45, lần lặp thứ 11, i = 10,thỏa, thực hiện tổng = 45 + 10 (55)

?>