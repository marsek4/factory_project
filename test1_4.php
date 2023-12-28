<?php
    $word1 = $_POST['word1'];
    $word2 = $_POST['word2'];
    $word4 = $_POST['word4'];

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
?>