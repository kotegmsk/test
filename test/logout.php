<?php

function logout()
{
    setcookie('auth', '', time() - 1);
}

logout();
header('Location: /test/index.php');
exit;

?>