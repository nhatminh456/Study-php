# Bài 6: Toán tử số học

## Mục tiêu

- Sử dụng các toán tử số học cơ bản.
- Tính toán từ các biến số.
- Hiểu phép chia và phép chia lấy dư.

## Các toán tử cơ bản

| Toán tử | Ý nghĩa | Ví dụ |
| --- | --- | --- |
| `+` | Cộng | `$a + $b` |
| `-` | Trừ | `$a - $b` |
| `*` | Nhân | `$a * $b` |
| `/` | Chia | `$a / $b` |
| `%` | Chia lấy dư | `$a % $b` |

Ví dụ:

```php
$a = 10;
$b = 3;

echo $a + $b; // 13
echo $a % $b; // 1
```

## Thứ tự tính toán

PHP thực hiện phép nhân và phép chia trước phép cộng và phép trừ. Dùng dấu ngoặc khi muốn quy định thứ tự:

```php
$result = (10 + 2) * 3;
```

## Lưu ý

- Không được chia cho `0`.
- Nên đặt khoảng trắng quanh toán tử để code dễ đọc.