# Bài 7: Câu lệnh điều kiện

## Mục tiêu

- Hiểu điều kiện đúng và sai.
- Sử dụng `if`, `elseif` và `else`.
- Kết hợp điều kiện với các toán tử so sánh.

## Cấu trúc `if`

```php
if (điều_kiện) {
    // Code chạy khi điều kiện đúng
}
```

Ví dụ:

```php
$age = 19;

if ($age >= 18) {
    echo "Người trưởng thành";
}
```

## Cấu trúc `if - elseif - else`

```php
if ($score >= 8) {
    echo "Giỏi";
} elseif ($score >= 5) {
    echo "Đạt";
} else {
    echo "Chưa đạt";
}
```

PHP kiểm tra từ trên xuống dưới. Khi gặp điều kiện đúng, PHP chạy khối lệnh đó và bỏ qua các nhánh còn lại.

## Toán tử so sánh

| Toán tử | Ý nghĩa |
| --- | --- |
| `>` | Lớn hơn |
| `<` | Nhỏ hơn |
| `>=` | Lớn hơn hoặc bằng |
| `<=` | Nhỏ hơn hoặc bằng |
| `==` | Bằng về giá trị |
| `!=` | Khác |

## Lưu ý

- Kiểm tra các khoảng giá trị theo thứ tự rõ ràng.
- Dùng `==` để so sánh, không dùng `=` vì `=` là phép gán.