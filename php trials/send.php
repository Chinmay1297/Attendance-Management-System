<?php
	session_start();
	if(isset($_POST['save_details']))
	{
		$_SESSION['username'] = $_POST['username'];
		$_SESSION['password'] = $_POST['password'];
		?>
			<script>
				alert('Details saved with username: '+<?php echo json_encode($_SESSION['username']);?>);
				
			</script>
		<?php
	}
?>
<html>
<head>
	<title>PHP SESSIONS</title>
</head>
<body>
	<form method="post">
		<label>Name</label> <br>
		<input name="username" type="text"> <br>
		<label>Details</label> <br>
		<input type="text" name="password"> <br>
		<input type="submit" id="submit_button" name="save_details" value="save and jump">
	</form>
</body>
</html>