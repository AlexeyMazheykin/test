<?php
//Homework 2
//phpinfo();
//1)

$isEven = date("G") % 2 === 0 ? "active" : ""; //date.timezone на сервере должно быть местное Europe/Moscow

//2)
$memo = ini_get("memory_limit");

if ($memo < 128) {          //E_WARNING in php 8
    echo "Мало памяти<br/>";
}
//3)
$daysOfWeek = ["Воскресенье", "Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота"];

echo $daysOfWeek[date("w")], "<br>";
//4)

/*for ($i = 1;$i <= 100; $i++) {
    echo "$i <br>";
}*/

//5
//for ($i = 23; $i <= 78; $i++) {
//    echo "$i <br>";
//}

//6 in HTML


//7
for ($i = 0; $i < 100; $i++) {
    $randArr[] = rand();
}


//8
/*foreach ($randArr as $value) {
    echo $value, "<br/>";
}
echo count($randArr), "<br>";
$i = 0;
while ($i <= count($randArr)) {
    echo $randArr[$i], "<br/>";
    $i++;
}*/
//9
$divArr = [];
for ($i = 0; $i < 10; $i++) {
    $divArr[] = "<p>String $i</p>";
}
//16

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Урок 1</title>
</head>
<style>
    body.body.active {
        background: rgba(0, 255, 225, 0.34);
    }

</style>
<body class="body <?= $isEven ?>">
<!--TASK 6-->
<ul class="list">
    <?php
    for ($i = 0; $i < 10; $i++) {
        ?>
        <li>Item <?= "$i" ?></li>
    <?php } ?>
</ul>
<div class="task-9">
    <?php
    foreach ($divArr as $val) {
        echo $val;
    }
    ?>
</div>
<!--CAlendar-->

<div class="calendar">
    <style>

        .calendar {
            border: 1px solid #bbb;
            display: inline-block
        }

        .calendar table {
            empty-cells: hide;
        }

        .calendar caption {
            padding: 3px;
            background: linear-gradient(to bottom, #ddd 10%, #bbb);
        }

        .calendar td {
            padding: 2px 6px;
            text-align: center;
            border: 1px solid #ccc;
            background: linear-gradient(to bottom, #fff 10%, #ddd);
            border-radius: 0 0 3px
        }

        .calendar td:hover {
            border: 1px solid #888;
        }

        .calendar .holiday {
            background: linear-gradient(to bottom, #fff 10%, #ffc);
        }

        .calendar .today {
            font-weight: 600;
            border: 1px solid #888;
        }
    </style>

    <table>
        <caption><span>Июль</span> 2084</caption>
        <tr>
            <th>Пн</th>
            <th>Вт</th>
            <th>Ср</th>
            <th>Чт</th>
            <th>Пт</th>
            <th>Сб</th>
            <th>Вс</th>
        </tr>
        <?php
        foreach ($calWeeksArr as $week) {
        ?>
        <tr>
        <?php
        foreach ($week as $day) {
        ?>
            <td><?= $day ?></td>
            <?php
        }
            ?>
        </tr>
        <?php
        }
        ?>

    </table>
</div>
</body>
</html>