<?php
if(isset($_POST['login'])) { // Проверяем наличие данных в POST запросе
    $login = $_POST['login'];
    if (strlen($login) < 5 ) {
        echo "Логин слишком короткий";
    } else {
        echo "Логин подходит";
    }
} else {
    echo "Данные не были отправлены";
}
?>
