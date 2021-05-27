<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SERVER['SCRIPT_FILENAME']; ?></title>
</head>
    <body>
        * Session: <br>
            - Khái niệm:<br>
                + Dùng để lưu trữ các biến và các biến đó có thể tồn tại từ trang này qua trang khác, miễn là cùng tên miền<br>
                + Được lưu trữ trên server, kết thúc vòng đời khi ta xóa nó hoặc tắt trình duyệt<br>
            - Cú pháp:<br>
                + session_start() : bắt đầu session, phải khai báo trước thẻ &lt;html&gt;<br>
                + $_SESSION['session_name'] = session_value : khởi tạo một session<br>
                + $_SESSION['session_name'] : sử dụng session nếu nó tồn tại<br>
                + unset($_SESSION['session_name']) : hủy session<br>
                + session_unset(), session_destroy() : xóa bỏ tất cả các session<br>
        * Cookie: <br>
            - Khái niệm:<br>
                + Dữ liệu được lưu trên máy khách, khi máy khách yêu cầu đến máy chủ, nó sẽ gửi phần dữ liệuđược lưu trong cookie tương ứng tới máy chủ đó<br>
                + Có kích thước giới hạn là 4Kb<br>
                + Số cookie tối đa lưu trên một server là 50 cookie<br>
            - Cú pháp:<br>
                + setcookie(name, value, time, path, domain, security) : khởi tạo (hoặc chỉnh sửa cookie nếu đã tồn tại), phải khai báo trước thẻ &lt;html&gt;<br>
                    . name : tên của cookie (bắt buộc)<br>
                    . value : giá trị của cookie<br>
                    . time : thời gian tồn tại (giây)<br>
                    . path : thư mục chứa cookie<br>
                    . domain : tên miền chứa cookie<br>
                    . security : 1 nếu cookie chỉ được gửi bằng đường dẫn HTTPS, 0 nếu cookie có thể gửi bằng đường dẫn HTTP thông thường<br>
                + $_COOKIE['cookie_name'] : sử dụng cookie nếu nó tồn tại<br>
        * Điểm khác nhau:<br>
        <table>
            <tr>
                <th></th>
                <th>Session</th>
                <th>Cookie</th>
            </tr>
            <tr>
                <td>Vị trí lưu: </td>
                <td>Trên server</td>
                <td>Trình duyệt client</td>
            </tr>
            <tr>
                <td>Bảo mật: </td>
                <td>Bảo mật tốt</td>
                <td>Bảo mật kém</td>
            </tr>
            <tr>
                <td>Giới hạn: </td>
                <td>Không giới hạn</td>
                <td>Có giới hạn</td>
            </tr>
        </table>
    </body>
</html>