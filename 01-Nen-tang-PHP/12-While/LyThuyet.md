# Bài 12: Vòng lặp `while`

## Mục tiêu

- Hiểu cách lặp khi điều kiện còn đúng.
- Biết cập nhật biến trong vòng lặp.
- Phân biệt `while` với `for`.

## Cú pháp

```php
while (điều_kiện) {
    // Code được lặp lại
}
```

Ví dụ:

```php
$i = 1;

while ($i <= 5) {
    echo $i . "<br>";
    $i++;
}
```

`while` kiểm tra điều kiện trước mỗi lần lặp. Nếu điều kiện sai ngay từ đầu, phần code bên trong có thể không chạy lần nào.

## Cập nhật biến

Biến trong điều kiện cần được thay đổi bên trong vòng lặp:

```php
$count = 0;

while ($count < 3) {
    echo $count;
    $count++;
}
```

Nếu quên `$count++`, vòng lặp có thể chạy vô hạn.

## Khi nào dùng `while`?

Dùng `while` khi chưa biết chính xác số lần lặp, nhưng biết điều kiện để tiếp tục.
