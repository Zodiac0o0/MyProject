!!!ИНСТРУКЦИЯ ДЛЯ ЗАПУСКА ПРОЕКТА!!!

Для начала необходимо скачать программу XAMPP и установить ее.
Запустить через ярлык или через "xampp-control.exe" она находится по пути: Ваш диск->xampp->xampp-control.exe.
В открывшейся панели управления необходимо запустить локальный сервер Apache и базу данных MySql кнопкой Start(при желании можно отключить кнопкой Stop).
В столбце Module, Apache и MySql обведутся зелёным цветом, это информирует о том, что все запущено и готово к работе.
После необходимо перейти к проекту и открыть phpMyAdmin. Нажмите на кнопки Admin рядом с Apache и MySql.
Откроется браузер и страницы с папкой проекта и локальным сервером с базой данных.
Внутри phpMyAdmin нужно ипортировать базу данных "datatask.sql". Этот файл находится в папке с проектом.
Чтобы импортировать(загрузить) базу данных необходимо перейти на вкладку "Импорт" и загрузить файл "datatask.sql" в соответствующую строку. После чего нажать кнопку "Импорт" внизу страницы.
База данных успешно импортирована!
Теперь можно работать с проектом. В открывшемся окне с адресом localhost откроется название папки с проектом, нужно нажать на имя файла проекта "MyProject" и откроется сам проект. Так же можно ввести вручную в адресную строку localhost и откроется та же страница. Если не открылась главная страница проекта нужно прописать в адресную строку: localhost/MyProject/index.php.
Чтобы посмотреть все файлы проекта необходимо пройти по пути: Ваш диск->xampp->htdocs->MyProject.
Чтобы посмотреть базу данных необходимо перейти по пути: Ваш диск->xampp->mysql->data.