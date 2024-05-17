<?php
    session_start();
    require_once("db.php");

    $login = $_POST['loginauth'];
    $password = $_POST['passwordauth'];
    
    if(empty($login) || empty($password))
    {
        echo "Заполните все поля";
    }
    else 
    {
        $sql = "SELECT * FROM `users` WHERE login = '$login' AND password = '$password'";
        $result = $conn -> query($sql);

        if ($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc())
            {
                $_SESSION['login'] = $login;
                header('Location: ../index.php?&page=main');
            }
        }
        else 
        {
            echo "нет такого пользователя";
        }
    }