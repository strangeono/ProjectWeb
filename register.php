<?php
    require_once("db.php");
    $login = $_POST['login'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repeatpassword = $_POST['repeatpassword'];

    $sql = "INSERT INTO `users` (login, password, name, email) VALUES ('$login', '$password', '$name', '$email')";

    $conn -> query($sql);

    if (empty($login) || empty($name) || empty($email) || empty($password))
    {
        echo "Заполните все поля";
    }

        if ($password != $repeatpassword)
        {
            echo "Пароли не совпадают";
        }
        else
        {
            $sql = "INSERT INTO `users` (login, password, name, email) VALUES ('$login', '$password', '$name', '$email')";
            if ($conn -> query($sql) === TRUE)
            {
                header('Location: ../index.php?&page=main');
            }
            else
            {
                echo "Ошибка: " . $conn->error; 
            }
        }
?>