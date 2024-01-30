<?php

// Подключаемся к базе данных (замените значения на свои)
$servername = "localhost";
$username = "ваш_пользователь";
$password = "ваш_пароль";
$dbname = "ваша_база_данных";

$conn = new mysqli($servername, $username, $password, $dbname);

// Проверяем соединение
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Получаем данные из POST-запроса
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Добавляем данные в базу данных (замените "users" на имя вашей таблицы)
$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    $response = array('success' => true, 'message' => 'Регистрация прошла успешно');
} else {
    $response = array('success' => false, 'message' => 'Ошибка при регистрации: ' . $conn->error);
}

// Отправляем ответ в формате JSON
header('Content-Type: application/json');
echo json_encode($response);

// Закрываем соединение
$conn->close();

?>
