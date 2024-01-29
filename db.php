<?php
$name = htmlspecialchars(trim($_POST['name']), ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars(trim($_POST['email']), ENT_QUOTES, 'UTF-8');
$pass = htmlspecialchars(trim($_POST['pass']), ENT_QUOTES, 'UTF-8');


if(mb_strlen($name) < 3 || mb_strlen($name) >50) {
    echo "Недопустимая длина имени";
    exit();
}
else if (mb_strlen($email) < 5 || mb_strlen($email) > 90) {
    echo "Недопустимая длина email";
    exit();
}
else if(mb_strlen($pass) < 2 || mb_strlen($pass) >6) {
    echo "Недопустимая длина пароля (от 2 до 6 символов)";
    exit();
}

$mysql = new mysqli('localhost','root','root','register-bd');
$mysql->query("INSERT INTO `users` (`name`, `email`, `pass`) VALUES ('$name', '$email', '$pass')") ;

$mysql->close();
?>
