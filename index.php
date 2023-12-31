<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <!-- Стили страницы -->
    <link rel="stylesheet" href="app/index.css">
    <link rel="stylesheet" href="app/login.css">
    <link rel="stylesheet" href="app/registr.css">
    <title>Reminder Memo</title>
</head>
<body>
    <!-- Картинки на заднем фоне -->
    <img src = "app/calendar.svg"; class = "calendar">
    <img src = "app/clock.png"; class = "clock">
    <img src = "app/notebook.png"; class = "notebook">
    <!-- Кнопки Лог/Авто/Лич.кабинет -->
    <div class="main">  
        <ul>
            <li class = "no_point">
                <?php
                $host = "localhost";
                $username = "root";
                $password = "";
                $dbname = "datatask";
                
                $conn = mysqli_connect($host, $username, $password, $dbname);
                session_start();
                if (isset($_SESSION['emailuser'])) {
                    $peracc = "Личный кабинет";
                    echo "<button class = 'ButtonDecoration'><a href = 'app/personalaccount.php' class = 'personallink'>" . $peracc . "</a></button>";
                    $email = $_SESSION['emailuser'];
                    $tasktext = "SELECT TaskText FROM tasklist where email = '$email'";
                    $resultText = $conn->query($tasktext);
                                    
                    if ($resultText->num_rows > 0) {
                        $rowText = $resultText->fetch_assoc();
                        $taskTextT = $rowText["TaskText"];
                        $resultText->free_result();
                    } else {
                        $taskTextT = "";
                    }
                    $taskdate = "SELECT TaskDate FROM tasklist where email = '$email'";
                    $resultDate = $conn->query($taskdate);
                    if($resultDate->num_rows > 0) {
                        $rowDate = $resultDate->fetch_assoc();
                        $taskDate = $rowDate["TaskDate"];
                        $resultDate->free_result();
                    } else {
                        $taskDate = "";
                    }
                    $tasktime = "SELECT TaskTime FROM tasklist where email = '$email'";
                    $resultTime = $conn->query($tasktime);
                    if($resultTime->num_rows > 0) {
                        $rowTime = $resultTime->fetch_assoc();
                        $taskTime = $rowTime["TaskTime"];
                        $resultTime->free_result();
                    } else {
                        $taskTime = "";
                    } 
                    $countTask = "SELECT COUNT(*) AS Email FROM tasklist WHERE Email = '$email'";
                    $resultCountTask = $conn->query($countTask);
                    if ($resultCountTask->num_rows > 0) {
                        $rowCount = $resultCountTask->fetch_assoc();
                        $countEmail = $rowCount["Email"];
                    } else {
                        $countEmail = 0;
                    }
                    $ButtonText = "Добавить";
                    $StructureTask = 
                "<div class = 'main_container newDivMarginBottom'>
                    <form action = 'app/addData.php' method = 'post' id = 'TaskForm'>
                        <input value = '$taskTextT' type = 'text' placeholder='Введите описание'
                        class='description' id='description' name='description'>
                        <input value = '$taskDate' type='date' id='InputDate' name='InputDate'>
                        <input value = '$taskTime' type='time' id='InputTime' name='InputTime'>
                        <button type = 'submit'>$ButtonText</button>
                        <div class='addNewElement'></div>
                        <div class='DeleteNewElement'></div>
                    </form>
                </div>";
                }
                else {
                    $registr = "Регистрация";
                    echo "<button class = 'regautologinRegistr'>" . $registr . "</button>";
                    $autorize = " Авторизация";
                    echo "<button class = 'regautologin ButtonDecoration'>" . $autorize . "</button>";
                    $taskTextT = "";
                    $taskDate = "";
                    $taskTime = "";
                }

                ?>
            </li>
        </ul>
    </div>
    <!-- Основная конструкция задачи -->    
    <section class = "parentDiv">
        <div class="main_container" id = "parent">
            <form action="app/addData.php" method="post" id="TaskForm">
                <input value = "<?php echo $taskTextT; ?>" type="text"  placeholder="Введите описание"
                class="description" id="description" name="description">
                <input value = "<?php echo $taskDate; ?>" type="date" id="InputDate" name="InputDate">
                <input value = "<?php echo $taskTime; ?>" type="time" id="InputTime" name="InputTime">
                <button type = "submit">Добавить</button>
                <div class="addNewElement"></div>
            </form>
        </div>
        <?php
        if (isset($_SESSION['emailuser'])) {
        for ($i = 0; $i < $countEmail -1; $i++) {
            echo $StructureTask;                
        }
        } else {
            $StructureTask = "";
        }
        
        ?>
    </section>

    <!-- Форма авторизации -->
    <form action="app/login.php" method="post" id="TaskForm" class="SectionAuto_Form">
        <div class = "DisplayFlex">
            <label class="LabelEmail">Введите Email</label>
            <input type="email" id="emailuser" name="emailuser" class="InputEmail">
            <label class="LabelPassword">Введите пароль</label>
            <input type="password" id="passworduser" name="passworduser" class="InputPassword">
                <ul class="listDec">
                    <li><button type="submit" class="ButtonDec">Войти</button></li>
                    <li><button type = "button"class="ButtonDec ButtonClose">Закрыть</button></li>
                </ul>
        </div>   
    </form>
            
    <!-- Форма регистрации -->
        <section class="mainSection">
            <form action="app/Registruser.php" method="post" id="TaskForm" class="MainSection_Form">
                <label class="LabelEmailRegistr">Введите Email</label>
                <input type="email" id="emailuser" name="emailuser" class="InputEmailRegistr">
                <label class="LabelPasswordRegistr">Введите пароль</label>
                <input type="password" id="passworduser" name="passworduser" class="InputPasswordRegistr">
                    <ul class="listDec">
                        <li><button type="submit" class="ButtonDec RegistrationButton">Зарегистрироваться</button></li>
                        <li><button type = "button"class="ButtonDec ButtonCloseRegistr">Закрыть</button></li>
                    </ul>
            </form>
        </section>
    <div class = "overlay"></div>
    <!-- Подключенные скрипты -->
    <script src="app/script.js"></script>
    <script src="app/script2.js"></script>
    <script src="app/script3.js"></script>
</body>
</html>




