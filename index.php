<?php

echo 'Фамилия: ';
$surName = trim(fgets(STDIN));

echo 'Имя: ';
$firstName = trim(fgets(STDIN));

echo 'Отчество: ';
$lastName = trim(fgets(STDIN));
echo PHP_EOL;

//создание массива с введенными данными и перевод первого символа в заглавный 
$nameArray = array(
    "name" => mb_convert_case($surName, MB_CASE_TITLE, "UTF-8"),
    "firstName" => mb_convert_case($firstName, MB_CASE_TITLE, "UTF-8"),
    "lastName" => mb_convert_case($lastName, MB_CASE_TITLE, "UTF-8"),
);

$fullName = $nameArray["name"] . ' ' . $nameArray["firstName"] . ' ' . $nameArray["lastName"];
$fio = mb_substr($nameArray["name"], 0, 1) . mb_substr($nameArray["firstName"], 0, 1) . mb_substr($nameArray["lastName"], 0, 1);
$lastNameInitials = $nameArray["name"] . ' ' . mb_substr($nameArray["firstName"], 0, 1)  . '.' . mb_substr($nameArray["lastName"], 0, 1);

echo "Полное имя: " . $fullName . PHP_EOL;
echo "Фамилия и иницыалы: " . $lastNameInitials . PHP_EOL;
echo "Абвеатура: " . $fio . PHP_EOL;
