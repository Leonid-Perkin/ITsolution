<?php
    // Получение данных из формы
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Создание визитки
    $vCard = "BEGIN:VCARD\r\n";
    $vCard .= "VERSION:3.0\r\n";
    $vCard .= "FN:$name\r\n";
    $vCard .= "EMAIL;TYPE=INTERNET:$email\r\n";
    $vCard .= "NOTE:$message\r\n";
    $vCard .= "END:VCARD";
    
    // Отправка визитки по почте
    $to = "manakov.aa@mail.ru"; // Замените на свой email
    $subject = "Новый контакт";
    $headers = "From: $email\r\n";
    $headers .= "Content-Type: text/vcard; charset=utf-8;\r\n";
    $headers .= "Content-Disposition: attachment; filename=\"contact.vcf\"\r\n";
    $headers .= "Content-Transfer-Encoding: base64\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $message = $vCard;

    // Отправка письма
    mail($to, $subject, $message, $headers);
    
    // Перенаправление обратно на страницу с формой
    header("Location: index.html");
?>