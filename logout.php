<html>
	<head>
		<title>Data Dwarves &mdash; Mining For Fun and Profit</title>
		<meta http-equiv="refresh" content="5;url=index.php">
		<?php include 'includes\dependencies.php' ?>
	</head>
	<body>
		<?php include 'includes\header.php'; ?>
		<article>
			<p><?php echo(isset($_SESSION['username'])?$_SESSION['username'].", you":"You"); ?> have successfully logged out.  You will be redirected to the home page in 5 seconds, or you may click here to continue.</p>
			<?php
				session_destroy();
			?>
			<p><a href="index.php">(Click here to continue)</a></p>
		</article>
		<?php include 'includes\footer.php' ?>
	</body>
</html>