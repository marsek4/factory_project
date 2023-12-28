<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Изменение количества товаров</title>
</head>
<body>
    <form method="post" action="show_product.php">
    <p>Введите имя товара</p>
    <input type="text" name="product_name" placeholder="Имя товара"></input>
    
    <?php
        require_once('db_connect.php');

        $product_name = $_POST['product_name'];
    ?>    

    <button type="submit">Показать товары в базе</button>
    </form>
</body>