<?php

$name = isset($_POST['name']) ? $_POST['name'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$location = isset($_POST['location']) ? $_POST['location'] : '';

$chat_id = '-1001266741062';
$token = '955795399:AAFed848PEzyaa1E11uN5B8q6btdEO2dhsk';

$arr = array(
    'Имя: ' => $name,
    'Телефон: ' => $phone,
    'Почта:' => $email,
    'Цель' => $location,
);

foreach($arr as $key => $value) {
    $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

?>

