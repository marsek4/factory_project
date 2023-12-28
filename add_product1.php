<?php
require_once('db_connect.php');

$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];
$product_amount = $_POST['product_amount'];

var_dump($product_name);
var_dump($_POST);

if (empty($product_name) || empty($product_price) || empty($product_amount)) {
    echo "Заполните все поля";
}

$sql1 = "SELECT * FROM `Продукция` WHERE `name`='$product_name'";
$result1 = $conn->query($sql1);
//var_dump($result1);

$sql2 = "SELECT `amount` FROM `Продукция` WHERE `name`='$product_name'";
$result2 = $conn->query($sql2);
$old = $result2->fetch_assoc();
$old_amount = $old["amount"];
//var_dump($old_amount);

if ($result1->num_rows > 0) {
    $final_amount = $product_amount + $old_amount;
    $sql = "UPDATE `Продукция` SET `amount` = '$final_amount' WHERE `name` = '$product_name'";
    $result = $conn->query($sql);
    echo "Количество товара успешно обновлено";

    $date = date("Y.m.d H:i");
    $sql3 = "INSERT INTO `Поставка` (`name`, `amount`, `date`) VALUES ('$product_name', '$product_amount', '$date')";
    $result3 = $conn->query($sql3);
}

else {
    $sql = "INSERT INTO `Продукция`(`name`, `price`, `amount`) VALUES('$product_name', '$product_price', '$product_amount')";
    $result = $conn->query($sql);
    echo "Товар успешно добавлен в список товаров";

    $date = date("Y.m.d H:i");
    $sql3 = "INSERT INTO `Поставка` (`name`, `amount`, `date`) VALUES ('$product_name', '$product_amount', '$date')";
    $result3 = $conn->query($sql3);
}



?>