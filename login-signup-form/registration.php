<!DOCTYPE html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css" />
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
</head>
<body>
<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        // escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username); 
        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $login = stripslashes($_REQUEST['login']);
        $login = mysqli_real_escape_string($con, $login);
    
        // Проверка существования пользователя с таким же username
        $check_query = "SELECT COUNT(*) FROM `users` WHERE username='$username'";
        $check_result = mysqli_query($con, $check_query);
        $userExists = mysqli_fetch_array($check_result)[0];
    
        if ($userExists) {
            echo "<div class='background'>
            <div class='shape'></div>
            </div>
            <div class='form'>
            <h3>Пользователь с таким именем уже существует.</h3>
            <br/>
            <div class='wrong-reg'>
            <p>Попробуйте</p>
            <a href='registration.php'>зарегистрироваться</a> с другим именем.
            </div>
            </div>";
        } else {
            // Вставка нового пользователя
            $query = "INSERT into `users` (username, password, email, login)
                      VALUES ('$username', '".md5($password)."', '$email', '$login')";
            $result = mysqli_query($con, $query);
            if ($result) {
                echo "<div class='background'>
                <div class='shape'></div>
                </div>
                <div class='form'>
                <h3>Вы были успешно зарегистрированны.</h3>
                <br/>
                <div class='wrong-reg'>
                <p>Нажмите сюда чтобы</p>
                <a href='login.php'>авторизоваться</a>
                </div>
                </div>";
            }
        }
    
    }else{
?>
<div class="background">
        <div class="shape"></div>
</div>
<div class="form">
    <h3>Регистрация</h3>
        <form name="registration" action="" method="post">
            <label for="username">Никнейм</label>
            <input type="text" name="username" placeholder="Никнейм" required />
            
            <label for="email">Почта</label>
            <input type="email" name="email" placeholder="Почта" required />
            
            <label for="login">Логин</label>
            <input type="login" name="login" placeholder="Логин" required />
            
            <label for="password">Пароль</label>
            <input type="password" name="password" placeholder="Пароль" required />
            <input class="input-submit-reg" type="submit" name="submit" value="Зарегистрироваться" />
        </form>
    <div class="no-aut">
        <p>Уже зарегистрированны?</p>
        <a href='login.php'>Авторизуйтесь здесь</a>
    </div>
</div>
<?php } ?>
</body>
</html>
