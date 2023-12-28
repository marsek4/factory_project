<!DOCTYPE html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Внесение нового товара в базу данных</title>
</head>
<body>
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
    <form action="add_product1.php" method="post">
    <p>Введите имя товара</p>
    <input type="text" placeholder="Имя" name="product_name"></input>
    <p>Введите цену товара за штуку</p>
    <input type="text" placeholder="Цена" name="product_price"></input>
    <p>Введите количество товара</p>
    <input type="text" placeholder="Количество" name="product_amount"></input>

    <button type="submit">Добавить товар</button>
    </form>
    

</body>