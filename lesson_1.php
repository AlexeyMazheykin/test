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

/*for ($i = 0;$i <= 100; $i++) {
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
        background: red;
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
</body>
</html>
