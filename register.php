<?php
// Подключаемся к базе данных
include 'db.php';

// Обработка формы регистрации
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Хешируем пароль

    // Выполняем запрос на вставку данных в таблицу
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Регистрация успешна!";
    } else {
        echo "Ошибка при регистрации: " . $conn->error;
    }
}

// Закрываем соединение
$conn->close();
?>
