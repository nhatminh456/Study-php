<?php

// 3. Toán tử logic
$a = true;
$b = false;

// AND
if($a && $b) {
    echo "Cả hai đều đúng" . "<br>";
} else {
    echo "Ít nhất một trong hai sai" . "<br>";
} 

// OR
if($a || $b) {
    echo "Ít nhất một trong hai đúng" . "<br>";
} else {
    echo "Cả hai đều sai" . "<br>";
}

// NOT
if(!$a) {
    echo "a là sai" ;
} else {
    echo "a là đúng" ;
}

?>