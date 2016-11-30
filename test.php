<?php
$serverName = "16402-5RQBCH059\\MSSQLSERVER12"; //serverName\instanceName
$dbName = "datadwarves";
$uid = "dd-user";
$pwd = "DataDwarves";

$connectionInfo = array( "Database"=>"$dbName", "UID"=>"$uid", "PWD"=>"$pwd");
echo $serverName." - ".$connectionInfo
/*$conn = sqlsrv_connect( $serverName, $connectionInfo);

if($conn) { 
	echo "Connection established.\n";
} else {
	echo "Connection could not be established.\n";
	die( print_r( sqlsrv_errors(), true));
}*/

?>