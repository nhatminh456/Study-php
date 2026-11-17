# Bài 7: Chuỗi trong PHP

## Mục tiêu

- Tạo và xuất chuỗi.
- Đếm độ dài chuỗi.
- Đếm số từ trong chuỗi.
- Đảo ngược chuỗi.

## Chuỗi là gì?

Chuỗi là một dãy ký tự được đặt trong dấu nháy:

```php
$name = "Nhatminh";
```

## `strlen()`

`strlen()` trả về độ dài chuỗi:

```php
echo strlen("Nhatminh");
```

## `str_word_count()`

`str_word_count()` đếm số từ, phù hợp nhất với chuỗi tiếng Anh:

```php
echo str_word_count("I am learning PHP");
```

## `strrev()`

`strrev()` đảo ngược thứ tự ký tự:

```php
echo strrev("Minh");
```

Kết quả là `hniM`.


## `strpos()` tìm vị trí xuất hiện đầu tiên của một chuỗi con trong chuỗi cha.
```php
echo strpos("TranNhatMinh", "Minh"); Một lưu ý quan trọng là trong lập trình, vị trí bắt đầu được tính từ số 0 chứ không phải số 1.
```

# `str_replace()` thay thế một chuỗi con bằng một chuỗi khác trong chuỗi cha.
```php
echo str_replace("aaa","tran","aaanhatminh"); 
có 3 tham trong đó tham số 1 là chỗ muốn thay, tham số 2 là chữ muốn thay, tham số là chuỗi gốc
```
## Lưu ý về tiếng Việt

`strlen()` đếm byte nên có thể không cho kết quả là số ký tự khi chuỗi có dấu tiếng Việt. `str_word_count()` cũng không phải lựa chọn phù hợp để đếm từ tiếng Việt. Phần xử lý Unicode có thể học ở bài nâng cao.