<link href="styles/login.css" rel="stylesheet" />
<aside id="login">
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
</aside>