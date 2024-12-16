<?php
$month = $_POST['month'];
switch ($month){
    case 1 :
        echo "Jan"; break;
    case 2 :
        echo "Feb"; break;
    case 3 :
        echo "Mar"; break;
    case 4 :
        echo "Apr"; break;
    case 5 :
        echo "May"; break;
    case 6 :
        echo "Jun"; break;
    case 7 :
        echo "Jul"; break;
    case 8 :
        echo "Aug"; break;
    case 9 :
        echo "Sep"; break;
    case 10 :
        echo "Oct"; break;
    case 11 :
        echo "Nov"; break;
    case 12 :
        echo "Dec"; break;
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
    <form action ="" method = "POST">
        <div>
            <label for ="">Month</label>
                <input type ="number" name = "month" min = 1 max = 12>
        </div>
        <div>
            <button type="submit">ยืนยัน</button>
        </div>
</form>
</body>
</html>