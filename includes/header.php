<?php if(session_status() == PHP_SESSION_NONE){session_start();} ?>
<header>
	<div id="logo"></div>
	<?php 
		include 'includes\login.php';
	?>
	<nav>
		<ul>
			<li><a href="index.php">Main</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="faq.php">FAQ</a></li>
			<li><a href="services.php">Services</a></li>
			<li><a href="sample.php">Sample</a></li>
		</ul>
	</nav>
	<!--<div style="width:100%;"><?php echo(basename($_SERVER['PHP_SELF']))?></div>-->
</header>