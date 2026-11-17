# Hướng dẫn cài đặt và chạy PHP không cần XAMPP

## 1. Mục tiêu

Sau bài học này, sinh viên có thể:

- Cài đặt PHP trên Windows.
- Cài đặt Visual Studio Code.
- Cấu hình PHP trong biến môi trường `PATH`.
- Tạo và chạy chương trình PHP.
- Kiểm tra lỗi cú pháp cơ bản.

## 2. Công cụ cần chuẩn bị

| Công cụ | Công dụng |
| --- | --- |
| PHP | Thực thi chương trình PHP |
| Visual Studio Code | Viết và chỉnh sửa code |

Các bài học đầu tiên không cần XAMPP, MySQL hoặc MySQL Workbench.

## 3. Cài đặt Visual Studio Code

1. Truy cập [code.visualstudio.com](https://code.visualstudio.com/).
2. Tải phiên bản phù hợp với máy tính.
3. Cài đặt và mở Visual Studio Code.

## 4. Cài đặt PHP

1. Truy cập [windows.php.net/download](https://windows.php.net/download/).
2. Tải PHP 8.x phù hợp với máy tính. Với Windows 64-bit, chọn gói ZIP x64.
3. Giải nén PHP, ví dụ vào:

```text
D:\PHP
```

Sau khi giải nén, file thực thi cần có tại:

```text
D:\PHP\php.exe
```

## 5. Thêm PHP vào biến môi trường PATH

PATH giúp Windows tìm thấy lệnh `php` từ mọi thư mục.

1. Nhấn phím Windows và tìm `Environment Variables`.
2. Chọn **Edit the system environment variables**.
3. Chọn **Environment Variables**.
4. Trong **User variables**, chọn biến `Path` rồi chọn **Edit**.
5. Chọn **New** và nhập thư mục chứa `php.exe`, ví dụ:

```text
D:\PHP
```

6. Nhấn **OK** để lưu.
7. Đóng Terminal cũ và mở Terminal mới.

## 6. Kiểm tra PHP

Trong VS Code, chọn **Terminal > New Terminal** rồi nhập:

```bash
php -v
```

Nếu thấy thông tin dạng `PHP 8.x.x (cli)` thì PHP đã được cài đặt.

Nếu xuất hiện lỗi `php is not recognized...`, hãy kiểm tra lại đường dẫn trong `PATH` và mở Terminal mới.

## 7. Tạo và chạy chương trình đầu tiên

1. Tạo thư mục dự án, ví dụ:

```text
D:\PHP-COURSE
```

2. Mở thư mục này bằng VS Code.
3. Tạo file `index.php` với nội dung:

```php
<?php

echo "Xin chào!<br>";
echo "Tôi đang học lập trình PHP.";
```

4. Mở Terminal tại thư mục chứa `index.php`.
5. Chạy máy chủ tích hợp của PHP:

```bash
php -S localhost:8000
```

6. Mở trình duyệt và truy cập [http://localhost:8000](http://localhost:8000).
7. Dừng máy chủ bằng `Ctrl + C`.

## 8. Kiểm tra lỗi cú pháp

Để kiểm tra file mà không chạy chương trình, dùng:

```bash
php -l index.php
```

Nếu không có lỗi, Terminal sẽ hiển thị:

```text
No syntax errors detected in index.php
```
