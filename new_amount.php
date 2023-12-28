<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Изменение количества товаров</title>
</head>
<body>
<?php
    require_once('db_connect.php');
    include 'change_amount.php';
    //include 'show_product.php';
    //echo $product_name;

    $sql = "UPDATE `Продукция` SET `amount` = '$new_product_amount' WHERE `name` = '$product_name'";
    $result = $conn->query($sql);
    $row = "SELECT `amount` FROM `Продукция` WHERE `name` = '$product_name'";
    $result1 = $conn->query($row);

    echo "<p>Получившееся изменение</p>";

    echo "<table>";
    echo "<tr><th>Название</th><th>Количество</th></tr>";
    var_dump($product_name);
    var_dump($row["amount"]);
    while($row = $result1->fetch_assoc()) {
        echo "<tr><td>" . $product_name . "</td><td>" . $row["amount"] . "</td></tr>";
    }
    echo "</table>";

    /*$new_amount = $_POST['new_amount'];
    $get = $_GET['get'];

    $sql = "UPDATE `Продукция` SET `amount`= '$new_amount' WHERE `name` = '$product_name'";
    $result = $conn->query($sql);*/

?>
</body>