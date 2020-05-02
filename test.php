<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>
<?php
session_start();
echo "Welcome ".$_SESSION['user'];

?>
</body>
</html>