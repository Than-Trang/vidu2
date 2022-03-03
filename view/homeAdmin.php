<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="view/css/css.css">
	<title>Home Page</title>
</head>
<body>
	<div class="container">
		<header>
			<div class="header-content">
				<div class="logo">
					<?php if(isset($_SESSION['SelectLogin'])):?>
						<a href="?action=tableAdmin" class="text-logo">Home</a>
					<?php else : ?>
						<a href="?action=home" class="text-logo">Home</a>
					<?php endif; ?>
				</div>
				<div class="section-btn1">
					<a href="?action=add" class="btn-add">Add</a>
					<?php if(isset($_SESSION['SelectLogin']) || (isset($_SESSION['SelectLoginID']))) {?>
					
					<a href="?action=logout" class="btn-register" >Logout</a>
				<?php }?>
				</div>
			</div>
		</header>
		
	</div>
</body>
</html>