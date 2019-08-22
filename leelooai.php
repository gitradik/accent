<?php

$name = isset($_POST['name']) ? $_POST['name'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$tag_id = isset($_POST['tag_id']) ? $_POST['tag_id'] : '';

$arr = array(
    'name' => $name,
    'email' => $email,
    'phone' => $phone,
    'tag_id' => $tag_id,
);

echo json_encode($arr);
