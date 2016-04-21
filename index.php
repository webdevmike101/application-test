<!DOCTYPE html>
<html lang="en">
<head>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	
	<style>
		table{
			margin-left: 20px
		}
		
		th, td{
			padding: 2px 10px
		}
	</style>

</head>
<body>
	<?php
		$people = array(
		   array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
		   array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
		   array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
		   array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
		   array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
		);
	?>
	
	<table>
		<th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th>
	<?php foreach($people as $person): ?>
		<tr><td><?php echo $person['id']; ?></td>
			<td><?php echo $person['first_name']; ?></td>
			<td><?php echo $person['last_name']; ?></td>
			<td><?php echo $person['email']; ?></td>
			<td><button class="infoButton">Name and Email</button></td>
		</tr>
	<?php endforeach; ?>
	</table>

	<script>
		$('.infoButton').click(function(){
				
			fname = $('td:nth-child(2)', $( this ).parents( 'tr' )).text();
			lname = $('td:nth-child(3)', $( this ).parents( 'tr' )).text();
			email = $('td:nth-child(4)', $( this ).parents( 'tr' )).text();
			
			alert(fname + " " + lname + ", " + email);
		});
	</script>		
</body>
</html>
