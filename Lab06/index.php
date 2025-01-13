<?php
include 'connect.php';
$classRoomData = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $day = $_POST['day'];
    $time = $_POST['time'];
    $subject = $_POST['subject'];

    if (!empty($day) && !empty($time) && !empty($subject)) {
      
        $sql_insert = "INSERT INTO subject_class (day, time, subject) VALUES ('$day', '$time', '$subject')";

        if ($conn->query($sql_insert) === TRUE) {
        } else {
            echo "Error: " . $sql_insert . "<br>" . $conn->error;
        }
    }
}

$sql = "SELECT day, time, subject FROM subject_class"; 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $classRoomData[$row['day']][$row['time']] = $row['subject'];
    }
} else {
    echo "No results found.";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classroom Timetable</title>
    <form action="" method="POST"> 
        <div>
            <label for="day">Day</label>
            <input type="text" name="day" id="day" required>
        </div>
        <div>
            <label for="time">Time (08:00 - 17:00)</label>
            <select name="time" id="time" required>
                <option value="8">08:00 - 09:00</option>
                <option value="9">09:00 - 10:00</option>
                <option value="10">10:00 - 11:00</option>
                <option value="11">11:00 - 12:00</option>
                <option value="12">12:00 - 13:00</option>
                <option value="13">13:00 - 14:00</option>
                <option value="14">14:00 - 15:00</option>
                <option value="15">15:00 - 16:00</option>
                <option value="16">16:00 - 17:00</option>
            </select>
        </div>
        <div>
            <label for="subject">Subject</label>
            <input type="text" name="subject" id="subject" required>
        </div>
        <div>
            <button type="submit">ยืนยัน</button>
        </div>
    </form>

    <style>
        table, th, td {
            width: 100%;
            border: 1px solid white;
            border-collapse: collapse;
            min-width: 100px;
        }
        #classroom thead th {
            background-color: black;
            color: white;
        }
        #classroom tbody th {
            background-color: gray;
            color: white;
        }
        #classroom {
            background-color: lightgray;
        }
        .holiday {
            background-color: crimson;
            color: white;
        }
    </style>
</head>
<body>
    <table id="classroom">
        <thead>
            <tr>
                <th>Day / Time</th>
                <th>08:00 - 09:00</th>
                <th>09:00 - 10:00</th>
                <th>10:00 - 11:00</th>
                <th>11:00 - 12:00</th>
                <th>12:00 - 13:00</th>
                <th>13:00 - 14:00</th>
                <th>14:00 - 15:00</th>
                <th>15:00 - 16:00</th>
                <th>16:00 - 17:00</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($classRoomData as $day => $subject) { ?>
                <tr>
                    <th><?php echo $day; ?></th>
                    <?php for ($i = 8; $i < 17; $i++) { ?>
                        <td>
                            <?php echo isset($subject[$i]) ? $subject[$i] : ""; ?>
                        </td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
