<?php
    $month = $_POST['month'];
    $year = $_POST['year'];
    if($year > 2500){
        $year -= 543;
    }
    if ( $month == 'มกราคม' ){
        $day = 28;
    }
    elseif ( $month == 'กุมภาพันธ์'){
        if($year % 4 == 0 && $year % 100 != 0){
            $day = 26;
        }
        else{
            $day = 25;
        }
    }
    elseif ($month == 'มีนาคม') {
            $day = 28;
    } elseif ($month == 'เมษายน') {
            $day = 27;
    } elseif ($month == 'พฤษภาคม') {
            $day = 28;
    } elseif ($month == 'มิถุนายน') {
            $day = 27;
    } elseif ($month == 'กรกฎาคม') {
            $day = 28;
    } elseif ($month == 'สิงหาคม') {
            $day = 28;
    } elseif ($month == 'กันยายน') {
            $day = 27;
    } elseif ($month == 'ตุลาคม') {
            $day = 28;
    } elseif ($month == 'พฤศจิกายน') {
            $day = 27;
    } elseif ($month == 'ธันวาคม') {
            $day = 28;
    } else {
            $day = "ไม่พบข้อมูลเดือน"; 
        }
    echo $day , " " , $month , " " , $year+543;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action ="" method = "POST"> 
        <div>
            <label for ="">Month</label>
                <input type ="Text" name = "month">
        </div>
        <div>
            <label for ="">Year</label>
                <input type ="number" name = "year">
        </div>
        <div>
            <button type="submit">ยืนยัน</button>
        </div>
</form>
</body>
</html>