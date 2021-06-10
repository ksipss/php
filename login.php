<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="proektt.css">
</head>
<body>
<div class="wrapper">
    <form action="/endLogin.php" method="POST">
        <fieldset style="display: flex; justify-content: center; flex-direction: column; align-items: center; width: 50%; margin:auto;">
            <legend>
                Контактная информация
            </legend>
            <p><label for="login">Логин <em>*</em></label><input type="text" name="login"></p>
            <p><label for="password">Пароль</label><input type="password" name="password"></p>
            <p><input type="submit" value="Войти"></p>
            
          </fieldset>
        </form>
        <a href="./reg.php"><p style="display: flex; justify-content: center; flex-direction: column; align-items: center; width: 50%; margin:auto;"><input type="submit" value="Регистрация"></p></a>
   
</div>
</body>
</html>