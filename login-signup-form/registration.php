<!DOCTYPE html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css" />
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
            echo "<div class='form'>
            <h3>Пользователь с таким именем уже существует.</h3>
            <br/>Попробуйте <a href='registration.php'>зарегистрироваться</a> с другим именем.</div>";
        } else {
            // Вставка нового пользователя
            $query = "INSERT into `users` (username, password, email, login)
                      VALUES ('$username', '".md5($password)."', '$email', '$login')";
            $result = mysqli_query($con, $query);
            if ($result) {
                echo "<div class='form'>
                <h3>Вы были успешно зарегистрированны.</h3>
                <br/>Нажмите чтобы <a href='login.php'>авторизоваться</a></div>";
            }
        }
    
    }else{
?>
<div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required />
<input type="email" name="email" placeholder="Email" required />
<input type="login" name="login" placeholder="Login" required />
<input type="password" name="password" placeholder="Password" required />
<input type="submit" name="submit" value="Register" />
</form>
</div>
<?php } ?>
</body>
</html>
