<?php session_start(); ?>
<?php
    if (isset($_REQUEST['num_ent'])){
		if($_REQUEST['num_ent'] == $_SESSION['name']){
			$message = "Success!";
		} else { 
			$message = "Error!!";
		}
	}
	if(isset($message)){
		echo $message;
		echo "</br>";
	}
?>
<html>
	<body>
		<img src='pic.php'>
		<form action='numberverify.php' method='post'>
			Enter character: <input type="text" name="num_ent"><br>
			<input type="submit" value="Submit">
		</form>
	</body>
</html>
