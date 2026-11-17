<?php

// strlen() lấy độ dài của chuỗi.
$name = "Nhatminh";
echo "Độ dài chuỗi: " . strlen($name) . "<br>";

// str_word_count() đếm số lượng từ trong chuỗi tiếng Anh.
$sentence = "I am learning PHP";
echo "Số từ: " . str_word_count($sentence) . "<br>";

// strrev() đảo ngược chuỗi.
echo "Chuỗi đảo ngược: " . strrev($name);

// strpos() tìm vị trí xuất hiện đầu tiên của một chuỗi con trong chuỗi cha.
echo strpos("TranNhatMinh", "Minh");

// str_replace() thay thế một chuỗi con bằng một chuỗi khác trong chuỗi cha.
// 3 tham số 
echo str_replace("aaa","tran","aaanhatminh");
?>