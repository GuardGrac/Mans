<!DOCTYPE html>
<html>
<meta charset="utf-8">
<title>Вход</title>
<link rel="stylesheet" href="css/style.css"/>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
</head>
<body>
<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
	// removes backslashes
	$username = stripslashes($_REQUEST['username']);

	//escapes special characters in a string
	$username = mysqli_real_escape_string($con, $username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con, $password);

	//Checking is user existing in the database or not
	$query = "SELECT * FROM `users` WHERE `username` = '$username' and `password` = '".md5($password)."'";
	$result = mysqli_query($con, $query) or die(mysqli_error($con));
	$rows = mysqli_num_rows($result);

	session_start();
	while($row = mysqli_fetch_assoc($result)) {
		$out[$row["id"]] = $row;
		$_SESSION['img'] = $row["img"];
		$_SESSION['role_id'] = $row["role_id"];
	}

	if($rows==1) {
		$_SESSION['id'] = array_keys($out)[0];
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		// if(isset($_SESSION['role_id'])){
			
		// }
		// else{
		// Redirect user to index.php
		header("Location: ../profile.php");	
		// }
		// Сохранить роль

		
	}
	else{
		echo "
			<div class='background'>
                <div class='shape'></div>
			</div>
			<div class='form'>
				<h3>Никнейм/пароль не правилен.</h3>
				<br/>
				<div class='wrong-log'>
				<p>Нажмите сюда чтобы</p>
				<a href='login.php'>Авторизоваться</a>
				</div>
			</div>";
	}
	echo '<pre>';  print_r($_SESSION); echo '</pre>';
	session_write_close();
} else {
?>
	<div class="background"></div>
		<div class="form">
			<h3>Вход</h3>
				<form action="" method="post" name="login">
					<label for="username">Никнейм</label>
					<input type="text" name="username" placeholder="Никнейм" required />

					<label for="password">Пароль</label>
					<input type="password" name="password" placeholder="Пароль" required />
				<br>
					<input class="input-submit-log" name="submit" type="submit" value="Войти" />
				</form>
				<div class="no-reg">
					<p>Ещё не зарегистрированны?</p>
					<a href='registration.php'>Зарегистрируйтесь здесь</a>
				</div>
		</div>
		<?php }?>
		<script>
		if(window.location.search.includes('NotRegistered')) 
		alert("Вы не зарегистрированны")
		</script>
	</body>
</html>
