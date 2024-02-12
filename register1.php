<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>
		HelaDevs: Registration
	</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="heladevs.png">
</head>

<body>
	<div class="header">
		<h2>Register!</h2>
	</div>
	
	<form method="post" action="register1.php">


		<div class="input-group">
			<label>Enter Username</label>
			<input type="text" name="username"
				value="<?php echo $username; ?>" placeholder="Enter username">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email"
				value="<?php echo $email; ?>" placeholder="Enter email">
		</div>
		<div class="input-group">
			<label>Enter Password</label>
			<input type="password" name="password_1" placeholder="Enter password">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2" placeholder="Re-enter password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn"
								name="reg_user">
				Register
			</button>
		</div>
		


<p>
			Already having an account?
			<a href="login1.php">
				Login Here!
			</a>
		</p>



	</form>
</body>
</html>
