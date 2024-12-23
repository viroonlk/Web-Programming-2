<?php
$classRoomData = [
    "Monday" => [
        9 => "Social Issues",
        10 => "Social Issues",
        11 => "Social Issues",
        13 => "Web Programming",
        14 => "Web Programming",
        15 => "Web Programming",
    ],
    "Tuesday" => [

    ],
    "Wedsday" => [

    ],
    "Thurday" => [

    ],
    "Friday" => [

    ]
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table , th , td
    {
        width: 100%;
        border: white 1px solid ;
        border-collapse : collapse;
        min-width: 90px;
    }
    #classroom thead th
    {
        background-color: black;
        color: white;
    }
    #classroom tbody th
    {
        background-color: gray;
        color: white;
    }
    #classroom
    {
        background-color : lightgray;
    }
    .holiday {
        background-color: crimson;
        color : white;
    }
    </style>
</head>
<body>
    <table id = "classroom" ;>
        <thead>
        <th>Day / Time&nbsp;</th>
        <th>08.00 - 09.00 &nbsp;</th>
        <th>09.00 - 10.00 &nbsp;</th>
        <th>10.00 - 11.00 &nbsp;</th>
        <th>11.00 - 12.00 &nbsp;</th>
        <th>12.00 - 13.00 &nbsp;</th>   
        <th>13.00 - 14.00 &nbsp;</th>
        <th>14.00 - 15.00 &nbsp;</th>
        <th>15.00 - 16.00 &nbsp;</th>
        <th>16.00 - 17.00 &nbsp;</th>
        </thead>
        <tbody>
                <?PHP foreach ($classRoomData as $day => $subject ){ ?>
            <tr>
                <th><?php echo $day ?> </th>
                <?php for ($i = 8 ; $i < 17 ; $i++){ ?>
                <td>
                    <?PHP echo !empty($subject[$i])? $subject[$i] : "" ?>
                </td>
                <?PHP } ?>
            </tr><?PHP } ?>
        </tbody>
    </table>
</body>
</html>