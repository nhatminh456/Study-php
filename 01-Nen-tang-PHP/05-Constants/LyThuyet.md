# Bài 5: Hằng số

## Mục tiêu

- Phân biệt biến và hằng số.
- Tạo hằng số bằng `define()`.
- Sử dụng hằng số trong chương trình.

## Hằng số là gì?

Hằng số là một giá trị được đặt tên và không thay đổi trong suốt quá trình chạy chương trình.

Ví dụ:

```php
define('PI', 3.14);
echo PI;
```

Tên hằng số thường được viết bằng chữ in hoa để dễ phân biệt với biến.

## So sánh biến và hằng số

```php
$number = 5;       // Biến có thể thay đổi
$number = 10;

define('PI', 3.14); // Hằng số không nên thay đổi
```

Biến được gọi bằng `$number`, còn hằng số được gọi trực tiếp bằng `PI`, không có ký hiệu `$`.

## Lưu ý

- Không đặt tên hằng số trùng với hằng số đã tồn tại.
- Nên đặt tên hằng số rõ ràng, thường bằng chữ in hoa.
- Số `3.14` là dữ liệu số, không cần đặt trong dấu nháy.