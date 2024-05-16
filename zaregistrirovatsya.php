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
        
        <form action="regwork.php" method="post" onsubmit="return validatePassword();">
        <div class="user-box">
            <input name="email" required="" placeholder="" type="email" >
            <label>Введите почту</label>
        </div>
        <div class="user-box">
            <input id="pass" name="password" required="" placeholder="" type="password">
            <label>Введите пароль</label>
        </div>
        <div class="user-box">
            <input id="conpass" name="ConfirmPassword" required="" placeholder="" type="password">
            <label>Повторите пароль</label>
        </div><center>
        <button class="cssbuttons-io" type="submit">
                <span>Войти</span></button>
        </center>
        </form>
    </div>
    <script src="register.js"></script>
</body>
</html>