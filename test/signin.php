<?php
session_start(); ?>

<html>
<head>
    <title>Sign In</title>
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
<h1 class="form-header">Sign in to your Account</h1>
<!-- Form -->

<form action="/test/login.php" id="signin-form_id" class="panel" method="post">

    <div class="form-group">
        <input type="text" name="login" id="username_id" class="form-control input-lg" placeholder="Username">
    </div> <!-- / Username -->
    <div class="form-group signin-password">
        <input type="password" name="password" id="password_id" class="form-control input-lg" placeholder="Password">
    </div> <!-- / Password -->
    <?php
    if (!empty($_SESSION['error'])) {
        echo
            '<span class="text-danger"> <i class="fa fa-warning"></i> ' . $_SESSION['error'] . '<br><br></span> ';
        unset ($_SESSION['error']);
    }
    ?>
    <div class="form-actions">
        <input type="submit" value="Sign In" class="btn btn-primary btn-block btn-lg">
    </div> <!-- / .form-actions -->
</form>
<!-- / Form -->
<script src="assets/javascripts/bootstrap.min.js"></script>
<script src="assets/javascripts/pixel-admin.min.js"></script>
</body>
</html>
