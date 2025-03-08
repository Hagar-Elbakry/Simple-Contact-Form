<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']) ?? '';
    $email = htmlspecialchars($_POST['email']) ?? '';
    $message = htmlspecialchars($_POST['message']) ?? '';

    $error;
    $success;
    if ($name == '' || $email == '') {
        $error = 'All fields are required<br>';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Enter vaild email<br>';
    } else {
        $file = fopen('data.txt', 'a');
        fwrite($file, "Name: ");
        $name .= "\n";
        fwrite($file, html_entity_decode($name));
        fwrite($file, "Email: ");
        $email .= "\n";
        fwrite($file, html_entity_decode($email));
        if ($message != '') {
            fwrite($file, "Message: ");
            $message .= "\n";
            fwrite($file, html_entity_decode($message));
        }

        fclose($file);

        $success = 'Submitted sucessfully<br>';
    }
}
