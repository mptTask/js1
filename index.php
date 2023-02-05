<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page create</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <main>
        <form id="form" onsubmit="return false">
            <h1 class="form__label">Авторизация</h1>
            <label for="form__email">Логин</label><br>
            <input type="text" name="form__email">
            <br>
            <label for="form__password">Пароль:</label><br>
            <input type="password" name="form__password">
            <br>
            <div class="form__zone">
                <button type="submit" class="form__button">Войти</button> 
            </div>
        </form>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $("#form").on("submit", function(){
            $.ajax({
                url: 'handler.php',
                method: 'post',
                dataType: 'html',
                data: $(this).serialize(),
                success: function(data){
                    $('#message').html(data);
                }
            });
        });
    </script>
</body>
</html>