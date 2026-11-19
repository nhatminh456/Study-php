# Bài 13: Vòng lặp `foreach`

## Mục tiêu

- Duyệt từng phần tử của mảng.
- Hiểu biến đại diện cho phần tử hiện tại.
- Duyệt cả giá trị và key của mảng.

## Duyệt giá trị

```php
$names = ["Minh", "Hieu", "Huy"];

foreach ($names as $name) {
    echo $name . "<br>";
}
```

Mỗi lần lặp, `$name` nhận giá trị của một phần tử trong mảng.

## Duyệt key và giá trị

```php
$scores = [
    "Minh" => 8,
    "Hieu" => 7
];

foreach ($scores as $name => $score) {
    echo $name . ": " . $score . "<br>";
}
```

## Khi nào dùng `foreach`?

`foreach` phù hợp nhất khi muốn đọc hoặc xử lý lần lượt tất cả phần tử của mảng mà không cần tự quản lý chỉ số.

## Lưu ý

Không nên thay đổi cấu trúc mảng trong lúc đang duyệt nếu chưa hiểu rõ ảnh hưởng của việc đó.
