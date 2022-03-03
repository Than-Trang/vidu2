<?php include_once 'HomePage.php'?>

</head>
	<title>Update</title>
</head>
</head>
<body>
	<div class="section-container">
		<div class="content">
			<h1>Update</h1>
			<form class="box" method="POST">
				<div class="box1">
					<h3>Full name: </h3>
					<input type="text" id="fullname" value="<?php echo $data[0]['fullname'];?>" name="update_fullname">
				</div>
				<div class="box1">
					<h3>Password:</h3>
					<input type="password" id="password" value="<?php echo $data[0]['password'];?>" name="update_password">
				</div>
				<div class="box1">
					<h3>Address: </h3>
					<input type="text" id="address" value="<?php echo $data[0]['address'];?>" name="update_address">
				</div>
				<div class="box1">
					<h3>Phone number:</h3>
					<input type="text" id="numberPhone" value="<?php echo $data[0]['phonenumber'];?>" name="update_numberPhone">
				</div>
				<button class="btn" type="submit" name="submit_update">Update</button>
			</form>
		</div>
	</div>
</body>
</html>