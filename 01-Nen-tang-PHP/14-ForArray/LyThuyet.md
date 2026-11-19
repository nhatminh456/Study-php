# Bài 14: Duyệt mảng bằng `for`

## Mục tiêu

- Truy cập phần tử mảng bằng chỉ số.
- Dùng `count()` để biết số phần tử.
- Kết hợp `for` với mảng.

## Chỉ số của mảng

Mảng được đánh chỉ số bắt đầu từ `0`:

```php
$names = ["Minh", "Hieu", "Huy"];

echo $names[0]; // Minh
echo $names[1]; // Hieu
```

## Duyệt mảng bằng `for`

```php
for ($i = 0; $i < count($names); $i++) {
    echo $names[$i] . "<br>";
}
```

Điều kiện phải là `$i < count($names)`. Chỉ số cuối cùng là `count($names) - 1`.

## `count()`

`count()` trả về số phần tử trong mảng:

```php
echo count($names);
```

## Chọn `for` hay `foreach`

- Dùng `for` khi cần làm việc trực tiếp với chỉ số.
- Dùng `foreach` khi chỉ cần lần lượt lấy các phần tử.

## Lỗi thường gặp

Không dùng `$i <= count($names)` vì sẽ truy cập vào chỉ số không tồn tại ở lần lặp cuối.
