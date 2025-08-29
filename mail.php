<?php 
// если была нажата кнопка "Отправить" 
// mb_internal_encoding("UTF-8");
if(isset($_POST['submit'])) {

        // Перевірка на заповнення honeypot поля
        if (!empty($_POST['phone'])) {
                die("Spam detected");
        }

        // $_POST['title'] содержит данные из поля "Тема", trim() - убираем все лишние пробелы и переносы строк, htmlspecialchars() - преобразует специальные символы в HTML сущности, будем считать для того, чтобы простейшие попытки взломать наш сайт обломались, ну и  substr($_POST['title'], 0, 1000) - урезаем текст до 1000 символов. Для переменной $_POST['mess'] все аналогично 
        $from = substr(htmlspecialchars(trim($_POST['email'])), 0, 1000); 
        $mess =  substr(htmlspecialchars(trim($_POST['mess'])), 0, 1000000); 
        // $to - кому отправляем 
        $to = '0505732109@ukr.net, alexanderik79@gmail.com'; 
        // $from - от кого 
        //$from='test@test.ru'; 
        // функция, которая отправляет наше письмо. 
        mail($to, 'Войлок', $mess, 'From:'.$from); 

  // Переводим кодировку сообщения на UTF-8
$message = mb_convert_encoding("Message was sent. Press OK to back.", "UTF-8", "UTF-8");

// Выводим всплывающее сообщение
echo "<script>
        window.confirm('$message');
        window.location.href = 'index.html';
    </script>";

        // echo "<script>alert('Сообщение отправлено!');</script>";
        // echo 'Done !';
} 
?> 