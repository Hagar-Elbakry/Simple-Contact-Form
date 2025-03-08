<?php
require "formValidation.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php
    if (isset($error)):
        echo '<h3 style="color: red;">' . $error . '</h3>';
        echo '<br>';
    endif;
    ?>
    <?php

    if (isset($success)):
        echo '<h3 style="color: green;">' . $success . '</h3>';
        echo '<br>';
        echo ' <a href="/">Back to form..</a>';
    else:
        echo
        '<form method="post">
            <input type="text" name="name" placeholder="Enter your name"><br>
            <input type="text" name="email" placeholder="Enter your email"><br>
            <textarea name="message" placeholder="Enter your Message"></textarea><br>
            <button type="submit">Submit</button>
            </form>';

    endif;
    ?>


</body>

</html>