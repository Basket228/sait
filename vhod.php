<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ФлипСтайл</title>
    <link href="Style.css" rel="stylesheet">
    <link href="vhod.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div class="login-box">
    
    <form method="post" action="vhodwork.php">
    <div class="user-box">
        <input type="email" name="email" required>
        <label>Почта</label>
    </div>
    <div class="user-box">
        <input type="password" name="password" required>
        <label>Пароль</label>
    </div>
        <center>
            <button class="cssbuttons-io" type="submit">
                <span>Войти</span></button>
            <button onclick="window.location='zaregistrirovatsya.php'" class="cssbuttons-io">
                <span>Зарегистрироваться</span>
            </button>
        </center>
    </form>
    </div>
</body>
</html>