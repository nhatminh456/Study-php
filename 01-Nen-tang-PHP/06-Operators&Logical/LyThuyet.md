# Bài 6: Toán tử số học

## Mục tiêu

- Sử dụng các toán tử số học cơ bản.
- Tính toán từ các biến số.
- Hiểu phép chia và phép chia lấy dư.

## 1. Các toán tử cơ bản

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
# 2. Toán tử gán

Toán tử gán được sử dụng để gán giá trị cho một biến.

# =, +=, -=, *=, /=, %=


| Toán tử | Ý nghĩa | Ví dụ |
| --- | --- | --- |
| `=` | Gán giá trị | `$a = 10` | 
| `+=` | Cộng và gán | `$a += 5` | (tương đương `$a = $a + 5`) 
| `-=` | Trừ và gán | `$a -= 5` | (tương đương `$a = $a - 5`) 
| `*=` | Nhân và gán | `$a *= 5` | (tương đương `$a = $a * 5`) 
| `/=` | Chia và gán | `$a /= 5` | (tương đương `$a = $a / 5`) 
| `%=` | Chia lấy dư và gán | `$a %= 5` | (tương đương `$a = $a % 5`) 

Ví dụ:

```php
$a = 10;
$a += 5; // $a = $a + 5
echo $a; // 15
```

# 3. Toán tử logic 

&&, ||, !

&& : AND (và) - trả về true nếu cả hai điều kiện đều đúng.
|| : OR (hoặc) - trả về true nếu ít nhất một điều kiện đúng.
! : NOT (phủ định) - đảo ngược giá trị logic.

# 4. Toán tử so sánh
| Toán tử | Ý nghĩa | Ví dụ |
| --- | --- | --- |
| `==` | Bằng | `$a == $b` |
| `!=` | Khác | `$a != $b` |
| `>` | Lớn hơn | `$a > $b` |
| `<` | Nhỏ hơn | `$a < $b` |
| `>=` | Lớn hơn hoặc bằng | `$a >= $b` |
| `<=` | Nhỏ hơn hoặc bằng | `$a <= $b` |

# 5. Tiền tố và hậu tố
$a++ : Hậu tố tăng - trả về giá trị hiện tại của $a, sau đó tăng $a lên 1.

$++a : Tiền tố tăng - tăng $a lên 1 trước, sau đó trả về giá trị mới của $a.


## Lưu ý

- Không được chia cho `0`.
- Nên đặt khoảng trắng quanh toán tử để code dễ đọc.