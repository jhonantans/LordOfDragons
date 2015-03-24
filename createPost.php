<?php 
session_start();
if(isset($_SESSION['wings'])){
	if($_SESSION['wings'] != 'PassChangedGitHub'){
		header('Location: second.php');
	}
	unset($_SESSION['wings']);
}
else{
	header('Location: second.php');
}
 ?>
<!doctype html>
<html>

<head>
<meta charset="utf-8">
<title>Poster Tool Page</title>
<link rel="stylesheet" href="createStyle.css" type="text/css">
<link rel="shortcut icon" href="img/favicon.ico" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>

<script>
$(document).ready(function() {
	$("#Titulo_Post").keyup(function(){
		$(".normalPost a").text($(this).val());
	});
	$("#Postagem").keyup(function(){
		$(".normalPost section").html($(this).val());
		var math = document.getElementById("#postArea");
		MathJax.Hub.Queue(["Typeset", MathJax.Hub, math]);
	});
	$("#Foot_Post").keyup(function(){
		$(".normalPost footer p").text($(this).val());
	});
});
</script>
</head>

<body>
	<form action="writePost.php" method="post">
    	Título da postagem:<input id="Titulo_Post" name="Titulo_Post" type="text" placeholder="Novo Post" autofocus><br>
        Postagem:<textarea id="Postagem" name="Postagem" type="text"><p><b></b></p><br>&#10;&#13;<p><b>Solução:</b></p></textarea><br>
        Subtítulo da postagem:<input id="Foot_Post" name="Foot_Post" type="text" placeholder="This post was written by Jhon"><br>
        Nome para o arquivo:<input name="FileName" type="text" placeholder="novo_post.html">
        <input name="EnviarPost" type="submit" value="Enviar">
    </form>

	<br>    
    <div id="artigos">
		<article class='normalPost'>
            <header>
                <h2><a href='#' title= Post></a></h2>
            </header>
            
            <footer>
                <p class='postInfo'></p>
            </footer>
        
            <section id="postArea"></section>
        </article>
    </div> 
    
</body>

</html>