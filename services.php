<html>
	<head>
		<title>Data Dwarves &mdash; Mining For Fun and Profit</title>
		<?php include 'includes\dependencies.php' ?>
	</head>
	<body>
		<?php 
		include 'includes\header.php'; 
		$servicedata = simplexml_load_file('includes\products.xml');
		?>
		<article>
			<h1>We here at Data Dwarves offer a wide range of services to fit our customer&rsquo;s needs. We are willing to offer more services via special request.</h1>
			<?php for ($i = 0; $i < count($servicedata); $i++){
				echo "<h2>".$servicedata->product[$i]->name."</h2>";
				echo "<p>".$servicedata->product[$i]->description."</p>";
			} ?>
		</article>
		<?php include 'includes\footer.php' ?>
	</body>
</html>