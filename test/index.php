<?php

function isUser()
{
    return isset ($_COOKIE['auth']);
}

function getUser()
{
    return $_COOKIE['auth'];
}

if (!isUser()) {
    header('Location: /test/signin.php');
    exit;
}
setcookie('counter', $_COOKIE['counter'] + 1, time() + 84600);
?>
<html>
<head>
    <title>Profile</title>
    <link
        href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300&subset=latin"
        rel="stylesheet" type="text/css">
    <link href="assets/stylesheets/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/stylesheets/pixel-admin.min.css" rel="stylesheet" type="text/css">
    <link href="assets/stylesheets/pages.min.css" rel="stylesheet" type="text/css">
    <link href="assets/stylesheets/rtl.min.css" rel="stylesheet" type="text/css">
    <link href="assets/stylesheets/themes.min.css" rel="stylesheet" type="text/css">
    <script src="assets/javascripts/ie.min.js"></script>
</head>
<body class="theme-default page-signin-alt">
<br>
<form action="/test/logout.php" class="panel" id="signout" method="post">
    <h3>Nice to see you, <?php echo getUser(); ?>!</h3>
    <h3>You have logged in <?php echo $_COOKIE['authCount']; ?> times a day.</h3>
    <h3>You have visited this page <?php echo $_COOKIE['counter']; ?> times a day.</h3>
    <input type="submit" value="Log out" class="btn btn-primary">
    <input type="button" value="To galery" class="btn btn-danger" onclick="parent.location='./gallery.php'">
</form>

<script src="assets/javascripts/bootstrap.min.js"></script>
<script src="assets/javascripts/pixel-admin.min.js"></script>


