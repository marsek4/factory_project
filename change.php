<form method="post">
        <p>Введите новое количество товара</p>
        <input type="text" name="new_amount"></input>
        <button type="submit" name="button" value="ON">Изменить количество</button>
    </form>

<?php
    require_once('db_connect.php');

    $product_name = $_POST['product_name'];
        
    if(empty($product_name)) {
        echo "Заполните поле имя товара";
    }

    else {
        $sql = "SELECT `amount` FROM `Продукция` WHERE `name` = '$product_name'";
        $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>Название</th><th>Количество</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $product_name . "</td><td>" . $row["amount"] . "</td></tr>";
        }
        echo "</table>";
        }
    }

    var_dump($product_name);
    if (isset($_POST['button'])) {
        $sql = "UPDATE `Продукция` SET `amount`= '$new_amount' WHERE `name` = '$product_name'";
        $result = $conn->query($sql);
    }
?>