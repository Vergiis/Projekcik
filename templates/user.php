<!DOCTYPE html>
<link rel="stylesheet" href="templates/styles/style_logowania.css">
<html lang="pl"></html>
<head>
    <meta charset="UTF-8">
    <title>M&M - Mini-Company Manager</title>
</head>
<body>
    <div id="panel">
        <p><b>Role: </b>
            <?php echo $this->get('user_role'); ?>
        </p>
        <p><b>Name: </b>
            <?php echo $this->get('user_name'); ?>
        </p>
        <p><b>Login: </b>
            <?php echo $this->get('user_login'); ?>
        </p>
        <div id="lower">
            <form action="?task=login&action=logout" method="post">
                <input type="submit" id="sign_out" value="Wyloguj">
            </form>
        </div>
    </div>
</body>
<footer>
    <p>&copy; 2020 M&M - Mini-Company Manager</p>
</footer>
</html>