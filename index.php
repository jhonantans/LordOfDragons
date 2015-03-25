<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lord of Dragons</title>
    <link rel="stylesheet" href="indexStyle.css" type="text/css">
    <link rel="shortcut icon" href="img/favicon.ico" />
    <script type="text/javascript" src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>
    
  

</head>

<body>
	<header id="mainHeader">
  	<a href="index.php"><img id="logoImg" src="img/wd_logo.png" title="The Dragon is always hungry!"></a>
    <nav id="headNav"><ul>
    	<li><a href="index.php">Home</a></li>
      <li><a href="contato.php">Envie suas Questões</a></li>
		</ul></nav>
  </header>
  
	<div id="mainMiddle">
    <div id="artigos">
		<?php
			$arquivos = glob('postFolder/*');
			$arquivos = array_reverse($arquivos);
			foreach ($arquivos as $postName){
				$fp = fopen($postName,'r');
				$contents = fread($fp,filesize($postName));
				fclose($fp);
				echo $contents;
			}
    ?> 
	</div>
	<footer id="mainFooter"><p><a href="#" title="Footer Link">Link Footer</a></p></footer>
  </div>

    <script type="text/javascript">
	  	var logo = document.getElementById("logoImg");
	  	var headNav = document.getElementById("headNav");
	  	var rect;
	  	
	  	window.onscroll = function() {
	  		rect = logo.getBoundingClientRect();
	      console.log(rect.left, rect.top, rect.right, rect.bottom);
	      if (rect.bottom < -10) {
	      	headNav.style.cssText = "position: fixed; top: 0px; border-radius: 0px; -moz-border-radius: 0px; -webkit-border-radius: 0px;";
	      }
	      else {
	      	headNav.style.cssText = "position: initial; top: 0px; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px;";
	      }


	    };
	  </script>

</body>
</html>