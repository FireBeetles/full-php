<?php
session_start();
$userdata = simplexml_load_file("accounts.xml");

$loginname = "";
$password = "";
$loginemail = "";

for ($i = 0; $i < count($userdata); $i++){
	$loginname = $userdata->account[$i]->username;
	$loginpassword = $userdata->account[$i]->password;
	$loginemail = $userdata->account[$i]->email;
	
	if(empty($_POST["username"]) || empty($_POST["pw"]))
	{
		$_SESSION['error']='Please fill in both username and password';
		exit(header("Location:http://localhost/cweb2101-consultingsite/login.php"));
	}


	if(($_POST["username"] == $loginname) && ($_POST["pw"] == $loginpassword)){
		//set logged in
		$_SESSION['logged_in'] = true;
		//unset password
		unset($userdata->account[$i]->password);
		//unset any log-in errors
		unset($_SESSION['error']);
		//store important data to session state
		$_SESSION['username'] = $loginname->__toString();
		$_SESSION['useremail'] = $loginemail->__toString();
		//print_r($_SESSION);
		//return to redirect - return to login or to a referent point specified in $_SESSION['redirect']
		exit(header("Location: ../redirect.php"));
	}
}

//exited loop without a valid match - invalid log-in information
$_SESSION['error']='Invalid username or password';
exit(header("Location:http://localhost/cweb2101-consultingsite/login.php"));
?>