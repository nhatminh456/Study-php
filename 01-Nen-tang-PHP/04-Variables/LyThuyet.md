# Bài 4: Biến trong PHP

## Mục tiêu

- Hiểu biến dùng để làm gì.
- Biết cách tạo và thay đổi giá trị của biến.
- Biết quy tắc đặt tên biến.

## Biến là gì?

Biến là một tên dùng để lưu trữ dữ liệu. Giá trị của biến có thể thay đổi trong quá trình chạy chương trình.

```php
$age = 20;
$age = 21;
```

Sau hai câu lệnh trên, `$age` có giá trị là `21`.

# Cách đặt tên biến

Trong PHP, tên biến:
- Bắt đầu bằng ký hiệu `$`.
- Ký tự đầu tiên sau `$` phải là chữ cái hoặc dấu gạch dưới `_`.
- Có thể chứa chữ cái, chữ số và dấu gạch dưới.
- Không được chứa khoảng trắng.
- Phân biệt chữ hoa và chữ thường.
Ví dụ hợp lệ:
```php

$name = "An";
$_class = "KTPM";
$student1 = "Bình";

```
# Một số kiểu dữ liệu cơ bản

```php
$name = "An";     // chuỗi
$age = 20;        // số nguyên
$score = 8.5;     // số thực
$isPassed = true; // đúng hoặc sai
```

# In giá trị của biến

```php
echo $name;
```

Có thể nối nhiều dữ liệu bằng dấu chấm:

```php
echo "Tuổi: " . $age;
```