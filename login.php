<!DOCTYPE html>
<?php
session_start();
	// echo"<pre>".print_r($_POST,1)."</prev>";
if(isset($_POST['email'])){
	$email = $_POST['email'];
	$password = $_POST['password'];

	if($email=="isagoutama"){
		if($password=="isssa"){
			$_SESSION['isLoggedIn']=true;
			$_SESSION['email']=$email;
			header("location:index.php?l=success");

		}else{
			$_SESSION['isLoggedIn']=false;
			echo 'salah password';
		}
	}
	else{
			echo 'salah email';
		}
	
}
?>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form method="post" action="">
		<table>
			<tr>
				<td><input type="date" name="date"></td>
			</tr>
			<tr>
				<td>E-mail</td>
				<td><input type="text" name="email" required></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" required></td>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit">Sign In</button></td>
			</tr>
		</table>
	</form>
</body>
</html>