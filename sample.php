<html>
	<head>
		<title>Data Dwarves &mdash; Mining For Fun and Profit</title>
		<?php include 'includes\dependencies.php' ?>
	</head>
	<body>
		<?php include 'includes\header.php'; ?>
		<?php if(!isset($_SESSION['username'])) {
			$_SESSION['error'] = 'Please log in before accessing data pages.';
			exit(header("Location:http://localhost/cweb2101-consultingsite/login.php"));
		} else { ?>
		<article>
			<img src="images/Bar graph.png" alt="Bar Graph">
			<img src="images/pie chart.png" alt="Pie Chart">
			<img src="images/line graph.png" alt="Line Graph">
		</article>
		<?php }
		include 'includes\footer.php'; ?>
	</body>
</html>