# Bài 2: echo

## Mục tiêu

- Dùng `echo` để xuất dữ liệu.
- Xuất chuỗi và giá trị biến.
- Hiểu hai cách chèn biến vào chuỗi.

## `echo` là gì?

`echo` là một cấu trúc ngôn ngữ dùng để xuất dữ liệu ra màn hình:

```php
echo "Xin chào!";
```

## Xuất nhiều giá trị

`echo` có thể xuất nhiều giá trị trong cùng một câu lệnh:

```php
echo "Xin ", "chào ", "bạn!";
```

## Chèn biến vào chuỗi

Với chuỗi dùng dấu nháy kép, có thể chèn biến trực tiếp:

```php
$name = "An";
echo "Xin chào $name";
```

## Nối chuỗi

Dùng dấu chấm `.` để nối chuỗi:

```php
echo "Xin chào " . $name;
```

Nhớ thêm khoảng trắng nếu muốn các từ không bị dính vào nhau.