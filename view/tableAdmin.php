<?php include_once 'homeAdmin.php';
	// include_once 'table.php';
?>
</head>
	<title>tableAdmin</title>
	
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
						<th>Level</th>
						<th></th>
					</tr>
				</thead>
				<?php
					foreach($data as $item){
				?>
				<tbody>
					<tr>
						<td><?php echo $item['id']; ?></td>
						<td><?php echo $item['fullname']; ?></td>
						<td><?php echo $item['password']; ?></td>
						<td><?php echo $item['address']; ?></td>
						<td><?php echo $item['phonenumber']; ?></td>
						<td><?php echo $item['level']; ?></td>
						<td>
							<a class="btn" href="?action=update&id=<?php echo $item['id']?>">Update</a>
							<a class="btn" href="?action=delete&id=<?php echo $item['id']?>">Delete</a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>