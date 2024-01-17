<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Cashier</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="login">
    <div class="container">
        <h1 class="logincashier"><img src="logo.png" alt=""></h1>
        <form action="login.php" method="post" id="login-form"></form>
            <input class="mainLoginInput" type="username" id="username" name="username" placeholder="USERNAME" required>
            <input class="mainLoginInput" type="password" id="password" name="password" placeholder="PASSWORD" required>
            <br><br>
            <div class="tombol"><a href="login.php"><button type="submit">Login</button></a></div>
    </div>
</body>
</html> 