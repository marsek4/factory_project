<?php
    include 'delete_product.php';

    require_once('db_connect.php');

    $sql = "SELECT `name`, `price`, `amount` FROM `Продукция` WHERE `name` = '$product_name'";
    $result = $conn->query($sql);

    echo "Удаление следующих данных:";

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>Название</th><th>Цена за шт.</th><th>Количество</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["name"] . "</td><td>" . $row["price"] . "</td><td>" . $row["amount"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 результатов";
    }

    $sql2 = "DELETE FROM `Продукция` WHERE `name` = '$product_name'";
    $result2 = $conn->query($sql2);
    ?>
    <form>
        <button type="submit" formaction="return.php">Вернуться к списку</button>
    </form>