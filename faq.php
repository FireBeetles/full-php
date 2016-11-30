<html>
	<head>
		<title>Data Dwarves &mdash; Mining For Fun and Profit</title>
		<?php include 'includes\dependencies.php' ?>
	</head>
	<body>
		<?php 
		include 'includes\header.php'; 
		$faqdata = simplexml_load_file('includes\faq.xml');
		?>
		<article>
			<h1>Frequently Asked Questions</h1>
			<?php for ($i = 0; $i < count($faqdata); $i++){
				echo "<h2>".$faqdata->entry[$i]->question."</h2>";
				echo "<p>".$faqdata->entry[$i]->answer."</p>";
			} ?>
		</article>
		<?php include 'includes\footer.php' ?>
	</body>
</html>