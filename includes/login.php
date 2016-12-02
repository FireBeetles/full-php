<?php if(preg_match('/log[a-z]*\.php|redirect\.php/',basename($_SERVER['PHP_SELF'])) ==  false) { ?>
<link href="styles/login.css" rel="stylesheet" />
<aside id="login">
	<div id="logincontain">
	<?php if(isset($_SESSION['username'])){ ?>
		<form action="logout.php" method="post">
			<div>Welcome, <?php echo $_SESSION['username'] ?></div>
			<div>
				<input type="submit" value="Log out" />
			</div>
		</form>
	<?php } else { ?>
		<form action="includes/user_verify.php" method="post">
			<div>Please enter your log-in information:</div>
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
	<?php } ?>
	</div>
</aside>
<?php } ?>