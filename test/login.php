<?php
session_start();
function checkLoginPassword($login, $password)
{
    $users = [
        'user1' => 'qwerty1',
        'user2 ' => 'qwer',
        'user3' => 'qwer',
        'admin' => 'Admin123'];
    return (isset ($users[$login]) && $password == $users[$login]);
}

function login($login)
{
    setcookie('auth', $login, time() + 86400);
    setcookie('authCount', $_COOKIE['authCount'] + 1, time() + 84600);
    setcookie('counter', $_COOKIE['counter'] + 1, time() + 84600);
}

if ((empty($_POST['login'])) || (empty($_POST['password']))) {
    $_SESSION['error'] = 'Пустой логин или пароль';
    header('Location: /test/signin.php');
    exit;
}

$login = $_POST['login'];
$password = $_POST['password'];

if (!checkLoginPassword($login, $password)) {
    $_SESSION['error'] = 'Неверный логин или пароль';
    header('Location: /test/signin.php');
    exit;
}

login($login);
header('Location: /test/index.php');
exit;


