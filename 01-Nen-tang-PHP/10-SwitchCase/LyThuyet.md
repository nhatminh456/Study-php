# Bài 10: Câu lệnh `switch`

## Mục tiêu

- Hiểu khi nào nên dùng `switch`.
- Kiểm tra một giá trị với nhiều trường hợp.
- Sử dụng `case`, `break` và `default`.

## Cú pháp

```php
switch ($value) {
    case "1":
        echo "Trường hợp 1";
        break;
    case "2":
        echo "Trường hợp 2";
        break;
    default:
        echo "Không có lựa chọn phù hợp";
}
```

PHP so sánh giá trị của biến với từng `case` từ trên xuống dưới. Khi tìm thấy trường hợp phù hợp, PHP chạy phần code bên trong.

## `break` và `default`

- `break` dừng `switch` sau khi một `case` được thực hiện.
- Nếu không có `case` nào phù hợp, `default` sẽ được chạy.
- Nên có `default` để xử lý dữ liệu ngoài dự kiến.

## Khi nào dùng `switch`?

`switch` phù hợp khi có một biến cần so sánh với nhiều giá trị cụ thể, chẳng hạn lựa chọn món ăn hoặc menu.

Nếu cần kiểm tra các khoảng giá trị, nên dùng `if`, `elseif` và `else`.

## Lưu ý

Giá trị trong `case` cần phù hợp với kiểu dữ liệu của giá trị được kiểm tra. Ví dụ, nếu lựa chọn là chuỗi thì dùng `"1"` thay vì `1`.
