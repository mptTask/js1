<?php

// Логика приложения
echo 'Был получен логин: ' . $_POST['form__email'] . 
            ' с паролем: ' . md5($_POST['form__password']);


?>