<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Изменение количества товаров</title>
</head>
<body>
    <?php
        include 'change_amount.php';

        require_once('db_connect.php');

        $sql = "SELECT `amount` FROM `Продукция` WHERE `name` = '$product_name'";
        $result = $conn->query($sql);

        echo "<p>Найденные товары в базе</p>";

        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>Название</th><th>Количество</th></tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $product_name . "</td><td>" . $row["amount"] . "</td></tr>";
            }
            echo "</table>";
        }
    ?> 
    <form method="post" action="new_amount.php">
        <p>Введите новое количество товара</p>
        <input type="text" placeholder="Новое количество" name="new_product_amount"></input>
        <button type="submit">Изменить количество</button>
    </form>
    <?php
        require_once('db_connect.php');

        $new_product_amount = $_POST['new_product_amount'];
    ?>
</body>