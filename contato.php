<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=devide-width, initial-scale=1.0">
    <title>Lord of Dragons</title>
    <link rel="stylesheet" href="indexStyle.css" type="text/css">
    <link rel="shortcut icon" href="img/favicon.ico" />
    <script type="text/javascript" src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>
</head>

<body>
	<header id="mainHeader">
    	<a href="index.php"><img src="img/wd_logo.png" title="The Dragon is always hungry!"></a>
        <nav><ul>
        	<li><a href="index.php">Home</a></li>
            <li><a href="contato.php">Envie suas Questões</a></li>
		</ul></nav>
    </header>
    <div id="mainMiddle">
	    <div id="artigos">
            <article class='normalPost'>
                <header>
                    <h2><a href='#' title='Post'>Envie suas questões!</a></h2>
                </header>
                
                <footer>
                    <p class='postInfo'>Ou envie dinheiro ... aceitamos cartão, cheque, tele sena, raspadinha, zeny ...</p>
                </footer>
            
                <section>
                    <p>Email: 
                    <a href="mailto:lordofdragons2015@gmail.com" style="color: #50B5FF; background-color:transparent">lordofdragons2015@gmail.com</a></p>
                    <p>Whatsapp: <span style="color:#50B5FF">(62)8247-1037</span></p>
                    <h3 style="margin-bottom: -12px; color:#CF5C3F">Deixe sua mensagem:</h3>
                    <form action="sendMail.php" method="post" id="formulario">
                      <label for="nome">**Nome</label>
                      <input type="text" name="nome" id="nome" placeholder="Nome do Usuário" required>
                       
                      <label for="emailFrom">Email</label>
                      <input type="emailFrom" name="emailFrom" id="emailFrom" placeholder="user@email.com" >
                       
                      <label for="emailMsg">**Mensagem</label>
                      <textarea name="emailMsg" id="emailMsg" placeholder="Envie sua Mensagem" required></textarea>
                      
                     
                      
                      <input type="submit" id="but_enviar" value="Enviar">
                </form>
                </section>
            </article>
        </div>                
		<footer id="mainFooter"><p><a href="#" title="Footer Link">Link Footer</a></p></footer>
    </div>
</body>
</html>