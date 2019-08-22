<?php

$name =  isset($_POST['name']) ? $_POST['name'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$tag_id = isset($_POST['tag_id']) ? $_POST['tag_id'] : '';
$location = isset($_POST['location']) ? $_POST['location'] : '';

$arr = array(
    'name' => $name,
    'email' => $email,
    'phone' => $phone,
    'tag_id' => $tag_id,
    'comment' => $location,
);

echo json_encode($arr);
