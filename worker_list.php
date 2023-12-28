<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Отображение данных из базы данных</title>
</head>
<body>
    <h1>Данные из базы данных</h1>
    
    <form>
        <button type="submit" formaction="add_product.php">Добавить продукцию</button>
    </form>
    <form>
        <button type="submit" formaction="change_amount.php">Изменить количество продукции</button>
    </form>
    <form>
        <button type="submit" formaction="delete_product.php">Удалить продукт</button>
    </form>
    <!--<form>
        <button type="submit" formaction="add_supply.php">Внести поставку</button>
    </form>-->
    

    <?php
    // Подключение к базе данных
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Фабрика";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Проверка подключения
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Запрос SQL для извлечения данных
    $sql = "SELECT `name`, `price`, `amount` FROM `Продукция`";
    $result = $conn->query($sql);

    // Отображение данных в виде таблицы
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

    // Закрытие подключения к базе данных
    //$conn->close();
    ?>

</body>
</html>