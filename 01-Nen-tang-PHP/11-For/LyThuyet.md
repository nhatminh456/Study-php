# Bài 11: Vòng lặp `for`

## Mục tiêu

- Hiểu cách lặp một đoạn code với số lần xác định.
- Sử dụng biến đếm trong vòng lặp.
- Tính tổng bằng vòng lặp `for`.

## Cú pháp

```php
for (khởi_tạo; điều_kiện; cập_nhật) {
    // Code được lặp lại
}
```

Ví dụ:

```php
for ($i = 1; $i <= 5; $i++) {
    echo $i . "<br>";
}
```

Vòng lặp thực hiện theo thứ tự:

1. Gán giá trị ban đầu cho `$i`.
2. Kiểm tra điều kiện.
3. Chạy code nếu điều kiện đúng.
4. Cập nhật `$i`.
5. Quay lại bước 2.

## Tính tổng

```php
$sum = 0;

for ($i = 1; $i <= 10; $i++) {
    $sum += $i;
}

echo $sum;
```

## Lỗi thường gặp

- Quên cập nhật biến đếm, làm vòng lặp chạy vô hạn.
- Dùng `<=` khi chỉ muốn lặp đến trước một giá trị.
- Đặt điều kiện luôn đúng.