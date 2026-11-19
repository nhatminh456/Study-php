# Bài 15: `isset()`

## Mục tiêu

- Kiểm tra một biến đã tồn tại hay chưa.
- Hiểu kết quả trả về của `isset()`.
- Tránh sử dụng dữ liệu chưa được khai báo.

## Cú pháp

```php
isset($variable);
```

`isset()` trả về `true` nếu biến đã tồn tại và có giá trị khác `null`. Ngược lại, hàm trả về `false`.

Ví dụ:

```php
$name = "Minh";

if (isset($name)) {
    echo "Biến đã tồn tại";
}
```

## Kết hợp với `if`

```php
if (isset($email)) {
    echo $email;
} else {
    echo "Chưa có email";
}
```

## Lưu ý

- `isset($variable)` trả về `false` nếu biến chưa tồn tại.
- `isset($variable)` cũng trả về `false` nếu biến có giá trị `null`.
- `isset()` không kiểm tra chuỗi có rỗng hay không. Với dữ liệu rỗng, cần dùng thêm cách kiểm tra phù hợp.
