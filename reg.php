<?php 
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);

    $email = filter_var(trim($_GET['email']), FILTER_SANITIZE_STRING);

    $psw = filter_var(trim($_GET['psw']), FILTER_SANITIZE_STRING);

    $pswrepeat = filter_var(trim($_POST['psw-repeat']), FILTER_SANITIZE_STRING);

    if(mb_strlen($name) < 2 || mb_strlen($name) > 20){
        echo "Убедитесь в правильности написании имени";
        exit();
    }
    else if(mb_strlen($email) < 4 || mb_strlen($email) > 25){
        echo "Убедитесь в правильности написании почты";
        exit();
    }
    else if(mb_strlen($psw) < 7 || mb_strlen($psw) > 25){
        echo "Убедитесь в правильности написании пароля";
        exit();
    }

    if($psw != $pswrepeat){
        echo "Пароли не совпадают";
        exit();
    }

    $mysql = new mysqli('localhost', 'mysql', 'mysql', 'sql_mus');
    $mysql->query("INSERT INTO `music` (`name`, `mail`, `password`) VALUES('$name', '$email', '$psw')");

    $mysql->close();

    header('Location: /');
?>
