
<?php include_once 'HomePage.php'?>
<head>
	<title>Login</title>
</head>
<body>

	<div class="section-container">
		<div class="content">
			<h1>Login</h1>
			<form class="box" method="POST">
				<div class="box1">
					<h3>Full name: </h3>
					<input type="text" id="fullName" name="login-fullName">
				</div>
				<div class="box1">
					<h3>Password:</h3>
					<input type="password" id="password" name="login-password">
				</div>
				<div class="btn-login">
					<button class="btn" type="submit" name="login">Login</button>
					<a href="?action=register" class="btn" >Register</a>
				</div>
			</form>
		</div>
	</div>
</body>
</html>