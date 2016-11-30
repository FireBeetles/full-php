<?php session_start();?>
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
			<?php 
			if(isset($_SESSION['username'])){ ?>
				<li><a href="logout.php">Log Out</a></li>
			<?php } else { ?>
				<li><a href="login.php">Log In</a></li>
			<?php } ?>
		</ul>
	</nav>
	<!--<div style="width:100%;"><?php echo($_SESSION['logged_in']." | ".$_SESSION['username'])?></div>-->
</header>