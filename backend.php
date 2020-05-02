<?php

$conn = mysqli_connect("localhost","root","1234","rahuldb");

if ($conn) {
	# code...
	//echo "Connected";
} else {
	echo "Connection Failed ".mysqli_error($conn);
}

if (isset($_POST['regBtn'])) {
	# code...
	$userg = $_POST['user'];
	$pass = $_POST['pass'];
	$pemail = $_POST['email'];
	//$email =$_POST['email'];
	$query = "INSERT INTO userlogin(user, passwd, uemail) values('$userg','$pass','$pemail')";

	$res = mysqli_query($conn,$query);
	print_r($res);

	if ($res) {
		# code...
		echo "user register successful..";

	}
	else{
		echo "Failed";
	}

}


if(isset($_POST['loginBtn'])){
	//print_r($_POST['user']);
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$query = "SELECT * FROM `userlogin` WHERE `user` = '$user' AND `passwd` = '$pass'";
	//echo $query ;
	//die();
	$res = mysqli_query($conn,$query);
	//print_r($res);
	if (mysqli_num_rows($res)>0) {
		# code...
		session_start();
		$_SESSION['user'] = $user;
		//header("Location : test.php");
		echo "<script>window.location.href = 'test.php';</script>";
	} else {
		echo "User Not Found Or Wrong Credentials";
	}
}



?>