<?php
    define('__CONFIG__', true);

    require_once("includes/config.php");
    require_once("includes/links.php");

    Page::ForceLogin();

    $User = new User($_SESSION['user_id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User dashboard</title>
</head>
<body>
    <h2>Dashboard</h2>
    <h3>Hello <?php echo $User->email; ?>, you signed in at <?php echo $User->reg_time; ?></h3>
</body>
</html>