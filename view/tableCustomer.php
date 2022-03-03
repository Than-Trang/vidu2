
<?php include_once 'HomePage.php'?>

</head>
	<title>table Customer</title>
</head>
<body>
	<div class="section-container">
		<div class="content content1">
			<table>
				<thead>
					<tr>
						<th>STT</th>
						<th>Full name</th>
						<th>Password</th>
						<th>Address</th>
						<th>Phone number</th>
					</tr>
				</thead>
				
				<?php
					foreach($data as $item){
				?>
				<tbody>
					<tr>
						<td><?php echo $item['id']; ?></td>
						<td><?php echo $item['fullname']; ?></td>
						<td><?php echo $item['password'];?></td>
						<td><?php echo $item['address']; ?></td>
						<td><?php echo $item['phonenumber']; ?></td>
						
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>