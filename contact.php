<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Збір та санітизація даних
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $msg = htmlspecialchars($_POST['msg']);
    
    // Налаштування електронної пошти
    $to = "svdatsko2004@gmail.com"; // Замініть на вашу електронну адресу
    $subject = "Контактне повідомлення від $name";
    $message = "Ім'я: $name\nEmail: $email\n\nПовідомлення:\n$msg";
    $headers = "From: $email";
    
    // Відправлення електронного листа
    if (mail($to, $subject, $message, $headers)) {
        echo "Повідомлення надіслано успішно!";
    } else {
        echo "Не вдалося надіслати повідомлення.";
    }
}
?>
