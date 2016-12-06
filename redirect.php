<html>
	<head>
		<title>Data Dwarves &mdash; Mining For Fun and Profit</title>
		<?php session_start(); ?>
		<meta http-equiv="refresh" content="5;url=<?php echo(isset($_SESSION['redirect'])?$_SESSION['redirect']:'index.php'); ?>">
		<?php include 'includes\dependencies.php' ?>
	</head>
	<body>
		<?php include 'includes\header.php'; ?>
		<article>
			<p><?php echo(isset($_SESSION['username'])?$_SESSION['username'].", you":"You"); ?> have successfully logged in.  You will be redirected to <?php echo(isset($_SESSION['redirect'])?'your previous page':'the home page'); ?> in 5 seconds, or you may click here to continue.</p>
			<p><a href="<?php echo(isset($_SESSION['redirect'])?$_SESSION['redirect']:'index.php'); ?>">(Click here to continue)</a></p>
		</article>
		<?php include 'includes\footer.php'; ?>
	</body>
</html>