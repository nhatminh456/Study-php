# Bài 16: Hàm trong PHP

## Mục tiêu

- Hiểu vì sao cần sử dụng hàm.
- Tạo và gọi hàm.
- Truyền tham số vào hàm.
- Nhận kết quả bằng `return`.
- Sử dụng tham số mặc định và kiểu dữ liệu cơ bản.

## Hàm là gì?

Hàm là một nhóm câu lệnh được đặt tên để có thể gọi lại nhiều lần. Hàm giúp code dễ dùng lại và dễ bảo trì hơn.

## Hàm không có tham số

```php
function sayHello() {
    echo "Xin chào!";
}

sayHello();
```

## Hàm có tham số

```php
function greet($name) {
    echo "Xin chào " . $name;
}

greet("Minh");
```

Tham số là dữ liệu được truyền vào khi gọi hàm.

## Hàm trả về kết quả

```php
function sum($a, $b) {
    return $a + $b;
}

$result = sum(10, 20);
echo $result;
```

`return` kết thúc hàm và gửi kết quả về nơi gọi hàm.

## Tham số mặc định

```php
function info($name = "No name") {
    echo "Xin chào " . $name;
}

info();
info("Minh");
```

Nếu không truyền đối số, hàm sử dụng giá trị mặc định.

## Kiểu dữ liệu của tham số

Có thể khai báo kiểu cho tham số:

```php
function sum(int $a, int $b): int {
    return $a + $b;
}
```

Khai báo kiểu giúp code rõ ràng hơn và phát hiện dữ liệu không phù hợp sớm hơn.
