<!DOCTYPE html>
<link rel="stylesheet" href="templates/styles/style_logowania.css">
<html lang="pl"></html>
<head>
    <meta charset="UTF-8">
    <title>M&M - Mini-Company Manager</title>
</head>
<body>
    <div id="panel">
        <form action="?task=login&action=login" method="post">
            <label for="username" id="username_label">Nazwa użytkownika:</label>
            <input type="text" id="username" name="username">
            <br>
            <label for="password" id="password_label">Hasło:</label>
            <input type="password" id="password" name="password">

            <div id="lower">
                <!--
                <input type="radio" id="employee" name="type">
                <label for="employee" id="employee_label">Pracownik</label>
                <input type="radio" id="proprietor" name="type">
                <label for="proprietor" id="proprietor_label">Właściciel</label>
                <input type="radio" id="auditor" name="type">
                <label for="auditor" id="auditor_label">Audytor</label>
                --> 
                <input type="submit" id="sign_in" value="Zaloguj się">
            </div>
        </form>
    </div>
</body>
<footer>
    <p>&copy; 2020 M&M - Mini-Company Manager</p>
</footer>
</html>