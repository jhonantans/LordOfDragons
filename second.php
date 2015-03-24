<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
	if($_POST['senha']=='PassChangedGitHub0'){
		session_start();
		$_SESSION['wings'] = 'PassChangedGitHub';
		header("Location: createPost.php"); //Redirect the user
	}
	else{
		$checker = false;
	}
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Jhon</title>
<link rel=stylesheet href="second.css" type= "text/css">
</head>

<body>
<img src="img/dollars.jpg" alt='Colorless' >

<form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> method="post">
	Password: <br>
	<input name="senha" type="password" placeholder="Senha" autofocus>
  <input type="submit" value="Enviar">
</form>

<?php 
if(isset($checker)){
	if(!$checker){
		echo 'Ahahahaha, nice try!';
	}
}
 ?>
</body>
</html>