<?php
// подключение к базе данных
$host = "localhost";
$username = "root";
$password = "";
$dbname = "datatask";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// начало сессии
session_start();
// обработка данных из формы
if(isset($_POST['emailuser']) && isset($_POST['passworduser'])){
    $emailuser = $_POST['emailuser'];
    $passworduser = $_POST['passworduser'];
    // поиск пользователя в базе данных
    $sql = "SELECT * FROM registrtabel WHERE emailuser='$emailuser' AND passworduser='$passworduser'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 1){ // если пользователь найден
        $_SESSION['emailuser'] = $emailuser;
        header('Location: personalaccount.php'); // переход на защищенную страницу
        exit();
    }
    else{ // если пользователь не найден
        $error = "Неверный email или пароль";
    }
}
?>