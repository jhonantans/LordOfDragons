<?php
function writePost($tit, $msg, $foot, $postName){
	date_default_timezone_set('America/Sao_Paulo');
	$fileName = "postFolder/" . date("Ymd-His") . $postName;
	$fp = fopen($fileName, 'w');
    fwrite($fp,
"<article class='normalPost'>
	<header>
		<h2><a href='#' title= Post>" . $tit . "</a></h2>
	</header>
	
	<footer>
		<p class='postInfo'>" . $foot . "</p>
	</footer>

	<section>
		" . $msg . "
	</section>
</article>"
	);
    fclose($fp);
}

if ($_SERVER['REQUEST_METHOD']=="POST"){
	if(isset($_POST["EnviarPost"])){
		if($_POST["Postagem"] != ""){
			if($_POST["Titulo_Post"] != ""){
				$titulo = stripslashes(htmlspecialchars($_POST["Titulo_Post"]));
			}
			else {
				$titulo = "Post Sem Título";
			}
			
			if($_POST["Foot_Post"] != ""){
				$foot = stripslashes(htmlspecialchars($_POST["Foot_Post"]));
			}
			else {
				$foot = "This post was written by Jhon";
			}
			
			if($_POST["FileName"] != ""){
				$fileName = stripslashes(htmlspecialchars($_POST["FileName"]));
			}
			else {
				$fileName = "newPost.html";
			}
			
			//$postagem = stripslashes(htmlspecialchars($_POST["Postagem"]));
			$postagem = $_POST["Postagem"];
			
			writePost($titulo,$postagem,$foot,$fileName);
			$verificador = true;
		}
		else{
			$verificador = false;	
		}
	}
}
?>
<!doctype html>
<html>

<head>
<meta charset="utf-8">
<title>Write Post Page</title>
<link rel="shortcut icon" href="img/favicon.ico" />
</head>

<body>

<?php if($verificador){	?>
		<h2>Mensagem enviada com êxito!</h2>
        <p><a href="createPost.php">Escrever Novo Post</a></p>
        <p><a href="index.php">Página Inicial!</a></p>
<?php }	else { ?>
		<h2>Erro!</h2>
        <p>Houve um erro inesperado ao enviar sua mensagem. Isso pode ter ocorrido ao tentar enviar uma postagem em branco. Por favor clique num dos links a seguir:</p>
        <p><a href="createPost.php">Escrever Novo Post Novamente!</a></p>
        <p><a href="index.php">Página Inicial!</a></p>

<?php } ?>

</body>

</html>