<?php
// Подключение к базе данных
$host = "localhost";
$username = "root";
$password = "";
$dbname = "datatask";

$conn = mysqli_connect($host, $username, $password, $dbname);
session_start();
// Проверяем подключение к базе данных
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Получение данных из формы
$description = $_POST["description"];
$InputDate = $_POST["InputDate"];
$InputTime = $_POST["InputTime"];
$SessionEmail = $_SESSION['emailuser'];
// Вставка данных в таблицу tasklist

if(isset($_SESSION['emailuser'])) {
    $sql = "INSERT INTO tasklist (TaskText, TaskDate, TaskTime, Email) VALUES ('$description', '$InputDate', '$InputTime', '$SessionEmail')";
if ($conn->query($sql) === TRUE) {
    echo "Успешно";
    $Home = " На главную";
    echo "<a href = 'index.php'>" . $Home . "</a>";
}
else {
echo "Ошибка";
}
// Закрытие соединения с базой данных
mysqli_close($conn);
}
else {
    print 'Сессия не начата';
    $Home = " На главную";
    echo "<a href = 'index.php'>" . $Home . "</a>";
}

?>