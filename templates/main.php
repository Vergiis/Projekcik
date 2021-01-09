<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>M&M - Mini-Company Manager</title>
    <link rel="stylesheet" href="templates/styles/style_logowania.css">
    <link rel="stylesheet" href="templates/styles/style_topMenu.css">
    <link rel="stylesheet" href="templates/styles/style_Forms.css">
    <link rel="shortcut icon" href="templates/res/favicon.jpg" />
</head>
<body>
    <?php require_once 'topMenu.php'; ?>
    <?php 
        if($this->get('user_login')!=null){
            require_once 'user.php'; 
        }
        else{
            require_once 'loginPanel.php';
        }
    ?>
    
</body>
<footer>
    <p>&copy; 2020 M&M - Mini-Company Manager</p>
</footer>
</html>