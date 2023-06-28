<?php
// Подключение к базе данных
$host = "localhost";
$username = "root";
$password = "";
$dbname = "datatask";

$conn = mysqli_connect($host, $username, $password, $dbname);

// Проверяем подключение к базе данных
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Объявление необходимых переменных
$emailuser = $_POST["emailuser"];
$passworduser = $_POST["passworduser"];

// SQL-запрос на регистрацию пользователя
$sql = "INSERT INTO registrtabel (emailuser, passworduser) VALUES ('$emailuser', '$passworduser')";

// Проверка регистрации и вывод необходимого сообщения
if ($conn->query($sql) === TRUE) {
    header('Location: successfullyRegistr.html');
}
else {
echo "Ошибка";
}

// Закрытие соединения с базой данных
mysqli_close($conn);
?>