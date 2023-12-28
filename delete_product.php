<?php
    header("Location: wait.php");
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Удаление товаров</title>
</head>
<body>
    <form method="post" action="delete_from_bd.php">
    <p>Введите имя товара для удаления</p>
    <input type="text" name="product_name" placeholder="Имя товара"></input>
    
    <?php

        require_once('db_connect.php');

        $product_name = $_POST['product_name'];

        $sql = "SELECT * FROM `Блокировка` WHERE `is_locked` = '1'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            exit();
        }
        else {
            $sql1 = "INSERT INTO `Блокировка` (`is_locked`) VALUES ('1')";
            $result1 = $conn->query($sql1);
        }
    ?>    

    <button type="submit">Удалить</button>
    </form>
</body>