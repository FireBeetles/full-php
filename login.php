<html>
	<head>
		<title>Data Dwarves &mdash; Mining For Fun and Profit</title>
		<?php include 'includes\dependencies.php' ?>
	</head>
	<body>
		<?php include 'includes\header.php'; ?>
		<article>
			<form action="includes/user_verify.php" method="post">
				<div>Please enter your log-in information:</div>
				<?php echo (isset($_SESSION['error'])?'<span style="color:red">'.$_SESSION['error'].'</span>':null);?>
				<div>
					<span id="lblUsername" class="label">Username:</span>
					<input type="text" name="username" />
				</div>
				<div>
					<span id="lblPassword" class="label">Password:</span>
					<input type="password" name="pw" />
				</div>
				<div id="submit">
					<input type="submit" value="Log in" />
				</div>
			</form>
		</article>
		<?php include 'includes\footer.php' ?>
	</body>
</html>