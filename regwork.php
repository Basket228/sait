<?php
// Подключение к базе данных
$servername = "127.0.0.1"; // Имя сервера базы данных
$username = "root"; // Имя пользователя базы данных
$password = ""; // Пароль базы данных
$dbname = "shop"; // Имя вашей базы данных

// Создание соединения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Получение данных из формы
$email = $_POST['email']; // Добавили определение переменной $email
$password = $_POST['password']; // Добавили определение переменной $password

// Вставка данных в таблицу
$sql = "INSERT INTO users (email, password)
VALUES ('$email', '$password')";

if ($conn->query($sql) === TRUE) {
   // echo "Новая запись успешно добавлена";
   header("Location: vhod.php");
    exit;
} else {
    header("Location: none.php");
    exit;
}

// Закрытие соединения
$conn->close();
?>
