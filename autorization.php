<?php
require_once('db_connect.php');

$login = $_POST['login'];
$password = $_POST['password'];

if (empty($login) || empty($password)) {
    echo "Заполните все поля";
}
else {
    $sql = "SELECT * FROM `Пользователь` WHERE login = '$login' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        "Добро пожаловать!";
    }
    else {
        echo "Нет такого пользователя";
    }
}

?>