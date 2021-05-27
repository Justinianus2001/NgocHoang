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
            Đăng ký lớp học: <br>
            Mã SV: <input type="text" name="name-sv">
            Mã Lớp: <input type="text" name="name-lop">
            <input type="submit">
        </form>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            Thay đổi thông tin: <br>
            Mã SV: <input type="text" name="ma-sv">
            Họ tên: <input type="text" name="ho-ten">
            Tuổi: <input type="text" name="tuoi">
            Ngành: <input type="text" name="nganh">
            <input type="submit">
        </form>
        <?php
            error_reporting(E_ERROR | E_PARSE);
            class SinhVien {
                private $maSV;
                private $hoTen;
                private $tuoi;
                private $nganh;
                private $dsLop;
                public function __construct($maSV, $hoTen, $tuoi, $nganh, $dsLop) {
                    $this->maSV = $maSV;
                    $this->hoTen = $hoTen;
                    $this->tuoi = $tuoi;
                    $this->nganh = $nganh;
                    $this->dsLop = $dsLop;
                }
                public function dKyHoc($maLop) {
                    if (!in_array($maLop, $this -> dsLop)) {
                        array_push($this -> dsLop, $maLop);
                        sort($this -> dsLop);
                    }
                }
                public function thayDoiThongTin($hoTen, $tuoi, $nganh) {
                    $this->hoTen = $hoTen;
                    $this->tuoi = $tuoi;
                    $this->nganh = $nganh;
                }
                public function getMaSV() {
                    return $this->maSV;
                }
                public function getHoTen() {
                    return $this->hoTen;
                }
                public function getTuoi() {
                    return $this->tuoi;
                }
                public function getNganh() {
                    return $this->nganh;
                }
                public function getDsLop() {
                    return $this->dsLop;
                }
            }
            class LopHoc {
                private $maLop;
                private $tenLop;
                private $monHoc;
                private $dsSV;
                public function __construct($maLop, $tenLop, $monHoc, $dsSV) {
                    $this->maLop = $maLop;
                    $this->tenLop = $tenLop;
                    $this->monHoc = $monHoc;
                    $this->dsSV = $dsSV;
                }
                public function svDKy($maSV) {
                    if (!in_array($maSV, $this -> dsSV)) {
                        array_push($this -> dsSV, $maSV);
                        sort($this -> dsSV);
                    }
                }
                public function getMaLop() {
                    return $this->maLop;
                }
                public function getTenLop() {
                    return $this->tenLop;
                }
                public function getMonHoc() {
                    return $this->monHoc;
                }
                public function getDsSV() {
                    return $this->dsSV;
                }
            }
            $sv = array(new SinhVien('A', 'Nguyễn Văn A', 18, 'CNTT', array('A', 'B', 'C')),
                        new SinhVien('B', 'Nguyễn Văn B', 19, 'KTPM', array('B', 'C', 'D')),
                        new SinhVien('C', 'Nguyễn Văn C', 18, 'KTPM', array('A', 'C', 'D')),
                        new SinhVien('D', 'Nguyễn Văn D', 19, 'CNTT', array('A', 'B', 'D')));
            $lp = array(new LopHoc('A', 'CNTTA', 'KTLT1', array('A', 'C', 'D')),
                        new LopHoc('B', 'CNTTB', 'KTLT2', array('A', 'B', 'D')),
                        new LopHoc('C', 'CNTTC', 'NNLTBC', array('A', 'B', 'C')),
                        new LopHoc('D', 'CNTTD', 'OOP', array('B', 'C', 'D')));
            foreach ($sv as $val) {
                echo $val -> getMaSV() . ', ' . $val -> getHoTen() . ', ' . $val -> getTuoi() . ', '
                    . $val -> getNganh() . ', DS Lớp: { ';
                foreach ($val -> getDsLop() as $lop) {
                    echo $lop . ' ';
                }
                echo '}<br>';
            }
            echo '<br>';
            foreach ($lp as $val) {
                echo $val -> getMaLop() . ', ' . $val -> getTenLop() . ', ' . $val -> getMonHoc()
                    . ', DS SV: { ';
                foreach ($val -> getDsSV() as $sinhvien) {
                    echo $sinhvien . ' ';
                }
                echo '}<br>';
            }
            echo '<br>';
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nameSV = $_REQUEST['name-sv'];
                $nameLop = $_REQUEST['name-lop'];
                $svIdx = null;
                $lpIdx = null;
                for ($idx = 0; $idx < count($sv); $idx ++) {
                    if (strcmp($sv[$idx] -> getMaSV(), $nameSV) == 0) {
                        $svIdx = $idx;
                    }
                }
                for ($idx = 0; $idx < count($lp); $idx ++) {
                    if (strcmp($lp[$idx] -> getMaLop(), $nameLop) == 0) {
                        $lpIdx = $idx;
                    }
                }
                if (!is_null($svIdx) && !is_null($lpIdx)) {
                    $sv[$svIdx] -> dKyHoc($lp[$lpIdx] -> getMaLop());
                    $lp[$lpIdx] -> svDKy($sv[$svIdx] -> getMaSV());
                }
                $masv = $_REQUEST['ma-sv'];
                $hoten = $_REQUEST['ho-ten'];
                $tuoi = $_REQUEST['tuoi'];
                $nganh = $_REQUEST['nganh'];
                if (!is_null($masv) && !is_null($hoten) && !is_null($tuoi) && !is_null($nganh)) {
                    $svidx = null;
                    for ($idx = 0; $idx < count($sv); $idx ++) {
                        if (strcmp($sv[$idx] -> getMaSV(), $masv) == 0) {
                            $svidx = $idx;
                        }
                    }
                    if (!is_null($svidx)) {
                        $sv[$svidx] -> thayDoiThongTin($hoten, $tuoi, $nganh);
                    }
                }
                echo '<br>';
                echo 'Danh sách sau khi chỉnh sửa:';
                echo '<br>';
                foreach ($sv as $val) {
                    echo $val -> getMaSV() . ', ' . $val -> getHoTen() . ', ' . $val -> getTuoi() . ', '
                        . $val -> getNganh() . ', DS Lớp: { ';
                    foreach ($val -> getDsLop() as $lop) {
                        echo $lop . ' ';
                    }
                    echo '}<br>';
                }
                echo '<br>';
                foreach ($lp as $val) {
                    echo $val -> getMaLop() . ', ' . $val -> getTenLop() . ', ' . $val -> getMonHoc()
                        . ', DS SV: { ';
                    foreach ($val -> getDsSV() as $sinhvien) {
                        echo $sinhvien . ' ';
                    }
                    echo '}<br>';
                }
            }
        ?>
    </body>
</html>