<?php include_once 'HomePage.php';
include_once 'core/session.php';
?>

</head>
	<title>Register</title>
</head>
<body>

	<div class="section-container">
		<div class="content">
			<h1>Register</h1>
			
			<form class="box" action="?action=register" method="POST">
				<div class="box1">
					<h3>Full name: </h3>
					<input type="text" id="fullname" name="fullname" require>
				</div>
				<div class="box1">
					<h3>Password:</h3>
					<input type="password" id="password" name="password"require>
				</div>
				<div class="box1">
					<h3>Address: </h3>
					<input type="text" id="address" name="address"require>
				</div>
				<div class="box1">
					<h3>Phone number:</h3>
					<input type="number" id="numberPhone" name="numberPhone"require>
				</div>
				<button class="btn" type="submit" name="register">Register</button>
				<!-- <a href="?action=register" class="btn-register" >Register</a> -->
			</form>
		</div>
	</div>
</body>
</html>