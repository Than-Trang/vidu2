<?php
include_once 'HomePage.php';
?>
<html>
	<div class="section-container">
		<div class="content">
			
			<form class="box" method="POST">
				<div class="choose">
					<input type="radio" id="addAdmin" name="choose_level" value=1 checked>
					<label for="addAdmin">Add Admin</label> <br>
					<input type="radio" id="addcustomer" name="choose_level" value=0 >
					<label for="addcustomer">Add Customer</label>
				</div>
				<h1>Add</h1>
				<div class="box1">
					<h3>Full name: </h3>
					<input type="text" id="fullname" name="fullname" require>
				</div>
				<div class="box1">
					<h3>Password:</h3>
					<input type="password" id="password" name="password" require>
				</div>
				<div class="box1">
					<h3>Address: </h3>
					<input type="text" id="address" name="address"require>
				</div>
				<div class="box1">
					<h3>Phone number:</h3>
					<input type="number" id="numberPhone" name="numberPhone"require>
				</div>
				<button class="btn" type="submit" name="add">Add</button>
			</form>
		</div>
	</div>
</html>