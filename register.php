<?php

require_once('db_connect.php');

$word1 = $_POST['word1'];
$word2 = $_POST['word2'];
$word4 = $_POST['word4'];


if (empty($word1) || empty($word2) || empty($word4)) {
    return "Заполните все поля";
}
if (strlen($word1) <= 5) {
    return "Логин слишком короткий<br>";
}
if (strlen($word2) < 5) {
    return "Пароль слишком короткий<br>";
}
if (preg_match('/[!@#$%^&*]/', $word2)) {
    //return ", строка содержит специальные символы<br>";
} else {
    return "Пароль должен содержать особые симолы (!@#$%^&*)<br>";
}
if (preg_match('/^\d{10}$/', $word4)) {
    //return "Номер телефона введен верно";
} else {
    return "Номер телефона введен неверно";
}

//$login = $_POST['login'];
/*if (empty($login)) {
    return array['status'=>'error', 'data'=>'invalid_login'];
}*/
//$password = $_POST['password'];
//$phone_number = $_POST['phone_number'];

$login = $word1;
//var_dump($login);
$password = $word2;
//var_dump($password);
$phone_number = $word4;
//var_dump($phone_number);

if (empty($login) || empty($password) || empty($phone_number)) {
    echo "Заполните все поля";
} else {
    ///if ($password != $password2) {
        //echo "Пароли не совпадают";
    //}
    //else {
    $sql = "INSERT INTO `Пользователь` (`phone_number`, `login`, `password`) VALUES ('$phone_number', '$login', '$password')";
    if ($conn -> query($sql) === TRUE) {
        return "Успешная регистрация";
    } 
    else {
        return "Ошибка: ". $conn->error;
    }
}
?>
