<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ФлипСтайл</title>
    <link href="Style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>    
    <?php
        include("header.php");
        // Подключение к базе данных
        $conn = new mysqli('127.0.0.1', 'root', '', 'shop');
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        // Получение данных из таблицы cart
        $sql = "SELECT * FROM cartshop";
        $result = $conn->query($sql);
    ?>
    <div class="container mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Товар</th>
                    <th scope="col">Название товара</th>
                    <th scope="col">Описание</th>
                    <th scope="col">Количество</th>
                    <th scope="col">Цена</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if ($result->num_rows > 0) {
                        // Вывод данных каждой строки
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td><img src='" . $row["product_image"] . "' alt='Product image'></td>";
                            echo "<td>" . $row["product_id"] . "</td>";
                            echo "<td>" . $row["product_name"] . "</td>";
                            echo "<td>" . $row["product_description"] . "</td>";
                            echo "<td>1</td>"; // Замените это на реальное количество
                            echo "<td>" . $row["product_price"] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "Корзина пуста";
                    }
                    $conn->close();
                ?>
            </tbody>
        </table>
    </div>




    <?php
        include ("footer.php");
    ?>
</body>
</html>