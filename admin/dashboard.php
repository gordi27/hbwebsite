
<?php
    require('inc/essentials.php');
    adminLogin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Dashboard</title>
    <?php require('inc/links.php');?>
</head>
<body class="bg-light">
    <div class="container-fluid bg-dark text-light p-3">
        <h3>Панель Администратора</h3>
    </div>

    <div>
        <a href="logout.php" class="'btn btn-light btn-sm">Выйти</a>
    </div>
    
    <?php require('inc/scripts.php');?>
</body>
</html>