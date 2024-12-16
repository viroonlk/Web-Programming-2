<?php
    // ตรวจสอบการส่งค่า form
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // รับค่าจากฟอร์ม
        $month = $_POST['month'];
        $year = $_POST['year'];

        // ปรับปีจาก พ.ศ. เป็น ค.ศ.
        if ($year > 2500) {
            $year -= 543;
        }

        // กำหนดจำนวนวันในเดือน
        if ($month == 'มกราคม') {
            $day = 31; // มกราคมมี 31 วัน
        } elseif ($month == 'กุมภาพันธ์') {
            // ตรวจสอบปีอธิกสุรทิน
            if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
                $day = 29; // กุมภาพันธ์มี 29 วันในปีอธิกสุรทิน
            } else {
                $day = 28; // กุมภาพันธ์มี 28 วันในปีปกติ
            }
        } elseif ($month == 'มีนาคม') {
            $day = 31;
        } elseif ($month == 'เมษายน') {
            $day = 30;
        } elseif ($month == 'พฤษภาคม') {
            $day = 31;
        } elseif ($month == 'มิถุนายน') {
            $day = 30;
        } elseif ($month == 'กรกฎาคม') {
            $day = 31;
        } elseif ($month == 'สิงหาคม') {
            $day = 31;
        } elseif ($month == 'กันยายน') {
            $day = 30;
        } elseif ($month == 'ตุลาคม') {
            $day = 31;
        } elseif ($month == 'พฤศจิกายน') {
            $day = 30;
        } elseif ($month == 'ธันวาคม') {
            $day = 31;
        } else {
            $day = "ไม่พบข้อมูลเดือน"; // กรณีไม่พบชื่อเดือนที่กรอก
        }

        // แสดงผล
        echo "วันในเดือน $month: $day วัน, ปี $year";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <div>
            <label for="month">เดือน:</label>
            <input type="text" name="month" id="month" required>
        </div>
        <div>
            <label for="year">ปี:</label>
            <input type="number" name="year" id="year" required>
        </div>
        <div>
            <button type="submit">ยืนยัน</button>
        </div>
    </form>
</body>
</html>
