<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SERVER['SCRIPT_FILENAME']; ?></title>
</head>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            Con vật: <input type="text" name="name">
            <input type="submit">
        </form>
        1. chó, 2. gà, 3. chim, 4. người<br>
        <?php
            interface HoatDong {
                public function Keu();
                public function DiChuyen();
            }
            interface SinhSan {
                public function HinhThucSinhSan();
            }
            interface TriThuc {
                public function TinhToan();
            }
            class DongVat {
                private $gioiTinh;
            }
            class Cho extends dongVat implements HoatDong, SinhSan {
                public function __construct($gioiTinh) {
                    $this -> gioiTinh = $gioiTinh;
                }
                public function ThongTin() {
                    return $this -> gioiTinh . ', ' . $this -> Keu() . ', ' . $this -> DiChuyen()
                    . ', ' . $this -> HinhThucSinhSan();
                }
                public function Keu() {
                    return 'gâu gâu';
                }
                public function DiChuyen() {
                    return 'chạy';
                }
                public function HinhThucSinhSan() {
                    return 'đẻ con';
                }
            }
            class Ga extends dongVat implements HoatDong, SinhSan {
                public function __construct($gioiTinh) {
                    $this -> gioiTinh = $gioiTinh;
                }
                public function ThongTin() {
                    return $this -> gioiTinh . ', ' . $this -> Keu() . ', ' . $this -> DiChuyen()
                    . ', ' . $this -> HinhThucSinhSan();
                }
                public function Keu() {
                    return 'ò ó o';
                }
                public function DiChuyen() {
                    return 'chạy, bay';
                }
                public function HinhThucSinhSan() {
                    return 'đẻ trứng';
                }
            }
            class Chim extends dongVat implements HoatDong, SinhSan {
                public function __construct($gioiTinh) {
                    $this -> gioiTinh = $gioiTinh;
                }
                public function ThongTin() {
                    return $this -> gioiTinh . ', ' . $this -> Keu() . ', ' . $this -> DiChuyen()
                    . ', ' . $this -> HinhThucSinhSan();
                }
                public function Keu() {
                    return 'hót líu lo';
                }
                public function DiChuyen() {
                    return 'bay';
                }
                public function HinhThucSinhSan() {
                    return 'đẻ trứng';
                }
            }
            class Nguoi extends dongVat implements HoatDong, SinhSan, TriThuc {
                public function __construct($gioiTinh) {
                    $this -> gioiTinh = $gioiTinh;
                }
                public function ThongTin() {
                    return $this -> gioiTinh . ', ' . $this -> Keu() . ', ' . $this -> DiChuyen()
                    . ', ' . $this -> HinhThucSinhSan() . ', ' . $this -> TinhToan();
                }
                public function Keu() {
                    return 'nói';
                }
                public function DiChuyen() {
                    return 'chạy';
                }
                public function HinhThucSinhSan() {
                    return 'đẻ con';
                }
                public function TinhToan() {
                    return 'tính toán';
                }
            }
            $cho = new Cho('đực');
            $ga = new Ga('mái');
            $chim = new Chim('trống');
            $nguoi = new Nguoi('con gái');
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = $_REQUEST['name'];
                if ($name == 'chó') {
                    echo $cho -> ThongTin();
                } else if ($name == 'gà') {
                    echo $ga -> ThongTin();
                } else if ($name == 'chim') {
                    echo $chim -> ThongTin();
                } else if ($name == 'người') {
                    echo $nguoi -> ThongTin();
                } else {
                    echo 'không hợp lệ';
                }
            }
        ?>
    </body>
</html>