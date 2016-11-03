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
	<title></title>
</head>
<body>
	<ul>
		<li><a href="?p=condition">Condition</a></li>
		<li><a href="?p=variabel">Variabel</a></li>
		<li><a href="?p=looping">Looping</a></li>
		<li><a href="?p=array">Array</a></li>
	</ul>
	<?php
		// if($_GET['p']=="condition"){
		// 	echo "<h1>Condition</h1>";
		// 	include 'condition.php';
		// }else if($_GET['p']=="variabel"){
		// 	echo "<h1>Variabel</h1>";
		// 	include 'variabel_operator.php';
		// }if($_GET['p']=="looping"){
		// 	echo "<h1>Looping</h1>";
		// 	include 'looping.php';
		switch($_GET['p']){
			case 'condition':
			echo "<h1>Condition</h1>";
			include 'condition.php';
			break;

			case 'variabel':
			echo "<h1>Variabel</h1>";
			include 'variabel_operator.php';
			break;

			case 'looping':
			echo "<h1>Looping<h1>";
			include 'looping.php';
			break;

			case 'array':
			echo "<h1>Array</h1>";
			include 'array.php';
			break;
		}
		?>

</body>
</html>