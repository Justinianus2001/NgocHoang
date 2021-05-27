<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SERVER['SCRIPT_FILENAME']; ?></title>
</head>
    <body>
        * Array functions:<br>
            - array() : khai báo mảng<br>
                + array(value1, value2, value3, ...) : khai báo mảng thường<br>
                + array(key=>value, key=>value, key=>value, ...) : khai báo mảng kết hợp<br>
            - array_count_values(array) : trả về mảng kết hợp với key là giá trị và value là số lần xuất hiện trong mảng<br>
            - array_key_exists(key, array) : trả về true nếu mảng tồn tại khóa key, ngược lại trả về false<br>
            - array_pad(array, size, value) : chèn vào cuối mảng các phần tử giá trị value với số lượng là size<br>
            - array_pop(array) : xóa phần tử cuối cùng của mảng<br>
            - array_product(array) : tính tích tất cả các giá trị của mảng<br>
            - array_push(array, value1, value2, ...) : chèn vào cuối mảng các giá trị mới<br>
            - array_reverse(array) : trả về mảng với thứ tự ngược lại so với mảng ban đầu<br>
            - array_search(value, array) : trả về vị trí xuất hiện đầu tiên của giá trị cần tìm trong mảng<br>
            - array_shift(array) : trả về giá trị đầu tiên của mảng, đồng thời xóa giá trị này<br>
            - array_slice(array, start, length) : trả về mảng với các giá trị có index trong khoảng [start, start + length)<br>
            - array_sum(array) : tính tổng tất cả các giá trị của mảng<br>
            - array_unique(array) : trả về mảng đã loại bỏ các phần tử trùng lặp<br>
            - array_unshift(array, value1, value2, ...) : chèn vào đầu mảng các giá trị mới<br>
            - count(array) : đếm số các phần tử hiện có trong mảng<br>
            - in_array(search, array) : trả về true nếu phần tử cần tìm có trong mảng, ngược lại trả về false<br>
            - range(low, high) : tạo mảng với các phần tử trong đoạn [low, high]<br>
            - rsort(array) : sắp xếp mảng theo giá trị giảm dần<br>
            - shuffle(array) : xáo trộn vị trí các phần tử trong mảng<br>
            - sort(array) : sắp xếp mảng theo giá trị tăng dần<br>
        * String functions:<br>
            - bin2hex(string) : chuyển đổi các ký tự ascii sang hệ 16<br>
            - chr(ascii) : trả về ký tự ascii theo giá trị<br>
            - crypt(str) : mã hóa chuỗi dựa trên hàm băm<br>
            - echo(strings) : xuất chuỗi cần in lên trang web<br>
            - hex2bin(string) : chuyển đổi hệ 16 sang các ký tự ascii<br>
            - md5(string) : mã hóa chuỗi theo dạng MD5<br>
            - ord(string) : trả về giá trị ascii của ký tự đầu chuỗi<br>
            - print(strings) : xuất chuỗi cần in lên trang web, tốc độ chậm hơn so với eho<br>
            - printf(format, arg1, arg2, ...) : xuất chuỗi cần in lên trang web, cú pháp gần giống với printf C<br>
            - sha1(string) : mã hóa chuỗi theo dạng SHA-1<br>
            - str_replace(find, replace, string) : thay thế một vài đoạn chuỗi trong chuỗi bằng các đoạn chuỗi mới<br>
            - str_shuffle(string) : xáo trộn vị trí các ký tự trong chuỗi<br>
            - str_split(string) : tách chuỗi thành một mảng các ký tự<br>
            - str_word_count(string) : đếm số từ trong chuỗi<br>
            - strcmp(string1, string2) : trả về giá trị dương nếu chuỗi trái lớn hơn, âm nếu chuỗi phải lớn hơn và 0 nếu hai chuỗi bằng nhau<br>
            - strlen(string) : trả về độ dài của chuỗi<br>
            - strpos(string, find) : trả về vị trí đầu tiên xuất hiện chuỗi cần tìm, nếu không có trả về false<br>
            - strrev(string) : trả về chuỗi với thứ tự ngược lại so với chuỗi ban đầu<br>
            - strtolower(string) : chuyển chuỗi sang dạng chữ thường<br>
            - strtoupper(string) : chuyển chuỗi sang dạng chữ hoa<br>
            - substr(string, start, length) : trả về chuỗi con các ký tự có index trong khoảng [start, start + length)<br>
            - trim(string) : loại bỏ các khoảng trắng thừa<br>
    </body>
</html>