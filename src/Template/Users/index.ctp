<?php 
	$this->layout = false;
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<title>Users</title>
</head>
<body>
	
	<div class="container">
		<h2>User Table</h2>
		<?= $this->Html->link(__('Add'), ['controller'=>'Users','action' => 'add']) ?>

		<table class="table">
		    <thead>
				<tr>
					<th>ID</th>
					<th>Username</th>
					<th>Password</th>
					<th>Action</th>
				</tr>
		    </thead>
	    	<tbody>
				<?php 
					$i = 1;
					foreach ($data as $key => $value) {
				?>
						<tr>
							<td><?php echo $i++?></td>
							<td><?php echo $value->username?></td>
							<td><?php echo $value->password?></td>
							<td><?= $this->Html->link(__('Edit'), ['controller'=>'Users','action' => 'edit',$value->id]) ?> | <?= $this->Html->link(__('Delete'), ['controller'=>'Users','action' => 'delete',$value->id]) ?></td>
						</tr>
				<?php
					}
				?>
	    	</tbody>
	    </table>
	</div>
</body>
</html>