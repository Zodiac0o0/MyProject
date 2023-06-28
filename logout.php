<?php
        session_start();
        session_unset(); // Очистка данных сессии
        session_destroy(); // Закрытие сессии
        header("Location: index.php");
        exit();
        ?>