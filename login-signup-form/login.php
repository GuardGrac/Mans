<!DOCTYPE html>
<html>
<meta charset="utf-8">
<title>Вход</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
	// removes backslashes
	$username = stripslashes($_REQUEST['username']);

	//escapes special characters in a string
	$username = mysqli_real_escape_string($con, $username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con, $password);

	//Checking is user existing in the database or not
	$query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
	$result = mysqli_query($con, $query) or die(mysqli_error($con));
	$rows = mysqli_num_rows($result);

	while($row = mysqli_fetch_assoc($result)) {
		$out[$row["id"]] = $row;
	}

	if($rows==1) {
		$_SESSION['id'] = array_keys($out)[0];
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		// Redirect user to index.php
		// header("Location: ../profile.php");
	}
	else{
		echo "
			<div class='form'>
				<h3>Никнейм/пароль не правилен.</h3>
				<br/>
				Нажмите сюда чтобы
				<a href='login.php'>Авторизоваться</a>
			</div>";
	}
    }else{
?>
<div class="form">
<h1>Вход</h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<br>
<input name="submit" type="submit" value="Login" />
</form>
<p>Ещё не зарегистрированны? <a href='registration.php'>Зарегистрируйтесь здесь</a></p>
</div>
<?php } ?>
<script>
if(window.location.search.includes('NotRegistered')) 
alert("ты гей")
</script>
</body>
</html>
